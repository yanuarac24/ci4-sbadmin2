<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        return view('dashboard');
    }

    public function coba()
    {
        $request = service('request');
        $uri = $request->uri->getSegment(2);
        // return $uri;
        d($uri);
    }
}
