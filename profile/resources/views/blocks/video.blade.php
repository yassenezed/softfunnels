@extends('layouts.structure')

@section('title')
    Ajouter Un Bloque
@endsection

@section('main')
<form method="post" action="{{ route('build.index', [ 'type' => $type,'id' => $id ]) }}" enctype="multipart/form-data">
    @csrf
    @php
    $details = json_decode($block->details, true);
    if (!$details) {
        $details = [
            [
                'text' => '',
                'q' => '',
                'link' => '',

            ]
        ];  
        //   dd($details);
    }

    if ( $errors->any() && old('details') != null ) {
        $details = old('details');
    }

    @endphp
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div id="questions-container">
        @foreach($details as $key => $detail)
        <div class="card mb-3 question-container">
            <div class="card-body">
                <div class="form-group mb-2">
                    <label for="" class="form-label">Titre :</label>
                    <input type="text" name="details[{{ $key }}][text]" class="form-control question-input" value="{{ $detail['text'] }}">
                </div>
                
                <div class="form-group mb-2">
                    <label for="">Description : </label>
                    <textarea name="details[{{ $key }}][q]" class="form-control answer-input">{{ $detail['q'] }}</textarea>
                </div>
                <div class="form-group mb-2">
                    <label for="" class="form-label">Lien Youtube :</label>
                    <input type="text" name="details[{{ $key }}][link]" class="form-control question-input" value="{{ $detail['link'] }}">
                </div>
            </div>
        </div>
        @endforeach
    </div>
     <button class="btn btn-primary" type="submit">Enregistrer</button>
    <a class="btn btn-link float-end" href="" >Retourner à la liste des blocks</a>
</form>

@endsection
