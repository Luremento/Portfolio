@extends('layouts.app')

@section('content')
    <h2 class="text-3xl font-bold text-center mb-8">О себе</h2>
    <div class="bg-white dark:bg-gray-800 p-8 rounded-lg shadow-md">
        <p class="text-lg mb-6">Я molly, fullstack-разработчик. Работаю с Laravel, Tailwind CSS, MySQL и другими технологиями. Моя цель — создавать современные и удобные веб-приложения.</p>
        <h3 class="text-2xl font-semibold mb-4">Навыки</h3>
        <ul class="list-disc list-inside text-lg space-y-2">
            <li>Frontend: HTML, CSS, JavaScript, React, Tailwind CSS</li>
            <li>Backend: PHP, Laravel, Node.js</li>
            <li>Databases: MySQL, MongoDB</li>
            <li>Other: Git, Docker, CI/CD</li>
        </ul>
    </div>
@endsection