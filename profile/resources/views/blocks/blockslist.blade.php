@extends('layouts.structure')
@section('title')
    Liste Des Bloques
@endsection

@section('main')
<div class="mb-3" style="display: flex; align-items: center; gap: 10px;">
  <h2>Liste Des Bloques - {{$landingpage->titre}} </h2>
  <div class="button-container" style="margin-left: auto;">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addBlockModal">
        <i class="fa-solid fa-plus"> Ajouter</i> </button>
  </div>
</div>
<table class="table">
    <thead>
      <tr>
         <th>Titre</th>
         <th>Type</th>
         {{-- <th>Ordre</th> --}}
         <th>Tunnel De Vente</th>
         <th>Les Actions</th>
      </tr>  
    </thead>
    <tbody id="sortable">
      @foreach ($blocks as $block)    
      <tr data-block-id="{{ $block->id }}">
           <td>{{$block->titre}}</td>
           <td>{{$block->type}}</td>
           {{-- <td>{{$block->ordre}}</td> --}}
           <td>{{$landingpage->titre}}</td>
           <td>
              <a href="{{ route('build.index', ['type' => $block->type, 'id' => $block->id]) }}" class="btn btn-primary"><i class="fa-solid fa-screwdriver-wrench"></i></a>
              <a href="{{ route('bloq.edit', $block->id) }}" class="btn btn-warning"><i class="fa-regular fa-pen-to-square"></i></a>
              <a href="{{ route('destroyblock.index', $block->id) }}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
            </td>
          
            {{-- <td>
              <a href="{{ route('editnameblock.index', $block->id) }}" class="btn btn-warning"><i class="fa-regular fa-pen-to-square"></i></a>
            </td>
       
            <td>
              <a href="{{ route('destroyblock.index', $block->id) }}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
            </td>   --}}
      </tr>
      @endforeach
    </tbody>
        
</table>
{{-- {{ $blocks->appends(['page_id' => request()->get('page_id')])->links() }}
{{ $blocks->appends(['page' => $blocks->currentPage()])->links() }} --}}
{{ $blocks->appends(['page_id' => request()->get('page_id'), 'page' => session('blockslist.page', 1)])->links() }}

