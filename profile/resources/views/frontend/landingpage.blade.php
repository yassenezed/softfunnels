
@extends('frontend.layouts')

@section('content')

        @foreach ($landingpage->blocks as $block)
        {{-- <div class="row"> --}}

            {{-- <div class="row"> --}}

            @if ($block->type == "navbar")
                @include('frontend.blocks.navbar', compact('block', "landingpage"))
            @endif
            {{-- <br> --}}
        {{-- </div> --}}

                    {{-- <div class="row"> --}}

            
            @if ($block->type == "type1")
                @include('frontend.blocks.type1', compact('block'))
            @endif
            {{-- <br> --}}
        {{-- </div> --}}
        {{-- <div class="row"> --}}
            @if ($block->type == "type2")
                @include('frontend.blocks.type2', compact('block'))
            @endif     
            {{-- <br>    --}}
        {{-- </div> --}}
        {{-- <div class="row"> --}}
            @if ($block->type == "caroussel")
                @include('frontend.blocks.caroussel', compact('block'))
            @endif
            {{-- <br> --}}
        {{-- </div> --}}
        {{-- <div class="row"> --}}
            @if ($block->type == "faq")
                @include('frontend.blocks.faq', compact('block'))
            @endif
            {{-- <br> --}}
        {{-- </div> --}}
        {{-- <div class="row"> --}}
            @if ($block->type == "iconplustext")
                @include('frontend.blocks.iconplustext', compact('block'))
            @endif
            {{-- <br> --}}
        {{-- </div>
        <div class="row"> --}}
          @if ($block->type == "video")
              @include('frontend.blocks.video', compact('block'))
          @endif
          {{-- <br> --}}
      {{-- </div> --}}
      {{-- <div class="row"> --}}
        @if ($block->type == "pack")
            @include('frontend.blocks.pack', compact('block'))
        @endif
        {{-- <br> --}}
      {{-- </div>
      <div class="row"> --}}
        @if ($block->type == "trust")
            @include('frontend.blocks.trust', compact('block'))
        @endif
        {{-- <br> --}}
      {{-- </div>
      <div class="row"> --}}
        @if ($block->type == "reviews")
            @include('frontend.blocks.reviews', compact('block'))
        @endif
        {{-- <br> --}}
      {{-- </div>
      <div class="row"> --}}
        @if ($block->type == "form")
            @include('frontend.blocks.form', compact('block', "landingpage"))
        @endif
        {{-- <br> --}}
      {{-- </div> --}}
      @if ($block->type == "hero")
            @include('frontend.blocks.hero', compact('block', "landingpage"))
        @endif
        {{-- <br> --}}
      {{-- </div> --}}
        @if ($block->type == "cta")
            @include('frontend.blocks.cta', compact('block', "landingpage"))
        @endif
      

    @endforeach
        
@endsection
    
    