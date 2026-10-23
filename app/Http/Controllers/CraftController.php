<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Craft;

class CraftController extends Controller
{
    public function index()
    {
        $crafts = Craft::paginate(6);
        return view('page.craft', compact('crafts'));
    }

    public function show($id)
    {
        $craft = Craft::findOrFail($id);
        return view('page.craft-detail', compact('craft'));
    }
}
