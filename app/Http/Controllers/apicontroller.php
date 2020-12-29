<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MahasiswaModel; //tambah model yang ada

class apicontroller extends Controller
{
    public function get_all_mahasiswa(){
        return response()->json(MahasiswaModel::all(), 200);
    }

    public function insert_data_mahasiswa(Request $request){
        $insert_mahasiswa = new MahasiswaModel;
        $insert_mahasiswa->nim = $request->nim;
        $insert_mahasiswa->nama = $request->nama;
        $insert_mahasiswa->kelas = $request->kelas;
        $insert_mahasiswa->prodi = $request->prodi;
        $insert_mahasiswa->fakultas = $request->fakultas;

        $insert_mahasiswa->save();
        return response([
            'status' => 'OK',
            'message' => 'Data Saved',
            'data' => $insert_mahasiswa
        ],200);
    }

    public function update_data_mahasiswa(Request $request, $id){
        $check = MahasiswaModel::firstWhere('nim', $id);

        if($check){
            $data_mahasiswa = MahasiswaModel::find($id);
            $data_mahasiswa->nim = $request->nim;
            $data_mahasiswa->nama = $request->nama;
            $data_mahasiswa->kelas = $request->kelas;
            $data_mahasiswa->prodi = $request->prodi;
            $data_mahasiswa->fakultas = $request->fakultas;
            $data_mahasiswa->save();
            return response([
                'status' => 'OK',
                'message' => 'Data Updated',
                'data' => $data_mahasiswa
            ],200);
        }else{
            return response([
                'status' => 'Not Found',
                'message' => 'NIM Mahasiswa not found',
            ],404);
        }
    }
}
