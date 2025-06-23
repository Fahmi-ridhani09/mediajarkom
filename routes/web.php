<?php

use App\Helpers\PerangkatJaringanController as HelpersPerangkatJaringanController;
use App\Helpers\tcpip;
use App\Http\Controllers\guruController;
use App\Http\Controllers\LatihantcpipController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\quizController;
use App\Http\Controllers\tcpipController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerangkatJaringanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\TopologiController;

Route::get('/login', function () {
    return view('login');
})->name("login");

Route::get('/register', function () {
    return view('register');
});

Route::get('/materi/halamanmateri', [MateriController::class, 'showLayoutMateri']);






Route::get('users', [UserController::class, 'showUsers'])->name('users');
Route::prefix('guru/users')->name('guru.users.')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::get('/create', [UserController::class, 'create'])->name('create');
    Route::post('/', [UserController::class, 'store'])->name('store');
    Route::get('/{user}/edit', [UserController::class, 'edit'])->name('edit');
    Route::put('/{user}', [UserController::class, 'update'])->name('update');
    Route::delete('/{user}', [UserController::class, 'destroy'])->name('destroy');
});




Route::get("evaluasi", [quizController::class, "startQuiz"]);
Route::get("latihantcpip", [tcpipController::class, "startQuiz"]);
Route::get("latihantopologi", [TopologiController::class, "startQuiz"]);
Route::get("LatihanPerangkatJaringan", [PerangkatJaringanController::class, "startQuiz"]);


Route::post("login/proses", [LoginController::class, "login"])->name("login_proses");
Route::post("register/proses", [LoginController::class, "register"])->name("register_proses");
Route::get("logout/proses", [LoginController::class, "logout"])->name("logout_proses");


Route::middleware("auth")->group(function () {
    Route::get('/', function () {
        return view('home', ['title' => 'Home Page']);
    })->name("home");

    Route::get('/about', function () {
        return view('about', ['title' => 'about']);
    });

    Route::get('/blog', function () {
        return view('blog', ['title' => 'Blog']);
    });

    Route::get('/contact', function () {
        return view('contact', ['title' => 'Contact']);
    });

    Route::get('/perangkat_jaringan', function () {
        return view('perangkat_jaringan', ['title' => 'perangkat_jaringan']);
    });

    Route::get('/latihan-perangkat-jaringan', function () {
        return view('latihan-perangkat-jaringan', ['title' => 'latihan-perangkat-jaringan']);
    });

    Route::get('/kuistopologi1', function () {
        return view('kuistopologi1', ['title' => 'kuistopologi1']);
    });

    Route::get('/kuistopologi2', function () {
        return view('kuistopologi2', ['title' => 'kuistopologi2']);
    });

    Route::get('/kuistopologi3', function () {
        return view('kuistopologi3', ['title' => 'kuistopologi2']);
    });

    Route::get('/latihan_osi', function () {
        return view('latihan_osi', ['title' => 'latihan_osi']);
    });

    Route::get('/materijaringan', function () {
        return view('materi', ['title' => 'materi']);
    });



    Route::get('/kompetensi', function () {
        return view('kompetensi', ['title' => 'kompetensi']);
    });

    Route::get('/topologi', function () {
        return view('topologi', ['title' => 'topologi']);
    });

    Route::get('/topologi-jaringan', function () {
        return view('topologi');
    });

    Route::get('/model-osi', function () {
        return view('osi');
    });

    Route::get('/tcpip', function () {
        return view('tcpip');
    });

    Route::get('/perangkat-jaringan', function () {
        return view('perangkat-jaringan');
    });

    Route::get('/latihan_topologi', function () {
        return view('latihan_topologi');
    });

    Route::post('kuis/submit', [quizController::class, 'submit'])->name('kuis.submit');
    Route::get('/quizzes', [QuizController::class, 'index'])->name('quizzes.index');

    Route::get("guru/dashboard", [guruController::class, "index"])->name("guru.dashboard");

    Route::get('guru/guruperangkatjaringan', function () {
        return view('guru/guru_perangkat_jaringan');
    })->name('guru.perangkatjaringan');

    Route::get('guru/gurumodelosi', function () {
        return view('guru/guru_model_osi');
    })->name('guru.gurumodelosi');

    Route::get('guru/gurutcpip', function () {
        return view('guru/guru_tcpip');
    })->name('guru.gurutcpip');

    Route::get('guru/gurutopologi', function () {
        return view('guru/guru_topologi');
    })->name('guru.gurutopologi');
});
