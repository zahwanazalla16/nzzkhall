<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="text-center mb-8">
                        <h1 class="text-3xl font-bold text-gray-800 mb-4">
                            Selamat Datang di YuProyek
                        </h1>
                        <p class="text-lg text-gray-600">
                            Platform manajemen proyek yang membantu tim berkolaborasi dengan efisien
                        </p>
                    </div>

                    <!-- Quick Actions -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                        <div class="bg-indigo-50 rounded-lg p-6 text-center">
                            <div class="text-indigo-600 text-3xl mb-3">
                                <i class="bi bi-folder-plus"></i>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Proyek Saya</h3>
                            <p class="text-gray-600 text-sm mb-4">Kelola proyek yang sedang Anda jalankan</p>
                            <a href="{{ route('projects.my-projects') }}" 
                               class="inline-block bg-indigo-600 text-white px-4 py-2 rounded-lg font-medium hover:bg-indigo-700 transition duration-300">
                                Lihat Proyek
                            </a>
                        </div>

                        <div class="bg-green-50 rounded-lg p-6 text-center">
                            <div class="text-green-600 text-3xl mb-3">
                                <i class="bi bi-search"></i>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Cari Proyek</h3>
                            <p class="text-gray-600 text-sm mb-4">Temukan proyek baru untuk dikerjakan</p>
                            <a href="{{ route('projects.index') }}" 
                               class="inline-block bg-green-600 text-white px-4 py-2 rounded-lg font-medium hover:bg-green-700 transition duration-300">
                                Jelajahi
                            </a>
                        </div>

                        <div class="bg-blue-50 rounded-lg p-6 text-center">
                            <div class="text-blue-600 text-3xl mb-3">
                                <i class="bi bi-person-circle"></i>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Profil Saya</h3>
                            <p class="text-gray-600 text-sm mb-4">Kelola informasi akun Anda</p>
                            <a href="{{ route('profile.edit') }}" 
                               class="inline-block bg-blue-600 text-white px-4 py-2 rounded-lg font-medium hover:bg-blue-700 transition duration-300">
                                Edit Profil
                            </a>
                        </div>
                    </div>

                    <!-- Features Info -->
                    <div x-data="{ show: false }" class="text-center">
                        <button @click="show = !show" 
                                class="bg-gray-100 text-gray-800 px-6 py-3 rounded-lg font-semibold hover:bg-gray-200 transition duration-300 mb-6">
                            <i class="bi bi-info-circle mr-2"></i>
                            Info Fitur Aplikasi
                        </button>
                        
                        <div x-show="show" 
                             x-transition:enter="transition ease-out duration-300"
                             x-transition:enter-start="opacity-0 transform scale-95"
                             x-transition:enter-end="opacity-100 transform scale-100"
                             x-transition:leave="transition ease-in duration-200"
                             x-transition:leave-start="opacity-100 transform scale-100"
                             x-transition:leave-end="opacity-0 transform scale-95"
                             class="bg-gray-50 rounded-lg p-6">
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                
                                <div class="text-center">
                                    <div class="text-2xl font-bold text-indigo-600 mb-2">
                                        <i class="bi bi-calculator"></i>
                                    </div>
                                    <h3 class="font-semibold text-gray-800 mb-2">Smart Payment</h3>
                                    <p class="text-sm text-gray-600">Kalkulasi pembayaran otomatis menggunakan Weighted Sum Model (WSM)</p>
                                </div>
                                <div class="text-center">
                                    <div class="text-2xl font-bold text-indigo-600 mb-2">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <h3 class="font-semibold text-gray-800 mb-2">Team Collaboration</h3>
                                    <p class="text-sm text-gray-600">Kolaborasi tim real-time dengan sistem notifikasi dan komentar</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
