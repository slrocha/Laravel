<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use DB;
use Excel;
use PDF;
use Csv;
use word;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Style\Font;

class ExportController extends Controller
{

    public function getExportExcel(){
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

    public function getExportPdf(){
        $users = User::all();    
        $pdf = PDF::loadView('user.htmlToPDF', ['users'=> $users]);
        return $pdf->download('Lista.pdf');
    }

    public function getExportCSV(){
        $users = User::get(['name', 'email'])->toArray();
        $header = ['Nome', 'Email'];
        Csv::create($users, $header);
        Csv::convertEncoding('UTF-8', 'SJIS-win');
        return Csv::download('users.csv');
    }

      public function getExportdoc()
     {

            // Creating the new document...
            $phpWord = new PhpWord();

            /* Note: any element you append to a document must reside inside of a Section. */

             // Adding an empty Section to the document...
            $section = $phpWord->addSection();

            // Adding Text element to the Section having font styled by default...
            $section->addText(
                htmlspecialchars(
                    '"Learn from yesterday, live for today, hope for tomorrow. '
                        . 'The important thing is not to stop questioning." '
                        . '(Albert Einstein)'
                )
            );

            // Saving the document as HTML file...
            $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'HTML');
            $objWriter->save('helloWorld.html');


        }



}



?>

