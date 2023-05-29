@extends('layouts.structure')
@section('title')
    Preview
@endsection
@section('main')
    <h2>Preview Page</h2>
    <p>ID: {{ $form->id }}</p>
    <p>La Page: {{ $form->landingpage->titre }}</p>
    <p>Client: {{ $form->fullname }}</p>
    <p>Email: {{ $form->email }}</p>
    <p>Tel: {{ $form->phone }}</p>
    <p>Adress: {{ $form->adress }}</p>
    <p>company: {{ $form->company }}</p>
    <p>Notes: {{ $form->notes }}</p>
    <p>Montant: {{ $form->landingpage->price }}</p>
    <p>Etat de commande: {{ $form->state }}</p>
    <!-- Add any additional information you want to display -->
@endsection
