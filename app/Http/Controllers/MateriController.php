<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MateriController extends Controller
{
    public function showLayoutMateri()
    {
        return view('materi.halamanmateri');
    }
}
