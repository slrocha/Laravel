<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\User;
use Excel;

class UserController extends Controller
{
    public function index()
    {
       /* $users=DB::table('users')->get();
        return view('export.exportToExcel', compact('users'));              
    } */
        $users=DB::table('users')->get();
        return view('user', compact('users'));
        
    }

    public function registerUser(){

    	return view('user.registerUser');
    }
}
