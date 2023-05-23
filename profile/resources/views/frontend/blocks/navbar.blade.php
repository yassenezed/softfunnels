{{-- @if (json_decode($block->details, true))
<div class="container  content-space-1 content-space-t-md-4 content-space-b-md-3 my-9">
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
<!-- ========== HEADER ========== -->
@php
    $details = json_decode($block->details, true);
@endphp

<header id="header" class="navbar navbar-expand-lg navbar-light navbar-end bg-white">
    <div class="container">
        <a class="navbar-brand" href="./index.html" aria-label="Space">
                <img src="{{ asset('storage/'.$details[0]["img"]) }}" alt="Image">
        </a>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <ul class="nav ml-auto">
                    <li class="nav-item active"><a class="nav-link" href="#sect{{$details[0]['idheader1']}}">{{ $details[0]['header1'] }}</a></li>
                    <li class="nav-item active"><a class="nav-link" href="#sect{{$details[0]['idheader2']}}">{{ $details[0]['header2'] }}</a></li>
                    <li class="nav-item active"><a class="nav-link" href="#sect{{$details[0]['idheader3']}}">{{ $details[0]['header3'] }}</a></li>
                    <li class="nav-item active"><a class="nav-link" href="#sect{{$details[0]['idheader4']}}">{{ $details[0]['header4'] }}</a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>



  <!-- ========== END HEADER ========== -->