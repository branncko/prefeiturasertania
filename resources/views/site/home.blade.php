@extends('site.index')
@section('completarheader')
    <style>
        .modal-backdrop {
            z-index: 0;
        }
    </style>
    @endsection
@section('content_index')
    <div class="container">

        
<div class="row">
    <div class="container">
        <div class="co-sm-12">
            <a href="https://docs.google.com/forms/d/1li1LzAzw5V9OCK3iyFjwkGpC8oDMOfDZT97NPdOiZTU/viewform?edit_requested=true" target="_BLANK"><img src="{{asset('CADASTROPROGRAMADEREGIONALIZACAODOTURISMO.jpg')}}" alt="" class="img-responsive"></a>
        </div>
    </div>
    <div class="container">
        <div class="col-sm-6">
            <div class="alert alert-danger alert-dismissible text-center" role="alert">
                    <h2><b>Concurso Público da Prefeitura de Sertânia-PE 2019</b></h2> 
                    <p><small><a href="{!! route('downloads') !!}">Publicações na aba Download</a></small></p>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="alert alert-danger alert-dismissible text-center" role="alert">
                    <a href="http://transparencia.sertania.pe.gov.br/portal/v81/indexent/indexent.php?entidade=210&idoc=covid" target="_blank"><h2><b>Transparência COVID-19</b></h2> </a>
            </div>
        </div>
    </div>

</div>

        <div class="row">
            <!-- Slider -->
            <div class="col-sm-6 col-lg-6">

                <div class="container">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">

                            <?php $ic=0; ?>
                            @foreach($noticiasCarousel as $noticiacarousel)
                                <div class="item @if($ic == 0) active @endif">

                                    <?php if ( substr($noticiacarousel->photo, 0 , 4) == 'http' ) { ?>
                                    <img src="{!!  $noticiacarousel->photo !!}" alt="img" class="img-thumbnail img-responsive" width="760" height="400" />
                                    <?php } else { ?>
                                        <img src="{!! route('arquivo-carousel',$noticiacarousel->id) !!}">
                                    <?php } ?>



                                    <div class="carousel-caption">
                                        <h4><a href="{!! route('noticias-ler',[$noticiacarousel->id,$noticiacarousel->slug]) !!}">{!! $noticiacarousel->title !!}</a></h4>
                                        <p>{!! $noticiacarousel->sobre !!}</p>
                                    </div>
                                </div><!-- End Item -->
                                <?php $ic++; ?>
                            @endforeach



                        </div><!-- End Carousel Inner -->


                        <ul class="list-group col-sm-4">
                            <?php $ic=0; ?>
                            @foreach($noticiasCarousel as $noticiacarousel)
                                <li data-target="#myCarousel" data-slide-to="{!! $ic !!}" class="list-group-item @if($ic==0) active @endif">
                                    <h5 class="media-heading">{!! $noticiacarousel->categorias->name !!}</h5>
                                    <h4>{!! $noticiacarousel->title !!}</h4>
                                </li>
                                <?php $ic++; ?>
                            @endforeach
                        </ul>

                        <!-- Controls -->
                        <div class="carousel-controls">
                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                <span class="fa fa-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                <span class="fa fa-chevron-right"></span>
                            </a>
                        </div>

                    </div><!-- End Carousel -->
                </div>

            </div>

            <!-- Thumbnail Slider -->
        </div>


        <div class="col-md-8 col-lg-8"  data-effect="slide-right">
            <ul class="media-list">
                @foreach($noticiasMais as $noticiasMaisUni)

                    <li class="media">
                        <a class="pull-left" href="{!! route('noticias-ler',[$noticiasMaisUni->id,$noticiasMaisUni->slug]) !!}" style="width: 74px; height: 74px;">

                            <?php if ( substr($noticiasMaisUni->photo, 0 , 4) == 'http' ) { ?>
                            <img src="{!!  $noticiasMaisUni->photo !!}" alt="img" class="img-thumbnail img-responsive" width="760" height="400" />
                            <?php } else { ?>
                            <img src="{!! route('arquivo-carousel',$noticiasMaisUni->id) !!}">
                            <?php } ?>


                            {{--<img class="media-object img-thumbnail"   src="{!! route('arquivo-chamadinhas',$noticiasMaisUni->id) !!}">--}}
                        </a>
                        <div class="media-body">
                            <h5 class="media-heading">{!! $noticiasMaisUni->categorias->name !!}</h5>
                            <h4><a href="{!! route('noticias-ler',[$noticiasMaisUni->id,$noticiasMaisUni->slug]) !!}">{!! $noticiasMaisUni->title !!} <span class="badge"><i class="fa fa-eye"></i> {!! $noticiasMaisUni->visualizado !!}</span></a> <a href="whatsapp://send?text={!! $noticiasMaisUni->title !!} {!! route('noticias-ler',[$noticiasMaisUni->id,$noticiasMaisUni->slug]) !!}" data-action="share/whatsapp/share" class="btn btn-success btn-xs"><i class="fa fa-whatsapp"></i></a></h4>
                        </div>

                    </li>
                @endforeach
            </ul>




            <div class="row">
                @foreach($publicidades as $campanha)

                    <div class="col-lg-6 col-sm-6 ">
                        <a href="@if($campanha->link != null) {!! $campanha->link !!} @else javascript:void(0); @endif" class="thumbnail">



                            <img src="{!! route('arquivo-campanha', $campanha->id) !!}" alt="">

                        </a>
                    </div>
                @endforeach
            </div>
        </div>


        {{--Lateral--}}
       @include('site.acessorapido')
    </div>


    
<div class="modal fade " id="modalLicitacao" tabindex="-1" role="dialog">--}}
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h2 class="modal-title"><strong>{{$modal->titulo}}</strong></h2>
                </div>
                <div class="modal-body">

                    {!!$modal->conteudo!!}

                    @if($modal->link)<p><a href="{{$modal->link}}" class="btn btn-success btn-xs">{{$modal->texto_link}}</a></p>@endif
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    {{--<div class="modal fade" id="modalMedicos" tabindex="-1" role="dialog">--}}
        {{--<div class="modal-dialog" role="document">--}}
            {{--<div class="modal-content">--}}
                {{--<div class="modal-header">--}}
                    {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
                    {{--<h2 class="modal-title"><strong>SELEÇÃO MÉDICOS 2018</strong></h2>--}}
                {{--</div>--}}
                {{--<div class="modal-body">--}}

                    {{--<h3><a href="http://sertania.pe.gov.br/downloads/13">EDITAL SELEÇÃO MÉDICOS 2018</a></h3>--}}
                    {{--<p>Edital para seleção simplificada de médicos do Governo Municipal de Sertânia</p>--}}

                    {{--<h3><a href="http://sertania.pe.gov.br/downloads/14">FICHA DE INSCRIÇÃO SELEÇÃO MÉDICOS 2018</a></h3>--}}
                    {{--<p>Ficha de inscrição para seleção simplificada de médicos do Governo Municipal de Sertânia</p>--}}
                {{--</div>--}}

            {{--</div><!-- /.modal-content -->--}}
        {{--</div><!-- /.modal-dialog -->--}}
    {{--</div><!-- /.modal -->--}}

@endsection
@section('content_index_js')
@if($modal->liberado)
    <script>
        $(document).ready(function(){
           $('#modalLicitacao').modal('show');
        });
    </script>
@endif
@endsection
