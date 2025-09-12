<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Моё портфолио</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class'
        };
    </script>
    <script>
        // Конфигурация Tailwind для поддержки dark mode (class-based)
        window.tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        'roboto': ['Roboto', 'sans-serif'],
                    }
                }
            }
        };
    </script>
</head>

<body class="bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 font-roboto flex flex-col min-h-screen transition-colors duration-300">
    <nav class="bg-gray-100 dark:bg-gray-800 text-gray-900 dark:text-white p-4 shadow-md">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <ul class="flex space-x-4">
                <li><a href="{{ route('home') }}" class="hover:text-blue-500 dark:hover:text-blue-400 transition-colors">Главная</a></li>
                <li><a href="{{ route('about') }}" class="hover:text-blue-500 dark:hover:text-blue-400 transition-colors">О себе</a></li>
                <li><a href="{{ route('projects') }}" class="hover:text-blue-500 dark:hover:text-blue-400 transition-colors">Проекты</a></li>
                <li><a href="{{ route('contact') }}" class="hover:text-blue-500 dark:hover:text-blue-400 transition-colors">Контакты</a></li>
            </ul>
            <button id="theme-toggle" class="bg-gray-200 dark:bg-gray-700 p-2 rounded-full hover:bg-gray-300 dark:hover:bg-gray-600 transition-colors">
                <span id="theme-icon">🌙</span>
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
        const toggleButton = document.getElementById('theme-toggle');
        const themeIcon = document.getElementById('theme-icon');

        // Функция для реинициализации Tailwind (для Play CDN v4)
        function reinitTailwind() {
            if (window.tailwind && window.tailwind.reinit) {
                window.tailwind.reinit();
            }
        }

        // Проверка сохранённой темы или системной настройки
        if (localStorage.getItem('theme') === 'dark' || (!localStorage.getItem('theme') && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            html.classList.add('dark');
            themeIcon.textContent = '☀️';
        } else {
            html.classList.remove('dark');
            themeIcon.textContent = '🌙';
        }

        // Переключение темы
        toggleButton.addEventListener('click', () => {
            if (html.classList.contains('dark')) {
                html.classList.remove('dark');
                localStorage.setItem('theme', 'light');
                themeIcon.textContent = '🌙';
            } else {
                html.classList.add('dark');
                localStorage.setItem('theme', 'dark');
                themeIcon.textContent = '☀️';
            }
            // Реинициализируем Tailwind для обновления стилей
            reinitTailwind();
        });
    </script>
</body>

</html>