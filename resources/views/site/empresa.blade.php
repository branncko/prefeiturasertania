@extends('site.index')

@section('content_index')
    <div class="container">

        <div class="row">
            <!-- Slider -->
            <div class="col-sm-8 col-lg-8">
                <div class="well">

                        <h3>Serviços para Empresas</h3>
                    <div class="article-like-comment-date">

                        <a href="javascript:print();" title="Imprimir" class="hidden-xs btn btn-default btn-xs"><i class="fa fa-print"></i></a>


                    </div>
                    <div class="divider-dashed">
                        <hr>
                    </div>
                        <p>
                    Em breve...
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

                        <li>
                            <h5><a href="#">Geografia</a></h5>
                        </li>

                        <li>
                            <h5><a href="#">Distritos e Povoados</a></h5>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection