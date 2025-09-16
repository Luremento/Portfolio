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
                                <p class="text-muted-foreground">molly@example.com</p>
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
                                <p class="font-medium text-card-foreground">Локация</p>
                                <p class="text-muted-foreground">Россия</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-card rounded-2xl border border-border p-6 shadow-sm">
                    <h3 class="font-heading font-semibold text-xl mb-4 text-card-foreground">Социальные сети</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center hover:bg-primary/20 transition-colors duration-200">
                            <svg class="w-5 h-5 text-primary" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599-.043.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center hover:bg-primary/20 transition-colors duration-200">
                            <svg class="w-5 h-5 text-primary" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center hover:bg-primary/20 transition-colors duration-200">
                            <svg class="w-5 h-5 text-primary" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
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
