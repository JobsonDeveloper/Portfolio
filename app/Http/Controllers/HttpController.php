<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HttpController extends Controller
{
    public function httpIndex(Request $request) {
        $data = [51, 4, 8, 130, 8, 12, 59, 78];
        
        return $data;
    }
}
