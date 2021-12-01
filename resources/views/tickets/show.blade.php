@include('components.styles')
@extends('components.layout')
@section('content')
<section class="px-6 py-8">
    <main class="max-w-6xl mx-auto space-y-6"> 
        <h2 class="film_title">
            Čia pateikti visi jūsų užsakyti bilietai
        </h2>
        <article>
            <table>
                <tr>
                  <th>Filmas</th>
                  <th>Seansas</th>
                  <th>Bilietai</th>
                  <th></th>
                </tr>
           @foreach ($tickets as $ticket)
           <tr>
            <td>{{$ticket->seanse->film->title}}</td>
            <td>{{$ticket->seanse->date}} </td>
            <td>{{$ticket->amount}}</td>
            <td>
                <form method="Get" action="/delete/tickets/{{$ticket->id}}" class="no_margin">
                    @csrf
                    <button type="submit" class="cancel">Atšaukti</button>
                </form>
            </td>
            </tr>
         
                @endforeach
            </table>
            </article>
        </br>
        <a href='/'>Pagrindinis puslapis</a>
    </main>
    </section>
        @endsection