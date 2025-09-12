@extends('layouts.app')

@section('content')
    <h2 class="text-3xl font-bold text-center mb-8">Связаться со мной</h2>
    <div class="max-w-md mx-auto bg-white dark:bg-gray-800 p-8 rounded-lg shadow-md">
        @if (session('success'))
            <p class="text-green-500 text-center mb-4">{{ session('success') }}</p>
        @endif
        <form method="POST" action="{{ route('contact.store') }}" class="space-y-4">
            @csrf
            <input type="text" name="name" placeholder="Ваше имя" class="w-full p-3 border border-gray-300 dark:border-gray-600 rounded-lg bg-gray-100 dark:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-400" required>
            <input type="email" name="email" placeholder="Ваш email" class="w-full p-3 border border-gray-300 dark:border-gray-600 rounded-lg bg-gray-100 dark:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-400" required>
            <textarea name="message" placeholder="Ваше сообщение" class="w-full p-3 border border-gray-300 dark:border-gray-600 rounded-lg bg-gray-100 dark:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-400" rows="5" required></textarea>
            <button type="submit" class="w-full bg-blue-500 text-white py-3 rounded-lg hover:bg-blue-600 hover:scale-105 transition-all duration-300 shadow-md">Отправить</button>
        </form>
    </div>
@endsection