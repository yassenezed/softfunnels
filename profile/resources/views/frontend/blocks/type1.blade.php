
<div class="container content-space-1 content-space-t-md-4 content-space-b-md-3" id="sect{{$block->id}}">
    
    @php
        $images = json_decode($block->images);
        if(empty($images)) $images = [];
    @endphp
    <div class="row align-items-md-center" style="
    margin-top: 55px;
">
        <div class="col-md-6 order-md-1 order-2 mb-5 mb-md-0">
            <div class="pl-md-4">
              {!!$block->details!!}
             </div>
        </div>
        <div class="col-md-6 order-md-2 order-1">
            @foreach ($images as $image)
            <div class="carousel-item @if($loop->first) active @endif">
                <img src="{{asset('storage/'.$image)}}" class="w-100 d-block" alt="First slide">
            </div>
            @endforeach
        </div>
    </div>

</div>