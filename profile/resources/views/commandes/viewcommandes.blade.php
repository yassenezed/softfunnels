@extends('layouts.structure')
@section('title')
    Preview
@endsection
@section('main')
    <div class="container">
        <h2>Details</h2>
        <div class="row">
            <div class="col-md-6">
                <p class="border p-2">ID: {{ $form->id }}</p>
                <p class="border p-2">La Page: {{ $form->landingpage->titre }}</p>
                <p class="border p-2">Client: {{ $form->fullname }}</p>
                <p class="border p-2">Email: {{ $form->email }}</p>
                <p class="border p-2">Tel: {{ $form->phone }}</p>
            </div>
            <div class="col-md-6">
                <p class="border p-2">Adress: {{ $form->adress }}</p>
                <p class="border p-2">Company: {{ $form->company }}</p>
                <p class="border p-2">Notes: {{ $form->notes }}</p>
                {{-- <p class="border p-2">Montant: {{ $form->landingpage->price }}</p> --}}
                <p class="border p-2">Etat de commande: {{ $form->state }}</p>
            </div>
        </div>
        <!-- Add any additional information you want to display -->
    </div>
@endsection

