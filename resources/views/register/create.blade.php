@include('components.styles')
@extends('components.layout')
@section('content')
<section class="px-6 py-8">
    <main class="max-w-6xl mx-auto space-y-6"> 
        <h2 class="film_title">
            Registracija
        </h2>
            <form method="POST" action="/register" class="mt-10">
                @csrf

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="username"
                    >
                        Prisijungimo vardas
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="text"
                           name="username"
                           id="username"
                    >
                    @error('username')
                    <p class="text-red-500 text-xs mt-2">Prisijungimo vardas yra būtinas</p>
                @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="email"
                    >
                        E. paštas
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="email"
                           name="email"
                           id="email"
                    >
                    @error('email')
                    <p class="text-red-500 text-xs mt-2">E. paštas yra būtinas</p>
                @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="password"
                    >
                        Slaptažodis
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="password"
                           name="password"
                           id="password"
                    >
                    @error('password')
                    <p class="text-red-500 text-xs mt-2">Slaptažodis yra būtinas</p>
                @enderror
                </div>

                <div class="mb-6">
                    <button type="submit"
                            class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
                    >
                        Registruotis
                    </button>
                </div>
        </form>
        <a href='/'>Pagrindinis puslapis</a>
    </main>
    </section>
        @endsection
