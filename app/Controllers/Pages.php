<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function login()
    {
        return view('pages/login');
    }

    public function register()
    {
        return view('pages/register');
    }

    public function forgot_password()
    {
        return view('pages/forgot-password');
    }

    public function pages404()
    {
        return view('pages/404');
    }

    public function blank()
    {
        return view('pages/blank');
    }
}
