<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class users extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Users = new User();
        $Users->nama = "guru1";
        $Users->role = "guru";
        $Users->email = "guru@gmail.com";
        $Users->password = bcrypt("guru123");
        $Users->kelas = "A";
        $Users->save();
    }
    public function dashboard()
    {
        $jumlah_kelas = User::select('kelas')->distinct()->count();
        return view('halamanguru', compact('jumlah_kelas'));
    }
}
