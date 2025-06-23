<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\topologi;

class TopologiController extends Controller
{
    public function startQuiz(){
        $durasiEvaluasi = 15;
        $soalQuiz = topologi::getQuestion();
        $startTime =date("Y-m-d H:i:s");
        $endtime = date("Y-m-d H:i:s",strtotime("+$durasiEvaluasi minutes"));
      
        session(['startTime' => $startTime,
        'endtime'=>$endtime 
    ]);


        
        $materi = "topologi";
        return view("latihantopologi", compact("soalQuiz", "materi", "durasiEvaluasi"));
    }
    public function submit(){

    }
}
