@if (json_decode($block->details, true))
<!-- Hero Section -->
<div class="js-slick-carousel u-slick"
data-infinite="true"
data-autoplay="true"
data-speed="7000"
data-fade="true"
data-adaptive-height="true"
data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-classic u-slick__arrow-centered--y rounded-circle"
data-arrow-left-classes="fa fa-arrow-left u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left ml-lg-2 ml-xl-4"
data-arrow-right-classes="fa fa-arrow-right u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right mr-lg-2 mr-xl-4"
data-numbered-pagination="#slickPaging" id="sect{{$block->id}}">
<!-- Slide #1 -->
@foreach (json_decode($block->details, true) as $detail)
<div class="js-slide">
    <div class="d-md-flex align-items-md-center height-100vh--lg gradient-overlay-half-dark-v2 bg-img-hero" style="background-image: url({{ asset('storage/'.$detail["img"]) }});">
        <div class="container text-center space-2 space-3--md">
   <!-- Description -->
   <div class="w-lg-80 mx-lg-auto mb-3">
     <h1 class="display-3 font-size-48--md-down text-white"
         data-scs-animation-in="fadeInUp">{{ $detail['text'] }}</h1>
   </div>
   <div class="w-lg-50 mx-lg-auto mb-7">
     <p class="lead text-white"
        data-scs-animation-in="fadeInUp"
        data-scs-animation-delay="200">{{ $detail['q'] }}</p>
   </div>
   <!-- End Description -->
 </div>
</div>

</div>
@endforeach 
<!-- End Slide #1 -->


</div>
<!-- End Hero Section -->

<div class="container position-relative">
    <div id="slickPaging" class="u-slick__paging-v1"></div>
  </div>
@endif
