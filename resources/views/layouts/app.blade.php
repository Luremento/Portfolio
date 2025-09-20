<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>molly - Fullstack Developer</title>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        'sans': ['Open Sans', 'sans-serif'],
                        'heading': ['Work Sans', 'sans-serif'],
                    },
                    colors: {
                        background: 'var(--background)',
                        foreground: 'var(--foreground)',
                        card: 'var(--card)',
                        'card-foreground': 'var(--card-foreground)',
                        primary: 'var(--primary)',
                        'primary-foreground': 'var(--primary-foreground)',
                        secondary: 'var(--secondary)',
                        'secondary-foreground': 'var(--secondary-foreground)',
                        muted: 'var(--muted)',
                        'muted-foreground': 'var(--muted-foreground)',
                        accent: 'var(--accent)',
                        'accent-foreground': 'var(--accent-foreground)',
                        border: 'var(--border)',
                        input: 'var(--input)',
                    },
                    borderRadius: {
                        'lg': 'var(--radius)',
                        'md': 'calc(var(--radius) - 2px)',
                        'sm': 'calc(var(--radius) - 4px)',
                    }
                }
            }
        };
    </script> -->
</head>

<body class="bg-background text-foreground font-sans antialiased min-h-screen">
    <!-- Modern navigation with glass morphism effect -->
    <nav class="fixed top-0 left-0 right-0 z-50 bg-background/80 backdrop-blur-md border-b border-border transition-all duration-300" id="navbar">
        <div class="max-w-6xl mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <div class="font-heading font-bold text-xl text-primary">
                    molly
                </div>
                <ul class="hidden md:flex space-x-8">
                    <li><a href="{{ route('home') }}" class="text-muted-foreground hover:text-primary transition-colors duration-200 font-medium">Главная</a></li>
                    <li><a href="{{ route('about') }}" class="text-muted-foreground hover:text-primary transition-colors duration-200 font-medium">О себе</a></li>
                    <li><a href="{{ route('projects') }}" class="text-muted-foreground hover:text-primary transition-colors duration-200 font-medium">Проекты</a></li>
                    <li><a href="{{ route('contact') }}" class="text-muted-foreground hover:text-primary transition-colors duration-200 font-medium">Контакты</a></li>
                </ul>
                <div class="flex items-center space-x-4">
                    <button id="theme-toggle" class="p-2 rounded-lg bg-muted hover:bg-muted/80 transition-colors duration-200">
                        <span id="theme-icon" class="text-lg">🌙</span>
                    </button>
                    <!-- Mobile menu button -->
                    <button id="mobile-menu-toggle" class="md:hidden p-2 rounded-lg bg-muted hover:bg-muted/80 transition-colors duration-200">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <!-- Mobile menu -->
            <div id="mobile-menu" class="hidden md:hidden mt-4 pb-4 border-t border-border">
                <ul class="space-y-3 pt-4">
                    <li><a href="{{ route('home') }}" class="block text-muted-foreground hover:text-primary transition-colors duration-200 font-medium">Главная</a></li>
                    <li><a href="{{ route('about') }}" class="block text-muted-foreground hover:text-primary transition-colors duration-200 font-medium">О себе</a></li>
                    <li><a href="{{ route('projects') }}" class="block text-muted-foreground hover:text-primary transition-colors duration-200 font-medium">Проекты</a></li>
                    <li><a href="{{ route('contact') }}" class="block text-muted-foreground hover:text-primary transition-colors duration-200 font-medium">Контакты</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main content with proper spacing for fixed nav -->
    <main class="pt-20 min-h-screen">
        <div class="max-w-6xl mx-auto px-6 py-8">
            @yield('content')
        </div>
    </main>

    <!-- Modern footer design -->
    <footer class="bg-muted/30 border-t border-border">
        <div class="max-w-6xl mx-auto px-6 py-8">
            <div class="text-center">
                <p class="text-muted-foreground text-sm">
                    &copy; 2025 molly. Создано с ❤️ для разработчиков.
                </p>
            </div>
        </div>
    </footer>

    <script>
        const html = document.documentElement;
        const toggleButton = document.getElementById('theme-toggle');
        const themeIcon = document.getElementById('theme-icon');
        const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        const navbar = document.getElementById('navbar');

        // Theme toggle functionality
        if (localStorage.getItem('theme') === 'dark' || (!localStorage.getItem('theme') && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            html.classList.add('dark');
            themeIcon.textContent = '☀️';
        } else {
            html.classList.remove('dark');
            themeIcon.textContent = '🌙';
        }

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
        });

        // Mobile menu toggle
        mobileMenuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Navbar scroll effect
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbar.classList.add('bg-background/95');
                navbar.classList.remove('bg-background/80');
            } else {
                navbar.classList.add('bg-background/80');
                navbar.classList.remove('bg-background/95');
            }
        });
    </script>
</body>

</html>
