<?php

namespace Fantalimon\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function show(){
        return view('sign');
    }
}
