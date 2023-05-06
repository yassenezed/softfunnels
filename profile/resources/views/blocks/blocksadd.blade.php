@extends('layouts.structure')
@section('title')
    Ajouter Bloque
@endsection
@section('main')
<h2>Ajouter Un Bloque </h2>
<form method="POST" action="{{ route ('storeblock.index') }}">
    @csrf
    {{-- <div class="form-group mb-3">
        <label for="titre">Ordre</label>
        <input type="number" class="form-control" id="title" name="ordre" placeholder="Saisissez l'ordre du bloque">
    </div>
    @error('ordre')
    <div class="text-danger">
      {{$message}}
    </div>
    @enderror --}}
    <input type="text" class="form-control" id="page_id" name="landingpage_id" value="{{ request()->get('page_id') }}" hidden>
    <input type="text" class="form-control" id="type" name="type" value="{{ request()->get('type') }}" hidden>

    <button type="submit" class="btn btn-primary">Ajouter</button>
</form>
@endsection