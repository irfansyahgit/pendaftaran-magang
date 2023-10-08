<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(User $user)
    {
        // $lamarans = $user->lamarans()->get();
        // return $lamarans;
        return view('riwayat', ['lamarans' => $user->lamarans()->latest()->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('lamaran');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inputanForm = $request->validate([
            'nama' => 'required',
            'nik' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'email' => 'required',
            'univ' => 'required',
            'lokasi' => 'required',
            'mulai' => 'required',
            'selesai' => 'required',
            'berkasktp' => 'required',
            'berkasktm' => 'required',
            'berkaspermohonan' => 'required',
            'berkasproposal' => 'required',
        ]);
        $inputanForm['user_id'] = auth()->id();

        $newLamaran = Application::create($inputanForm);

        // return 'hey';
        return redirect("/lamaran/{$newLamaran->id}")->with('berhasil', 'Berhasil kirim lamaran!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Application $lamaran)
    {
        return view('single', ['lamaran' => $lamaran]);
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
