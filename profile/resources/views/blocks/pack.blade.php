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
               [ 'titre' => '', 'text' => '', 'q' => '', 'img' => '' ],
               [ 'titre' => '', 'text' => '', 'q' => '', 'img' => '' ],
               [ 'titre' => '', 'text' => '', 'q' => '', 'img' => '' ],
            ];
        }
        if ($errors->any() && old('details') != null && empty($details[0]['text']) ) {
            // $details = old('details');
            foreach (old('details') as $key => $detail) {
                $details[$key]['titre'] = $detail['titre'];
                $details[$key]['text'] = $detail['text'];
                $details[$key]['q'] = $detail['q'];
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

                <div class="form-group mb-2">
                    <label for="" class="form-label">Titre du Pack {{ $index + 1 }} :</label>
                    <input type="text" name="details[{{ $index }}][titre]" class="form-control question-input" value="{{ $detail['titre'] }}">
                </div>

                <div class="form-group mb-2">
                    <label for="" class="form-label">Prix {{ $index + 1 }} :</label>
                    <input type="text" name="details[{{ $index }}][text]" class="form-control question-input" value="{{ $detail['text'] }}">
                </div>

                <div class="form-group mb-2">
                    <label for=""  class="form-label2">Caracteristiques {{ $index + 1 }} : </label>
                    <textarea name="details[{{ $index }}][q]" class="form-control answer-input" id="editor"> {!! $detail['q'] !!}</textarea>
                </div>
            
                <x-head.tinymce-config/>
            </div>
        </div>
        @endforeach
    </div>

    <button class="btn btn-primary" type="submit">Enregistrer</button>
    <button class="btn btn-success" type="button" onclick="addQuestion()">Ajouter une Section</button>

    <a class="btn btn-link float-end" href="" >Retourner à la liste des blocks</a>

</form>



@endsection
@push('javascript')

<script>
function addQuestion() {
    var questionsContainer = document.getElementById('questions-container');
    var currentCount = questionsContainer.children.length;

    // Check if the maximum count has been reached
    if (currentCount >= 4) {
        alert('You can add only up to 4 sections.');
        return;
    }

    // Clone the template and update the input names and values
    var template = document.querySelector(".question-container").cloneNode(true);
    var newel = document.createElement('div');
    newel.appendChild(template);
    var input = newel.querySelector('input');
    var textarea = newel.querySelector('textarea');
    input.setAttribute('name', `details[${currentCount}][text]`);
    input.value = '';
    textarea.setAttribute('name', `details[${currentCount}][q]`);
    textarea.value = '';

    // Update the label for the new section
    var label = newel.querySelector('.form-label');
    label.textContent = `Prix ${currentCount + 1} :`;
    var label = newel.querySelector('.form-label2');
    label.textContent = `Caracteristiques  ${currentCount + 1} :`;

    // Add a delete button to the new section
    var deleteButton = document.createElement('button');
    deleteButton.classList.add('btn', 'btn-danger', 'ms-2');
    deleteButton.textContent = 'Delete';
    deleteButton.addEventListener('click', function() {
        questionsContainer.removeChild(newel);
        currentCount--; // decrease the current count after deleting a question


        // Enable the add button if the maximum count has not been reached
        if (currentCount + 1 < 4) {
            var addButton = document.querySelector('.btn-success');
            addButton.disabled = false;
        }
    });
    newel.querySelector('.card-body').appendChild(deleteButton);

    // Append the new section to the container
    questionsContainer.appendChild(newel);

    // Disable the add button if the maximum count has been reached
    if (currentCount + 1 >= 4) {
        var addButton = document.querySelector('.btn-success');
        addButton.disabled = true;
    }
    else{
        var addButton = document.querySelector('.btn-success');
        addButton.disabled = false;
    }
}

</script>
@endpush
