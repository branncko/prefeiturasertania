@extends('site.index')
@section('completarheader')
    <meta property="og:url"           content="{!! route('noticias-ler',[$noticia->id,$noticia->slug]) !!}" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Prefeitura Municipal de Sertânia" />
    <meta property="og:description"   content="Website oficial da Prefeitura Municipal de Sertânia-PE" />
    <meta property="og:image"         content="{!! asset('imagens/logoprefeitura.png') !!}" />

@endsection
@section('content_index')
    <div class="container">

        <div class="row">
            <!-- Slider -->
            <div class="col-sm-8 col-lg-8">
                <div class="well">

                        <h3>{!! $noticia->title !!}</h3>
                    <div class="article-like-comment-date">
                        Por {!! $noticia->por !!} - em <time datetime="{!! $noticia->updated_at->format('d/m/Y') !!}">{!! $noticia->updated_at->format('d/m/Y') !!}</time>
                        <a href="javascript:print();" title="Imprimir" class="hidden-xs btn btn-default btn-xs"><i class="fa fa-print"></i></a>
                        <a href="whatsapp://send?text={!! $noticia->title !!} {!! route('noticias-ler',[$noticia->id,$noticia->slug]) !!}" data-action="share/whatsapp/share" class="btn btn-success btn-xs"><i class="fa fa-whatsapp"></i></a>
                        <div class="fb-share-button" data-href="http://localhost/prefeiturasertania/public/noticia/10/maciel-melo-e-xangai-se-apresentam-durante-semana-cultural-em-sertania" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={!! route('noticias-ler',[$noticia->id,$noticia->slug]) !!}&amp;src=sdkpreparse">Compartilhar</a></div>
                        <div class="fb-send" data-href="{!! route('noticias-ler',[$noticia->id,$noticia->slug]) !!}"></div>
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