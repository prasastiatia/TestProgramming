<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\daftar_users;
use App\register;
use App\sekolah;
use App\siswa;


class web extends Controller
{
    

    public function dashboard()
    {
        if(Session()->get('login')==TRUE)
        {
        return view('dashboard_user');
        }
        else
        {
        return redirect()->route('login');
        }

    }

    public function data_siswa()
    {

        if(Session()->get('login')==TRUE)
        {
        $data_sekolah = siswa::all();
        $sekolah = sekolah::all();

    
        return view('data_siswa',['sekolah'=>$sekolah,'data_sekolah'=>$data_sekolah]);
        }
        else
        {
        return redirect()->route('login');
        }
    }

    public function postDataSiswa(Request $request)
    {
        siswa::create([
            'nama'=> $request->nama,
            'alamat' => $request->alamat,
            'telpon'=> $request->notelp,
            'asal_sekolah'=> $request->asal_sekolah, 
        ]);

        return redirect()->back();

    }

    public function edit($id)
    {
        if(Session()->get('login')==TRUE)
        {
        $sekolah = sekolah::all();
        $siswa = siswa::find($id);
        return view('siswa_edit', ['siswa' => $siswa,'sekolah'=>$sekolah]);
        }
        else
        {
        return redirect()->route('login');
        }
    }

    public function update($id, Request $request)
    {
        $this->validate($request,[
        'nama' => 'required',
        'alamat' => 'required'
        ]);
 
        $siswa = siswa::find($id);
        $siswa->nama = $request->nama;
        $siswa->alamat = $request->alamat;
        $siswa->telpon = $request->notelp;
        $siswa->asal_sekolah = $request->asal_sekolah;
        $siswa->save();
        return redirect()->route('data_siswa');
    }

    public function delete($id)
    {
        $siswa = siswa::find($id);
        $siswa->delete();
        return redirect()->back();
    }

    public function logicPerulangan()
    {
        if(Session()->get('login')==TRUE)
        {
        return view('logic');
        }
        else
        {
        return redirect()->route('login');
        }
    }

    
}
