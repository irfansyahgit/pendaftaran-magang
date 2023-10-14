<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;


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
        $tanggalSekarang = Carbon::now()->format('d/m/Y');

        return view('lamaran', ['tanggalSekarang' => $tanggalSekarang]);
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
            'berkasktp' => 'required|mimes:pdf|max:10000',
            'berkasktm' => 'required|mimes:pdf|max:10000',
            'berkaspermohonan' => 'required|mimes:pdf|max:10000',
            'berkasproposal' => 'required|mimes:pdf|max:10000',
        ]);
        // $inputanForm['user_id'] = auth()->id();

        $user = auth()->user();

        // ktp
        $filenamektp = $user->id . '-' . uniqid() . '.pdf';
        $ktp = $request->file('berkasktp');
        Storage::putFileAs('public/ktp', $ktp, $filenamektp);
        
        // ktm
        $filenamektm = $user->id . '-' . uniqid() . '.pdf';
        $ktm = $request->file('berkasktm');
        Storage::putFileAs('public/ktm', $ktm, $filenamektm);

        // permohonan
        $filenamePermohonan = $user->id . '-' . uniqid() . '.pdf';
        $permohonan = $request->file('berkaspermohonan');
        Storage::putFileAs('public/permohonan', $permohonan, $filenamePermohonan);

        // proposal
        $filenameProposal = $user->id . '-' . uniqid() . '.pdf';
        $proposal = $request->file('berkasproposal');
        Storage::putFileAs('public/proposal', $proposal, $filenameProposal);

        // $newLamaran = Application::create($inputanForm);



        $application = new Application();
        $application->nama = $request->input('nama');
        $application->nik = $request->input('nik');
        $application->alamat = $request->input('alamat');
        $application->telepon = $request->input('telepon');
        $application->email = $request->input('email');
        $application->univ = $request->input('univ');
        $application->lokasi = $request->input('lokasi');
        $application->mulai = $request->input('mulai');
        $application->selesai = $request->input('selesai');
        $application->berkasktp = $filenamektp;
        $application->berkasktm = $filenamektm;
        $application->berkaspermohonan = $filenamePermohonan;
        $application->berkasproposal = $filenameProposal;
        $application->user_id = auth()->id();
        $application->save();

        return redirect("/lamaran/{$application->id}")->with('berhasil', 'Berhasil kirim lamaran!');



        // return redirect("/lamaran/{$newLamaran->id}")->with('berhasil', 'Berhasil kirim lamaran!');
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
