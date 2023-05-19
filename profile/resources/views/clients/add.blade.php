@extends('layouts.structure')
@section('title')
    Ajouter Un Client
@endsection
@section('main')
<h2>Ajouter Un Client</h2>
<form method="POST" action="{{ route('clients.store') }}">
    @csrf
    @php
      $user = \App\Models\User::where('email', session('user_id'))->first();
      @endphp
      @if ($user)
      <input type="hidden" name="user_id" value="{{ $user->id }}">
      @endif
    <div class="form-group mb-3">
        <label for="prenom">Prénom</label>
        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Saisissez le prenom">
    </div>
    @error('first_name')
          <div class="text-danger">
            {{$message}}
          </div>
    @enderror
    <div class="form-group mb-3">
        <label for="nom">Nom</label>
        <textarea class="form-control" id="last_name" name="last_name" placeholder="Saisissez le nom"></textarea>
    </div>
    @error('last_name')
          <div class="text-danger">
            {{$message}}
          </div>
    @enderror
    <div class="form-group mb-3">
      <label for="slug">Email</label>
      <textarea class="form-control" id="email" name="email" placeholder="Saisissez l'email"></textarea>
  </div>
  @error('email')
        <div class="text-danger">
          {{$message}}
        </div>
  @enderror
  <div class="form-group mb-3">
    <label for="phone">Numero de telephone</label>
    <textarea class="form-control" id="phone" name="phone" placeholder="Saisissez le prix"></textarea>
</div>
@error('phone')
      <div class="text-danger">
        {{$message}}
      </div>
@enderror
<div class="form-group mb-3">
    <label for="company">Société</label>
    <textarea class="form-control" id="company" name="company" placeholder="Saisissez le prix"></textarea>
</div>
@error('company')
      <div class="text-danger">
        {{$message}}
      </div>
@enderror
 
<br>
<br>
    <button type="submit" class="btn btn-primary">Ajouter un client</button>
</form>
@endsection