<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use \PDF;
use Maatwebsite\Excel\Facades\Excel;

class PdfController extends Controller
{
    // public function index(){
    //     return view('home');
    // }

    // for form submission
    // public function getData(Request $req) {
    //     return $req->input();
    // }

    public function getData(Request $request)
    {
        $exportData =
        [
            'speakingTo' => $request->input('speakingTo'),
            'partnerName' => $request->input('partnerName'),
            'lnvRep' => $request->input('lnvRep'),
            'partnerOffering' => $request->input('partnerOffering'),
            'augmentedPartner' => $request->input('augmentedPartner'),
            'learnMore' => $request->input('learnMore'),
            'partnerOffering1' => $request->input('partnerOffering1'),
            'augmentedPartner1' => $request->input('augmentedPartner1'),
            'learnMore1' => $request->input('learnMore1'),
            'partnerOffering2' => $request->input('partnerOffering2'),
            'augmentedPartner2' => $request->input('augmentedPartner2'),
            'learnMore2' => $request->input('learnMore2'),
            'partnerOffering3' => $request->input('partnerOffering3'),
            'augmentedPartner3' => $request->input('augmentedPartner3'),
            'learnMore3' => $request->input('learnMore3'),
            'partnerOffering4' => $request->input('partnerOffering4'),
            'augmentedPartner4' => $request->input('augmentedPartner4'),
            'learnMore4' => $request->input('learnMore4'),
            'partnerOffering5' => $request->input('partnerOffering5'),
            'augmentedPartner5' => $request->input('augmentedPartner5'),
            'learnMore5' => $request->input('learnMore5'),
            'partnerOffering6' => $request->input('partnerOffering6'),
            'augmentedPartner6' => $request->input('augmentedPartner6'),
            'learnMore6' => $request->input('learnMore6'),
            'partnerOffering7' => $request->input('partnerOffering7'),
            'augmentedPartner7' => $request->input('augmentedPartner7'),
            'learnMore7' => $request->input('learnMore7'),
            'partnerOffering8' => $request->input('partnerOffering8'),
            'augmentedPartner8' => $request->input('augmentedPartner8'),
            'learnMore8' => $request->input('learnMore8'),
            'partnerOffering9' => $request->input('partnerOffering9'),
            'augmentedPartner9' => $request->input('augmentedPartner9'),
            'learnMore9' => $request->input('learnMore9'),
            'partnerOffering10' => $request->input('partnerOffering10'),
            'augmentedPartner10' => $request->input('augmentedPartner10'),
            'learnMore10' => $request->input('learnMore10'),
            'partnerOffering11' => $request->input('partnerOffering11'),
            'augmentedPartner11' => $request->input('augmentedPartner11'),
            'learnMore11' => $request->input('learnMore11'),
            'partnerOffering12' => $request->input('partnerOffering12'),
            'augmentedPartner12' => $request->input('augmentedPartner12'),
            'learnMore12' => $request->input('learnMore12'),
            'partnerOffering13' => $request->input('partnerOffering13'),
            'augmentedPartner13' => $request->input('augmentedPartner13'),
            'learnMore13' => $request->input('learnMore13'),
            'partnerOffering14' => $request->input('partnerOffering14'),
            'augmentedPartner14' => $request->input('augmentedPartner14'),
            'learnMore14' => $request->input('learnMore14'),
            'partnerOffering15' => $request->input('partnerOffering15'),
            'augmentedPartner15' => $request->input('augmentedPartner15'),
            'learnMore15' => $request->input('learnMore15'),
            'partnerOffering16' => $request->input('partnerOffering16'),
            'augmentedPartner16' => $request->input('augmentedPartner16'),
            'learnMore16' => $request->input('learnMore16'),
            'partnerOffering17' => $request->input('partnerOffering17'),
            'augmentedPartner17' => $request->input('augmentedPartner17'),
            'learnMore17' => $request->input('learnMore17'),
            'partnerOffering18' => $request->input('partnerOffering18'),
            'augmentedPartner18' => $request->input('augmentedPartner18'),
            'learnMore18' => $request->input('learnMore18'),
            'partnerOffering19' => $request->input('partnerOffering19'),
            'augmentedPartner19' => $request->input('augmentedPartner19'),
            'learnMore19' => $request->input('learnMore19'),
            'partnerOffering20' => $request->input('partnerOffering20'),
            'augmentedPartner20' => $request->input('augmentedPartner20'),
            'learnMore20' => $request->input('learnMore20'),
            'partnerOffering21' => $request->input('partnerOffering21'),
            'augmentedPartner21' => $request->input('augmentedPartner21'),
            'learnMore21' => $request->input('learnMore21'),
            'partnerOffering22' => $request->input('partnerOffering22'),
            'augmentedPartner22' => $request->input('augmentedPartner22'),
            'learnMore22' => $request->input('learnMore22'),
            'partnerOffering23' => $request->input('partnerOffering23'),
            'augmentedPartner23' => $request->input('augmentedPartner23'),
            'learnMore23' => $request->input('learnMore23'),
        ];


        if($request->submit == "submit")
        {
            $pdf = PDF::loadView('pdf',$exportData);

            return $pdf->download('exported_checklist.pdf');

        } elseif ($request->export == "export") {

            $headers = array(
                "Content-type" => "text/csv",
                "Content-Disposition" => "attachment; filename=file.csv",
                "Pragma" => "no-cache",
                "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
                "Expires" => "0"
            );

            $userInfo = array($exportData['speakingTo'] ?? '', $exportData['partnerName'] ?? '', $exportData['lnvRep'] ?? '');
            $columns = array('EXISTING PARTNER OFFERING', 'AUGMENTED PARTNERSHIP WITH LENOVO', 'KEEN TO Learn More');

            $callback = function() use ($exportData, $columns, $userInfo)
            {
                $file = fopen('php://output', 'w');
                fputcsv($file, $userInfo);
                fputcsv($file, []);
                fputcsv($file, $columns);

                fputcsv($file, array($exportData['partnerOffering'] ?? '', $exportData['augmentedPartner'] ?? '' ,$exportData['learnMore'] ?? ''));
                for ($i=1; $i <= 23; $i++) {
                     fputcsv($file, array($exportData['partnerOffering'.$i] ?? '', $exportData['augmentedPartner'.$i] ?? '' ,$exportData['learnMore'.$i] ?? ''));
                }

                fclose($file);
            };
            return \Response::stream($callback, 200, $headers);
            }
    }
}
