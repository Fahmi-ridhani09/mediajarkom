<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Quiz;
use App\Helpers\evaluasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Casts\Json;

class quizController extends Controller
{
    public function startQuiz(){
        $durasiEvaluasi = 30;
        $soalQuiz = evaluasi::getQuestion();
        $startTime =date("Y-m-d H:i:s");
        $endtime = date("Y-m-d H:i:s",strtotime("+$durasiEvaluasi minutes"));
      
        session(['startTime' => $startTime,
        'endtime'=>$endtime 
    ]);
        $materi = "evaluasi";
        return view("evaluasi", compact("soalQuiz", "materi", "durasiEvaluasi","startTime"));
    }
    public function submit(Request $request)
    {
        $quiz = Quiz::where("user_id", Auth::User()->id)->where("materi", $request->materi)->first();
        if ($quiz) {
            $quiz->user_id = Auth::User()->id;
            $quiz->materi = $request->materi;
            $quiz->nilai = $request->nilai;
            $quiz->jawaban = Json::encode($request->quiz);
            $quiz->waktu_mulai = Carbon::createFromTimestampMs($request->waktu_mulai)->format('Y-m-d H:i:s');
            $quiz->waktu_selesai = Carbon::createFromTimestampMs($request->waktu_selesai)->format('Y-m-d H:i:s');
            $quiz->status = $request->nilai >= 70 ? "lulus" : "tidak lulus";
            $quiz->save();
        } else {
            $quiz = new Quiz();
            $quiz->user_id = Auth::User()->id;
            $quiz->materi = $request->materi;
            $quiz->nilai = $request->nilai;
            $quiz->jawaban = Json::encode($request->quiz);
            $quiz->waktu_mulai = Carbon::createFromTimestampMs($request->waktu_mulai)->format('Y-m-d H:i:s');
            $quiz->waktu_selesai = Carbon::createFromTimestampMs($request->waktu_selesai)->format('Y-m-d H:i:s');
            $quiz->status = $request->nilai >= 70 ? "lulus" : "tidak lulus";
            $quiz->save();
        }

        return response()->json($request->all());
    }

    public function index(Request $request)
    {
        $materi = $request->input('materi');
        $nama = $request->input('nama');

        $quizzes = Quiz::with('user')
            ->when($materi, function ($query, $materi) {
                return $query->where('materi', 'like', "%$materi%");
            })
            ->when($nama, function ($query, $nama) {
                return $query->whereHas('user', function ($q) use ($nama) {
                    $q->where('name', 'like', "%$nama%");
                });
            })
            ->paginate(10);

        return view('quizzes.index', compact('quizzes', 'materi', 'nama'));
    }
}
