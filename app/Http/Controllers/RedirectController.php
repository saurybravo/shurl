<?php

namespace App\Http\Controllers;

use App\Services\UrlServices;
use Illuminate\Http\Request;

class RedirectController extends Controller
{
    /**
     * @var UrlServices
     */
    private $url;

    public function __construct(UrlServices $url)
    {
        $this->url = $url;
    }

    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @param string $token
     * @return void
     */
    public function __invoke(Request $request, $token)
    {
        return $this->url->redirectToReferrerUrl($token);
    }
}
