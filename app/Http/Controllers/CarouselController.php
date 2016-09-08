<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Response;
use Validator;
use Storage;

class CarouselController extends Controller
{
    public function __construct()
    {
        $this->s3 = Storage::disk('s3');
    }

    public function index()
    {
        $files = $this->s3->files('carousel');
        $images = [];

        foreach ($files as $file) {
            array_push($images, $this->s3->url($file));
        }

        return view('carousel.index', ['images' => $images]);
    }

    public function upload(Request $request)
    {
        $validator = Validator::make($request->all(), ['image' => 'required|image']);

        if ($validator->fails()) {
            return redirect()->route('carousel')->with('message', 'A ocurrido un error. Archivo invalido');
        }

        $image = $request->file('image');
        $imageFileName = time() . '.' . $image->getClientOriginalExtension();
        $path = 'carousel/' . $imageFileName;
        $this->s3->put($path, file_get_contents($image), 'public');

        return redirect()->route('carousel')->with('message', 'Imagen agregada');
    }

    public function delete($file)
    {
        $this->s3->delete('carousel/' .$file);

        return redirect()->route('carousel');
    }
}
