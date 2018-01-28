<?php

namespace Fantalimon\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Fantalimon\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }
}
