<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Моё портфолио</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100 font-['Roboto'] flex flex-col min-h-screen">
    <nav class="bg-gray-800 text-white p-4">
        <ul class="flex justify-center space-x-4">
            <li><a href="{{ route('home') }}" class="hover:underline">Главная</a></li>
            <li><a href="{{ route('about') }}" class="hover:underline">О себе</a></li>
            <li><a href="{{ route('projects') }}" class="hover:underline">Проекты</a></li>
            <li><a href="{{ route('contact') }}" class="hover:underline">Контакты</a></li>
        </ul>
    </nav>

    <main class="py-8 flex-1">
        @yield('content')
    </main>

    <footer class="bg-gray-800 text-white text-center p-4">
        <p>&copy; 2025 molly. Все права защищены.</p>
    </footer>
</body>
</html>