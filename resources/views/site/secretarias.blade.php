@extends('site.index')

@section('content_index')
    <div class="container">

        <div class="row">
            <!-- Slider -->
            <div class="col-sm-8 col-lg-8">
                <div class="well">
                    @if($secretariaPrimeira != null)

                    <h3><strong>{!! $secretariaPrimeira->titulo !!}</strong></h3>
                    <div class="divider-dashed">
                        <hr>
                    </div>
                    {!! $secretariaPrimeira->sobre !!}
                        @else
                    <h4>Secretarias a serem registradas</h4>
                        @endif
                </div>
            </div>

            <!-- Thumbnail Slider -->


            {{--Lateral--}}
            <div class="col-md-4 col-lg-4 pull-right">
                <ul class="breadcrumb" style="margin-bottom: 0px;">
                    <li class="active">Secretarias</li>
                </ul>
                <div class="well" style="max-width: 340px; padding: 8px 0; ">

                    <ul  class="nav nav-list">

                        @foreach($secretarias as $secretaria)
                        <li>
                            <a href="{!! route('secretarias-one',$secretaria->id) !!}">{!! $secretaria->titulo !!}</a>
                        </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection