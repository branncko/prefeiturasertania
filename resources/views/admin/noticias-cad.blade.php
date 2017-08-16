@extends('layouts.app-ad')

@section('conteudo')

    <div class="page-title">
        <div class="title_left">
            <h3>Notícias </h3>
        </div>

        {{--<div class="title_right">--}}
            {{--<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">--}}
                {{--<div class="input-group">--}}
                    {{--<input type="text" class="form-control" placeholder="Search for...">--}}
                    {{--<span class="input-group-btn">--}}
                            {{--<button class="btn btn-default" type="button">Go!</button>--}}
                        {{--</span>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>
    <div class="clearfix"></div>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">

            <div class=" x_title">

                    <h3>Cadastrar nova notícia</h3>
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
                    <form action="{!! route('noticia-salva') !!}" id="demo-form" data-parsley-validate class="form-horizontal " enctype="multipart/form-data" method="post">
{{ csrf_field()  }}
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Título</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <input type="text" id="title" class="form-control" name="title" required  value="{!! old("titulo") !!}"/>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Por</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <input type="text" id="por" class="form-control" name="por"  value="{!! old("por") !!}" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Categoria</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                {!! Form::select('categoria', $categorias, old('categoria') , ['class'=> 'select2_single form-control']) !!}

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Sobre/Pequeno Texto</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                 <textarea id="message" required="required" class="form-control" name="sobre" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                                           data-parsley-validation-threshold="10">{!! old('sobre') !!}</textarea>

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Foto Matéria</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <input type="file" id="photo_escolhe" class="form-control photo-escolhe" name="photo_escolhe"  />
                                <input type="text" id="foto" class=" photoenviada" name="photo">

                                <small>Tamanho da foto: 760 x 400</small>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw text-danger loadimg"></i>
                                <img src="" class="hide img-responsive fotoenviadapreview" alt="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Crédito Foto</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <input type="text" id="creditophoto" class="form-control" name="creditophoto"  value="{!! old("creditophoto") !!}" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Legenda Foto</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <input type="text" id="legendphoto" class="form-control" name="legendphoto" value="{!! old("legendphoto") !!}"  />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Liberar Notícia</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <div class="">
                                    <label>
                                        <input name="ativo" type="checkbox" class="js-switch" checked /> Sim?
                                    </label>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Colocar em Destaque</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <div class="">
                                    <label>
                                        <input name="carousel" type="checkbox" class="js-switch" checked /> Sim
                                    </label>
                                </div>
                            </div>
                        </div>



                    <div class="form-group">
                        <label for="" class="control-label">
                            Escreva a notícia abaixo
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div>
                                <textarea name="texto" id="editor" >{!! old("texto") !!}</textarea>
                            </div>
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


    <script src="https://www.gstatic.com/firebasejs/4.2.0/firebase.js"></script>
    <script>
        // Initialize Firebase
        var config = {
            apiKey: "AIzaSyAXDBVfcQx-z6rBAEjUtLqdZSgZzuQsgY4",
            authDomain: "governo-sertania.firebaseapp.com",
            databaseURL: "https://governo-sertania.firebaseio.com",
            projectId: "governo-sertania",
            storageBucket: "governo-sertania.appspot.com",
            messagingSenderId: "509975170605"
        };
        firebase.initializeApp(config);
    </script>


    <script src="{{ asset('assets-admin/js/foto-firebase.js') }}"></script>


    <script>
        autosize($('.resizable_textarea'));
    </script>

@endsection
