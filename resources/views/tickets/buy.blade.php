@include('components.styles')
@extends('components.layout')
@section('content')
<section class="px-6 py-8">
    <main class="max-w-6xl mx-auto space-y-6"> 
        <h2 class="film_title">
            Pasirinkite norimą bilietų į {{$seanse->film->title}} seansą {{$seanse->date}} už {{$seanse->price}} €  kiekį?
        </h2>
        <form method="POST" action="/buy/tickets/{{$seanse->id}}" >
            @csrf
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                       for="amount"
                >
                    Kiekis
                </label>

                <input class="border border-gray-400 p-2 w-full"
                       type="number"
                       name="amount"
                       id="amount"
                >
                @error('amount')
                <p class="text-red-500 text-xs mt-2">Kiekis būtinai turi būti sveikasis teigiamas skaičius. Negalima nusipirkti daugiau bilietų nei yra likusių vietų.</p>
            @enderror
            </div>
            <button type="submit"
            class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">Pirkti</button>
        </form>
    </br>
        <a href='/'>Pagrindinis puslapis</a>
    </main>
    </section>
        @endsection