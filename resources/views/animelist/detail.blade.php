@extends('layout.main')

@section('title', 'Anime')

@section('container')
    <div class="container">
        <h1>Anime List</h1>
        
        <div class="card" style="width: 18rem;">                                    
            <div class="card-body">
              <h5 class="card-title">{{ $animeList->title }}</h5>
              <h6 class="card-subtitle mb-2 text-muted">{{ $animeList->studio }}</h6>
              <p class="card-text">Total Episode : {{ $animeList->episode }}</p>
              <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a>
            </div>    
          </div>

    </div>

@endsection