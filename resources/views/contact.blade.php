@extends('layouts.app')

     @section('content')
         <section class="max-w-lg mx-auto py-12">
             <h2 class="text-2xl font-bold text-center">Связаться со мной</h2>
             @if (session('success'))
                 <p class="text-green-500 text-center">{{ session('success') }}</p>
             @endif
             <form method="POST" action="{{ route('contact.store') }}" class="mt-6 space-y-4">
                 @csrf
                 <input type="text" name="name" placeholder="Ваше имя" class="w-full p-2 border rounded" required>
                 <input type="email" name="email" placeholder="Ваш email" class="w-full p-2 border rounded" required>
                 <textarea name="message" placeholder="Ваше сообщение" class="w-full p-2 border rounded" rows="5" required></textarea>
                 <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600">Отправить</button>
             </form>
         </section>
     @endsection