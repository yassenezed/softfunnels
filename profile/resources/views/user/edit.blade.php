@extends('layouts.structure')
@section('title')
Liste Des Utilisateurs
@endsection
@section('main')
<h2>Modifier Mes Informations
</h2>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form action="{{ route('users.edit') }}" method="POST">
    @csrf
    <div class="form-floating mb-3">
        <input type="text" class="form-control" name="firstname" value="{{ $user->firstname }}" id="floatingText" placeholder="jhondoe">
        <label for="floatingText">Prénom</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" name="lastname" id="floatingText" value="{{ $user->lastname }}" placeholder="jhondoe">
        <label for="floatingText">Nom</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" name="username" value="{{ $user->username }}" id="floatingText" placeholder="jhondoe">
        <label for="floatingText">Username</label>
    </div>
    <div class="form-floating mb-3">
        <input type="email" class="form-control" name="email" id="floatingInput" value="{{ $user->email }}" placeholder="name@example.com">
        <label for="floatingInput">Addresse Mail </label>
    </div>
    <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Modifier Vos Informations</button>
</form>
@endsection