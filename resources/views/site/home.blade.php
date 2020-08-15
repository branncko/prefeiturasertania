@extends('site.index')
@section('completarheader')
    <style>
        .modal-backdrop {
            z-index: 0;
        }
    </style>
    @endsection
@section('content_index')
    <div class="container">

        <div class="row">
            <div class="container">
               
                <div class="col-sm-12">
                    <div class="alert alert-danger alert-dismissible text-center" role="alert">
                            <h2><b>Concurso Público da Prefeitura de Sertânia-PE 2019</b></h2> 
                            <p><small><a href="{!! route('downloads') !!}">Publicações na aba Download</a></small></p>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="alert alert-danger alert-dismissible text-center" role="alert">
                            <a href="http://tenosoftsistemas.com.br/portal/v81/indexent/indexent.php?entidade=210&idoc=covid" target="_blank"><h2><b>Transparência COVID-19</b></h2> </a>
                    </div>
                </div>
              
                
            </div>
        </div>

        


        


        {{--Lateral--}}
       @include('site.acessorapido')
    </div>


    
<div class="modal fade " id="modalLicitacao" tabindex="-1" role="dialog">--}}
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h2 class="modal-title"><strong>{{$modal->titulo}}</strong></h2>
                </div>
                <div class="modal-body">

                    {!!$modal->conteudo!!}

                    @if($modal->link)<p><a href="{{$modal->link}}" class="btn btn-success btn-xs">{{$modal->texto_link}}</a></p>@endif
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    {{--<div class="modal fade" id="modalMedicos" tabindex="-1" role="dialog">--}}
        {{--<div class="modal-dialog" role="document">--}}
            {{--<div class="modal-content">--}}
                {{--<div class="modal-header">--}}
                    {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
                    {{--<h2 class="modal-title"><strong>SELEÇÃO MÉDICOS 2018</strong></h2>--}}
                {{--</div>--}}
                {{--<div class="modal-body">--}}

                    {{--<h3><a href="http://sertania.pe.gov.br/downloads/13">EDITAL SELEÇÃO MÉDICOS 2018</a></h3>--}}
                    {{--<p>Edital para seleção simplificada de médicos do Governo Municipal de Sertânia</p>--}}

                    {{--<h3><a href="http://sertania.pe.gov.br/downloads/14">FICHA DE INSCRIÇÃO SELEÇÃO MÉDICOS 2018</a></h3>--}}
                    {{--<p>Ficha de inscrição para seleção simplificada de médicos do Governo Municipal de Sertânia</p>--}}
                {{--</div>--}}

            {{--</div><!-- /.modal-content -->--}}
        {{--</div><!-- /.modal-dialog -->--}}
    {{--</div><!-- /.modal -->--}}

@endsection
@section('content_index_js')
@if($modal->liberado)
    <script>
        $(document).ready(function(){
           $('#modalLicitacao').modal('show');
        });
    </script>
@endif
@endsection
