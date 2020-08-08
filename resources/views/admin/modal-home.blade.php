@extends('layouts.app-ad')

@section('conteudo')

    <div class="page-title">
        <div class="title_left">
            <h3>Modais</h3>
        </div>


    </div>
    <div class="clearfix"></div>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">

            <div class=" x_title">

                    <h3>Modal Home</h3>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="col-md-12 col-sm-12 col-xs-12">

                    {!! Form::model($modal, ['route' => ['modal-home-post', $modal->id],'id'=>'demo-form','data-parsley-validate','class'=>'form-horizontal','enctype'=>'multipart/form-data']) !!}

                        {{ csrf_field()  }}
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Título</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                {!! Form::text('titulo',old('titulo') ,['class'=>'form-control','required']) !!}

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Link</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                {!! Form::text('link',old('link') ,['class'=>'form-control']) !!}

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Texto Para Botão de Link</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                {!! Form::text('texto_link',old('texto_link') ,['class'=>'form-control']) !!}

                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Ativar Modal</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <div class="">
                                    <label>
                                        <input name="liberado" value="1" type="checkbox" class="js-switch" @if($modal->liberado) checked @endif /> Sim?
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Conteudo</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">

                                {!! Form::textarea('conteudo',old('conteudo') ,['id'=>'editor']) !!}

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12"> </label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <div class="">
                                    <button class="btn btn-success" type="submit">Enviar Formulário</button>
                                </div>
                            </div>
                        </div>
                    </form>



                </div>
            </div>

            <div class="clearfix"></div>
        </div>


    </div>

</div>

    <script>
        $(document).ready(function() {

            $(".select2_single").select2({

                placeholder: "Máximo de 1 categoria",
                allowClear: true
            });




            var HelloButton = function (context) {
                var ui = $.summernote.ui;

                // create button
                var button = ui.button({
                    contents: '<i class="fa fa-child"/> Hello',
                    tooltip: 'hello',
                    click: function () {
                        // invoke insertText method with 'hello' on editor module.
                        context.invoke('editor.insertText', 'hello');
                    }
                });

                return button.render();   // return button as jquery object
            }


            $('textarea#editor').summernote({
                height: 300,

            });



        });
    </script>


    <!-- select2 -->
    <script src="{!! asset('assets-admin/js/select/select2.full.js') !!}"></script>


    <!-- textarea resize -->
    <script src="{{ asset('assets-admin/js/textarea/autosize.min.js') }}"></script>
    <script>
        autosize($('.resizable_textarea'));
    </script>

@endsection
