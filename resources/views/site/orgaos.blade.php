@extends('site.index')

@section('content_index')
    <div class="container">

        <div class="row">
            <!-- Slider -->
            <div class="col-sm-8 col-lg-8">
                <div class="well">
                   @if($orgaosPrimeira != null)
                    <h3><strong>{!! $orgaosPrimeira->titulo !!}</strong></h3>
                    <div class="divider-dashed">
                        <hr>
                    </div>
                    {!! $orgaosPrimeira->sobre !!}
                   @else
                       <h4>Orgãos a serem registrados</h4>
                    @endif
                </div>
            </div>

            <!-- Thumbnail Slider -->


            {{--Lateral--}}
            <div class="col-md-4 col-lg-4 pull-right">
                <ul class="breadcrumb" style="margin-bottom: 0px;">
                    <li class="active">Orgãos</li>
                </ul>
                <div class="well" style="max-width: 340px; padding: 8px 0; ">

                    <ul  class="nav nav-list">

                        @foreach($orgaos as $orgao)
                            <li>
                                <a href="{!! route('orgaos-one',$orgao->id) !!}">{!! $orgao->titulo !!}</a>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection