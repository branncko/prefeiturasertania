@extends('site.index-turismo')

@section('content_index')
    <div class="container">

        <div class="row">
            <!-- Slider -->
            <div class="col-sm-12 col-lg-12" style="margin-top: 20px">
                <div class="well">


                    <div class="row">
                        <div class="col-md-4"><img src="{!! asset('imagens/CALENDARIODEEVENTOS.png') !!}" alt="Side Logo" style="padding-top: 0px;" class="img-responsive" data-pin-nopin="true"></div>
                        <div class="col-md-4"><img src="{!! asset('imagens/REDEHOTELEIRALANCHONETESERESTARURANTES.png') !!}" alt="Side Logo" style="padding-top: 0px;" class="img-responsive" data-pin-nopin="true"></div>
                        <div class="col-md-4"><a href="{{route('turismo-fotos')}}"><img src="{!! asset('imagens/ROTADOTURISMOTELAPRINCIPAL.png') !!}" alt="Side Logo" style="padding-top: 0px;" class="img-responsive" data-pin-nopin="true"></a></div>
                    </div>

                    <div class="divider-dashed">
                        <hr>
                    </div>
                        
                    
                </div>
            </div>

            <!-- Thumbnail Slider -->


        </div>
    </div>

@endsection