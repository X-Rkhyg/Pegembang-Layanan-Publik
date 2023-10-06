<?php

namespace App\Http\Controllers;

use App\Models\vpsbaru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class VpsbaruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('permohonan-VPS');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('permohonan-VPS');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nama_pemohon=$request->input('nama_pemohon');
        $instansi=$request->input('instansi');
        $nip=$request->input('nip');
        $tujuan_pembuatan_vps=$request->input('tujuan_pembuatan_vps');
        $prosesor=$request->input('prosesor');
        $ip_address=$request->input('ip_address');
        $sistem_operasi=$request->input('sistem_operasi');
        $hardisk=$request->has('hardisk');
        $ram=$request->has('ram');
        $akun_akses_non_fisik=$request->has('akun_akses_non_fisik');
        // $arr=array($request->all());
        // dd($arr);
        $vps_baru = new VpsBaru([
            'nama_pemohon'=>$nama_pemohon,
            'instansi'=>$instansi,
            'nip'=>$nip,
            'tujuan_pembuatan_vps'=>$tujuan_pembuatan_vps,
            'prosesor'=>$prosesor,
            'ip_address'=>$ip_address,
            'sistem_operasi'=>$sistem_operasi,
            'hard_disk'=>$hardisk,
            'ram'=>$ram,
            'akun_akses_non_fisik'=>$akun_akses_non_fisik,
            'id_layanan'=>1,
            'created_at'=>date('Y-m-d H:i:s')
        ]);
        // dd($vpsbaru);
        $vps_baru->save();
        return redirect('permohonan-VPS');
        
        // $request->validate([
        //     'nama_pemohon'=>'required',
        //     'instansi'=>'required',
        //     'nip'=>'required',
        //     'tujuan_pembuatan_vps'=>'required',
        //     'prosesor'=>'required',
        //     'ip_address'=>'required',
        //     'sistem_operasi'=>'required',
        //     'hardisk'=>'required|in:20gb,40gb',
        //     'ram'=>'required|in:1gb,2gb',
        //     'akun_akses_non_fisik'=>'required'
        // ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(vpsbaru $vpsbaru)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(vpsbaru $vpsbaru)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, vpsbaru $vpsbaru)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(vpsbaru $vpsbaru)
    {
        //
    }
}
