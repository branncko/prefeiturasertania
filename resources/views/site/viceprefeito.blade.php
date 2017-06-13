@extends('site.index')

@section('content_index')
    <div class="container">

        <div class="row">
            <!-- Slider -->
            <div class="col-sm-8 col-lg-8">
                <div class="well">

                        <h3>Prefeitura</h3>
                        <h4>Antônio Almeida (Toinho) – vice-prefeito</h4>
                    <div class="article-like-comment-date">

                        <a href="javascript:print();" title="Imprimir" class="hidden-xs btn btn-default btn-xs"><i class="fa fa-print"></i></a>


                    </div>
                    <div class="divider-dashed">
                        <hr>
                    </div>

                    <p>Antônio Monteiro de Almeida, engenheiro agrônomo, é conhecido por muitos, como Toinho do sindicato ou, simplesmente, Toinho. De origem rural, oriundo do Sítio Campos, é por mais de 20 anos um militante sindical. Além disso, ocupou o cargo de diretor do Sindicato Rural e coordenador do Conselho de Desenvolvimento Rural de Sertânia. Foi secretário de Agricultura e Meio Ambiente nas gestões dos ex-prefeitos, Professor Ivan e Cleide Ferreira, e por duas vezes vereador. Em 2016, foi eleito como vice-prefeito do município na chapa encabeçada por Ângelo Ferreira.</p>
                </div>
            </div>

            <!-- Thumbnail Slider -->


            {{--Lateral--}}
            <div class="col-md-4 col-lg-4 pull-right">

                <div class="well" style="max-width: 340px; padding: 0px 0; ">

                    @include('site.menuprefeitura')


                </div>
            </div>
        </div>
    </div>

@endsection