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
               [ 'headline' => '', 'button' => ''],
               [ 'headline' => '', 'button' => ''],
            ];
        }

        if ($errors->any() && old('details') != null && empty($details[0]['headline']) ) {
            // $details = old('details');
            foreach (old('details') as $key => $detail) {
                $details[$key]['headline'] = $detail['headline'];
                $details[$key]['button'] = $detail['button'];
            }
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
        <div class="card mb-3 question-container">
            <div class="card-body">
                <div class="form-group mb-2">
                    <label for="" class="form-label">Titre  :</label>
                    <input type="text" name="details[0][headline]" class="form-control question-input" value="{{ $details[0]['headline'] }}">
                </div>
        
                <div class="form-group mb-2">
                    <label for="">Boutton  : </label>
                    <input type="text" name="details[0][button]" class="form-control question-input" value="{{ $details[0]['button'] }}">
                </div>
            </div>
        </div>
        

    </div>

    <button class="btn btn-primary" type="submit">Enregistrer</button>
    <a class="btn btn-link float-end" href="" >Retourner à la liste des blocks</a>

</form>



@endsection

