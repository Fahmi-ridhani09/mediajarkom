<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\tcpip;

class tcpipController extends Controller
{
    public function startQuiz(){
        $durasiEvaluasi = 5;
        $soalQuiz = tcpip::getQuestion();
        $startTime =date("Y-m-d H:i:s");
        $endtime = date("Y-m-d H:i:s",strtotime("+$durasiEvaluasi minutes"));
      
        session(['startTime' => $startTime,
        'endtime'=>$endtime 
    ]);



        $materi = "tcpip";
        return view("latihantcpip", compact("soalQuiz", "materi", "durasiEvaluasi"));
    }
    public function submit(){

    }
}
