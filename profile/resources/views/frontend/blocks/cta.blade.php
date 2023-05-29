{{-- @if (json_decode($block->details, true))
<div class="container  content-space-1 content-space-t-md-4 content-space-b-md-3 my-9" id="sect{{$block->id}}">
    <div class="row">
            @foreach (json_decode($block->details, true) as $detail)
            <div class="col-md-4 mb-7 mb-md-0">
                <!-- Icon Blocks -->
                <div class="text-center px-lg-3">
                    <img src="{{ asset('storage/'.$detail["img"]) }}" alt="Image">
                    <h3>{{ $detail['text'] }}</h3>
                    <p>{{ $detail['q'] }}</p>
                <!-- End Icon Blocks -->
                </div>
            </div>
            @endforeach 
    </div>
</div>
@endif
<!-- End Icon Blocks Section --> --}}
<!-- CTA Section -->
@if (json_decode($block->details, true))
@foreach (json_decode($block->details, true) as $detail)
<div class="gradient-overlay-half-purple-v2 bg-img-hero-center" style="background-image: url({{ asset('storage/'.$detail["img"]) }}); margin-top:60px;" id="sect{{$block->id}}">
    <div class="container text-center space-2">
      <div class="w-lg-50 mx-lg-auto">
        <div class="mb-5">
          <h2 class="h3 text-white">{{ $detail['text'] }}</h2>
        </div>
        <a class="btn btn-primary btn-wide mb-2 mb-md-0" href="#sect{{$detail['idform']}}">{{ $detail['q'] }}</a>
      </div>
    </div>
</div>
@endforeach 
@endif

  <!-- End CTA Section -->