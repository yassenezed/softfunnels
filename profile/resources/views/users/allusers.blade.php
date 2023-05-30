@extends('layouts.structure')
@section('title')
Liste Des Utilisateurs
@endsection
@section('main')
<h2>Liste Des Utilisateurs
</h2>

<table class="table">
     <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Prénom</th>
        <th>Nom</th>
        <th>Email</th>
        <th>Pack</th>
        <th>Date de début</th>
        <th>Date de Fin</th>


        <th>Les Actions</th>
     </tr>
    @foreach ($users as $user)
         
     <tr>
         <td>{{$user->id}}</td>
         <td>{{$user->username}}</td>
         <td>{{$user->firstname}}</td>
         <td>{{$user->lastname}}</td>
         <td>{{$user->email}}</td>
        
            @if ($user->packs->isNotEmpty())
                @foreach ($user->packs as $pack)
                <td> {{$pack->name}}</td>
                <td>{{$pack->pivot->start_date}}</td>
                <td>{{$pack->pivot->end_date}}</td>
                    
                @endforeach
            @else
                <td> no pack</td>
                <td></td>
                <td></td>
            @endif
            
        
        <td>
            <div>
                <a href="{{ route('users.softdelete', $user->id) }}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>

            </div>
        </td>
     
        
            
        </tr>
            
            </form>
       
    @endforeach
        
</table>
{{ $users -> links()}}


@endsection
