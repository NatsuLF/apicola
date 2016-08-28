<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Http\Request;
use App\Http\Requests;
use App;

class StaticController extends Controller
{
    public function about()
    {
        $images = [
            'https://s3-us-west-2.amazonaws.com/apicolabucket/carousel/c1.jpg',
            'https://s3-us-west-2.amazonaws.com/apicolabucket/carousel/c2.jpg',
            'https://s3-us-west-2.amazonaws.com/apicolabucket/carousel/c3.jpg'
        ];

        return view('home', ['images' => $images]);
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
        $english_source = 'https://docs.google.com/spreadsheets/d/1Vr_ymyBjiqZKoXZHc_EAr4NuXs4S2akmvg1VFjeJsBA/pubhtml?widget=true&amp;headers=false';
        $spanish_source = 'https://docs.google.com/spreadsheets/d/1ZUKAbHyDorih0wD1bKnLpsK_igdEQ3Wy89BhwkgVEIc/pubhtml?widget=true&amp;headers=false';
        $spreadsheet_source = App::getLocale() == 'en' ? $english_source : $spanish_source;

        return view('financial_analysis', ['spreadsheet_source' => $spreadsheet_source]);
    }

    public function services()
    {
        return view('servicios');
    }
}
