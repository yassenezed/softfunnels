
@extends('layouts.structure')

@section('title')
    Ajouter Un Bloque
@endsection

@section('main')
<form method="post" action="{{ route('build.index', [ 'type' => $type,'id' => $id ]) }}" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="imgid" class="form-label h4">Ecrire un text</label>
        <input type="text" name="details" class="form-control question-input" value="{{ $block->details }}">
    </div>
    <div class="mb-3">
        <label for="imgid" class="form-label h4">Choisir les images</label>
        <br>
        <input type="file" class="form-control" name="images[]" id="imgid" placeholder="" multiple>
    </div>
    @if($block->images)
    <div class="row mb-4">
        @foreach(json_decode($block->images) as $key => $image_path)
        {{-- <div class="col-md-3" id="imgId{{$key}}">
            <img class="img-fluid" src="{{ asset('storage/' . $image_path) }}" alt="Block Image">
            <a href="/"
                onclick="removeImage(event,{{$key}})" class="btn btn-danger ml-6">Supprimer</a>
        </div> --}}
        <div class="col-md-3" id="imgId{{$key}}">
            <div class="image-container" style="position: relative;">
                    <button class="btn btn-danger remove-btn" style="position: absolute;
                    top: 5px;
                    right: 5px;
                    z-index: 1;" onclick="removeImage(event,{{$key}})">x</button>
                    <img class="img-fluid" src="{{ asset('storage/' . $image_path) }}" alt="Block Image"> 
               
            </div>
        </div>
        @endforeach
    </div>
    @endif
    {{-- <div class="mb-3">
        <label for="" class="form-label h4">Content</label>
        <textarea name="content" id="editor">{{ $block->details }}</textarea>
    </div> --}}
    <button class="btn btn-primary" type="submit">Save Block</button>
</form>

    <x-head.tinymce-config/>

@endsection

@push('javascript')
<script>

    function removeImage(e, img_id) {
        e.preventDefault();

        if (confirm('are you sure')) {
            var path = "{{route('build.removeimage', $block->id )}}";
            
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

