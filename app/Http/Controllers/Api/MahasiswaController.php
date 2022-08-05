<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;
class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        $data = [
            'status' => 'success',
            'data' => $mahasiswa
        ];
        return response()->json($data);
    }  

    public function show($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        if ($mahasiswa) {
            $data = [
                'status' => 'success',
                'data' => $mahasiswa
            ];
            return response()->json($data);
        }
        return response()->json(['message' => "Transaksi Tidak Ada"]);
    }
}
