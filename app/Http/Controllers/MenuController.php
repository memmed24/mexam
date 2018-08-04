<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
//        $this->middleware('manager');
    }

    public function index()
    {
        echo  "Menu";
    }
}
