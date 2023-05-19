<div class="container space-2">
    <h2 style="text-align: center;">Frequently asked questions</h2>
    <br>
    <div class="container  content-space-1 content-space-t-md-4 content-space-b-md-3">
        <div id="basicsAccordion">
            @foreach(json_decode($block->details, true) as $key => $detail)
            <div class="card mb-3">
                <div class="card-header card-collapse__header" id="basicsHeading{{ $key }}">
                    <h5 class="mb-0">
                        <button class="btn btn-link btn-block d-flex justify-content-between card-collapse__btn p-3"
                                data-toggle="collapse"
                                data-target="#basicsCollapse{{ $key }}"
                                aria-expanded="true"
                                aria-controls="basicsCollapse{{ $key }}">
                                {{ $detail['text'] }}  
                            <span class="card-collapse__btn-arrow">
                                <span class="fa fa-arrow-down small"></span>
                            </span>
                        </button>
                    </h5>
                </div>
                <div id="basicsCollapse{{ $key }}" class="collapse @if($key == 0) show @endif"
                    aria-labelledby="basicsHeading{{ $key }}"
                    data-parent="#basicsAccordion">
                    <div class="card-body card-collapse__body">
                        {{ $detail['q'] }}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
