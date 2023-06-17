<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VoyagerController extends Controller
{
    public function index()
    {
        return view('voyager');
    }
}
