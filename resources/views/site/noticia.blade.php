@extends('site.index')
@section('completarheader')
    <meta property="og:url"           content="{!! route('noticias-ler',[$noticia->id,$noticia->slug]) !!}" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Prefeitura Municipal de Sertânia" />
    <meta property="og:description"   content="Website oficial da Prefeitura Municipal de Sertânia-PE" />

    @if($noticia->photo != null)
    <a class="pull-left" href="#" style="width: 74px; height: 74px;">

        <?php if ( substr($noticia->photo, 0 , 4) == 'http' ) { ?>

            <meta property="og:image"         content="{!! $noticia->photo !!}" />

        <?php } ?>


    </a>
    @else
        <meta property="og:image"         content="{!! asset('imagens/logoprefeitura.png') !!}" />

    @endif

@endsection
@section('content_index')
    <div class="container noticias">

        <div class="row">
            <!-- Slider -->
            <div class="col-sm-8 col-lg-8">
                <div class="well">

                        <h2>{!! $noticia->title !!}</h2>
                    <div class="article-like-comment-date">
                        Por {!! $noticia->por !!} - em <time datetime="{!! $noticia->created_at->format('d/m/Y') !!}">{!! $noticia->updated_at->format('d/m/Y') !!}</time>
                        <a href="javascript:print();" title="Imprimir" class="hidden-xs btn btn-default btn-xs"><i class="fa fa-print"></i></a>
                        <a href="whatsapp://send?text={!! $noticia->title !!} {!! route('noticias-ler',[$noticia->id,$noticia->slug]) !!}" data-action="share/whatsapp/share" class="btn btn-success btn-xs"><i class="fa fa-whatsapp"></i></a>


                        <div class="fb-share-button"
                             data-href="{!! route('noticias-ler',[$noticia->id,$noticia->slug]) !!}"
                             data-layout="button_count">
                        </div>


                    </div>
                    <div class="divider-dashed">
                        <hr>
                    </div>
                        <p>
                            {!! $noticia->texto !!}
                        </p>
                </div>
            </div>

            <!-- Thumbnail Slider -->


            {{--Lateral--}}
            <div class="col-md-4 col-lg-4 pull-right">
                <ul class="breadcrumb" style="margin-bottom: 0px;">
                    <li class="active">Mais Notícias</li>
                </ul>
                <div class="well" style="max-width: 340px; padding: 8px 0; ">

                    <ul class="nav nav-list">
                        @foreach($noticias as $noticiac)
                        <li>
                            <div class="media-body">
                                <h6 class="media-heading">{!! $noticiac->categorias->name !!}</h6>
                                <h5><a href="{!! route('noticias-ler',[$noticiac->id,$noticiac->slug]) !!}">{!! $noticiac->title !!} <span class="badge"><i class="fa fa-eye"></i> {!! $noticiac->visualizado !!}</span> </a></h5>
                            </div>
                        </li>
                            @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection