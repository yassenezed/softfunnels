@extends('layouts.structure')
@section('title')
    Preview
@endsection
@section('main')
<form class="js-validate" method="POST" action="{{ route ('commandes.update', $forms->id) }}">
        @csrf
        @method('PUT')
    {{-- {{ route('leads.store')}} --}}
    <input type="hidden" name="id" value="{{ $forms->id }}">
    <div class="form-group mb-3">
        <label for="prenom">Nom:</label>
        <input type="text" class="form-control" id="fullname" name="fullname" value="{{$forms->fullname}}">
    </div>
    @error('first_name')
          <div class="text-danger">
            {{$message}}
          </div>
    @enderror
    <div class="form-group mb-3">
        <label for="phone">Tel</label>
        <input type="text" class="form-control" id="phone" name="phone" value="{{$forms->phone}}">
    </div>
    @error('last_name')
          <div class="text-danger">
            {{$message}}
          </div>
    @enderror
    <div class="form-group mb-3">
      <label for="email">Email</label>
      <input type="text" class="form-control" id="email" name="email" value="{{$forms->email}}">
  </div>
  @error('email')
        <div class="text-danger">
          {{$message}}
        </div>
  @enderror
  <div class="form-group mb-3">
    <label for="company">Société</label>
    <input type="text" class="form-control" id="company" name="company" value="{{$forms->company}}">
</div>
@error('phone')
      <div class="text-danger">
        {{$message}}
      </div>
@enderror
<div class="form-group mb-3">
    <label for="adress">Adress</label>
    <input type="text" class="form-control" id="adress" name="adress" value="{{$forms->adress}}">
</div>
@error('company')
      <div class="text-danger">
        {{$message}}
      </div>
@enderror
<div class="form-group mb-3">
    <label for="company">Notes</label>
    <input type="text" class="form-control" id="notes" name="notes" value="{{$forms->notes}}">
</div>
@error('notes')
      <div class="text-danger">
        {{$message}}
      </div>
@enderror
<div class="form-group mb-3">
  <label for="state">Etat :</label>
  <select class="form-control" id="state" name="state">
    @if ($forms->state == 'En cours de traitement')
      <option value="{{$forms->state}}">{{$forms->state}}</option>
      <option value="Payé">Payé</option>
      <option value="Confirmé">Confirmé</option>
    @elseif ($forms->state == 'Payé')
      <option value="{{$forms->state}}">{{$forms->state}}</option>
      <option value="Confirmé">Confirmé</option>
      <option value="En cours de traitement">En cours de traitement</option>
    @elseif ($forms->state == 'Confirmé')
      <option value="{{$forms->state}}">{{$forms->state}}</option>
      <option value="Payé">Payé</option>
      <option value="En cours de traitement">En cours de traitement</option>
    @else
      <option value="Confirmé">Confirmé</option>
      <option value="Payé">Payé</option>
      <option value="En cours de traitement">En cours de traitement</option>
    @endif
  </select>
</div>

@error('notes')
    <div class="text-danger">
      {{$message}}
    </div>
@enderror
<br>
<br>
    <button type="submit" class="btn btn-primary">Modifier la commande</button>
  </form>
@endsection
