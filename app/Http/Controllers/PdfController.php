<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use \PDF;

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


        if($request->submit == "submit")
        {
            $exportData =
            ['speakingTo' => $request->input('speakingTo'), 'partnerName' => $request->input('partnerName'), 'lnvRep' => $request->input('lnvRep'), 'partnerOffering' => $request->input('partnerOffering'), 'augmentedPartner' => $request->input('augmentedPartner'), 'learnMore' => $request->input('learnMore'), 'partnerOffering1' => $request->input('partnerOffering1'), 'augmentedPartner1' => $request->input('augmentedPartner1'), 'learnMore1' => $request->input('learnMore1'), 'partnerOffering2' => $request->input('partnerOffering2'), 'augmentedPartner2' => $request->input('augmentedPartner2'), 'learnMore2' => $request->input('learnMore2'),
        ];

            $pdf = PDF::loadView('pdf', $exportData);

            return $pdf->download('exported_checklist.pdf');

        } elseif ($request->export == "export") {
            dd($request->all());
        }
    }
}
