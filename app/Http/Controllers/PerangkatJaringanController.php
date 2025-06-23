<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\PerangkatJaringan;

class PerangkatJaringanController extends Controller
{
    public function startQuiz(){
        $durasiEvaluasi = 15;
        $soalQuiz = PerangkatJaringan::getQuestion();
        $endtime = date("Y-m-d H:i:s",strtotime("+$durasiEvaluasi minutes"));
        $startTime =date("Y-m-d H:i:s");
        $endtime = date("Y-m-d H:i:s",strtotime("+$durasiEvaluasi minutes"));
      
        session(['startTime' => $startTime,
        'endtime'=>$endtime 
    ]);


        $materi = "perangkat-jaringan";
        return view("LatihanPerangkatJaringan", compact("soalQuiz", "materi", "durasiEvaluasi"));
    }
    public function submit(){

    }
}
