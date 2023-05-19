 <!-- Clients Section -->
 <div class="container content-space-1 content-space-t-md-4 content-space-b-md-3 my-4">
    <!-- Title -->
    <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-9">
      <h3 class="h4">{{$block->details}}</h3>
    </div>
    <!-- End Title -->

    <!-- Slick Carousel -->
    <div class="js-slick-carousel u-slick"
         data-autoplay="true"
         data-speed="5000"
         data-infinite="true"
         data-slides-show="6"
         data-responsive='[{
           "breakpoint": 1200,
           "settings": {
             "slidesToShow": 4
           }
         }, {
           "breakpoint": 992,
           "settings": {
             "slidesToShow": 4
           }
         }, {
           "breakpoint": 768,
           "settings": {
             "slidesToShow": 3
           }
         }, {
           "breakpoint": 576,
           "settings": {
             "slidesToShow": 3
           }
         }, {
           "breakpoint": 480,
           "settings": {
             "slidesToShow": 2
           }
         }]'>
      @foreach (json_decode($block->images, true) as $image)
      <div class="js-slide">
        <img class="u-clients" src="{{ asset('storage/'.$image) }}" alt="Image Description">
      </div>
      @endforeach
     
    </div>
    <!-- End Slick Carousel -->
  </div>
  <!-- End Clients Section -->