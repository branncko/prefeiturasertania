@extends('site.index')

@section('content_index')
    <div class="container">

        <div class="row">
            <!-- Slider -->
            <div class="col-sm-12 col-lg-12">
                <div class="well">


                    <div class="list-group">
                        @foreach($downloads as $download)
                            <a href="{!! route('downloads-one', $download->id) !!}" target="_blank" class="list-group-item">
                                <span class="badge">{!! $download->quantidade !!} downloads</span>
                                <h4 class="list-group-item-heading"><strong>{!! $download->title !!}</strong></h4>
                                <p class="list-group-item-text">{!! $download->sobre !!}</p>

                            </a>
                        @endforeach
                    </div>

                </div>
            </div>

        </div>
    </div>

@endsection