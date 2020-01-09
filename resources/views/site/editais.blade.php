@extends('site.index')

@section('content_index')
    <div class="container">

        <div class="row">
            <!-- Slider -->
            <div class="col-sm-12 col-lg-12">
                <div class="well">
    <h3><strong>Editais</strong></h3>
                    <div class="divider-dashed">
                        <hr>
                    </div>
                    <div class="list-group">
                        @foreach($editais as $editais)
                            <a href="{!! route('editais-one', $editais->id) !!}" target="_blank" class="list-group-item">
                                <span class="badge">{!! $editais->quantidade !!} downloads</span>
                                <h4 class="list-group-item-heading"><strong>{!! $editais->title !!}</strong></h4>
                                <p class="list-group-item-text">{!! $editais->sobre !!}</p>

                            </a>
                        @endforeach
                    </div>

                </div>
            </div>

        </div>
    </div>

@endsection