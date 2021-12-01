@include('components.styles')
@extends('components.layout')
@section('content')
<section class="px-6 py-8">
    <main class="max-w-6xl mx-auto space-y-6"> 
        <h2 class="film_title">
            Pridėti seansą
        </h2>
            <form method="POST" action="/create/seanse" class="mt-10">
                @csrf
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="film_id"
                    >
                        Filmas
                    </label>

                    <select class="form-control border border-gray-400 p-2 w-full" name="film_id">
                        <option value="">Pasirinkti filmą</option>
                        @foreach ($items as $key => $value)
                            <option value="{{ $key }}" {{ ( $key == $selectedID) ? 'selected' : '' }}> 
                                {{ $value }} 
                            </option>
                        @endforeach    
                    </select>
                    @error('film_id')
                    <p class="text-red-500 text-xs mt-2">Filmas yra būtinas</p>
                @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="date"
                    >
                        Data
                    </label>
                    <input class="border border-gray-400 p-2 w-full"
                           type="datetime-local"
                           name="date"
                           id="date"
                           
                    >
                    @error('date')
                    <p class="text-red-500 text-xs mt-2">Data ir laikas yra būtini ir privalo būti vėlesni nei dabartinė data</p>
                @enderror
                </div>
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="free_amount"
                    >
                        Bilietų kiekis
                    </label>
                    <input class="border border-gray-400 p-2 w-full"
                           type="numeric"
                           name="free_amount"
                           id="free_amount"
                           
                    >
                    @error('free_amount')
                    <p class="text-red-500 text-xs mt-2">Kiekis privalo būti sveikasis teigiamas skaičius</p>
                @enderror
                </div>
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="price"
                    >
                        Vieno bilieto kaina
                    </label>
                    <input class="border border-gray-400 p-2 w-full"
                           type="numeric"
                           name="price"
                           id="price"
                           
                    >
                    @error('price')
                    <p class="text-red-500 text-xs mt-2">Kaina privalo būti teigiamas skaičius</p>
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
    </br>
        <a href='/'>Pagrindinis puslapis</a>
    </main>
    </section>
        @endsection