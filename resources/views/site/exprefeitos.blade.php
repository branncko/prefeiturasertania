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

                    <p><i>1  Manoel Inácio da Silva Azevedo</i></p>

                    <p><i> 2  Manoel Inácio dos Santos Bem<br>
                            3  Antônio Francisco dos Santos<br>
                            4  Manoel Coelho Lins de Albuquerque<br>
                            5  Francisco Gomes da Silva<br>
                            6  Joaquim Tenório de Melo<br>
                            7  Manoel Lins de Albuquerque Né<br>
                            8  Esperidião Marinho de Sá (Vice-Prefeito eleito)<br>
                            9  Augusto Alves Feitosa<br>
                            10  Amaro Pereira Lafayette<br>
                            11  Joaquim Brasiliano de Siqueira<br>
                            12  José Estrela de Souza<br>
                            13  Osório Ferreira Firmo<br>
                            14  Francisco C. Alves dos Passos<br>
                            15  José Arruda de Albuquerque<br>
                            16  Possidônio Gomes dos Santos<br>
                            17  Demócrito Torres Lafayette<br>
                            18  Oscar Sobral<br>
                            19  Silvino Patú Neto<br>
                            20  Alcides Lopes de Siqueira<br>
                            21  José Borges de Oliveira<br>
                            22  Djalma Tavares de Gouveia<br>
                            23  Reginaldo Martins<br>
                            24  Paulo Berfort<br>
                            25  Jofre Bezerra Santa Cruz<br>
                            26  Arcôncio Lins de Albuquerque<br>
                            27  Feliciano Henrique de Morais<br>
                            28  Raul Torres Lafayette<br>
                            29  Epaminondas Morais<br>
                            30  Arlindo Ferreira dos Santos<br>
                            31  João Pereira Vale<br>
                            32  Guido Chaves Feitosa<br>
                            33  Arlindo Ferreira dos Santos<br>
                            34  Sinval Cavalcanti de Siqueira<br>
                            35  Marcelo Gomes Lafayette<br>
                            36  Raimundo Alves de Góes Melo<br>
                            37  Ângelo Rafael Ferreira dos Santos<br>
                            38  Ângelo Rafael Ferreira dos Santos<br>
                            39  José Ivan de Lima<br>
                            40 Lucicleide Xavier Ferreira dos Santos<br>
                            41 Gustavo Lins de Albuquerque<br>
                            42 Ângelo Rafael Ferreira dos Santos<br>
                        </i></p>

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