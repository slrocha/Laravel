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
        /*$user= User::select('id', 'name', 'email')->get();
        Excel::create('Usuários Inativos', function($excel)use($user) {
            $excel->sheet('Excel sheet', function($sheet)use($user) {
                $sheet->fromArray($user);
            });
        })->download('xlsx'); */ 
        

    ob_end_clean();

    ob_start(); //At the very top of your program (first line)

    $user= User::all();
    Excel::create('Usuários Inativos' , function ($excel) use ($user) {

        $excel->sheet('Users', function ($sheet) use ($user) {

            // Set all margins
            $sheet->fromArray($user, null, 'A1', true);

            $sheet->setSize('A1', 25, 18);
            $sheet->setSize('B1', 25, 18);
            $sheet->setSize('C1', 25, 18);


            $sheet->row(1, array(
                'Id', 'Name', 'Email'
            ));

            // Freeze first row
            $sheet->freezeFirstRow();
            $sheet->cell('A1:F1', function ($cell) {
            });

        });

    })->store('xlsx')->download('xlsx');

 ob_flush();

}

}

?>

