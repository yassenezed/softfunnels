@extends('layouts.structure')
@section('title')
    Modifier Un Client
@endsection
@section('main')
<h2>Modifier Un Client</h2>
<form method="POST" action="{{ route('bloq.update', $block->id) }}">
    @csrf
    @method('PUT')
   
    <div class="form-group mb-3">
        <label for="titre">Titre</label>
        <input type="text" class="form-control" id="titre" name="titre" value="{{$block->titre}}">
    </div>
    @error('titre')
          <div class="text-danger">
            {{$message}}
          </div>
    @enderror
    <div class="form-group mb-3">
        <label for="nom">ordre</label>
        <input type="text" class="form-control" id="ordre" name="ordre" value="{{$block->ordre}}">
    </div>
    @error('ordre')
          <div class="text-danger">
            {{$message}}
          </div>
    @enderror
    <button type="submit" class="btn btn-primary">Modifier le client</button>
</form>
@endsection