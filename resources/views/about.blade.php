@extends('layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto">
        <!-- Modern header with better typography -->
        <div class="text-center mb-16">
            <h1 class="font-heading font-bold text-4xl md:text-5xl mb-6 text-balance">О себе</h1>
            <p class="text-xl text-muted-foreground max-w-2xl mx-auto text-pretty">
                Узнайте больше о моем пути в разработке и технологиях, которые я использую
            </p>
        </div>

        <!-- Story section with modern card design -->
        <div class="bg-card rounded-2xl border border-border p-8 md:p-12 mb-12 shadow-sm">
            <h2 class="font-heading font-semibold text-2xl md:text-3xl mb-6 text-card-foreground">Моя история</h2>
            <div class="prose prose-lg max-w-none">
                <p class="text-card-foreground leading-relaxed mb-6">
                    Я molly, fullstack-разработчик с страстью к созданию современных и удобных веб-приложений. 
                    Моя цель — превращать сложные идеи в простые и элегантные решения, которые действительно помогают людям.
                </p>
                <p class="text-card-foreground leading-relaxed">
                    Работаю с Laravel, React, Tailwind CSS, MySQL и другими современными технологиями. 
                    Постоянно изучаю новые инструменты и подходы, чтобы создавать качественные продукты.
                </p>
            </div>
        </div>

        <!-- Skills section with progress indicators -->
        <div class="mb-12">
            <h2 class="font-heading font-semibold text-2xl md:text-3xl mb-8 text-center">Навыки и технологии</h2>
            
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Frontend Skills -->
                <div class="bg-card rounded-xl border border-border p-6 shadow-sm">
                    <h3 class="font-heading font-semibold text-xl mb-6 text-card-foreground flex items-center">
                        <span class="w-8 h-8 bg-primary/10 rounded-lg flex items-center justify-center mr-3">
                            <span class="text-sm">🎨</span>
                        </span>
                        Frontend
                    </h3>
                    <div class="space-y-4">
                        <div class="skill-item">
                            <div class="flex justify-between mb-2">
                                <span class="text-card-foreground font-medium">React</span>
                                <span class="text-muted-foreground text-sm">90%</span>
                            </div>
                            <div class="w-full bg-muted rounded-full h-2">
                                <div class="bg-primary h-2 rounded-full" style="width: 90%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="flex justify-between mb-2">
                                <span class="text-card-foreground font-medium">Tailwind CSS</span>
                                <span class="text-muted-foreground text-sm">95%</span>
                            </div>
                            <div class="w-full bg-muted rounded-full h-2">
                                <div class="bg-primary h-2 rounded-full" style="width: 95%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="flex justify-between mb-2">
                                <span class="text-card-foreground font-medium">JavaScript</span>
                                <span class="text-muted-foreground text-sm">85%</span>
                            </div>
                            <div class="w-full bg-muted rounded-full h-2">
                                <div class="bg-primary h-2 rounded-full" style="width: 85%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Backend Skills -->
                <div class="bg-card rounded-xl border border-border p-6 shadow-sm">
                    <h3 class="font-heading font-semibold text-xl mb-6 text-card-foreground flex items-center">
                        <span class="w-8 h-8 bg-primary/10 rounded-lg flex items-center justify-center mr-3">
                            <span class="text-sm">⚙️</span>
                        </span>
                        Backend
                    </h3>
                    <div class="space-y-4">
                        <div class="skill-item">
                            <div class="flex justify-between mb-2">
                                <span class="text-card-foreground font-medium">Laravel</span>
                                <span class="text-muted-foreground text-sm">92%</span>
                            </div>
                            <div class="w-full bg-muted rounded-full h-2">
                                <div class="bg-primary h-2 rounded-full" style="width: 92%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="flex justify-between mb-2">
                                <span class="text-card-foreground font-medium">MySQL</span>
                                <span class="text-muted-foreground text-sm">88%</span>
                            </div>
                            <div class="w-full bg-muted rounded-full h-2">
                                <div class="bg-primary h-2 rounded-full" style="width: 88%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="flex justify-between mb-2">
                                <span class="text-card-foreground font-medium">Node.js</span>
                                <span class="text-muted-foreground text-sm">80%</span>
                            </div>
                            <div class="w-full bg-muted rounded-full h-2">
                                <div class="bg-primary h-2 rounded-full" style="width: 80%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to action section -->
        <div class="text-center bg-primary/5 rounded-2xl border border-primary/20 p-8 md:p-12">
            <h2 class="font-heading font-semibold text-2xl md:text-3xl mb-4">Готовы к сотрудничеству?</h2>
            <p class="text-muted-foreground text-lg mb-6 max-w-2xl mx-auto">
                Если у вас есть интересный проект или вопросы, буду рад обсудить возможности сотрудничества
            </p>
            <a href="{{ route('contact') }}" 
               class="inline-flex items-center px-8 py-4 bg-primary text-primary-foreground font-semibold rounded-lg hover:bg-primary/90 transition-all duration-200 shadow-lg hover:shadow-xl hover:-translate-y-0.5">
                Связаться со мной
                <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
        </div>
    </div>
@endsection
