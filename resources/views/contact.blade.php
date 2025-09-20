@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto">
    <!-- Modern header design -->
    <div class="text-center mb-16">
        <h1 class="font-heading font-bold text-4xl md:text-5xl mb-6 text-balance">Связаться со мной</h1>
        <p class="text-xl text-muted-foreground max-w-2xl mx-auto text-pretty">
            Готов обсудить ваш проект или ответить на любые вопросы
        </p>
    </div>

    <div class="grid md:grid-cols-2 gap-12">
        <!-- Contact form with modern design -->
        <div class="bg-card rounded-2xl border border-border p-8 shadow-sm">
            <h2 class="font-heading font-semibold text-2xl mb-6 text-card-foreground">Отправить сообщение</h2>

            @if (session('success'))
            <div class="mb-6 p-4 bg-accent/10 border border-accent/20 rounded-lg">
                <p class="text-accent font-medium">{{ session('success') }}</p>
            </div>
            @endif

            <form method="POST" action="{{ route('contact.store') }}" class="space-y-6">
                @csrf
                <div>
                    <label for="name" class="block text-sm font-medium text-card-foreground mb-2">Ваше имя</label>
                    <input type="text"
                        id="name"
                        name="name"
                        placeholder="Введите ваше имя"
                        class="w-full p-4 bg-input border border-border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-colors duration-200"
                        required>
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-card-foreground mb-2">Email</label>
                    <input type="email"
                        id="email"
                        name="email"
                        placeholder="your@email.com"
                        class="w-full p-4 bg-input border border-border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-colors duration-200"
                        required>
                </div>

                <div>
                    <label for="message" class="block text-sm font-medium text-card-foreground mb-2">Сообщение</label>
                    <textarea name="message"
                        id="message"
                        placeholder="Расскажите о вашем проекте или задайте вопрос..."
                        class="w-full p-4 bg-input border border-border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-colors duration-200 resize-none"
                        rows="6"
                        required></textarea>
                </div>

                <button type="submit"
                    class="w-full bg-primary text-primary-foreground py-4 px-6 rounded-lg font-semibold hover:bg-primary/90 transition-all duration-200 shadow-lg hover:shadow-xl hover:-translate-y-0.5 flex items-center justify-center">
                    Отправить сообщение
                    <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                    </svg>
                </button>
            </form>
        </div>

        <!-- Contact information with modern cards -->
        <div class="space-y-6">
            <div class="bg-card rounded-2xl border border-border p-6 shadow-sm">
                <h3 class="font-heading font-semibold text-xl mb-4 text-card-foreground">Контактная информация</h3>
                <div class="space-y-4">
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-primary/10 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="font-medium text-card-foreground">Email</p>
                            <p class="text-muted-foreground">pewpewswooop@gmail.com</p>
                        </div>
                    </div>

                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-primary/10 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="font-medium text-card-foreground">Location</p>
                            <p class="text-muted-foreground">Russia</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-card rounded-2xl border border-border p-6 shadow-sm">
                <h3 class="font-heading font-semibold text-xl mb-4 text-card-foreground">Социальные сети</h3>
                <div class="flex space-x-4">
                    <!-- GitHub -->
                    <a href="https://github.com/Luremento" target="_blank"
                        class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center hover:bg-primary/20 transition-colors duration-200">
                        <svg class="w-5 h-5 text-primary" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599-.043.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                        </svg>
                    </a>

                    <!-- SoundCloud -->
                    <a href="https://soundcloud.com/mollyjesusdu" target="_blank"
                        class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center hover:bg-primary/20 transition-colors duration-200">
                        <svg class="w-5 h-5 text-primary" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M4.8 10.5c-.5 0-1 .1-1.4.3-.9.5-1.4 1.4-1.4 2.4s.6 1.9 1.4 2.4c.4.2.9.3 1.4.3h1V10.5h-1zm2 0v5.5h1V10.5h-1zm2 0v5.5h1V10.5h-1zm2 0v5.5h1V10.1c-.3-.1-.6-.1-1-.1zm2-.5v6h1v-6c0-.2 0-.3-.1-.5-.3-.1-.6-.1-.9-.1zm2 .6v5.4h5c1.6 0 2.9-1.3 2.9-2.9S19.6 10 18 10h-1.3c-.3-1.7-1.8-3-3.6-3-.4 0-.7 0-1 .1v3.5h.1z" />
                        </svg>
                    </a>

                    <!-- X (Twitter new logo) -->
                    <a href="https://x.com/mollyjesusdu" target="_blank"
                        class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center hover:bg-primary/20 transition-colors duration-200">
                        <svg class="w-5 h-5 text-primary" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M18.244 2H21.5l-7.61 8.7L22 22h-7.373l-5.79-7.56L2.244 22H0l8.15-9.3L0 2h7.623l5.237 6.823L18.244 2zM16.5 20h2.04L7.56 4H5.4l11.1 16z" />
                        </svg>
                    </a>

                    <!-- Instagram -->
                    <a href="https://www.instagram.com/mollyjesusdu/" target="_blank"
                        class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center hover:bg-primary/20 transition-colors duration-200">
                        <svg class="w-5 h-5 text-primary" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.366.062 2.633.35 3.608 1.325.975.975 1.263 2.242 1.325 3.608.058 1.266.07 1.646.07 4.85s-.012 3.584-.07 4.85c-.062 1.366-.35 2.633-1.325 3.608-.975.975-2.242 1.263-3.608 1.325-1.266.058-1.646.07-4.85.07s-3.584-.012-4.85-.07c-1.366-.062-2.633-.35-3.608-1.325-.975-.975-1.263-2.242-1.325-3.608C2.175 15.747 2.163 15.367 2.163 12s.012-3.584.07-4.85c.062-1.366.35-2.633 1.325-3.608.975-.975 2.242-1.263 3.608-1.325C8.416 2.175 8.796 2.163 12 2.163zm0 1.837c-3.17 0-3.548.012-4.795.07-1.042.048-1.61.218-1.985.364-.5.194-.857.428-1.233.804-.376.376-.61.733-.804 1.233-.146.375-.316.943-.364 1.985-.058 1.247-.07 1.625-.07 4.795s.012 3.548.07 4.795c.048 1.042.218 1.61.364 1.985.194.5.428.857.804 1.233.376.376.733.61 1.233.804.375.146.943.316 1.985.364 1.247.058 1.625.07 4.795.07s3.548-.012 4.795-.07c1.042-.048 1.61-.218 1.985-.364.5-.194.857-.428 1.233-.804.376-.376.61-.733.804-1.233.146-.375.316-.943.364-1.985.058-1.247.07-1.625.07-4.795s-.012-3.548-.07-4.795c-.048-1.042-.218-1.61-.364-1.985-.194-.5-.428-.857-.804-1.233-.376-.376-.733-.61-1.233-.804-.375-.146-.943-.316-1.985-.364-1.247-.058-1.625-.07-4.795-.07zm0 3.905a5.932 5.932 0 110 11.865 5.932 5.932 0 010-11.865zm0 1.837a4.095 4.095 0 100 8.19 4.095 4.095 0 000-8.19zm6.406-2.846a1.44 1.44 0 11-2.88 0 1.44 1.44 0 012.88 0z" />
                        </svg>
                    </a>
                </div>
            </div>


            <div class="bg-primary/5 rounded-2xl border border-primary/20 p-6">
                <h3 class="font-heading font-semibold text-xl mb-3">Время ответа</h3>
                <p class="text-muted-foreground">
                    Обычно отвечаю в течение 24 часов. Для срочных вопросов используйте email.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection