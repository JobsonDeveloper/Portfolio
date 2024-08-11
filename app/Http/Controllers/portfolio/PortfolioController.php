<?php

namespace App\Http\Controllers\portfolio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index() {
        return view('portfolio/AboutMe');
    }
}
