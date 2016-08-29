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
        $users=DB::table('users')->get();
        return view('export.exportToExcel', compact('users'));              
    } 

    public function getExport(){
        $user= User::all();
        User::create('Usuários Inativos', function($excel)use($user) {
            $excel->sheet('Excel sheet', function($sheet)use($user) {
                //$users= App\User::all();
                $sheet->fromArray($user);
            });
        })->export('xlsx');  



    }
}
