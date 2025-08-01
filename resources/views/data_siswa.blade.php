<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <!-- Main Content Area -->
        <main class="p-6">
            <!-- Breadcrumb -->
            <x-sign>Data Siswa</x-sign>
    
            <!-- Statistic Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-blue-100 mr-4">
                            <i class="fas fa-users text-blue-600 text-xl"></i>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600">Total Siswa</p>
                            <p class="text-2xl font-bold text-gray-800">{{ $total }}</p>
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
                            <p class="text-2xl font-bold text-gray-800">{{ $aktif }}</p>
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
                            <p class="text-2xl font-bold text-gray-800">{{ $totalKelas }}</p>
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
                            <p class="text-2xl font-bold text-gray-800">{{ $nonAktif }}</p>
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- Table Section -->
            <div class="bg-white rounded-lg shadow-sm border border-gray-200">
                <div class="px-6 py-4 border-b border-gray-200">
                    <h3 class="text-lg font-semibold text-gray-800">Daftar Siswa</h3>
                </div>
    
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">NIS</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Siswa</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kelas</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jenis Kelamin</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($siswas as $index => $siswa)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $siswas -> firstItem() + $loop->index }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $siswa->nis }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">{{ $siswa->nama }}</div>
                                        <div class="text-sm text-gray-500">{{ $siswa->email }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $siswa->kelas }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $siswa->jenis_kelamin }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="px-6 py-4 bg-gray-50 border-t border-gray-200">
                        <div class="flex items-center justify-between">
                            <div class="text-sm text-gray-700">
                                Menampilkan
                                <span class="font-medium">{{ $siswas->firstItem() }}</span>
                                sampai
                                <span class="font-medium">{{ $siswas->lastItem() }}</span>
                                dari
                                <span class="font-medium">{{ $siswas->total() }}</span> hasil
                            </div>
                    
                            <div class="flex space-x-2">
                                {{-- Tombol Sebelumnya --}}
                                <button
                                    @class([
                                        'px-3 py-1 cursor-pointer text-sm border border-gray-300 rounded-md hover:bg-gray-50',
                                        'disabled:opacity-50 disabled:cursor-not-allowed' => !$siswas->previousPageUrl()
                                    ])
                                    @if (!$siswas->previousPageUrl()) disabled @endif
                                    onclick="window.location='{{ $siswas->previousPageUrl() }}'"
                                >
                                    Sebelumnya
                                </button>
                    
                                {{-- Tombol Angka --}}
                                @foreach ($siswas->getUrlRange(1, $siswas->lastPage()) as $page => $url)
                                    <button
                                        onclick="window.location='{{ $url }}'"
                                        @class([
                                            'px-3 py-1 cursor-pointer text-sm rounded-md',
                                            'bg-blue-600 text-white hover:bg-blue-700' => $siswas->currentPage() == $page,
                                            'border border-gray-300 hover:bg-gray-50' => $siswas->currentPage() != $page
                                        ])
                                    >
                                        {{ $page }}
                                    </button>
                                @endforeach
                    
                                {{-- Tombol Selanjutnya --}}
                                <button
                                    @class([
                                        'px-3 py-1 cursor-pointer text-sm border border-gray-300 rounded-md hover:bg-gray-50',
                                        'disabled:opacity-50 disabled:cursor-not-allowed' => !$siswas->nextPageUrl()
                                    ])
                                    @if (!$siswas->nextPageUrl()) disabled @endif
                                    onclick="window.location='{{ $siswas->nextPageUrl() }}'"
                                >
                                    Selanjutnya
                                </button>
                            </div>
                        </div>
                    </div>                                
                </div>
                
    
                {{-- <div class="px-6 py-4 bg-gray-50 border-t border-gray-200">
                    {{ $siswas->links() }}
                </div> --}}
            </div>
        </main>
    </x-layout>   
    {{-- <main class="p-6">
        <!-- Breadcrumb -->
        <x-sign>Siswa</x-sign>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-md rounded-lg p-6">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-semibold text-gray-700">Daftar Siswa</h2>
                </div>
        
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200 text-sm">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-6 py-3 text-left font-medium text-gray-500 uppercase tracking-wider">No</th>
                                <th class="px-6 py-3 text-left font-medium text-gray-500 uppercase tracking-wider">NIS</th>
                                <th class="px-6 py-3 text-left font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                                <th class="px-6 py-3 text-left font-medium text-gray-500 uppercase tracking-wider">Kelas</th>
                                <th class="px-6 py-3 text-left font-medium text-gray-500 uppercase tracking-wider">Jenis Kelamin</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @if($siswas->count())
                                @foreach ($siswas as $index => $siswa)
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $index + 1 }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $siswa->nis }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $siswa->nama }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $siswa->kelas }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $siswa->jenis_kelamin }}</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="6" class="text-center py-4 text-gray-500">Belum ada data siswa.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main> --}}