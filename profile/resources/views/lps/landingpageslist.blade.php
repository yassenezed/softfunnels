@extends('layouts.structure')
@section('title')
    Tunnels De Ventes
@endsection
@section('main')
@section('main')
<h2>Liste Des Tunnels</h2>
<div class="mb-3" >
    <a href="{{ route('landingpageajouter.index') }}" class="btn btn-primary">Ajouter un tunnel de vente</a>
</div>
<table class="table">
     <tr>
        <th>ID</th>
        <th>Titre</th>
        <th>Description</th>
        <th>Lien</th>
        <th>Etat</th>
        <th>Nombre des Visiteurs</th>
        <th>Prix</th>
        <th colspan="4" class="text-center">Les Actions</th>
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
            <div>
                <a href="{{ route('blockslist.index', [ 'page_id' => $lp->id] ) }}" class="btn btn-primary mr-6">
                    Construire
                </a>
            </div>
        </td>
        <td>
            <div>
                <a href="{{ route('editlp.index', $lp->id) }}" class="btn btn-danger ml-6">Modifer</a>
            </div>
        </td>
       
        <td>
            <div>
                <a href="{{ route('destroylp.index', $lp->id) }}" class="btn btn-danger ml-6">Supprimer</a>
            </div>
        </td>
        <td>
            <div>
                <a href="{{ route('landingpage.show', $lp->id) }}" class="btn btn-success ml-6">Appercu</a>
            </div>
        </td>
        
            
    </tr>
            
            </form>
       
    @endforeach
        
</table>
{{ $landingpages -> links()}}


@endsection
