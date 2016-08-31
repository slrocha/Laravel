<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use DB;
use Excel;

class ExportController extends Controller
{

 public function getExport(){
        $user= User::all();
        Excel::create('Usuários Inativos', function($excel)use($user) {
            $excel->sheet('Excel sheet', function($sheet)use($user) {
                $sheet->fromArray($user);
            });
        })->export('xlsx');  
        
    }

}

?>

