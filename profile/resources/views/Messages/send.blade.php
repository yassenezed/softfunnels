@extends('layouts.structure')
@section('title')
    Ajouter Un message
@endsection
@section('main')
<h2>Ajouter Un message</h2>
<form method="POST" action="{{ route('message.store') }}">
    @csrf
    <div class="form-group mb-3">
      @php
      $user = \App\Models\User::where('email', session('user_id'))->first();
      @endphp
      @if ($user)
      <input type="hidden" name="user_id" value="{{ $user->id }}">
      @endif
  {{-- @php
      $email = session('user_id');
      @endphp
  
       @if ($email)
      <input type="hidden" name="user_id" value="{{ $email  }}">
        @endif --}}
        <label for="titre">Votre Message ( On vous repondera par un email ) Dans 1 jour De Travail </label>
        <br>
        <textarea type="text" class="form-control" id="title" name="message" placeholder="Saisissez le Message"></textarea>
    </div>
    @error('message')
          <div class="text-danger">
            {{$message}}
          </div>
    @enderror
    
    <button type="submit" class="btn btn-primary">Envoyer</button>
</form>
@endsection