<?php namespace App\Services;

use App\URL;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class URLServices
{
    /**
     * @var URL
     */
    private $url;

    /**
     * URLServices constructor.
     * @param URL $url
     */
    public function __construct(URL $url)
    {
        $this->url = $url;
    }

    /**
     * @param int $perpage
     * @return LengthAwarePaginator
     */
    public function getAllPaginate($perpage = 100)
    {
        return $this->url->orderBy('visits', 'desc')->paginate($perpage);
    }

    /**
     * @param int $length
     * @return bool|string
     */
    public function generateToken($length = 8)
    {
        $token = substr(md5(uniqid(rand(), true)), 0, $length);
        $find_token = $this->url->where('token', $token)->select('token')->first();
        if($find_token == null) return $token;

        return $this->generateToken($length);
    }

    public function __call($name, $arguments)
    {
        return $this->url;
    }
}
