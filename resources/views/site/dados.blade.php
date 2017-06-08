@extends('site.index')

@section('content_index')
    <div class="container">

        <div class="row">
            <!-- Slider -->
            <div class="col-sm-8 col-lg-8">
                <div class="well">

                        <h3>Sertânia</h3>
                        <h4>Dados</h4>
                    <div class="article-like-comment-date">

                        <a href="javascript:print();" title="Imprimir" class="hidden-xs btn btn-default btn-xs"><i class="fa fa-print"></i></a>


                    </div>
                    <div class="divider-dashed">
                        <hr>
                    </div>

                   <p><strong> Distritos e povoados</strong></p>
                    <ul>
                        <li>Sede
                        <li>Algodões</li>
                        <li>Henrique Dias</li>
                        <li>Rio da Barra</li>
                        <li>Albuquerque-Né</li>
                        <li><strong>Povoados:</strong> Pernambuquinho, Waldemar Siqueira, Moderna, Caroalina, Várzea Velha, Umburanas e Cruzeiro do Nordeste</li>
                    </ul>

                    <p><strong>Características Geográficas</strong></p>
                    <p>Área   2.421,511 Km²</p>
                    <p>População 35.367 hab / IBGE 2015</p>

                </div>
            </div>

            <!-- Thumbnail Slider -->


            {{--Lateral--}}
            <div class="col-md-4 col-lg-4 pull-right">

                <div class="well" style="max-width: 340px; padding: 0px 0; ">

                    @include('site.menucidade')


                </div>
            </div>
        </div>
    </div>

@endsection