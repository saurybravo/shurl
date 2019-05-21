<?php namespace App\Services;

use App\Url;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class UrlServices
{
    /**
     * @var Url
     */
    private $url;

    /**
     * UrlServices constructor.
     * @param Url $url
     */
    public function __construct(Url $url)
    {
        $this->url = $url;
    }

    /**
     * @param int $perpage
     * @return LengthAwarePaginator
     */
    public function getAllPaginate($perpage = 100)
    {
        return $this->url->select('token', 'referrer_url', 'visits')->orderBy('visits', 'desc')->paginate($perpage);
    }

    /**
     * @param int $length
     * @return bool|string
     */
    public function generateToken($length = 8)
    {
        $token = substr(md5(uniqid(rand(8), true)), 0, $length);
        $find_token = $this->url->where('token', $token)->select('token')->first();
        if($find_token == null) return $token;

        return $this->generateToken($length);
    }

    /**
     * @param $reference_url
     * @return bool
     */
    public function referenceUrlExists($reference_url)
    {
        return $this->url->whereReferenceUrl($reference_url)->exists();
    }

    /**
     * @param $token
     * @return RedirectResponse|Response
     */
    public function redirectToReferrerUrl($token)
    {
        $url = $this->url->whereToken($token)->first();

        if ($url == null)
            return response()->view('errors.404', ['title' => 404, 'name' => 'Page Not Found'], 400);

        $url->increment('visits');
        return redirect()->to($url->referrer_url);
    }

    /**
     * @param $name
     * @param $arguments
     * @return mixed
     */
    public function __call($name, $arguments)
    {
        return call_user_func_array([$this->url, $name], $arguments);
    }
}
