@extends('layouts.structure')
@section('title')
    Ajouter Tunnels De Ventes
@endsection
@section('main')
<h2>Ajouter Une Tunnel de Vente</h2>
<form method="POST" action="{{ route('storelp.index') }}">
    @csrf
    @php
      $user = \App\Models\User::where('email', session('user_id'))->first();
      @endphp
      @if ($user)
      <input type="hidden" name="user_id" value="{{ $user->id }}">
      @endif
    <div class="form-group mb-3">
        <label for="titre">Titre</label>
        <input type="text" class="form-control" id="title" name="titre" placeholder="Saisissez le titre de la page">
    </div>
    @error('titre')
          <div class="text-danger">
            {{$message}}
          </div>
    @enderror
    <div class="form-group mb-3">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Saisissez la description de la page"></textarea>
    </div>
    @error('description')
          <div class="text-danger">
            {{$message}}
          </div>
    @enderror
    <div class="form-group mb-3">
      <label for="slug">Le lien</label>
      <textarea class="form-control" id="slug" name="slug" rows="3" placeholder="Saisissez le lien de votre page"></textarea>
  </div>
  @error('slug')
        <div class="text-danger">
          {{$message}}
        </div>
  @enderror
  <div class="form-group mb-3">
    <label for="slug">Prix</label>
    <textarea class="form-control" id="price" name="price" rows="3" placeholder="Saisissez le Prix"></textarea>
</div>
@error('price')
      <div class="text-danger">
        {{$message}}
      </div>
@enderror
  <div class="form-group mb-3">
    <label for="state">État : </label>
    <select name="state">
      <option value="Active">Active</option>
      <option value="Inactive">Inactive</option>
    </select>
<br>
<br>
    <button type="submit" class="btn btn-primary">Ajouter</button>
</form>
@endsection