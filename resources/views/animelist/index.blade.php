@extends('layout.main')

@section('title', 'Anime')

@section('container')
    <div class="container">
        <h1>Anime List</h1>
        
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary my-3" data-toggle="modal" data-target="#exampleModal">
          Add new anime
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="post" action="/list">
                  @csrf
                  <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title">                    
                  </div>                  
                  <div class="form-group">
                    <label for="image">Image</label>
                    <input type="text" class="form-control" id="image" name="image">                    
                  </div>                  
                  <div class="form-group">
                    <label for="score">Score</label>
                    <input type="text" class="form-control" id="score" name="score">                    
                  </div>                  
                  <div class="form-group">
                    <label for="episode">Episode</label>
                    <input type="text" class="form-control" id="episode" name="episode">                    
                  </div>                  
                  <div class="form-group">
                    <label for="studio">Studio</label>
                    <input type="text" class="form-control" id="studio" name="studio">                    
                  </div>                  
                  <div class="form-group">
                    <label for="source">Source</label>
                    <input type="text" class="form-control" id="source" name="source">                    
                  </div>                  
                  <div class="form-group">
                    <label for="synopsis">Synopsis</label>
                    <textarea class="form-control" id="synopsis" rows="3" name="synopsis"></textarea>
                  </div>          
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>              
            </div>
          </div>
        </div>

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