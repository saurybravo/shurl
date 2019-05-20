<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @param string $token
     * @return void
     */
    public function __invoke(Request $request, $token)
    {
        dd($token);
    }
}
