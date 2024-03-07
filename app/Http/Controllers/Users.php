<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use function Laravel\Prompts\alert;

class Users extends Controller
{
   public function userfun( string $id){
        return view('welcome',compact('id'));
   }
}
