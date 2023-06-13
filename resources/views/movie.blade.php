@extends('layout.main')

@section('content')
{{-- @dd($pizza) --}}
    <main>
        <h1>movie details</h1>
        <div class="container">
            <div class="card m-2" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title text-center">{{$movie->title}}</h5>
                    <p class="card-text">{{$movie->original_title}}</p>
                    <p>Nationality: {{$movie->nationality}}</p>
                    <p>Date: {{$movie->date}}</p>
                    <p>Vote: {{$movie->vote}}</p>
                    <a href="{{ route('home') }}" class="btn btn-success">go Back</a>
                </div>
            </div>
        </div>
    </main>
@endsection
