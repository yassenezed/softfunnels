{{-- <div class="col-md-6">
    @php
        $images = json_decode($block->images);
        if(empty($images)) $images = [];
    @endphp
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            @foreach ($images as $key => $image)
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$key}}" @if($loop->first) class="active" aria-current="true" @endif aria-label="Slide {{$key}}"></button>
            @endforeach
        </div>
        <div class="carousel-inner">
            @foreach ($images as $image)
            <div class="carousel-item @if($loop->first) active @endif">
                <img src="{{asset('storage/'.$image)}}" class="w-100 d-block" alt="First slide">
            </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>
</div> --}}


<div class="container  content-space-1 content-space-t-md-4 content-space-b-md-3 mt-4">
<div class="col-md-6">
    @php
        $images = json_decode($block->images);
        if(empty($images)) $images = [];
    @endphp
    <div class="carousel slide" data-ride="carousel" id="carousel-{{ $block->id }}">
        <ol class="carousel-indicators">
            @foreach ($images as $key => $image)
                <li data-target="#carousel-{{ $block->id }}" data-slide-to="{{ $key }}" @if($loop->first) class="active" @endif></li>
            @endforeach
        </ol>
        <div class="carousel-inner">
            @foreach ($images as $image)
                <div class="carousel-item @if($loop->first) active @endif">
                    <div class="d-flex bg-img-hero gradient-overlay-half-dark-v3" style="background-image: url({{ asset('storage/'.$image) }})">
                        <div class="container d-flex align-items-center flex-wrap height-100vh text-center space-3">
                            <div class="w-75 mx-auto">
                                
                        
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carousel-{{ $block->id }}" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-{{ $block->id }}" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
</div>