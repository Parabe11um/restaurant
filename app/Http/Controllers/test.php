<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class test extends Controller
{
    function index(){
        dd(Auth::id());
    }
}
