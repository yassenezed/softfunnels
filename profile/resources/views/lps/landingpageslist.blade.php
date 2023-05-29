@extends('layouts.structure')
@section('title')
    Tunnels De Ventes
@endsection
@section('main')
<div class="mb-3" style=" display: flex;
align-items: center;
gap: 10px;">
    <h2>Liste Des Pages</h2>
    <div class="button-container" style="   margin-left: auto;">
        <a href="{{ route('landingpageajouter.index') }}" class="btn btn-primary"><i class="fa-solid fa-plus"> Ajouter</i></a>
    </div>
</div>
<table class="table" >
     <tr>
        <th>ID</th>
        <th>Titre</th>
        <th>Description</th>
        <th>Lien</th>
        <th>Etat</th>
        <th>Visiteurs</th>
        <th>Prix</th>
        <th class="text-center">Les Actions</th>
     </tr>
    @foreach ($landingpages as $lp)  
     <tr>
         <td>{{$lp->id}}</td>
         <td>{{$lp->titre}}</td>
         <td>{{ Str::limit($lp->description,50) }}</td>
         <td>{{$lp->slug}}</td>
         <td>{{$lp->state}}</td>
         <td>{{$lp->visitors}}</td>
         <td>{{$lp->price}}MAD</td>
         <td>
                <a href="{{ route('blockslist.index', [ 'page_id' => $lp->id] ) }}" class="btn btn-primary"><i class="fa-solid fa-screwdriver-wrench"></i></a>
                <a href="{{ route('editlp.index', $lp->id) }}" class="btn btn-warning"><i class="fa-regular fa-pen-to-square"></i></a>
                <a href="{{ route('landingpage.show', $lp->id) }}"class="btn btn-success"><i class="fa-solid fa-eye"></i></a>
                <a href="{{ route('destroylp.index', $lp->id) }}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
        </td> 
    </tr> 
    </form>
    @endforeach
        
</table>
{{ $landingpages -> links()}}


@endsection
