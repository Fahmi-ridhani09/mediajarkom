<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class guruController extends Controller
{
    public function index (Request $request){
        $users = User::where("role","siswa")->count();
        $kelas = User::select('kelas', DB::raw('count(*) as jumlah_siswa'))
        ->groupBy('kelas') 

        ->get();

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

        return view("guru\halamanguru", compact("users","kelas", 'quizzes', 'materi', 'nama'));
        

        

    }
}
