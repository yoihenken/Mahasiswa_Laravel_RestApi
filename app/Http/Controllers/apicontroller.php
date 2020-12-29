<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MahasiswaModel; //tambah model yang ada

class apicontroller extends Controller
{
    public function get_all_mahasiswa()
    {
        return response()->json(MahasiswaModel::all(), 200);
    }
}
