@php
$details = $block->titre;
// dd($details);
@endphp
<!-- Pricing Section -->
<style>
    .custom-card-width {
  width: 100%;
  max-width: 600px; /* adjust as needed */
}
</style>
<div class="container content-space-1 content-space-t-md-4 content-space-b-md-3" id="sect{{$block->id}}">
  <!-- Title -->
  <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-9">
    <span class="u-label u-label--sm u-label--purple mb-3">{{$block->titre}}</span>
  </div>
  <!-- End Title -->

  <div class="mx-lg-auto d-flex flex-column">
    {{-- w-lg-80 w-xl-80  --}}
    <div class="card-sm-columns card-sm-2-count mb-5 d-flex">
      <!-- Pricing -->
      @foreach(json_decode($block->details, true) as $key => $detail)
      <div class="card mb-5 mb-sm-0 flex-grow-1 custom-card-width">
        <!-- Header -->
        <header class="card-header text-center p-5">
          <span class="u-label u-label--sm u-label--purple mb-3">{{ $detail['titre'] }}
          </span>
          <span class="d-block">
            <span class="display-4 text-dark">
              {{ $detail['text'] }}
            </span>
          </span>
        </header>
        <!-- End Header -->
        <!-- Content -->
        <div class="card-body p-5">
          {!! $detail['q'] !!}
        </div>
        <!-- End Content -->
      </div>
      @endforeach
      <!-- End Pricing -->
    </div>
  </div>

</div>
