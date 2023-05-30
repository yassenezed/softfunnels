@extends('layouts.structure')
{{-- 3 inclues means 3 alert and 3 navs !! thats blade he is imposing dakchi li mktoub tma safi 
 if there is a code  that need to be shown just une time @once @endonce
    
--}}
@section('title')
    Modifier
@endsection
@section('main')
<h2>Modifier La Landing Page</h2>
<form method="POST" action="{{ route ('updatelp.index',$landingpages->id) }}">
    @csrf
    @method('PUT')
    <div class="form-group mb-3">
        <label for="titre">Titre</label>
        <input type="text" value="{{$landingpages->titre}}" class="form-control" id="title" name="titre" placeholder="Saisissez le titre de la page">
    </div>
    @error('titre')
          <div class="text-danger">
            {{$message}}
          </div>
    @enderror
    <div class="form-group mb-3">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Saisissez la description de la page">{{$landingpages->description}}</textarea>
      </div>
    @error('description')
          <div class="text-danger">
            {{$message}}
          </div>
    @enderror
    <div class="form-group mb-3">
      <label for="slug">Le lien</label>
      <input type="text" value="{{$landingpages->slug}}" class="form-control" id="slug" name="slug" placeholder="Saisissez le titre de la page">
    </div>
  @error('slug')
        <div class="text-danger">
          {{$message}}
        </div>
  @enderror
  {{-- <div class="form-group mb-3">
    <label for="slug">Prix</label>
    <input type="text" value="{{$landingpages->price}}" class="form-control" id="price" name="price" placeholder="Saisissez le Prix">
</div>
@error('price')
      <div class="text-danger">
        {{$message}}
      </div>
@enderror --}}
  <div class="form-group mb-3">
    <label for="state">État : </label>
    <select name="state" value="{{$landingpages->state}}">
      <option value="Active">Active</option>
      <option value="Inactive">Inactive</option>
    </select>
  <div>
    @error('state')
      <div class="text-danger">
        {{$message}}
      </div>
@enderror
<br><br>
    <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>


@endsection
