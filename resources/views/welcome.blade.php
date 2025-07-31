<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><!-- GANTI: Tugas - Judul Halaman Anda --></title>
    @vite('resources/css/app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- Alpine.js untuk responsivitas -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="bg-gray-100">
    <!--
    This example to update your Template
    <body class="bg-gray-100">
    -->
    <div class="flex h-screen">
        <!--

        Show/hide based on menu state:
            Visible when: isOpen
            Clicking the button toggles isOpen state

        Entering: "transition-opacity ease-linear duration-300"
            From: "opacity-0"
            To: "opacity-100"
        Leaving: "transition-opacity ease-linear duration-300"
            From: "opacity-100"
            To: "opacity-0"

        -->
        <button class="fixed inset-0 bg-opacity-50 z-40 lg:hidden">
        </button>
        <div class="hidden lg:block lg:relative w-64">
            <div class="bg-gray-900 text-white h-full p-4 relative">
                <div class="flex items-center mb-8">
                    <i class="fas fa-graduation-cap text-2xl mr-3 flex-shrink-0"></i>
                    <h2 class="text-xl font-bold">
                        <!-- GANTI: Nama Sekolah/Sistem Anda -->
                        SMKN 1 Jakarta
                    </h2>
                </div>

                <!-- Navigation Menu -->
                <!-- Active Button: bg-gray-700 text-white, Default: text-gray-300 hover:bg-gray-700 hover:text-white -->
                <nav class="space-y-2">
                    <a href="#"
                        class="flex items-center px-4 py-2 rounded-lg transition-colors duration-200 text-gray-300 hover:bg-gray-700 hover:text-white group">
                        <i class="fas fa-tachometer-alt text-lg flex-shrink-0 group-hover:scale-110 transition-transform duration-200"></i>
                        <span class="ml-3">Dashboard</span>
                    </a>
                    <a href="#"
                        class="flex items-center px-4 py-2 rounded-lg transition-colors duration-200 bg-gray-700 text-white group">
                        <i class="fas fa-users text-lg flex-shrink-0 group-hover:scale-110 transition-transform duration-200"></i>
                        <span class="ml-3">Data Siswa</span>
                    </a>
                    <a href="#"
                        class="flex items-center px-4 py-2 rounded-lg transition-colors duration-200 text-gray-300 hover:bg-gray-700 hover:text-white group">
                        <i class="fas fa-chalkboard text-lg flex-shrink-0 group-hover:scale-110 transition-transform duration-200"></i>
                        <span class="ml-3">Kelas</span>
                    </a>
                    <a href="#"
                        class="flex items-center px-4 py-2 rounded-lg transition-colors duration-200 text-gray-300 hover:bg-gray-700 hover:text-white group">
                        <i class="fas fa-chart-line text-lg flex-shrink-0 group-hover:scale-110 transition-transform duration-200"></i>
                        <span class="ml-3">Nilai</span>
                    </a>
                    <a href="#"
                        class="flex items-center px-4 py-2 rounded-lg transition-colors duration-200 text-gray-300 hover:bg-gray-700 hover:text-white group">
                        <i class="fas fa-file-alt text-lg flex-shrink-0 group-hover:scale-110 transition-transform duration-200"></i>
                        <span class="ml-3">Laporan</span>
                    </a>
                </nav>

                <!-- User Profile Section (Bottom) -->
                <div class="absolute bottom-4 left-4 right-4">
                    <div class="flex items-center p-3 bg-gray-800 rounded-lg">
                        <img src="https://via.placeholder.com/40" alt="Profile"
                            class="w-10 h-10 rounded-full flex-shrink-0">
                        <div class="ml-3">
                            <p class="text-sm font-medium">Admin User</p>
                            <p class="text-xs text-gray-400">Administrator</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--
        Show/hide based on menu state Mobile:
        Visible when: isOpen

        Entering: "transition-transform ease-in-out duration-300"
            From: "-translate-x-full"
            To: "translate-x-0"

        Leaving: "transition-transform ease-in-out duration-300"
            From: "translate-x-0"
            To: "-translate-x-full"

            Style="display: none;"
        -->
        <div class="lg:hidden fixed inset-y-0 left-0 w-64 z-50">
            
            <!-- Sidebar Content untuk Mobile -->
            <div class="bg-gray-900 text-white h-full p-4 relative">
                <!-- Logo/Header Section -->
                <div class="flex items-center mb-8">
                    <i class="fas fa-graduation-cap text-2xl mr-3 flex-shrink-0"></i>
                    <h2 class="text-xl font-bold">
                        <!-- GANTI: Nama Sekolah/Sistem Anda -->
                        SMK KEREN
                    </h2>
                </div>
                
                <!-- Navigation Menu -->
                <!-- Active Button: bg-gray-700 text-white, Default: text-gray-300 hover:bg-gray-700 hover:text-white -->
                <nav class="space-y-2">
                    <a href="#"
                        class="flex items-center px-4 py-2 rounded-lg transition-colors duration-200 text-gray-300 hover:bg-gray-700 hover:text-white group">
                        <i class="fas fa-tachometer-alt text-lg flex-shrink-0 group-hover:scale-110 transition-transform duration-200"></i>
                        <span class="ml-3">Dashboard</span>
                    </a>
                    <a href="#"
                        class="flex items-center px-4 py-2 rounded-lg transition-colors duration-200 bg-gray-700 text-white group">
                        <i class="fas fa-users text-lg flex-shrink-0 group-hover:scale-110 transition-transform duration-200"></i>
                        <span class="ml-3">Data Siswa</span>
                    </a>
                    <a href="#"
                        class="flex items-center px-4 py-2 rounded-lg transition-colors duration-200 text-gray-300 hover:bg-gray-700 hover:text-white group">
                        <i class="fas fa-chalkboard text-lg flex-shrink-0 group-hover:scale-110 transition-transform duration-200"></i>
                        <span class="ml-3">Kelas</span>
                    </a>
                    <a href="#"
                        class="flex items-center px-4 py-2 rounded-lg transition-colors duration-200 text-gray-300 hover:bg-gray-700 hover:text-white group">
                        <i class="fas fa-chart-line text-lg flex-shrink-0 group-hover:scale-110 transition-transform duration-200"></i>
                        <span class="ml-3">Nilai</span>
                    </a>
                    <a href="#"
                        class="flex items-center px-4 py-2 rounded-lg transition-colors duration-200 text-gray-300 hover:bg-gray-700 hover:text-white group">
                        <i class="fas fa-file-alt text-lg flex-shrink-0 group-hover:scale-110 transition-transform duration-200"></i>
                        <span class="ml-3">Laporan</span>
                    </a>
                </nav>

                <!-- User Profile Section (Bottom) -->
                <div class="absolute bottom-4 left-4 right-4">
                    <div class="flex items-center p-3 bg-gray-800 rounded-lg">
                        <img src="https://via.placeholder.com/40" alt="Profile"
                            class="w-10 h-10 rounded-full flex-shrink-0">
                        <div class="ml-3">
                            <p class="text-sm font-medium">Admin User</p>
                            <p class="text-xs text-gray-400">Administrator</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex-1 overflow-auto">
            <header class="bg-white shadow-sm border-b border-gray-200 px-6 py-4">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">

                        <button
                                class="lg:hidden mr-4 text-gray-500 hover:text-gray-700 transition-colors duration-200">
                            <i class="fas fa-bars text-xl"></i>
                        </button>

                        <!-- Page Title -->
                        <h1 class="text-2xl font-bold text-gray-800">
                            <!-- GANTI: Judul halaman dinamis berdasarkan halaman aktif -->
                            Data Siswa
                        </h1>
                    </div>
                </div>
            </header>

            <!-- Main Content Area -->
            <main class="p-6">
                <!-- Breadcrumb -->
                <nav class="mb-6 text-sm text-gray-600">
                    <ol class="flex space-x-2">
                        <li><a href="#" class="hover:text-blue-600 transition-colors duration-200">Home</a></li>
                        <li><span class="mx-2">/</span></li>
                        <li class="text-gray-800 font-medium">Data Siswa</li>
                    </ol>
                </nav>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <div class="bg-white p-6 rounded-lg shadow-szm border border-gray-200">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-blue-100 mr-4">
                                <i class="fas fa-users text-blue-600 text-xl"></i>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Total Siswa</p>
                                <p class="text-2xl font-bold text-gray-800">
                                    245
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-green-100 mr-4">
                                <i class="fas fa-user-check text-green-600 text-xl"></i>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Siswa Aktif</p>
                                <p class="text-2xl font-bold text-gray-800">
                                    230
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-yellow-100 mr-4">
                                <i class="fas fa-chalkboard text-yellow-600 text-xl"></i>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Total Kelas</p>
                                <p class="text-2xl font-bold text-gray-800">
                                    12
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-red-100 mr-4">
                                <i class="fas fa-user-times text-red-600 text-xl"></i>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Tidak Aktif</p>
                                <p class="text-2xl font-bold text-gray-800">
                                    15
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Table Section -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200">
                    <!-- Table Header -->
                    <div class="px-6 py-4 border-b border-gray-200">
                        <div
                            class="flex flex-col sm:flex-row sm:items-center sm:justify-between space-y-4 sm:space-y-0">
                            <h3 class="text-lg font-semibold text-gray-800">
                                <!-- GANTI: Judul tabel -->
                                Daftar Siswa
                            </h3>
                        </div>
                    </div>

                    <!-- Table -->
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        No</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        NIS</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Nama Siswa</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Kelas</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Jenis Kelamin</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">1</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">2021001</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">Ahmad Rizki</div>
                                        <div class="text-sm text-gray-500">ahmad.rizki@email.com</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">10A</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Laki-laki</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">2</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">2021002</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">Siti Nurhaliza</div>
                                        <div class="text-sm text-gray-500">siti.nurhaliza@email.com</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">10A</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Perempuan</td>
                                </tr>

                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">3</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">2021003</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">Budi Santoso</div>
                                        <div class="text-sm text-gray-500">budi.santoso@email.com</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">10B</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Laki-laki</td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="px-6 py-4 bg-gray-50 border-t border-gray-200">
                        <div class="flex items-center justify-between">
                            <div class="text-sm text-gray-700">
                                Menampilkan <span class="font-medium">1</span> sampai <span
                                    class="font-medium">10</span> dari <span class="font-medium">97</span> hasil
                            </div>
                            <div class="flex space-x-2">
                                <button
                                    class="px-3 py-1 text-sm border border-gray-300 rounded-md hover:bg-gray-50 disabled:opacity-50"
                                    disabled>
                                    Sebelumnya
                                </button>
                                <!-- Active Button: "bg-blue-600 text-white", Default: "border border-gray-300" -->
                                <button
                                    class="px-3 py-1 text-sm bg-blue-600 text-white rounded-md hover:bg-blue-700">1</button>
                                <button
                                    class="px-3 py-1 text-sm border border-gray-300 rounded-md hover:bg-gray-50">2</button>
                                <button
                                    class="px-3 py-1 text-sm border border-gray-300 rounded-md hover:bg-gray-50">3</button>
                                    
                                <button class="px-3 py-1 text-sm border border-gray-300 rounded-md hover:bg-gray-50">
                                    Selanjutnya
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>