<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    //
    public function homepage()
    {
        $myname = "AG";
        $allAnimal = ['Meoaauuu', 'Caty', 'Catman'];
        return view('homepage', ['name' => $myname, 'allAnimal' =>  $allAnimal, 'catname' => 'Simba']);
    }

    public function aboutpage()
    {
        return view('single-post');
    }
}
