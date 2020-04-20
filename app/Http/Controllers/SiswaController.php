<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
           $data_siswa = \App\Siswa::where('nama_lengkap','LIKE','%'.$request->cari.'%')->get();
        }else {
            $data_siswa = \App\Siswa::all();
        }
        return view('siswa.index',['data_siswa'=> $data_siswa]);
    }
    public function create(Request $request)
    {
        \App\Siswa::create($request->all());
        return redirect('/siswa')->with('success','Your Has Been Success Add New Data');
    }
    public function edit($id)
    {
        $siswa = \App\Siswa::find($id);
        return view('siswa/edit',['siswa' => $siswa]);
    }
    public function update(Request $request,$id)
    {
        $siswa = \App\Siswa::find($id); //Mengambil data siswa yang ada di parameter
        $siswa->update($request->all());
        return redirect('/siswa')->with('success', 'Your Data Has Been Successfully Updated');
    }
    public function delete($id)
    {
        $siswa = \App\Siswa::find($id);
        $siswa->delete($siswa);
        return redirect('/siswa')->with('success', 'Your data Has Been Successfully Deleted');
    }
}
