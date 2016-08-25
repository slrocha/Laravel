<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;

class UserController extends Controller
{
    public function index()
    {
        $users=DB::table('users')->get();
        return view('user', compact('users'));
        
    } 
}
