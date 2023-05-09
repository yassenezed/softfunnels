@if (json_decode($block->details, true))
<div class="container space-2 space-3--lg">
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
<!-- End Icon Blocks Section -->
