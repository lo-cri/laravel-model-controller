@extends('layout.main')

@section('content')
    <main>
        <div class="container">
            <h1>Movies</h1>

            <div class="container d-flex flex-wrap m-2">
                @foreach ($movies as $movie)
                    <div class="card m-2" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{$movie->title}}</h5>
                            <p class="card-text">{{$movie->original_title}}</p>
                            <a href="{{ route('movie_detail', ['id' => $movie-> id] ) }}" class="btn btn-success">Go to movie info</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
