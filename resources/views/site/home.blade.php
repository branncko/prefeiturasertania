@extends('site.index')

@section('content_index')
    <div class="container">

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
                                    <img src="{!! route('arquivo-carousel',$noticiacarousel->id) !!}">
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
                            <img class="media-object img-thumbnail"   src="{!! route('arquivo-chamadinhas',$noticiasMaisUni->id) !!}">
                        </a>
                        <div class="media-body">
                            <h5 class="media-heading">{!! $noticiasMaisUni->categorias->name !!}</h5>
                            <h4><a href="{!! route('noticias-ler',[$noticiasMaisUni->id,$noticiasMaisUni->slug]) !!}">{!! $noticiasMaisUni->title !!} <span class="badge"><i class="fa fa-eye"></i> {!! $noticiasMaisUni->visualizado !!}</span> </a></h4>
                        </div>
                        <div class="media-footer">
                            <a href="whatsapp://send?text={!! $noticiasMaisUni->title !!} {!! route('noticias-ler',[$noticiasMaisUni->id,$noticiasMaisUni->slug]) !!}" data-action="share/whatsapp/share" class="btn btn-success btn-xs"><i class="fa fa-whatsapp"></i></a>

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

@endsection