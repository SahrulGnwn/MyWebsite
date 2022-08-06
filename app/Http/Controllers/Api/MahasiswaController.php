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
        $mahasiswa = Mahasiswa::where('id', $id)->first();
        if($mahasiswa)
        {
            $data = [
                'status' => 'success',
                'data' => $mahasiswa
            ];
        }
        else
        {
            $data = [
                'status' => 'Data not found'
            ];
        }
        return response()->json($data);
    }

    public function create(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required|max:35', 
            'nim' => 'required|unique:mahasiswas',
            'email' => 'required|max:35', 
            'telpon' => 'required|max:35', 
            'jurusan' => 'required|max:35', 

        ]);

        Mahasiswa::Create($validateData);
        $data = [
            'status' => 'New Mahasiswa has been added',
            'data' => $validateData
        ];

        return response()->json($data);
    }
    public function delete($id)
    {
        $mahasiswa = Mahasiswa::destroy($id);
        if($mahasiswa)
        {
            $data = [
                'status' => 'Data has been deleted'
            ];
        }
        else
        {
            $data = [
                'status' => 'Data not found'
            ];
        }

        return response()->json($data);
    }
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'nama' => 'required|max:35', 
            'nim' => 'required',
            'email' => 'required|max:35', 
            'telpon' => 'required|max:35', 
            'jurusan' => 'required|max:35', 

        ]);
        $mahasiswa = Mahasiswa::where('id', $id)->first();
        if($mahasiswa)
        {
            $data = [
                'status' => 'Data has been updated',
                'data'   => $mahasiswa
            ];
            $mahasiswa->update($validateData);
        }
        else
        {
            $data = [
                'status' => 'Data not found'
            ];
        }
        return response()->json($data);

    }
}
