<?php

namespace App\Http\Controllers;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
}
