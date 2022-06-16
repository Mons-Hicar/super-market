<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShortcodesController extends Controller
{
    public function index()
    {
        return view('short-codes');
    }
}
