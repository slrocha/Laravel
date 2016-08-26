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
        return view('vista', compact('users'));

        Excel::create('lista de usarios Excel', function($excel) {
	   		$excel->sheet('Excel sheet', function($sheet) {
	        	$users= App\User::all();
	        	$sheet->loadView('vista',['users'=> $users]);
	    	});
		})->export('csv');        
    } 
}
