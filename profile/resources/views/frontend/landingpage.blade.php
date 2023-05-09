
@extends('frontend.layouts')

@section('content')
    @foreach ($landingpage->blocks as $block)
        <div class="row">
            @if ($block->type == "type1")
                @include('frontend.blocks.type1', compact('block'))
            @endif
        </div>
        <br>
        <div class="row">
            @if ($block->type == "type2")
                @include('frontend.blocks.type2', compact('block'))
            @endif        
        </div>
        <br>
        <div class="row">
            @if ($block->type == "caroussel")
                @include('frontend.blocks.caroussel', compact('block'))
            @endif
        </div>
        <br>
        <div class="row">
            @if ($block->type == "faq")
                @include('frontend.blocks.faq', compact('block'))
            @endif
        </div>
        <div class="row">
            @if ($block->type == "iconplustext")
                @include('frontend.blocks.iconplustext', compact('block'))
            @endif
        </div>
        <div class="row">
          @if ($block->type == "video")
              @include('frontend.blocks.video', compact('block'))
          @endif
      </div>
      <div class="row">
        @if ($block->type == "pack")
            @include('frontend.blocks.pack', compact('block'))
        @endif
      </div>
      <div class="row">
        @if ($block->type == "trust")
            @include('frontend.blocks.trust', compact('block'))
        @endif
      </div>
      <div class="row">
        @if ($block->type == "reviews")
            @include('frontend.blocks.reviews', compact('block'))
        @endif
      </div>
    @endforeach

@endsection
    
    