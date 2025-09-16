@extends('layouts.app')

@section('content')
    <!-- Hero section with modern design -->
    <section class="py-20 text-center">
        <div class="relative w-32 h-32 mx-auto mb-8">
            <img src="{{ asset('images/your-photo.jpg') }}" 
                 alt="Моя фотография" 
                 class="w-full h-full rounded-full object-cover border-4 border-primary shadow-xl" 
                 onerror="this.src='https://via.placeholder.com/128/164e63/ffffff?text=M'">
            <div class="absolute -bottom-2 -right-2 w-8 h-8 bg-accent rounded-full border-4 border-background flex items-center justify-center">
                <span class="text-xs">✨</span>
            </div>
        </div>
        
        <h1 class="font-heading font-bold text-5xl md:text-6xl lg:text-7xl mb-6 text-balance">
            Привет, я <span class="text-primary">molly</span>
        </h1>
        
        <p class="text-xl md:text-2xl text-muted-foreground mb-8 max-w-3xl mx-auto text-pretty leading-relaxed">
            Fullstack-разработчик, создающий современные веб-приложения с использованием Laravel, React и современных технологий
        </p>
        
        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
            <a href="{{ route('projects') }}" 
               class="inline-flex items-center px-8 py-4 bg-primary text-primary-foreground font-semibold rounded-lg hover:bg-primary/90 transition-all duration-200 shadow-lg hover:shadow-xl hover:-translate-y-0.5">
                Мои проекты
                <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
            <a href="{{ route('contact') }}" 
               class="inline-flex items-center px-8 py-4 bg-transparent border-2 border-primary text-primary font-semibold rounded-lg hover:bg-primary hover:text-primary-foreground transition-all duration-200">
                Связаться со мной
            </a>
        </div>
    </section>

    <!-- Skills preview section -->
    <section class="py-16 bg-muted/30 rounded-2xl">
        <div class="text-center mb-12">
            <h2 class="font-heading font-bold text-3xl md:text-4xl mb-4">Технологии</h2>
            <p class="text-muted-foreground text-lg max-w-2xl mx-auto">
                Работаю с современным стеком технологий для создания качественных решений
            </p>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <div class="text-center p-6 bg-card rounded-xl border border-border hover:shadow-lg transition-all duration-200">
                <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mx-auto mb-3">
                    <span class="text-2xl">⚡</span>
                </div>
                <h3 class="font-semibold text-card-foreground">Frontend</h3>
                <p class="text-sm text-muted-foreground mt-1">React, Tailwind</p>
            </div>
            
            <div class="text-center p-6 bg-card rounded-xl border border-border hover:shadow-lg transition-all duration-200">
                <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mx-auto mb-3">
                    <span class="text-2xl">🚀</span>
                </div>
                <h3 class="font-semibold text-card-foreground">Backend</h3>
                <p class="text-sm text-muted-foreground mt-1">Laravel, Node.js</p>
            </div>
            
            <div class="text-center p-6 bg-card rounded-xl border border-border hover:shadow-lg transition-all duration-200">
                <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mx-auto mb-3">
                    <span class="text-2xl">💾</span>
                </div>
                <h3 class="font-semibold text-card-foreground">Database</h3>
                <p class="text-sm text-muted-foreground mt-1">MySQL, MongoDB</p>
            </div>
            
            <div class="text-center p-6 bg-card rounded-xl border border-border hover:shadow-lg transition-all duration-200">
                <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mx-auto mb-3">
                    <span class="text-2xl">🛠️</span>
                </div>
                <h3 class="font-semibold text-card-foreground">Tools</h3>
                <p class="text-sm text-muted-foreground mt-1">Git, Docker</p>
            </div>
        </div>
    </section>
@endsection
