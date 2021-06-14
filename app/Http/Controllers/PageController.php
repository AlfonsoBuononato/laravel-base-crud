<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fumetto;

class PageController extends Controller
{
    public function index(){
        return view('home');
    }
}
