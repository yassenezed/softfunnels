@extends('layouts.structure')
@section('title')
    Liste des Messages
@endsection
@section('main')
<h2>Liste des Messages</h2>
<div class="mb-3" >
    <a href="{{ route('message.add') }}" class="btn btn-primary">Envoyer un nouveau message</a>
</div>
<table class="table">
        <thead>
        <tr>
            <th>Message ID</th>
            <th>User Email</th>
            <th>Message</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach($messages as $message)
        <tr>
            <td>{{ $message->id }}</td>
            <td>{{ $message->user->email }}</td>
            <td>{{ $message->message }}</td>
            <td>
                <div>
                    <a href="{{ route('message.destroy', $message->id) }}" class="btn btn-danger ml-6">Supprimer</a>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
{{ $messages->links() }}
@endsection