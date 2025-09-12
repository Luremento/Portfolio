<!DOCTYPE html>
<html lang="ru" class="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Моё портфолио</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 font-['Roboto'] flex flex-col min-h-screen transition-colors duration-300">
    <nav class="bg-gray-100 dark:bg-gray-800 text-gray-900 dark:text-white p-4 shadow-md">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <ul class="flex space-x-4">
                <li><a href="{{ route('home') }}" class="hover:text-blue-500 dark:hover:text-blue-400 transition-colors">Главная</a></li>
                <li><a href="{{ route('about') }}" class="hover:text-blue-500 dark:hover:text-blue-400 transition-colors">О себе</a></li>
                <li><a href="{{ route('projects') }}" class="hover:text-blue-500 dark:hover:text-blue-400 transition-colors">Проекты</a></li>
                <li><a href="{{ route('contact') }}" class="hover:text-blue-500 dark:hover:text-blue-400 transition-colors">Контакты</a></li>
            </ul>
            <button id="theme-toggle" class="bg-gray-200 dark:bg-gray-700 p-2 rounded-full hover:bg-gray-300 dark:hover:bg-gray-600 transition-colors">
                <span class="sr-only">Toggle theme</span>
                🌙 / ☀️
            </button>
        </div>
    </nav>

    <main class="py-8 flex-1 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @yield('content')
    </main>

    <footer class="bg-gray-100 dark:bg-gray-800 text-gray-900 dark:text-white text-center p-4 mt-auto shadow-inner">
        <p>&copy; 2025 molly. Все права защищены.</p>
    </footer>

    <script>
        const html = document.documentElement;
        const toggle = document.getElementById('theme-toggle');

        // Загрузка темы из localStorage
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            html.classList.add('dark');
        } else {
            html.classList.remove('dark');
        }

        // Toggle темы
        toggle.addEventListener('click', () => {
            if (html.classList.contains('dark')) {
                html.classList.remove('dark');
                localStorage.theme = 'light';
            } else {
                html.classList.add('dark');
                localStorage.theme = 'dark';
            }
        });
    </script>
</body>
</html>