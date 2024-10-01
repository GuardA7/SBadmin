<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelatihan; // Pastikan model Pelatihan di-import
use Yajra\DataTables\DataTables; // Pastikan DataTables di-import

class PelatihanController extends Controller
{
    public function index(Request $request) // Perbaiki typo di sini
    {
        return view('content.Pelatihan.index'); // Pastikan mengarah ke view yang benar
    }

    public function ajax(Request $request)
    {
        $data = Pelatihan::query(); // Pastikan nama model diawali dengan huruf kapital

        return DataTables::of($data)->make(true);
    }
}
