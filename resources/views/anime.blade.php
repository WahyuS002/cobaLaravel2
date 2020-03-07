@extends('layout.main')

@section('title', 'Anime')

@section('container')
    <div class="container">
        <h1>Hello World</h1>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Anime</th>
                <th scope="col">Score</th>
                <th scope="col">Episodes</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($anime as $a)                                    
              <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $a->title }}</td>
                <td>{{ $a->score }}</td>
                <td>{{ $a->episode }}</td>
              </tr>
            @endforeach              
            </tbody>
          </table>
    </div>

@endsection