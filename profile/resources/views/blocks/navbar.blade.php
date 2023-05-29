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
               [ 'header1' => '', 'idheader1'=>'',  'header2' => '',  'idheader2'=>'', 'header3' => '', 'idheader3'=>'', 'header4' => '',  'idheader4'=>' ', 'img' => '' ],
            ];
        }

        if ($errors->any() && old('details') != null && empty($details[0]['text']) ) {
            // $details = old('details');
            foreach (old('details') as $key => $detail) {
                $details[$key]['header1'] = $detail['header1'];
                $details[$key]['idheader1'] = $detail['idheader1'];

                $details[$key]['header2'] = $detail['header2'];
                $details[$key]['idheader2'] = $detail['idheader2'];

                $details[$key]['header3'] = $detail['header3'];
                $details[$key]['idheader3'] = $detail['idheader3'];

                $details[$key]['header4'] = $detail['header4'];
                $details[$key]['idheader4'] = $detail['idheader4'];


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
                    <label for="imgid" class="form-label h4">Choisir une image {{ $index + 1 }}</label>
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

                <div class="form-group mb-2 row">
                    <div class="col-md-6">
                        <label for="" class="form-label">Menu 1 :</label>
                        <input type="text" name="details[{{ $index }}][header1]" class="form-control question-input" value="{{ $detail['header1'] }}">
                    </div>
                    <div class="col-md-6">
                        <label for="" class="form-label">Deplace Vers:</label>
                        <select class="form-select" name="details[{{ $index }}][idheader1]">
                            <option value="">Choisir une Section</option>
                            @foreach ($blocks as $block)
                            <option value="{{$block->id}}" @if( $detail['idheader1'] == $block->id) selected @endif >{{$block->titre}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group mb-2 row">
                    <div class="col-md-6">
                        <label for="" class="form-label">Menu 2 :</label>
                        <input type="text" name="details[{{ $index }}][header2]" class="form-control question-input" value="{{ $detail['header2'] }}">
                    </div>
                    <div class="col-md-6">
                        <label for="" class="form-label">Deplace Vers:</label>
                        <select class="form-select" name="details[{{ $index }}][idheader2]">
                            <option value="">Choisir une Section</option>

                            @foreach ($blocks as $block)
                            <option value="{{$block->id}}" @if( $detail['idheader2'] == $block->id) selected @endif >{{$block->titre}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>


                <div class="form-group mb-2 row">
                    <div class="col-md-6">
                        <label for="" class="form-label">Menu 3 :</label>
                        <input type="text" name="details[{{ $index }}][header3]" class="form-control question-input" value="{{ $detail['header3'] }}">
                    </div>
                    <div class="col-md-6">
                        <label for="" class="form-label">Deplace Vers:</label>
                        <select class="form-select" name="details[{{ $index }}][idheader3]">
                            <option value="">Choisir une Section</option>
                            @foreach ($blocks as $block)
                            <option value="{{$block->id}}" @if( $detail['idheader3'] == $block->id) selected @endif >{{$block->titre}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>


                <div class="form-group mb-2 row">
                    <div class="col-md-6">
                        <label for="" class="form-label">Menu 4 :</label>
                        <input type="text" name="details[{{ $index }}][header4]" class="form-control question-input" value="{{ $detail['header4'] }}">
                    </div>
                    <div class="col-md-6">
                        <label for="" class="form-label">Deplace Vers:</label>
                        <select class="form-select" name="details[{{ $index }}][idheader4]">
                            <option value="">Choisir une Section</option>

                            @foreach ($blocks as $block)
                            <option value="{{$block->id}}" @if( $detail['idheader4'] == $block->id) selected @endif >{{$block->titre}}</option>
                            @endforeach
                        </select>
                    </div>
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
