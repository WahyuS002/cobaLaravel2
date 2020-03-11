@extends('layout.main')

@section('title', 'Anime')

@section('container')
    <div class="container">
        <h1>Adding new anime</h1>
        
        <form method="post" action="/list">
            @csrf
            <div class="col-3">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title">
                    @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror              
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="text" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
                    @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror              
                </div>
                <div class="form-group">
                    <label for="score">Score</label>
                    <input type="text" class="form-control @error('score') is-invalid @enderror" id="score" name="score">
                    @error('score')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror              
                </div>
                <div class="form-group">
                    <label for="episode">Episode</label>
                    <input type="text" class="form-control @error('episode') is-invalid @enderror" id="episode" name="episode">
                    @error('episode')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror              
                </div>
                <div class="form-group">
                    <label for="studio">Studio</label>
                    <input type="text" class="form-control @error('studio') is-invalid @enderror" id="studio" name="studio">
                    @error('studio')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror              
                </div>
                <div class="form-group">
                    <label for="source">Source</label>
                    <input type="text" class="form-control @error('source') is-invalid @enderror" id="source" name="source">
                    @error('source')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror              
                </div>
                <div class="form-group">
                    <label for="synopsis">Synopsis</label>
                    <textarea class="form-control @error('synopsis') is-invalid @enderror" id="synopsis" name="synopsis" rows="3"></textarea>
                    @error('source')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Add Anime</button>
            </div>
        </form>

    </div>

@endsection