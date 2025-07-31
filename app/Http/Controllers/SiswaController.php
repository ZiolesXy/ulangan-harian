<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index() {
        $siswas = Siswa::paginate(15); // 15 data per halaman
    
        return view('data_siswa', [
            'title' => 'Daftar Siswa',
            'siswas' => $siswas,
            'total' => $siswas->total(),
            'aktif' => Siswa::where('status', 'aktif')->count(),
            'nonAktif' => Siswa::where('status', 'non-aktif')->count(),
            'totalKelas' => Siswa::distinct('kelas')->count('kelas')
        ]);
    }    
}
