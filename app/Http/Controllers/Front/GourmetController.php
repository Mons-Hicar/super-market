<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GourmetController extends Controller
{
    public function index()
    {
        return view('gourmet');
    }
}
