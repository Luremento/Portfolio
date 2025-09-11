@extends('layouts.app')

     @section('content')
         <section class="text-center bg-gray-200 py-12">
             <h1 class="text-4xl font-bold">Привет, я molly</h1>
             <p class="mt-4 text-lg">Fullstack-разработчик, создаю веб-приложения с Laravel, Tailwind и MySQL!</p>
             <a href="{{ route('projects') }}" class="mt-6 inline-block bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Мои проекты</a>
         </section>
     @endsection