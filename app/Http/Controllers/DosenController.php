<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Dosen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DosenController extends Controller
{
    public function index()
    {
        $mahasiswa = Dosen::all();

        return response()->json([
            'success' => true,
            'message' => 'list all Mahasiswa',
            'data'    => $mahasiswa
        ], 200);
    }

    public function show($id)
    {
        $mahasiswa = Dosen::find($id);
        if ($mahasiswa) {
            return response()->json([
                'success'   => true,
                'message'   => 'Detail Mahasiswa',
                'data'      => $mahasiswa
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Mahasiswa Tidak Ditemukan!',
            ], 404);
        }
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nbi'   => 'required',
            'nama'   => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'tgl_lahir' => 'required',
            'no_telp' => 'required',
            'prodi' => 'required',
            'fakultas' => 'required',
            'ipk' => 'required',
            'dosen_wali' => 'required',
        ]);

        if ($validator->fails()) {

            return response()->json([
                'success' => false,
                'message' => 'Semua Kolom Wajib Diisi!',
                'data'   => $validator->errors()
            ], 401);
        } else {

            $mahasiswa = Dosen::create([
                'nbi'     => $request->input('nbi'),
                'nama'     => $request->input('nama'),
                'alamat'   => $request->input('alamat'),
                'email' => $request->input('email'),
                'tgl_lahir' => $request->input('tgl_lahir'),
                'no_telp' => $request->input('no_telp'),
                'prodi' => $request->input('prodi'),
                'fakultas' => $request->input('fakultas'),
                'ipk' => $request->input('ipk'),
                'dosen_wali' => $request->input('dosen_wali'),
                'foto' => $request->input('foto') != null ? $request->input('foto') : 'NULL'
            ]);

            if ($mahasiswa) {
                return response()->json([
                    'success' => true,
                    'message' => 'Post Berhasil Disimpan!',
                    'data' => $mahasiswa
                ], 201);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Post Gagal Disimpan!',
                ], 400);
            }
        }
    }
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nbi'   => 'required',
            'nama'   => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'tgl_lahir' => 'required',
            'no_telp' => 'required',
            'prodi' => 'required',
            'fakultas' => 'required',
            'ipk' => 'required',
            'dosen_wali' => 'required',
        ]);

        if ($validator->fails()) {

            return response()->json([
                'success' => false,
                'message' => 'Semua Kolom Wajib Diisi!',
                'data'   => $validator->errors()
            ], 401);
        } else {

            $mahasiswa = Dosen::whereId($id)->update([
                'nbi'     => $request->input('nbi'),
                'nama'     => $request->input('nama'),
                'alamat'   => $request->input('alamat'),
                'email' => $request->input('email'),
                'tgl_lahir' => $request->input('tgl_lahir'),
                'no_telp' => $request->input('no_telp'),
                'prodi' => $request->input('prodi'),
                'fakultas' => $request->input('fakultas'),
                'ipk' => $request->input('ipk'),
                'dosen_wali' => $request->input('dosen_wali'),
                'foto' => $request->input('foto') != null ? $request->input('foto') : 'NULL'
            ]);

            if ($mahasiswa) {
                return response()->json([
                    'success' => true,
                    'message' => 'Post Berhasil Diupdate!',
                    'data' => $mahasiswa
                ], 201);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Post Gagal Diupdate!',
                ], 400);
            }
        }
    }
    public function delete($id)
    {
        $mahasiswa = Dosen::whereId($id)->first();
        $mahasiswa->delete();

        if ($mahasiswa) {
            return response()->json([
                'success' => true,
                'message' => 'Mahasiswa Berhasil Dihapus!',
            ], 200);
        }
    }
}
