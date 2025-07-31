<div class="bg-gray-900 text-white h-full p-4 relative">
    <div class="flex items-center mb-8">
        <i class="fas fa-graduation-cap text-2xl mr-3 flex-shrink-0"></i>
        <h2 class="text-xl font-bold">SMKN 1 Jakarta</h2>
    </div>

    <!-- Navigation Menu -->
    <nav class="space-y-2">
        <x-nav-link icon="fas fa-tachometer-alt" label="Dashboard" href="/dashboard" />
        <x-nav-link icon="fas fa-users" label="Data Siswa" href="/data-siswa"/>
        <x-nav-link icon="fas fa-chalkboard" label="Kelas" href="/class" />
        <x-nav-link icon="fas fa-chart-line" label="Nilai" href="/nilai" />
        <x-nav-link icon="fas fa-file-alt" label="Laporan" href="/laporan" />
    </nav>

    <!-- User Profile -->
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
