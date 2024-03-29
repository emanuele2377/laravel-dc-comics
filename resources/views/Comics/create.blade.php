@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h2>Nuovo fumetto</h2>
        </div>
        <div class="row">
            <form action="{{ route('comics.store') }}" method="POST">
                @csrf
                {{-- title description type image cooking_time weight --}}
                <div class="mb-3">
                    <label for="title" class="form-label">title</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">description</label>
                    <input type="text" class="form-control" id="description" name="description">
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">type</label>
                    <input type="text" class="form-control" id="type" name="type">
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">image</label>
                    <input type="text" class="form-control" id="image" name="image">
                </div>
                <button type="submit" class="btn btn-primary">Inserisci</button>
            </form>
        </div>
    </div>
@endsection