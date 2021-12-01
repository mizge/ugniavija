@include('components.styles')
@extends('components.layout')
@section('content')
    <section class="px-6 py-8">
        <main class="max-w-6xl mx-auto space-y-6"> 
        <h2 class="film_title">
            Pridėti filmą
        </h2>
            <form method="POST" action="/create/film" class="mt-10">
                @csrf
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="title"
                    >
                        Pavadinimas
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="text"
                           name="title"
                           id="title"
                           
                    >
                    @error('title')
                    <p class="text-red-500 text-xs mt-2">Pavadinimas yra būtinas</p>
                @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="description"
                    >
                        Aprašas
                    </label>

                    <textarea class="border border-gray-400 p-2 w-full"
                           type="textarea"
                           name="description"
                           id="description"
                           
                    ></textarea>
                    @error('description')
                    <p class="text-red-500 text-xs mt-2">Aprašas yra būtinas</p>
                @enderror
                </div>
                <div class="mb-6">
                    <button type="submit"
                            class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
                    >
                    Pridėti
                    </button>
                </div>
        </form>
        <a href='/'>Pagrindinis puslapis</a>
    </main>
    </section>
@endsection
