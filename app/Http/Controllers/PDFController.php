<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function downloadKTP($filename)
{
    $file_path = storage_path('app/public/ktp/' . $filename);
    return response()->download($file_path, $filename);
}

public function downloadKTM($filename)
{
    $file_path = storage_path('app/public/ktm/' . $filename);
    return response()->download($file_path, $filename);
}

public function downloadProposal($filename)
{
    $file_path = storage_path('app/public/proposal/' . $filename);
    return response()->download($file_path, $filename);
}

public function downloadPermohonan($filename)
{
    $file_path = storage_path('app/public/permohonan/' . $filename);
    return response()->download($file_path, $filename);
}

}
