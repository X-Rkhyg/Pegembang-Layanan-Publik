<?php

namespace App\Http\Controllers;

use App\Models\vpsperubahan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class VpsperubahanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('perubahan-VPS');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('perubahan-VPS');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
    }

    /**
     * Display the specified resource.
     */
    public function show(vpsperubahan $vpsperubahan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(vpsperubahan $vpsperubahan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, vpsperubahan $vpsperubahan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(vpsperubahan $vpsperubahan)
    {
        //
    }
}