<div class="modal fade" id="addBlockModal" tabindex="-1" role="dialog" aria-labelledby="addBlockModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addBlockModalLabel">Ajouter Un Bloque</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="addBlockForm" method="POST" action="{{ route ('storeblock.index') }}">
                    @php
                            // Check user's role
                      $user = auth()->user();
                      // dd($user->id);
                      $userPacking = App\Models\UserPacking::where('user_id', $user->id)->where('active', 1)->first();
                      // dd($userPacking->pack_id);
                      $pack_id = $userPacking->pack_id
                      // dd($pack_id );

                    @endphp
              @csrf
              <input type="text" class="form-control" id="page_id" name="landingpage_id" value="{{ request()->get('page_id') }}" hidden>
              {{-- <input type="text" class="form-control" id="type" name="type" value="" hidden> --}}
              <div class="form-group mb-3">
                <label for="blockName">Nom du Bloc:</label>
                <input type="text" class="form-control" id="titre" name="titre">

                <label for="blockType">Type de Bloc:</label>
                <div class="flex-form" style="
                  display: flex;
                  flex-wrap: wrap;
                  gap: 30px;
              ">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="type" value="type1" id="type1">
                  <label class="form-check-label" for="type1">
                    <img class="img-fluid" src="{{ asset('img/typesof/Type1.png') }}" alt="Type 1" width="100" height="100"> 
                  </label>
                </div>
                @if ($pack_id == 2)
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="type" value="type2" id="type2">
                  <label class="form-check-label" for="type2">
                    <img class="img-fluid" src="{{ asset('img/typesof/Type2.png') }}" alt="Type 1" width="100" height="100"> 
                  </label>
                </div>
                @endif
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="type" value="caroussel" id="caroussel">
                  <label class="form-check-label" for="caroussel">
                    <img class="img-fluid" src="{{ asset('img/typesof/carousel.png') }}" alt="caroussel" width="90" height="90"> 
                  </label>
                </div>
                @if ($pack_id == 2)
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="type" value="faq" id="faq">
                  <label class="form-check-label" for="faq">
                    <img class="img-fluid" src="{{ asset('img/typesof/faq.png') }}" alt="faq" width="90" height="90"> 
                  </label>
                </div>
                @endif
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="type" value="iconplustext" id="iconplustext">
                  <label class="form-check-label" for="iconplustext">
                    <img class="img-fluid" src="{{ asset('img/typesof/iconplustext.svg') }}" alt="faq" width="90" height="90"> 
                  </label>
                </div>
                @if ($pack_id == 2)
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="type" value="video" id="video">
                  <label class="form-check-label" for="video">
                    <img class="img-fluid" src="{{ asset('img/typesof/video.png') }}" alt="video" width="90" height="90"> 
                  </label>
                </div>
                @endif
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="type" value="pack" id="pack">
                  <label class="form-check-label" for="pack">
                    <img class="img-fluid" src="{{ asset('img/typesof/pack.png') }}" alt="pack" width="90" height="90"> 
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="type" value="trust" id="trust">
                  <label class="form-check-label" for="trust">
                    <img class="img-fluid" src="{{ asset('img/typesof/trust.png') }}" alt="pack" width="90" height="90"> 
                  </label>
                </div>
                @if ($pack_id == 2)
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="type" value="reviews" id="reviews">
                  <label class="form-check-label" for="reviews">
                    <img class="img-fluid" src="{{ asset('img/typesof/reviews.png') }}" alt="pack" width="90" height="90"> 
                  </label>
                </div>
                @endif
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="type" value="form" id="form">
                  <label class="form-check-label" for="form">
                    <img class="img-fluid" src="{{ asset('img/typesof/form.png') }}" alt="pack" width="90" height="90"> 
                  </label>
                </div>
                @if ($pack_id == 2)
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="type" value="navbar" id="navbar">
                  <label class="form-check-label" for="navbar">
                    <img class="img-fluid" src="{{ asset('img/typesof/navbar.jpg') }}" alt="navbar" width="90" height="90"> 
                  </label>
                </div>
                @endif
                @if ($pack_id == 2)
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="type" value="hero" id="hero">
                  <label class="form-check-label" for="hero">
                    <img class="img-fluid" src="{{ asset('img/typesof/slide.png') }}" alt="hero" width="90" height="90"> 
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="type" value="cta" id="cta">
                  <label class="form-check-label" for="cta">
                    <img class="img-fluid" src="{{ asset('img/typesof/cta.png') }}" alt="cta" width="90" height="90"> 
                  </label>
                </div>
                @endif
              </div>

          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
          <button type="button" class="btn btn-primary" id="addBlockBtn">Ajouter</button>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('javascript')

<script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>

<script>

    // Add an event listener to the "Add Block" button
    document.getElementById('addBlockBtn').addEventListener('click', function() {
        // Get the selected block type
        var blockType = document.querySelector('[name="type"]:checked').value;
        console.log(document.querySelector('[name="type"]:checked'));
        if (blockType !== '') {
            // Set the block type value in the hidden input field
            // document.getElementById('type').value = blockType;
            // Submit the form
            document.getElementById('addBlockForm').submit();
        }
    });

    var el = document.getElementById('sortable');
    var sortable = Sortable.create(el, {
      onEnd: function (evt) {
        var itemEl = evt.item;  // dragged HTMLElement
        evt.to;    // target list
        evt.from;  // previous list
        evt.oldIndex;  // element's old index within old parent
        evt.newIndex;  // element's new index within new parent
        evt.oldDraggableIndex; // element's old index within old parent, only counting draggable elements
        evt.newDraggableIndex; // element's new index within new parent, only counting draggable elements
        evt.clone // the clone element
        evt.pullMode;  // when item is in another sortable: `"clone"` if cloning, `true` if moving
        var blockId = evt.item.dataset.blockId; // Get the block ID from the data attribute
        var newIndex = evt.newIndex;
        console.log(blockId);
        console.log(newIndex);
        var csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;

                $.ajaxSetup({
                  headers: {
                    'X-CSRF-TOKEN': csrfToken
                  }
                });

              $.ajax({
                type: 'POST',
                url: '{{ route("updateblock") }}',
                data: {
                  blockId: blockId,
                  newIndex: newIndex
                },
                success: function (response) {
                  console.log('Block order updated successfully');
                },
                error: function (xhr, status, error) {
                  console.error(error);
                }
              });
              },
        });
</script>

@endpush

