@extends('layouts.structure')
@section('title')
    Liste des Commandes
@endsection
@section('main')
<h2>Liste des Commandes</h2>
<table id="myTable" class="table">
    <tr>
        <th>ID</th>
        <th>Client</th>
        <th>Email</th>
        <th>Tel</th>
        <th>Montant</th>
        <th>Page</th>
        <th>Etat</th>
        <th class="text-center">Les Actions</th>
    </tr>
    @foreach($forms as $form)   
    <tr>
        <td>{{ $form->id }}</td>
        <td>{{ $form->fullname }}</td>
        <td>{{ $form->email }}</td>
        <td>{{ $form->phone }}</td>
        <td>{{ $form->landingpage->price}}</td>
        <td>{{ $form->landingpage->titre }}</td>
        <td>{{ Illuminate\Support\Str::limit($form->state, 9) }}</td>
        <td>
            <a href="{{ route('clients.create', ['fullname' => $form->fullname, 'email' => $form->email, 'phone' => $form->phone, 'company' => $form->company]) }}" class="btn btn-primary"><i class="fa-solid fa-user-plus"></i></a>
            <a href="{{ route('clients.showall', ['id' => $form->id]) }}" class="btn btn-success"><i class="fa-solid fa-eye"></i></a>
            <a href="{{ route('commandes.edit', $form->id) }}" class="btn btn-warning"><i class="fa-regular fa-pen-to-square"></i></a>
            <a href="{{ route('commandes.delete', $form->id) }}"class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
        </td>
    </tr>
    @endforeach
</table>
@endsection
