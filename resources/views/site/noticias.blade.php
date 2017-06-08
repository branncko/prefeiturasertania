@extends('site.index')

@section('content_index')
    <div class="container">




        <div class="col-md-8 col-lg-8"  data-effect="slide-right">
           <div class="well">
               <h3><strong>Notícias</strong></h3>
               <div class="divider-dashed">
                   <hr>
               </div>
               @if($errors->any())
                   <div class="alert alert-danger">
                       @foreach ($errors->all() as $error)
                           <p>{{ $error }}</p>
                       @endforeach
                   </div>
               @endif
               <ul class="media-list">
                   @foreach($noticias as $noticiasMaisUni)

                       <li class="media">
                           <a class="pull-left" href="#" style="width: 74px; height: 74px;">
                               <img class="media-object img-thumbnail"   src="{!! route('arquivo-chamadinhas',$noticiasMaisUni->id) !!}">
                           </a>
                           <div class="media-body">
                               <h5 class="media-heading">{!! $noticiasMaisUni->categorias->name !!}</h5>
                               <h4><a href="{!! route('noticias-ler',[$noticiasMaisUni->id,$noticiasMaisUni->slug]) !!}">{!! $noticiasMaisUni->title !!} <span class="badge"><i class="fa fa-eye"></i> {!! $noticiasMaisUni->visualizado !!}</span> </a></h4>
                           </div>
                           <div class="media-footer">
                               <a href="whatsapp://send?text={!! $noticiasMaisUni->title !!} {!! route('noticias-ler',[$noticiasMaisUni->id,$noticiasMaisUni->slug]) !!}" data-action="share/whatsapp/share" class="btn btn-success btn-xs"><i class="fa fa-whatsapp"></i></a>

                           </div>
                           <div class="divider">
                               <hr></div>
                       </li>
                   @endforeach
               </ul>

               {!! $noticias->links() !!}
           </div>
        </div>

        {{--Lateral--}}
        @include('site.acessorapido')

    </div>

@endsection