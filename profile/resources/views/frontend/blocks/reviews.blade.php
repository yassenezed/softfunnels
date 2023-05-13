 <!-- Blog Grid Section -->
 <div class="bg-gray-100">
    <div class="container space-2 space-3--lg mx-auto">
        <!-- Title -->
      <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-9">
        <h2 class="h3">Read our news &amp; blogs</h2>
      </div>
      <!-- End Title -->

      <!-- News Blog -->
      <div class="card-deck d-block d-lg-flex">
        @foreach(json_decode($block->details, true) as $key => $detail)
        <!-- Blog Grid -->
        <article class="card mb-4 mb-lg-0">
          <div class="card-body p-5">
            <p class="mb-0">{{ $detail['text'] }}</p>
          </div>
          <div class="card-footer py-4 px-5">
            <div class="media">
              <img class="u-sm-avatar rounded-circle mr-3" src="{{ asset('storage/'.$detail["img"]) }}" alt="Image Description">
              <div class="media-body">
                <h4 class="d-inline-block mb-0">
                  <a class="d-block font-size-13" href="#">{{$detail['q'] }}</a>
                </h4>
                <br>
                <div class="d-inline-block ml-2">
                    @for ($i = 0; $i < 5; $i++)
                      <i class="fas fa-star text-warning"></i>
                    @endfor
                </div>
              </div>
            </div>
          </div>
        </article>
        @endforeach
        <!-- End Blog Grid -->

        
      </div>
      <!-- End News Blog -->
    </div>
  </div>
  <!-- End Blog Grid Section -->