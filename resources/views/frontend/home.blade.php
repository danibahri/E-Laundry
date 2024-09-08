<!-- resources/views/home.blade.php -->
@extends('layout')

@section('content')
    <div class="bg-white shadow rounded-lg p-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Hero Section -->
            <div class="flex flex-col justify-center">
                <h1 class="text-4xl font-bold text-gray-900">Selamat Datang di LEPEH Laundry</h1>
                <p class="text-gray-600 mt-4">Kami menawarkan layanan laundry terbaik dan cepat untuk membantu Anda tetap rapi setiap hari.</p>
                <a href="#" class="mt-6 px-6 py-3 bg-blue-600 text-white text-sm font-semibold rounded-lg hover:bg-blue-700">Pesan Sekarang</a>
            </div>
            
            <!-- Image Section -->
            <div>
                <img src="https://via.placeholder.com/400" alt="Laundry Image" class="w-full h-full object-cover rounded-lg shadow-md">
            </div>
        </div>
    </div>

    <div class="bg-white rounded-lg p-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Image Section -->
            <div>
                <img src="https://via.placeholder.com/400" alt="Laundry Image" class="w-full h-full object-cover rounded-lg shadow-md">
            </div>

            <!-- Hero Section -->
            <div class="flex flex-col justify-center">
                <h1 class="text-4xl font-bold text-gray-900">Lacak pesanan anda sekarang !!</h1>
                <p class="text-gray-600 mt-4">Kami menawarkan layanan laundry terbaik dan cepat untuk membantu Anda tetap rapi setiap hari.</p>
                <a href="#" class="mt-6 px-6 py-3 bg-blue-600 text-white text-sm font-semibold rounded-lg hover:bg-blue-700">Pesan Sekarang</a>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="mt-10">
        <h2 class="text-3xl font-bold text-gray-900 text-center">Mengapa Memilih Kami?</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
            <!-- Feature 1 -->
            <div class="text-center p-6 bg-white shadow rounded-lg">
                <i class="fas fa-tshirt text-blue-600 text-3xl mb-4"></i>
                <h3 class="text-xl font-semibold text-gray-900">Layanan Cepat</h3>
                <p class="text-gray-600 mt-2">Kami menyediakan layanan cepat dan efisien.</p>
            </div>

            <!-- Feature 2 -->
            <div class="text-center p-6 bg-white shadow rounded-lg">
                <i class="fas fa-bolt text-blue-600 text-3xl mb-4"></i>
                <h3 class="text-xl font-semibold text-gray-900">Kualitas Terbaik</h3>
                <p class="text-gray-600 mt-2">Pakaian Anda akan tetap bersih dan awet.</p>
            </div>

            <!-- Feature 3 -->
            <div class="text-center p-6 bg-white shadow rounded-lg">
                <i class="fas fa-smile text-blue-600 text-3xl mb-4"></i>
                <h3 class="text-xl font-semibold text-gray-900">Harga Terjangkau</h3>
                <p class="text-gray-600 mt-2">Kami menawarkan harga yang bersaing.</p>
            </div>
        </div>
    </div>
@endsection
