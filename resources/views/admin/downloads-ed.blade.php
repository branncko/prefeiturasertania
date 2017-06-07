@extends('layouts.app-ad')

@section('conteudo')

    <div class="page-title">
        <div class="title_left">
            <h3>Downloads </h3>
        </div>


    </div>
    <div class="clearfix"></div>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">

            <div class=" x_title">

                    <h3>Editar Download</h3>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="col-md-12 col-sm-12 col-xs-12">

                    @if($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif
                        {!! Form::model($download, ['route' => ['downloads-update', $download->id],'id'=>'demo-form','data-parsley-validate','class'=>'form-horizontal','enctype'=>'multipart/form-data']) !!}

                        {{ csrf_field()  }}
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Nome</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                {!! Form::text('title',old('title') ,['class'=>'form-control','required']) !!}

                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Arquivo</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">

                                <input type="file" id="arquivo" class="form-control" name="arquivo"  />
                                <small>Selecione o arquivo acima</small>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Sobre/Pequeno Texto</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">

                                {!! Form::textarea('sobre',old('sobre') ,['id'=>'message','rows'=>'3', 'class'=>'form-control', 'required','data-parsley-trigger'=>'keyup','data-parsley-minlength'=>'20','data-parsley-maxlength'=>'100','data-parsley-minlength-message'=>'Come on! You need to enter at least a 20 caracters long comment..','data-parsley-validation-threshold'=>'10']) !!}

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
