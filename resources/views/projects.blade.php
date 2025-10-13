@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto">
    <!-- Modern header design -->
    <div class="text-center mb-16">
        <h1 class="font-heading font-bold text-4xl md:text-5xl mb-6 text-balance">Мои проекты</h1>
        <p class="text-xl text-muted-foreground max-w-2xl mx-auto text-pretty">
            Коллекция проектов, которые демонстрируют мои навыки и подход к разработке
        </p>

        @auth
            @if(Auth::user()->is_admin)
                <div class="mt-6">
                    <a href="{{ route('projects.create') }}"
                       class="inline-flex items-center px-6 py-3 bg-primary text-primary-foreground font-semibold rounded-lg hover:bg-primary/90 transition-all duration-200 shadow-lg hover:shadow-xl hover:-translate-y-0.5">
                        Добавить проект
                        <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            @endif
        @endauth
    </div>

    <!-- Modern project grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @forelse($projects as $project)
            <div class="group bg-card rounded-2xl border border-border overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                <div class="aspect-video bg-gradient-to-br from-primary/20 to-accent/20 flex items-center justify-center">
                    <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center {{ $project->is_coming_soon ? 'border-2 border-dashed border-muted-foreground/30' : '' }}">
                        <span class="text-2xl">{{ $project->icon }}</span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-3">
                        <h3 class="font-heading font-semibold text-xl text-card-foreground">{{ $project->title }}</h3>
                        <span class="px-3 py-1 {{ $project->main_tech_color }} text-xs font-medium rounded-full">
                            {{ $project->main_tech ?? 'В разработке' }}
                        </span>
                    </div>
                    <p class="text-muted-foreground mb-4 leading-relaxed">
                        {{ $project->description }}
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="flex space-x-2">
                            @foreach($project->technologies ?? [] as $tech)
                                <span class="px-2 py-1 bg-muted text-muted-foreground text-xs rounded">{{ $tech }}</span>
                            @endforeach
                        </div>
                        @if($project->link && !$project->is_coming_soon)
                            <a href="{{ $project->link }}" class="text-primary hover:text-primary/80 font-medium text-sm flex items-center group-hover:translate-x-1 transition-transform duration-200">
                                Подробнее
                                <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        @else
                            <span class="text-muted-foreground text-sm">Скоро...</span>
                        @endif
                    </div>
                </div>
            </div>
        @empty
            <div class="col-span-full text-center py-12">
                <p class="text-muted-foreground text-lg">Проекты пока не добавлены.</p>
            </div>
        @endforelse
    </div>

    <!-- Pagination -->
    <div class="mt-12">
        {{ $projects->links() }}
    </div>

    <!-- Call to action -->
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
