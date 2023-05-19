@extends('layouts.structure')
@section('title')
    Modifier Un Client
@endsection
@section('main')
<h2>Modifier Un Client</h2>
<form method="POST" action="{{ route('clients.update' , $clients->id) }}">
    @csrf
    @method('PUT')
    @php
      $user = \App\Models\User::where('email', session('user_id'))->first();
      @endphp
        @if ($user)
        <input type="hidden" name="user_id" value="{{ $user->id }}">
        @endif
    <div class="form-group mb-3">
        <label for="prenom">Prénom</label>
        <input type="text" class="form-control" id="first_name" name="first_name" value="{{$clients->first_name}}">
    </div>
    @error('first_name')
          <div class="text-danger">
            {{$message}}
          </div>
    @enderror
    <div class="form-group mb-3">
        <label for="nom">Nom</label>
        <input type="text" class="form-control" id="last_name" name="last_name" value="{{$clients->last_name}}">
    </div>
    @error('last_name')
          <div class="text-danger">
            {{$message}}
          </div>
    @enderror
    <div class="form-group mb-3">
      <label for="slug">Email</label>
      <input type="text" class="form-control" id="email" name="email" value="{{$clients->email}}">
  </div>
  @error('email')
        <div class="text-danger">
          {{$message}}
        </div>
  @enderror
  <div class="form-group mb-3">
    <label for="phone">Numero de telephone</label>
    <input type="text" class="form-control" id="phone" name="phone" value="{{$clients->phone}}">
</div>
@error('phone')
      <div class="text-danger">
        {{$message}}
      </div>
@enderror
<div class="form-group mb-3">
    <label for="company">Société</label>
    <input type="text" class="form-control" id="company" name="company" value="{{$clients->company}}">
</div>
@error('company')
      <div class="text-danger">
        {{$message}}
      </div>
@enderror
 
<br>
<br>
    <button type="submit" class="btn btn-primary">Modifier le client</button>
</form>
@endsection