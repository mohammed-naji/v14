<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Test2Controller extends Controller
{
    public function index($id = null)
    {
        return 'Profile Number #'.$id;
    }
}


// return , break , continue , exit , die
