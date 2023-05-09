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
            ]
        ];  
        //   dd($details);
    }

    if ( $errors->any() && old('details') != null ) {
        $details = old('details');
    }

    @endphp
    {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}

    <div id="questions-container">
        @foreach($details as $key => $detail)
        <div class="card mb-3 question-container">
            <div class="card-body">
                <div class="form-group mb-2">
                    <label for="details[{{ $key }}][text]"  class="form-label">Question :</label>
                    <input type="text" name="details[{{ $key }}][text]" id="details[{{$key}}][text]" class="form-control question-input" value="{{ $detail['text'] }}">
                </div>
                @if ($errors->has("details.$key.text"))
                    <span class="text-danger">{{ $errors->first("details.$key.text") }}</span>
                @endif
                <div class="form-group mb-2">
                    <label for="">Reponse : </label>
                    <textarea name="details[{{ $key }}][q]" class="form-control answer-input">{{ $detail['q'] }}</textarea>
                </div>
                @if ($errors->has("details.$key.q"))
                    <span class="text-danger">{{ $errors->first("details.$key.q") }}</span>
                @endif
                <button type="button" class="btn btn-danger delete-question-btn" onclick="deleteQuestion(this)">Delete</button>
            </div>
        </div>
    @endforeach
    
    </div>
    <button class="btn btn-primary" type="submit">Enregistrer</button>
    <button class="btn btn-success" type="button" onclick="addQuestion()">Ajouter une question</button>
    <button><a href="" class="href">Retourner à la liste des blocks</a></button>
</form>

<script>
    var currentCount = 0;
    function addQuestion() {
        var questionsContainer = document.getElementById('questions-container');
        var currentCount = questionsContainer.children.length;

        var template = document.querySelector(".question-container").cloneNode(true);
        var newel = document.createElement('div').appendChild(template);
        var input = newel.querySelector('input');
        var textarea = newel.querySelector('textarea');
        input.setAttribute('name', `details[${currentCount}][text]`)
        input.value = '';
        textarea.setAttribute('name', `details[${currentCount}][q]`);
        textarea.value = '';
        
        questionsContainer.appendChild(newel);
        

        // var questionContainer = document.createElement('div');
        // questionContainer.classList.add('mb-3', 'question-container');

        // var questionLabel = document.createElement('label');
        // questionLabel.setAttribute('for', `details[${currentCount}]['text']`);
        // questionLabel.innerText = 'Question:';

        // var questionInput = document.createElement('input');
        // questionInput.setAttribute('type', 'text');
        // questionInput.setAttribute('name', `details[${currentCount}]['text']`);
        // questionInput.classList.add('question-input');

        // var answerLabel = document.createElement('label');
        // answerLabel.setAttribute('for', `details[${currentCount}]['q']`);
        // answerLabel.innerText = 'Votre réponse :';

        // var answerInput = document.createElement('textarea');
        // answerInput.setAttribute('name', `details[${currentCount}]['q']`);
        // answerInput.classList.add('answer-input');
        // answerInput.innerText = '';

        // var deleteButton = document.createElement('button');
        // deleteButton.setAttribute('type', 'button');
        // deleteButton.classList.add('delete-question-btn');
        // deleteButton.innerText = 'Delete';
        // deleteButton.addEventListener('click', function() {
        //     questionContainer.remove();
        // });

        // questionContainer.appendChild(questionLabel);
        // questionContainer.appendChild(questionInput);
        // questionContainer.appendChild(document.createElement('br'));
        // questionContainer.appendChild(document.createElement('br'));
        // questionContainer.appendChild(answerLabel);
        // questionContainer.appendChild(answerInput);
        // questionContainer.appendChild(deleteButton);

        // questionsContainer.appendChild(questionContainer);
    }

    function deleteQuestion(btn) {
        var questionContainer = btn.closest('.question-container');
        questionContainer.remove();
    }
</script>

@endsection
