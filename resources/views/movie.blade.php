@extends('layouts.main')

@section('title', 'Movies | ' . $movie->title)

@section('content')
    <section id="book-detail">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">{{ $movie->title}}</h4>
                <h5 class="card-subtitle">{{ substr($movie->original_title, 25, 55) }}</h5>
                <div class="card-text">
                    <p>{{ $movie->nationality}}</p>
                    {{-- usate <address> --}}
                    <pre>{{ $movie->vote}}</pre>
                </div>
            </div>
        </div>

    </section>
@endsection 