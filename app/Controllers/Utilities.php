<?php

namespace App\Controllers;

class Utilities extends BaseController
{
    public function colors()
    {
        return view('utilities/colors');
    }

    public function borders()
    {
        return view('utilities/borders');
    }

    public function animations()
    {
        return view('utilities/animations');
    }

    public function others()
    {
        return view('utilities/others');
    }
}
