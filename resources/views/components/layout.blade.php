<!DOCTYPE html>
<html lang="id" x-data="{ isOpen: false }" x-cloak>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Sistem Informasi' }}</title>
    @vite('resources/css/app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-100">
<div class="flex h-screen">
    <!-- Sidebar Desktop -->
    <div class="hidden lg:block lg:relative w-64">
        <x-navbar />
    </div>

    <!-- Sidebar Mobile -->
    <div class="lg:hidden fixed inset-y-0 left-0 w-64 z-50 transform transition-transform duration-300"
         :class="isOpen ? 'translate-x-0' : '-translate-x-full'">
        <x-navbar />
    </div>

    <!-- Overlay untuk mobile -->
    <div class="fixed inset-0 lg:hidden"
         x-show="isOpen"
         x-transition.opacity
         @click="isOpen = false">
    </div>

    <!-- Main Content -->
    <div class="flex-1 overflow-auto">
        <!-- Header -->
        <header class="bg-white shadow-sm border-b border-gray-200 px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <!-- Toggle Sidebar Button -->
                    <button @click="isOpen = true"
                            class="lg:hidden mr-4 text-gray-500 hover:text-gray-700 transition-colors duration-200">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                    <!-- Judul -->
                    <x-header>{{ $title }}</x-header>
                </div>
            </div>
        </header>

        <!-- Page Content -->
        <main class="p-6">
            {{ $slot }}
        </main>
    </div>
</div>
</body>
</html>
