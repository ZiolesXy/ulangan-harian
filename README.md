# Sistem Ulangan Harian

Aplikasi web berbasis Laravel untuk mengelola ulangan harian siswa dengan fitur pencatatan nilai, laporan, dan manajemen data siswa.

## 🚀 Fitur

- **Manajemen Data Siswa**: Tambah, edit, dan hapus data siswa
- **Pencatatan Nilai**: Input dan update nilai ulangan harian siswa
- **Laporan**: Generate laporan nilai siswa
- **Manajemen Kelas**: Pengelolaan data kelas
- **Dashboard**: Tampilan ringkasan data penting
- **Autentikasi**: Sistem login dan registrasi user

## 📋 Prasyarat

Sebelum menjalankan aplikasi ini, pastikan sistem Anda memiliki:

- PHP >= 8.1
- Composer
- MySQL/MariaDB
- Node.js & NPM (untuk asset compilation)

## 🛠️ Instalasi

1. **Clone repository**
   ```bash
   git clone [url-repository]
   cd ulangan-harian
   ```

2. **Install dependencies PHP**
   ```bash
   composer install
   ```

3. **Install dependencies Node.js**
   ```bash
   npm install
   ```

4. **Setup environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Konfigurasi database**
   Edit file `.env` dan sesuaikan konfigurasi database:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=ulangan_harian
   DB_USERNAME=root
   DB_PASSWORD=
   ```

6. **Jalankan migration dan seeder**
   ```bash
   php artisan migrate
   php artisan db:seed --class=SiswaSeeder
   ```

7. **Compile assets**
   ```bash
   npm run dev
   ```

8. **Jalankan server development**
   ```bash
   php artisan serve
   ```

Aplikasi akan berjalan di `http://localhost:8000`

## 📁 Struktur Proyek

```
ulangan-harian/
├── app/
│   ├── Http/Controllers/    # Controller untuk menangani request
│   ├── Models/             # Model Eloquent
│   └── View/Components/    # Komponen view
├── database/
│   ├── migrations/         # File migrasi database
│   ├── seeders/           # Data awal aplikasi
│   └── factories/         # Factory untuk testing
├── resources/
│   └── views/             # File Blade template
└── routes/
    └── web.php            # Definisi route web
```

## 🗄️ Database

Aplikasi menggunakan beberapa tabel utama:

- **users**: Data pengguna sistem
- **siswas**: Data siswa
- **nilais**: Data nilai ulangan harian
- **kelas**: Data kelas

## 🎯 Penggunaan

1. **Login** ke sistem dengan akun yang telah dibuat
2. **Kelola Data Siswa** melalui menu Data Siswa
3. **Input Nilai** ulangan harian siswa
4. **Lihat Laporan** nilai melalui menu Laporan
5. **Kelola Kelas** jika diperlukan

## 🧪 Testing

Untuk menjalankan test:

```bash
php artisan test
```

## 📝 Contributing

1. Fork proyek ini
2. Buat branch fitur baru (`git checkout -b feature/AmazingFeature`)
3. Commit perubahan (`git commit -m 'Add some AmazingFeature'`)
4. Push ke branch (`git push origin feature/AmazingFeature`)
5. Buat Pull Request

## 📄 License

Proyek ini dilisensikan di bawah [MIT License](LICENSE).

## 👥 Author

Dibuat dengan ❤️ menggunakan Laravel Framework

## 🆘 Support

Jika mengalami masalah atau memiliki pertanyaan, silakan buat issue di repository ini.

