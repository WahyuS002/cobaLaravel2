@extends('layout.main')

@section('title', 'Anime')

@section('container')
    <div class="container">
        <h1>Anime List</h1>
        
        <ul class="list-group col-6">
            @foreach ($animeLists as $al)                    
            <li class="list-group-item d-flex justify-content-between align-items-center">
              {{ $al->title }}
            <a href="/list/{{ $al->id }}" class="badge badge-primary badge-info">detail</a>
            </li>            
            @endforeach
          </ul>

    </div>

@endsection