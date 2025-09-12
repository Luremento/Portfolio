@extends('layouts.app')

@section('content')
    <h2 class="text-3xl font-bold text-center mb-8">Мои проекты</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
            <h3 class="text-xl font-semibold mb-2">TODO App</h3>
            <p class="text-gray-600 dark:text-gray-400 mb-4">Интерактивный список задач с drag-and-drop, фильтрами, приоритетами, датами и тёмной темой. Стек: React, Tailwind CSS, @hello-pangea/dnd.</p>
            <a href="https://todo-app-nine-kappa-96.vercel.app/" class="text-blue-500 dark:text-blue-400 hover:underline">Демо</a> |
            <a href="https://github.com/Luremento/Todo-App" class="text-blue-500 dark:text-blue-400 hover:underline">GitHub</a>
        </div>
        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
            <h3 class="text-xl font-semibold mb-2">Проект 2</h3>
            <p class="text-gray-600 dark:text-gray-400 mb-4">Описание проекта. Стек: Laravel, MySQL.</p>
            <a href="#" class="text-blue-500 dark:text-blue-400 hover:underline">Подробнее →</a>
        </div>
        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
            <h3 class="text-xl font-semibold mb-2">Скоро...</h3>
            <p class="text-gray-600 dark:text-gray-400 mb-4">Новые проекты в разработке.</p>
            <a href="#" class="text-blue-500 dark:text-blue-400 hover:underline">Подробнее →</a>
        </div>
    </div>
@endsection
