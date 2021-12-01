
@extends('components.layout')
@section('content')
<section class="px-6 py-8">
    <main class="max-w-6xl mx-auto space-y-6"> 
        <h2 class="film_title">
            Ar tikrai norite atšaukti {{$ticket->seanse->film->title}} seanso {{$ticket->seanse->date}} bilietų užsakymą?
        </h2>
        <form method="POST" action="/delete/tickets/{{$ticket->id}}">
            @csrf

            <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">Atšaukti bilietą</button>
        </form>
    </br>
        <a href='/'>Pagrindinis puslapis</a>
    </main>
    </section>
        @endsection