@extends('layout.main')

@section('title', 'Home')

@section('comtent')

    {{-- <section id="movies" class="container p-5">
        @forelse ($movies as $movie)
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ $movie->title}}</h4>
                    <h6 class="card-subtitle">{{ substr($movie->original_title, 25, 55) }}</h5>
                    <div class="card-text">
                        <p>{{ $movie->nationality}}</p>
                        {{-- usate <address> --}}
                        <pre>{{ $movie->vote}}</pre>
                    </div>    
                </div>
            </div>
        @empty
            <h3>Nessun film è disponibbile</h3>
        @endforelse
    </section> --}}

@endsection