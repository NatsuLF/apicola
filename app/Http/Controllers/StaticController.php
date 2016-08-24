<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class StaticController extends Controller
{
    public function about()
    {
        return view('home_app');
    }

    public function hive()
    {
        return view('hive');
    }

    public function getting_started()
    {
        return view('getting_started');
    }

    public function financial_analysis()
    {
        return view('financial_analysis');
    }

    public function services()
    {
        return view('servicios');
    }
}
