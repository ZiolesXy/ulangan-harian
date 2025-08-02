<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Siswa::factory(100)->create();
        // Siswa::create(['nama' => 'Muhammad Pasha Prabasakti', 'nis' => '12345', 'kelas' => 'XII RPL', 'status' => 'aktif', 'jenis_kelamin' => 'Laki-laki']);
        // Siswa::create(['nama' => 'Rina Lestari', 'nis' => '12346', 'kelas' => 'XII IPS 1', 'status' => 'non-aktif', 'jenis_kelamin' => 'Perempuan']);
        // Siswa::create(['nama' => 'Budi Santoso', 'nis' => '12347', 'kelas' => 'XI IPS 1', 'status' => 'aktif', 'jenis_kelamin' => 'Laki-laki']);
        // Siswa::create(['nama' => 'Siti Nurhaliza', 'nis' => '12348', 'kelas' => 'XI IPS 2', 'status' => 'aktif', 'jenis_kelamin' => 'Perempuan']);
        // Siswa::create(['nama' => 'Agus Setiawan', 'nis' => '12349', 'kelas' => 'X MIPA 1', 'status' => 'aktif', 'jenis_kelamin' => 'Laki-laki']);
        // Siswa::create(['nama' => 'Dewi Sartika', 'nis' => '12350', 'kelas' => 'X MIPA 2', 'status' => 'aktif', 'jenis_kelamin' => 'Perempuan']);
        // Siswa::create(['nama' => 'Joko Susilo', 'nis' => '12351', 'kelas' => 'XII IPA 3', 'status' => 'non-aktif', 'jenis_kelamin' => 'Laki-laki']);
        // Siswa::create(['nama' => 'Putri Indah', 'nis' => '12352', 'kelas' => 'XI Bahasa', 'status' => 'aktif', 'jenis_kelamin' => 'Perempuan']);
        // Siswa::create(['nama' => 'Rizky Pratama', 'nis' => '12353', 'kelas' => 'X IPS 3', 'status' => 'aktif', 'jenis_kelamin' => 'Laki-laki']);
        // Siswa::create(['nama' => 'Ani Mardiana', 'nis' => '12354', 'kelas' => 'XII RPL', 'status' => 'aktif', 'jenis_kelamin' => 'Perempuan']);
        // Siswa::create(['nama' => 'Fajarudin', 'nis' => '12355', 'kelas' => 'XI MIPA 3', 'status' => 'non-aktif', 'jenis_kelamin' => 'Laki-laki']);
        // Siswa::create(['nama' => 'Lena Wijaya', 'nis' => '12356', 'kelas' => 'X Bahasa', 'status' => 'aktif', 'jenis_kelamin' => 'Perempuan']);
        // Siswa::create(['nama' => 'Taufik Hidayat', 'nis' => '12357', 'kelas' => 'XII IPS 2', 'status' => 'aktif', 'jenis_kelamin' => 'Laki-laki']);
        // Siswa::create(['nama' => 'Maya Sari', 'nis' => '12358', 'kelas' => 'XI RPL', 'status' => 'aktif', 'jenis_kelamin' => 'Perempuan']);
        // Siswa::create(['nama' => 'Kevin Sanjaya', 'nis' => '12359', 'kelas' => 'X MIPA 1', 'status' => 'non-aktif', 'jenis_kelamin' => 'Laki-laki']);

    }
}
