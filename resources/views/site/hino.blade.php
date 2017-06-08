@extends('site.index')

@section('content_index')
    <div class="container">

        <div class="row">
            <!-- Slider -->
            <div class="col-sm-8 col-lg-8">
                <div class="well">

                        <h3>Sertânia</h3>
                        <h4>Hino da Cidade</h4>
                    <div class="article-like-comment-date">

                        <a href="javascript:print();" title="Imprimir" class="hidden-xs btn btn-default btn-xs"><i class="fa fa-print"></i></a>


                    </div>
                    <div class="divider-dashed">
                        <hr>
                    </div>

                    <h2><em>Enamorada de Jabitacá</em></h2>
                    <p><em> Sertânia vê o sol no seu terreiro<br>
                            O cacto que a enfeita ser-lhe-á<br>
                            Promessa de um porvir alvissareiro<br>
                            Embora vá-se tudo ao Deus dará<br>
                            Calamidade em solo brasileiro<br>
                            Sertânia emerge desse mar de pó<br>
                            Para a ressurreição do Moxotó</em></p><em>
                        <p>Quanto é bela Sertânia no deserto<br>
                            Que o sol – punhal adamantino – criva<br>
                            Desperta para a glória que vem perto<br>
                            Miraculosamente rediviva</p>
                        <p>Como o vaqueiro na caatinga hirsuta<br>
                            Sertânia vive lances de odisséia<br>
                            Resiste a combustão, não foge à luta<br>
                            Seus rasgos têm fulgores de epopéia</p>
                        <p>A terra – potencial em força bruta<br>
                            Por singular aberração da idéia<br>
                            Vê raramente o Moxotó passar<br>
                            E além com o São Francisco se abraçar.</p>
                    </em><p><em><strong>Letra por Waldemar de Sousa Cordeiro</strong><strong><br>
                                <strong>Melodia por Maestro Nelson Ferreira</strong></strong></em></p>

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