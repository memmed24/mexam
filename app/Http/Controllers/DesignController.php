<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DesignController extends Controller
{
	public function example()
    {
        return view('layouts.example');
    }

    public function index()
    {
    	return view('ui.index');
    }
}
