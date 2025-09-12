@extends('layouts.app')

@section('content')
    <section class="text-center py-16 bg-gradient-to-b from-gray-100 to-white dark:from-gray-800 dark:to-gray-900 rounded-lg shadow-lg transition-all duration-300">
        <div class="relative w-32 h-32 mx-auto mb-4">
            <img src="{{ asset('images/your-photo.jpg') }}" alt="Моя фотография" class="w-full h-full rounded-full object-cover border-4 border-blue-500 dark:border-blue-400 shadow-md" onerror="this.src='https://via.placeholder.com/128?text=molly'">
        </div>
        <h1 class="text-5xl font-bold mb-4">Привет, я molly</h1>
        <p class="text-xl mb-6">Fullstack-разработчик. Создаю современные веб-приложения с Laravel, Tailwind и MySQL.</p>
        <a href="{{ route('projects') }}" class="inline-block bg-blue-500 text-white py-3 px-6 rounded-full hover:bg-blue-600 hover:scale-105 transition-all duration-300 shadow-md">Мои проекты</a>
    </section>
@endsection