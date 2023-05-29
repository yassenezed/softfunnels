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
               [ 'text' => '', 'q' => '', 'img' => '' , 'idform' => '' ],
            ];
        }

        if ($errors->any() && old('details') != null && empty($details[0]['text']) ) {
            // $details = old('details');
            foreach (old('details') as $key => $detail) {
                $details[$key]['text'] = $detail['text'];
                $details[$key]['q'] = $detail['q'];
                $details[$key]['idform'] = $detail['idform'];

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
        @foreach($details as $index => $detail)
        <div class="card mb-3 question-container">
            <div class="card-body">
                <div class="mb-3">
                    <label for="imgid" class="form-label h4">Choisir une image de background</label>
                    <input type="file" class="form-control" name="details[{{ $index }}][img]" id="imgid" placeholder="">
                    @if ($detail['img'])
                    <div class="col-md-3" id="imgId{{$index}}">
                    <div class="image-container" style="position: relative;">
                        <img src="{{ Storage::url($detail["img"]) }}" alt="Image">
                        <button class="btn btn-danger remove-btn" style="position: absolute;
                        top: 5px;
                        right: 5px;
                        z-index: 1;" onclick="removeImage(event,{{$index}})">x</button>

                    </div>
                    </div>
                    @endif
                </div>

                <div class="form-group mb-2">
                    <label for="" class="form-label">Texte :</label>
                    <input type="text" name="details[{{ $index }}][text]" class="form-control question-input" value="{{ $detail['text'] }}">
                </div>

                <div class="form-group mb-2">
                    <label for="">Texte Du CTA: </label>
                    <textarea name="details[{{ $index }}][q]" class="form-control answer-input">{{ $detail['q'] }}</textarea>
                    <label for="" class="form-label">CTA Deplace Vers:</label>
                        <select class="form-select" name="details[{{ $index }}][idform]">
                            <option value="">Choisir une Section</option>
                            @foreach ($blocks as $block)
                            <option value="{{$block->id}}" 
                                @if( $detail['idform'] == $block->id) selected @endif 
                                >{{$block->titre}}</option>
                            @endforeach
                        </select>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <button class="btn btn-primary" type="submit">Enregistrer</button>
    <a class="btn btn-link float-end" href="" >Retourner à la liste des blocks</a>

</form>



@endsection
@push('javascript')
<script>

    function removeImage(e, img_id) {
        e.preventDefault();

        if (confirm('are you sure')) {
            var path = "{{route('build.removeimagedetails', $block->id )}}";

            $.ajax({
                url: path,
                type: "POST",
                data: { image_id: img_id, '_token': "{{ csrf_token() }}" },
                success: function (data) {
                    $('#imgId'+ img_id ).fadeOut(300, function () {
                        $('#imgId'+ img_id ).remove();
                    });
                },
                error: function (err) {
                    console.log(err);
                }
            })
        }
    }
</script>
@endpush
