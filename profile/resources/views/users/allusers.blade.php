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
        <th>username</th>
        <th>firstname</th>
        <th>lastname</th>
        <th>email</th>
        <th>Les Actions</th>
     </tr>
    @foreach ($users as $user)
         
     <tr>
         <td>{{$user->id}}</td>
         <td>{{$user->username}}</td>
         <td>{{$user->firstname}}</td>
         <td>{{$user->lastname}}</td>
         <td>{{$user->email}}</td>

       
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
