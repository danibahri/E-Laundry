@extends('layout')

@section('content')
    <!-- Hero Section -->
    <div class="bg-gradient-to-r from-blue-100 to-blue-300 shadow-lg rounded-lg p-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-center">
            <div class="flex flex-col justify-center">
                <h1 class="text-5xl font-extrabold text-gray-900 leading-tight">Selamat Datang di <span
                        class="text-blue-600">LEPEH Laundry</span></h1>
                <p class="text-gray-700 mt-4 text-lg">Kami menawarkan layanan laundry terbaik dan cepat untuk membantu Anda
                    tetap rapi setiap hari.</p>
                <a href="#"
                    class="mt-6 px-8 py-3 bg-blue-600 text-white text-lg font-semibold rounded-lg hover:bg-blue-700 transition duration-300 ease-in-out transform hover:scale-105">Pesan
                    Sekarang</a>
            </div>
            <div class="relative">
                <img src="https://via.placeholder.com/500" alt="Laundry Image"
                    class="w-full h-auto object-cover rounded-lg shadow-lg">
                <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-transparent to-transparent rounded-lg">
                </div>
            </div>
        </div>
    </div>

    <!-- Tracking Section -->
    <div class="bg-white rounded-lg p-8 mt-10">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-center">
            <div class="relative">
                <img src="https://via.placeholder.com/500" alt="Laundry Image"
                    class="w-full h-auto object-cover rounded-lg shadow-lg">
                <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-transparent to-transparent rounded-lg">
                </div>
            </div>
            <div class="flex flex-col justify-center">
                <h1 class="text-4xl font-extrabold text-gray-900 leading-tight">Lacak Pesanan Anda Sekarang!</h1>
                <p class="text-gray-700 mt-4 text-lg">Kami menawarkan layanan laundry terbaik dan cepat untuk membantu Anda
                    tetap rapi setiap hari.</p>
                <a href="#"
                    class="mt-6 px-8 py-3 bg-blue-600 text-white text-lg font-semibold rounded-lg hover:bg-blue-700 transition duration-300 ease-in-out transform hover:scale-105">Lacak
                    Pesanan</a>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="mt-16 py-12">
        <h2 class="text-3xl font-bold text-gray-900 text-center">Mengapa Memilih Kami?</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">
            <!-- Feature 1 -->
            <div
                class="text-center p-6 bg-white shadow-lg rounded-lg transform transition duration-300 hover:scale-105 hover:shadow-xl">
                <i class="fas fa-tshirt text-blue-600 text-4xl mb-4"></i>
                <h3 class="text-2xl font-semibold text-gray-900">Layanan Cepat</h3>
                <p class="text-gray-600 mt-2">Kami menyediakan layanan cepat dan efisien untuk menjaga waktu Anda.</p>
            </div>

            <!-- Feature 2 -->
            <div
                class="text-center p-6 bg-white shadow-lg rounded-lg transform transition duration-300 hover:scale-105 hover:shadow-xl">
                <i class="fas fa-bolt text-blue-600 text-4xl mb-4"></i>
                <h3 class="text-2xl font-semibold text-gray-900">Kualitas Terbaik</h3>
                <p class="text-gray-600 mt-2">Kami memastikan pakaian Anda tetap bersih, rapi, dan awet.</p>
            </div>

            <!-- Feature 3 -->
            <div
                class="text-center p-6 bg-white shadow-lg rounded-lg transform transition duration-300 hover:scale-105 hover:shadow-xl">
                <i class="fas fa-smile text-blue-600 text-4xl mb-4"></i>
                <h3 class="text-2xl font-semibold text-gray-900">Harga Terjangkau</h3>
                <p class="text-gray-600 mt-2">Kami menawarkan harga bersaing dengan kualitas layanan terbaik.</p>
            </div>
        </div>
    </div>
@endsection
