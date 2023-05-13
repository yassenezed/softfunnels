@extends('layouts.structure')
@section('title')
    Liste des Commandes
@endsection
@section('main')
<h2>Liste des Commandes</h2>
<table class="table">
    <tr>
        <th>ID</th>
        <th>Landing Page ID</th>
        <th>Nom complet</th>
        <th>Email</th>
        <th>Téléphone</th>
        <th>Entreprise</th>
        <th>Adresse</th>
        <th>Notes</th>
        <th>Total</th>

    </tr>
    @foreach($forms as $form)
    <tr>
        <td>{{ $form->id }}</td>
        <td>{{ $form->landingpage->titre }}</td>
        <td>{{ $form->fullname }}</td>
        <td>{{ $form->email }}</td>
        <td>{{ $form->phone }}</td>
        <td>{{ $form->company }}</td>
        <td>{{ $form->adress }}</td>
        <td>{{ $form->notes }}</td>
        <td>{{ $form->landingpage->price}}</td>

    </tr>
    @endforeach
</table>
@endsection