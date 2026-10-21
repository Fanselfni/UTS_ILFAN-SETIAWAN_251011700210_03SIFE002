<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    //
    public function index()
    {
        $galleries = Gallery::paginate(6);
        return view('page.gallery', compact('galleries'));
    }

    public function show($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('page.detail', compact('gallery'));
    }
}
