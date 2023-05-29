@extends('layouts.structure')
@section('title')
    Tunnels De Ventes
@endsection
@section('main')
<div class="mb-3" style=" display: flex;
align-items: center;
gap: 10px;">
    <h2>Liste Des Clients</h2>
    <div class="button-container" style="   margin-left: auto;">
        <a href="{{ route('clients.add') }}" class="btn btn-primary"><i class="fa-solid fa-plus"> Ajouter</i></a>
    </div>
</div>
<table class="table" >
     <tr>
        <th>ID</th>
        <th>Prenom</th>
        <th>Nom</th>
        <th>Email</th>
        <th>Numero</th>
        <th>Societe</th>
        <th >Les Actions</th>
     </tr>
    @foreach ($clients as $client)
     <tr>
         <td>{{$client->id}}</td>
         <td>{{$client->first_name}}</td>
         <td>{{$client->last_name}}</td>
         <td>{{$client->email}}</td>
         <td>{{$client->phone}}</td>
         <td>{{$client->company}}</td>
       
        <td>
                <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-warning"><i class="fa-regular fa-pen-to-square"></i></a>
                <a href="{{ route('clients.destroy', $client->id) }}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
        </td>
        
    @endforeach
        
</table>
{{ $clients -> links()}}


@endsection
