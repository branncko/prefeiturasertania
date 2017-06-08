@extends('site.index')

@section('content_index')
    <div class="container">

        <div class="row">
            <!-- Slider -->
            <div class="col-sm-8 col-lg-8">
                <div class="well">

                        <h3>Sertânia</h3>
                        <h4>Simbolos</h4>
                    <div class="article-like-comment-date">

                        <a href="javascript:print();" title="Imprimir" class="hidden-xs btn btn-default btn-xs"><i class="fa fa-print"></i></a>


                    </div>
                    <div class="divider-dashed">
                        <hr>
                    </div>

                  <div class="row">
                      <div class="col-lg-6 col-sm-6 ">
                          <div class="thumbnail">
                              <img src="{!! asset('imagens/bandeira_sertania.jpg') !!}" alt="">
                              <div class="caption">
                                  <h3>Bandeira</h3>

                              </div>
                          </div>
                      </div>
                      <div class="col-lg-6 col-sm-6 ">
                          <div class="thumbnail">
                              <img src="{!! asset('imagens/brasao_sertania.png') !!}" alt="">
                              <div class="caption">
                                  <h3>Brasão</h3>

                              </div>
                          </div>
                      </div>
                  </div>

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