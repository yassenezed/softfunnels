{{-- <div class="col-md-6">
    <div>{!!$block->details!!}</div>
</div>
<div class="col-md-6">
    @php
        $images = json_decode($block->images);
        if(empty($images)) $images = [];
    @endphp
    <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            @foreach ($images as $key => $image)
            <li data-bs-target="#carouselId" data-bs-slide-to="{{$key}}" @if($loop->first) class="active" @endif aria-current="true" aria-label="First slide"></li>
            @endforeach
        </ol>
        <div class="carousel-inner" role="listbox">
            @foreach ($images as $image)
            <div class="carousel-item @if($loop->first) active @endif">
                <img src="{{asset('storage/'.$image)}}" class="w-100 d-block" alt="First slide">
            </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div> --}}
<div class="container">
    
    @php
        $images = json_decode($block->images);
        if(empty($images)) $images = [];
    @endphp
    <div class="row align-items-md-center space-2-bottom space-3-bottom--lg">
        
        <div class="col-md-6 order-md-1">
            @foreach ($images as $image)
            <div class="carousel-item @if($loop->first) active @endif">
                <img src="{{asset('storage/'.$image)}}" class="w-100 d-block" alt="First slide">
            </div>
            @endforeach
        </div>
        <div class="col-md-6 order-md-2 mb-5 mb-md-0">
            <div class="pl-md-4">
              {!!$block->details!!}
             </div>
        </div>
    </div>

</div>