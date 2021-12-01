@extends('components.layout')
@section('content')
<section class="px-6 py-8">
    <main class="max-w-6xl mx-auto mt-6 space-y-6">        
    @foreach ($films as $film)
    <article >
        <h2 class="film_title"> <b>{{$film->title}}</b></h2>
        <p class="mt-4 block text-400"> 
            {{$film->description}}
        </p>
        <h3>
            <b>Seansai</b>
        </h3>
        @if(count($film->seanses) == 0)
            <p class="mt-4 block text-grey-200">Seansų šiam filmui nėra.</p>
        @endif
        @foreach ($film->seanses as $seanse)
        <p> {{$seanse->date}} Likusių vietų skaičius: {{$seanse->free_amount}} </p>
        <p>Vieno bilieto kaina:  {{$seanse->price}}</p>
        @auth
            @if(auth()->user()->isDirector == 1)
                <p>Užsakyta bilietų:  {{$seanse->bought_amount}}</p>
                <p>Viso buvo bilietų: {{$seanse->bought_amount + $seanse->free_amount}} </p>
                <p>Viso uždirbta: {{$seanse->bought_amount * $seanse->price}} eur</p>
            @elseif (auth()->user()->isAdmin == 1)
                <p>Užsakyta bilietų:  {{$seanse->bought_amount}}</p>
            @else
                @if(date('Y-m-d h:i:s', time())<= $seanse->date && $seanse->free_amount > 0)
                    <a href='/buy/tickets/{{$seanse->id}}' >Pirkti bilietą</a>
                @endif
            @endif
        
        @endauth
        <br/>
        @endforeach
        
    </article>
    @endforeach
</main>
</section>
    
@endsection