<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    function hello(Request $request){
        return "Hello World";
    }

    function hello2(){
        return "Hello World 2";
    }
}
