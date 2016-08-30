<?php

namespace App\Http\Controllers;

use Storage;
use App;

class StaticController extends Controller
{
    public function __construct()
    {
        $this->s3 = Storage::disk('s3');
    }

    public function about()
    {
        $files = $this->s3->files('carousel');
        $images = [];

        foreach ($files as $file) {
            array_push($images, $this->s3->url($file));
        }

        return view('home', ['images' => $images]);
    }

    public function hive()
    {
        return view('hive');
    }

    public function getting_started()
    {
        $infographics = [
            'en' => 'https://s3-us-west-2.amazonaws.com/apicolabucket/infographics/infographic-en.jpeg',
            'es' => 'https://s3-us-west-2.amazonaws.com/apicolabucket/infographics/infographic-es.jpeg'
        ];

        $infographic = App::getLocale() == 'en' ? $infographics['en'] : $infographics['es'];

        return view('getting_started', ['infographic' => $infographic]);
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
        return view('servicies');
    }
}
