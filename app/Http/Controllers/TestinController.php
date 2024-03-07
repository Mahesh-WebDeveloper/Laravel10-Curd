<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestinController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
       return "invokable function return";
    }
}
