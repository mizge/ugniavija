@extends('components.layout')
@section('content')
    <section class="px-6 py-8">
        <main class="max-w-6xl mx-auto mt-6 space-y-6"> 
        <h2 class="film_title">
            Visi filmai
        </h2>
        @foreach ($films as $film)
       <article>
            <p class="mt-4 block text-400">
                <b>{{$film->title}}</b>
            </p>
            <p class="mt-4 block text-grey-400">
                {{$film->description}}
            </p>
        </article>
        @endforeach
    </br>
        <a href='/'>Pagrindinis puslapis</a>
    </form>
    </main>
</section>
    
@endsection