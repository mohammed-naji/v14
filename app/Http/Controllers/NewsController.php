<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function __invoke()
    {
        return 'Invoke Method Run';
    }
}
