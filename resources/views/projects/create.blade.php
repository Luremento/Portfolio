@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-6 py-8">
    <!-- Modern header design -->
    <div class="text-center mb-12">
        <h1 class="font-heading font-bold text-4xl md:text-5xl mb-6 text-balance">Добавить новый проект</h1>
        <p class="text-xl text-muted-foreground max-w-2xl mx-auto text-pretty">
            Заполните данные для нового проекта, чтобы добавить его в портфолио
        </p>
    </div>

    <!-- Form with modern design -->
    <div class="bg-card rounded-2xl border border-border p-8 shadow-sm hover:shadow-md transition-all duration-300">
        <form action="{{ route('projects.store') }}" method="POST" class="space-y-6">
            @csrf

            <!-- Title -->
            <div>
                <label for="title" class="block text-sm font-medium text-foreground">Название проекта</label>
                <input type="text" name="title" id="title" value="{{ old('title') }}"
                       class="mt-1 block w-full rounded-lg border border-border bg-background px-4 py-2 text-foreground focus:ring-primary focus:border-primary transition-colors duration-200"
                       required>
                @error('title')
                    <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                @enderror
            </div>

            <!-- Description -->
            <div>
                <label for="description" class="block text-sm font-medium text-foreground">Описание</label>
                <textarea name="description" id="description" rows="4"
                          class="mt-1 block w-full rounded-lg border border-border bg-background px-4 py-2 text-foreground focus:ring-primary focus:border-primary transition-colors duration-200"
                          required>{{ old('description') }}</textarea>
                @error('description')
                    <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                @enderror
            </div>

            <!-- Main Technology -->
            <div>
                <label for="main_tech" class="block text-sm font-medium text-foreground">Основной стек</label>
                <input type="text" name="main_tech" id="main_tech" value="{{ old('main_tech') }}"
                       class="mt-1 block w-full rounded-lg border border-border bg-background px-4 py-2 text-foreground focus:ring-primary focus:border-primary transition-colors duration-200"
                       placeholder="Например, React или Laravel">
                @error('main_tech')
                    <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                @enderror
            </div>

            <!-- Technologies -->
            <div>
                <label for="technologies" class="block text-sm font-medium text-foreground">Технологии (через запятую)</label>
                <input type="text" name="technologies" id="technologies" value="{{ old('technologies') }}"
                       class="mt-1 block w-full rounded-lg border border-border bg-background px-4 py-2 text-foreground focus:ring-primary focus:border-primary transition-colors duration-200"
                       placeholder="React, Node.js, MySQL">
                @error('technologies')
                    <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                @enderror
            </div>

            <!-- Link -->
            <div>
                <label for="link" class="block text-sm font-medium text-foreground">Ссылка на проект</label>
                <input type="url" name="link" id="link" value="{{ old('link') }}"
                       class="mt-1 block w-full rounded-lg border border-border bg-background px-4 py-2 text-foreground focus:ring-primary focus:border-primary transition-colors duration-200"
                       placeholder="https://example.com">
                @error('link')
                    <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                @enderror
            </div>

            <!-- Icon -->
            <div>
                <label for="icon" class="block text-sm font-medium text-foreground">Иконка (эмодзи)</label>
                <input type="text" name="icon" id="icon" value="{{ old('icon', '✨') }}"
                       class="mt-1 block w-full rounded-lg border border-border bg-background px-4 py-2 text-foreground focus:ring-primary focus:border-primary transition-colors duration-200"
                       placeholder="Например, ⚛️ или 🚀">
                @error('icon')
                    <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                @enderror
            </div>

            <!-- Coming Soon -->
            <div>
                <label class="inline-flex items-center">
                    <input type="checkbox" name="is_coming_soon" id="is_coming_soon" value="1"
                           {{ old('is_coming_soon') ? 'checked' : '' }}
                           class="rounded border-border bg-background text-primary focus:ring-primary">
                    <span class="ml-2 text-sm text-foreground">Проект в разработке</span>
                </label>
                @error('is_coming_soon')
                    <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="text-right">
                <button type="submit"
                        class="inline-flex items-center px-6 py-3 bg-primary text-primary-foreground font-semibold rounded-lg hover:bg-primary/90 transition-all duration-200 shadow-lg hover:shadow-xl hover:-translate-y-0.5">
                    Создать проект
                    <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </button>
            </div>
        </form>
    </div>
</div>
@endsection