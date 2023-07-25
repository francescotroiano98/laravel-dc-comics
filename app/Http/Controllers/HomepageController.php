<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $data = config('serieslist');
        return view('homepage', compact('data'));
    }
}
