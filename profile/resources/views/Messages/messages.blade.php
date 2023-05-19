@extends('layouts.structure')
@section('title')
    Liste des Messages
@endsection
@section('main')


<div class="mb-3" style=" display: flex;
align-items: center;
gap: 10px;">
    <h2>Liste Des Messages</h2>
    <div class="button-container" style="   margin-left: auto;">
        <a href="{{ route('message.add') }}" class="btn btn-primary"><i class="fa-solid fa-plus">  Envoyer</i></a>
    </div>
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
                    <a href="{{ route('message.destroy', $message->id) }}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>

                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
{{ $messages->links() }}
@endsection