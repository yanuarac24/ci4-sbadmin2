<?php

namespace App\Controllers;

class Components extends BaseController
{
    public function buttons()
    {
        return view('components/buttons');
    }

    public function cards()
    {
        return view('components/cards');
    }
}
