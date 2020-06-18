@extends('site.index')

@section('content_index')
    <div class="container">
        <div class="row">
            <!-- Slider -->
            <div class="col-sm-8 col-lg-8">
                <div class="well">

                        <h3>Sertânia</h3>
                        <h4>História da Cidade</h4>
                    <div class="article-like-comment-date">

                        <a href="javascript:print();" title="Imprimir" class="hidden-xs btn btn-default btn-xs"><i class="fa fa-print"></i></a>


                    </div>
                    <div class="divider-dashed">
                        <hr>
                    </div>

                    <p>O atual território do município era habitado, inicialmente, pelos índios cariris (piripães, caraíbas, rodelas, jeritacés, todos da nação Tapuia); todos já eram semi-domesticados quando se iniciou o povoamento do local. A captura e o aprisionamento dos índios para o trabalho na atividade canavieira foi o marco do povoamento e do devassamento do território. Há indícios de que os holandeses já haviam pisado na região durante a Insurreição Pernambucana, buscando ajuda dos índios cariris para a luta contra os portugueses.</p>
                    <p>Em 1792, Antão Alves, natural do município pernambucano de Vitória de Santo Antão, se muda para o povoado de Moxotó e desenvolve negócios com gado. Estabeleceu-se com a filha do português Raimundo Ferreira de Brito, Dona Catarina, e formou uma fazenda de gado nas terras do sogro português. No início do século XIX, Antão Alves inicia a construção de uma igreja dedicada à Nossa Senhora da Conceição, cedendo à igreja uma data de uma légua de quadrada de terra.</p>
                    <p>O povoamento das terras do município se deu ao redor da igreja, como de costume na população nordestina, que sempre se estabelecia em locais onde houvesse igreja ou perto de lagos e rios. Neste caso, a existência do rio Moxotó muito favoreceu o crescimento do povoado.</p>
                    <p>O município de Sertânia foi elevado à categoria de distrito em 1942, como o nome inicial de Alagoa de Baixo. No mesmo dia foi criada a freguesia, cuja sede foi transferida para o povoado de Jeritacó</p>


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