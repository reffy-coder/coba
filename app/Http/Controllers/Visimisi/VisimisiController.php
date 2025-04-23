<?php

namespace App\Http\Controllers\Visimisi;

use App\Models\Visimisi;
use App\Http\Controllers\Controller;

class VisimisiController extends Controller
{
    public function index()
    {
        $visimisi = Visimisi::all();

        // Jika ada data visimisi di database
        if ($visimisi->isNotEmpty()) {
            $visi = $visimisi->first()->visi;     // Kolom visi berisi HTML lengkap
            $misi = $visimisi->first()->misi;     // Kolom misi berisi HTML lengkap
            $visimisiImg = $visimisi->first()->image;
        } else {
            // Jika tidak ada data visimisi
            $visi = 'No Data Available';
            $misi = 'No Data Available'; // HTML default
            $visimisiImg = [];
        }

        return view('visimisi', compact('visi', 'misi', 'visimisiImg'));
    }
}