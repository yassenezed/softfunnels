
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
    @endforeach
     {{-- <!-- Icon Blocks Section -->
 <div class="container space-2 space-3--lg">
    <div class="row">
      <div class="col-md-4 mb-7 mb-md-0">
        <!-- Icon Blocks -->
        <div class="text-center px-lg-3">
          <img class="max-width-14 mb-2" src="./Home Page _ Space - Responsive Website Template_files/trophy-purple-icon.svg" alt="Image Description">
          <h3 class="h4">Professional Design</h3>
          <p class="mb-0">Achieve virtually any look and layout from within the one template.</p>
        </div>
        <!-- End Icon Blocks -->
      </div>

      <div class="col-md-4 mb-7 mb-md-0">
        <!-- Icon Blocks -->
        <div class="text-center px-lg-3">
          <img class="max-width-14 mb-2" src="./Home Page _ Space - Responsive Website Template_files/idea-primary-icon.svg" alt="Image Description">
          <h3 class="h4">Super-Light</h3>
          <p class="mb-0">Manage document assembly with sophisticated yet super-light templates.</p>
        </div>
        <!-- End Icon Blocks -->
      </div>

      <div class="col-md-4">
        <!-- Icon Blocks -->
        <div class="text-center px-lg-3">
          <img class="max-width-14 mb-2" src="./Home Page _ Space - Responsive Website Template_files/rocket-red-icon.svg" alt="Image Description">
          <h3 class="h4">Unlimited Power</h3>
          <p class="mb-0">Find what you need in one template and combine features at will.</p>
        </div>
        <!-- End Icon Blocks -->
      </div>
    </div>
  </div>
  <!-- End Icon Blocks Section --> --}}

@endsection
    
    