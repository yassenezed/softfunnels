@extends('layouts.structure')
@section('title')
Liste Des Utilisateurs
@endsection
@section('main')
<h2>Modifier Le mot de passe</h2>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form method="POST" action="{{route('users.newpass')}}">
        @csrf
        <div class="form-floating mb-3">
            <input type="password" class="form-control" name="current_password" id="floatingText">
            <label for="floatingText">Votre Mot de passe actuel</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control" name="password" id="floatingText">
            <label for="floatingText">Nouveau Mot de Passe</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control" name="password_confirmation"  id="floatingText" >
            <label for="floatingText">Confirmer le Nouveau Mot de Passe</label>
        </div>
        <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Modifier Maintenant</button>
    </form>
@endsection
