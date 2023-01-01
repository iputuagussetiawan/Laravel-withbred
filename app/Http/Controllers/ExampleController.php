<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    //
    public function homepage()
    {
        return '<h1>Hallow World</h1><a href="/about">View About Page</a>';
    }

    public function aboutpage()
    {
        return '<h1>About</h1><a href="/">Back Home Page</a>';
    }
}
