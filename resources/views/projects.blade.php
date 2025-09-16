@extends('layouts.app')

@section('content')
    <div class="max-w-6xl mx-auto">
        <!-- Modern header design -->
        <div class="text-center mb-16">
            <h1 class="font-heading font-bold text-4xl md:text-5xl mb-6 text-balance">Мои проекты</h1>
            <p class="text-xl text-muted-foreground max-w-2xl mx-auto text-pretty">
                Коллекция проектов, которые демонстрируют мои навыки и подход к разработке
            </p>
        </div>

        <!-- Modern project grid with enhanced cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Project 1 -->
            <div class="group bg-card rounded-2xl border border-border overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                <div class="aspect-video bg-gradient-to-br from-primary/20 to-accent/20 flex items-center justify-center">
                    <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center">
                        <span class="text-2xl">⚛️</span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-3">
                        <h3 class="font-heading font-semibold text-xl text-card-foreground">E-commerce Platform</h3>
                        <span class="px-3 py-1 bg-accent/10 text-accent text-xs font-medium rounded-full">React</span>
                    </div>
                    <p class="text-muted-foreground mb-4 leading-relaxed">
                        Современная платформа электронной коммерции с React, Node.js и интеграцией платежных систем.
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="flex space-x-2">
                            <span class="px-2 py-1 bg-muted text-muted-foreground text-xs rounded">React</span>
                            <span class="px-2 py-1 bg-muted text-muted-foreground text-xs rounded">Node.js</span>
                        </div>
                        <a href="#" class="text-primary hover:text-primary/80 font-medium text-sm flex items-center group-hover:translate-x-1 transition-transform duration-200">
                            Подробнее
                            <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="group bg-card rounded-2xl border border-border overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                <div class="aspect-video bg-gradient-to-br from-accent/20 to-primary/20 flex items-center justify-center">
                    <div class="w-16 h-16 bg-accent/10 rounded-2xl flex items-center justify-center">
                        <span class="text-2xl">🚀</span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-3">
                        <h3 class="font-heading font-semibold text-xl text-card-foreground">Task Management App</h3>
                        <span class="px-3 py-1 bg-primary/10 text-primary text-xs font-medium rounded-full">Laravel</span>
                    </div>
                    <p class="text-muted-foreground mb-4 leading-relaxed">
                        Приложение для управления задачами с Laravel, MySQL и современным интерфейсом.
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="flex space-x-2">
                            <span class="px-2 py-1 bg-muted text-muted-foreground text-xs rounded">Laravel</span>
                            <span class="px-2 py-1 bg-muted text-muted-foreground text-xs rounded">MySQL</span>
                        </div>
                        <a href="#" class="text-primary hover:text-primary/80 font-medium text-sm flex items-center group-hover:translate-x-1 transition-transform duration-200">
                            Подробнее
                            <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="group bg-card rounded-2xl border border-border overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                <div class="aspect-video bg-gradient-to-br from-primary/10 to-muted/30 flex items-center justify-center">
                    <div class="w-16 h-16 bg-muted/20 rounded-2xl flex items-center justify-center border-2 border-dashed border-muted-foreground/30">
                        <span class="text-2xl">✨</span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-3">
                        <h3 class="font-heading font-semibold text-xl text-card-foreground">Скоро...</h3>
                        <span class="px-3 py-1 bg-muted/50 text-muted-foreground text-xs font-medium rounded-full">В разработке</span>
                    </div>
                    <p class="text-muted-foreground mb-4 leading-relaxed">
                        Новые интересные проекты находятся в разработке. Следите за обновлениями!
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="flex space-x-2">
                            <span class="px-2 py-1 bg-muted text-muted-foreground text-xs rounded">TBD</span>
                        </div>
                        <span class="text-muted-foreground text-sm">
                            Скоро...
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to action section -->
        <div class="mt-20 text-center bg-primary/5 rounded-2xl border border-primary/20 p-8 md:p-12">
            <h2 class="font-heading font-semibold text-2xl md:text-3xl mb-4">Есть идея для проекта?</h2>
            <p class="text-muted-foreground text-lg mb-6 max-w-2xl mx-auto">
                Давайте обсудим ваш проект и создадим что-то удивительное вместе
            </p>
            <a href="{{ route('contact') }}" 
               class="inline-flex items-center px-8 py-4 bg-primary text-primary-foreground font-semibold rounded-lg hover:bg-primary/90 transition-all duration-200 shadow-lg hover:shadow-xl hover:-translate-y-0.5">
                Начать проект
                <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
        </div>
    </div>
@endsection
