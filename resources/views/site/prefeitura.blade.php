@extends('site.index')

@section('content_index')
    <div class="container">

        <div class="row">
            <!-- Slider -->
            <div class="col-sm-8 col-lg-8">
                <div class="well">

                        <h3>Prefeitura</h3>
                        <h4>Ângelo Ferreira - prefeito </h4>
                    <div class="article-like-comment-date">

                        <a href="javascript:print();" title="Imprimir" class="hidden-xs btn btn-default btn-xs"><i class="fa fa-print"></i></a>


                    </div>
                    <div class="divider-dashed">
                        <hr>
                    </div>

                    <p>Ângelo Rafael Ferreira dos Santos foi eleito prefeito pela terceira vez, em 2016, do seu município do coração, Sertânia, no Sertão pernambucano, a 316 quilômetros da capital, o Recife. Foi deputado estadual também por três mandatos. Nasceu em 17 de julho de 1953 e formou-se em Medicina Veterinária pela Universidade Federal Rural de Pernambuco (UFRPE). Foi extensionista da Empresa de Assistência Técnica e Extensão Rural de Pernambuco (Emater-PE), durante 17 anos, onde também ocupou os cargos de supervisor e coordenador regional no município de Salgueiro (PE), além de ter sido funcionário concursado do Banco do Brasil.</p>
                    <p>A vocação política foi herdada do pai, Arlindo Ferreira dos Santos, prefeito por duas vezes do município de Sertânia. O filho seguiu o caminho trilhado pelo pai. Em 1996,  ngelo foi eleito pela primeira vez prefeito de Sertânia pelo Partido Socialista Brasileiro (PSB), com expressiva votação. Quatro anos depois, aprovado por uma extensa maioria, foi reeleito. Arlindo e seu filho foram os únicos políticos eleitos para dois mandatos de prefeito.</p>
                    <p>Em 2006, disputou pela primeira vez uma cadeira para a Assembleia Legislativa de Pernambuco, sendo o mais votado em Sertânia com 9.347 votos. Com a vitória de Eduardo Campos ao Governo do Estado, recebeu o convite para assumir a Secretaria de Agricultura e Reforma Agrária. Reconhecido e aprovado pelo trabalho à frente da pasta, deixou o cargo para disputar a reeleição.</p>
                    <p>Em 2010, obteve nas urnas o segundo mandato parlamentar consecutivo, sendo o nono mais votado do estado e, mais uma vez, foi o majoritário em Sertânia. Exerceu a função de líder do PSB na Alepe, onde a partir de 2014, iniciou seu terceiro mandato como deputado estadual, interrompido para assumir a gestão do Poder Executivo Municipal, em Sertânia, no ano de 2017.</p>


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