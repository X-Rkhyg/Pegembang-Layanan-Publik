<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sertifikatelmulti;

class MultiuserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Multi-User');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Multi-User');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $data = $request->validate([
        //     'nomor' => 'required',
        //     'nama_lengkap' => 'required',
        //     'nip' => 'required',
        //     'pangkat_gol' => 'required',
        //     'jabatan' => 'required',
        //     'instansi' => 'required',
        //     'unit_kerja' => 'required',
        //     'alamat_email' => 'required',
        //     'tempat_tinggal' => 'required',
        //     'provinsi' => 'required',
        //     'id_layanan' => 'required',
        //     'ttd_pemohon' => 'image|file|max:2048'
        // ]);
        // $data['id_layanan'] = 4;
        $nomor=$request->input('nomor');
        $nama_lengkap=$request->input('nama_lengkap');
        $nip=$request->input('nip');
        $pangkat_gol=$request->input('pangkat_gol');
        $jabatan=$request->input('jabatan');
        $instansi=$request->input('instansi');
        $unit_kerja=$request->input('unit_kerja');
        $alamat_email=$request->input('alamat_email');
        $tempat_tinggal=$request->input('tempat_tinggal');
        $provinsi=$request->input('provinsi');
        $ttd_pemohon=$request->file('ttd_pemohon');
        // $arr=array($request->all());

        // dd($arr);
        // if ($request->hasFile('ttd_pemohon')) {
        //     $file = $request->file('ttd_pemohon');
    
        //     // Store or process the file as needed
        //     $filename = $file->store('ttd-images'); 
        // }

        $multi_user = new Sertifikatelmulti([
            'nomor'=>1,
            'nama_lengkap'=>$nama_lengkap,
            'nip'=>$nip,
            'pangkat_gol'=>$pangkat_gol,
            'jabatan'=>$jabatan,
            'instansi'=>$instansi,
            'unit_kerja'=>$unit_kerja,
            'alamat_email'=>$alamat_email,
            'tempat_tinggal'=> 'saacscascas',
            'provinsi'=>$provinsi,
            'ttd_pemohon'=>$request->file('ttd_pemohon'),
            'id_layanan'=>4,
        ]);
        $multi_user->save();
        return redirect('Multi-User');
        // Sertifikatelmulti::create($data);
        // return redirect('/Multi-User');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
