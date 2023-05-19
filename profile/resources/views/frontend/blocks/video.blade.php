@php
$details = json_decode($block->details);
// dd($details);
@endphp
  <!-- Video Section -->
  <div class="container">
    <!-- Title -->
    <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-9">
        <h2 class="h3">{{ $details[0]->text }}</h2>
        <p>{{ $details[0]->q }}</p>
    </div>
    <!-- End Title -->

    <div class="row justify-content-sm-center text-center">
      <div class="col-lg-9 col-xl-8">
        <!-- Video Block -->
        <div id="youTubeVideoPlayer" class="u-video-player mb-5">
          {{-- <!-- Cover Image -->
          <img class="img-fluid u-video-player__preview" src="./Home Page _ Space - Responsive Website Template_files/img1(1).jpg" alt="Image">
          <!-- End Cover Image --> --}}

          <!-- Play Button -->
          <a class="js-inline-video-player u-video-player__btn u-video-player__centered" href="javascript:;" data-parent="youTubeVideoPlayer" data-target="youTubeVideoIframe" data-classes="u-video-player__played">
            <span class="u-video-player__icon">
              <span class="fa fa-play u-video-player__icon-inner"></span>
            </span>
          </a>
          <!-- End Play Button -->
         @php
                // The YouTube video link
                $link = $details[0]->link;

                // Extract the video ID from the link
                preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user|shorts)\/))([^\?&\"'>]+)/", $link, $matches);

                // Construct the embed URL using the extracted video ID
                $videoId = $matches[1];
                $embedUrl = "https://www.youtube.com/embed/$videoId";

                // Output the embed URL
                // echo $embedUrl;
         @endphp
          <!-- Video Iframe -->
          <div class="embed-responsive embed-responsive-16by9">
            <iframe id="youTubeVideoIframe" class="embed-responsive-item" src="<?php echo $embedUrl; ?>"></iframe>
        </div>
          <!-- End Video Iframe -->
        </div>
        <!-- End Video Block -->

      </div>
    </div>
  </div>
  <!-- End Video Section -->
