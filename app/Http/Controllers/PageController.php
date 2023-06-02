<?php

namespace App\Http\Controllers;

use App\Models\Dress;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $dresses = Dress::all();

        return view('home', compact('dresses'));
    }
}
