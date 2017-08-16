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

                    <h3>Editando Notícia</h3>
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

                        {!! Form::model($noticia, ['route' => ['noticia-update', $noticia->id],'id'=>'demo-form','data-parsley-validate','class'=>'form-horizontal','enctype'=>'multipart/form-data']) !!}
{{ csrf_field()  }}
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Título</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                {!! Form::text('title',old('title') ,['class'=>'form-control','required']) !!}
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Por</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                {!! Form::text('por',old('por') ,['class'=>'form-control','']) !!}

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Categoria</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">

                                {!! Form::select('categoria', $categorias, $noticia->categoria_id, ['class'=> 'select2_single form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Sobre/Pequeno Texto</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">

                                {!! Form::textarea('sobre',old('sobre') ,['id'=>'message','rows'=>'3', 'class'=>'form-control', 'required','data-parsley-trigger'=>'keyup','data-parsley-minlength'=>'20','data-parsley-maxlength'=>'100','data-parsley-minlength-message'=>'Come on! You need to enter at least a 20 caracters long comment..','data-parsley-validation-threshold'=>'10']) !!}

                            </div>
                        </div>

                        {{--<div class="form-group">--}}
                            {{--<label class="control-label col-md-2 col-sm-2 col-xs-12">Foto Matéria</label>--}}
                            {{--<span class="image col-md-2 pull-right">--}}
                                    {{--<img src="{!! route('arquivo-get',$noticia->id)!!}" alt="img" class="img-thumbnail img-responsive" />--}}
                                {{--</span>--}}
                            {{--<div class="col-md-6 col-sm-6 col-xs-12">--}}

                                {{--<input type="file" id="photo" class="form-control" name="photo" />--}}
                                {{--<small>Tamanho da foto: 760 x 400</small>--}}

                            {{--</div>--}}

                        {{--</div>--}}

                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Foto Matéria</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <input type="file" id="photo_escolhe" class="form-control photo-escolhe" name="photo_escolhe"  />
                                <input type="text" id="foto" class=" photoenviada" value="{!! $noticia->photo !!}" name="photo">

                                <small>Tamanho da foto: 760 x 400</small>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw text-danger loadimg"></i>

                                @if($noticia->photo != null)
                                    <?php if ( substr($noticia->photo, 0 , 4) == 'http' ) { ?>
                                        <img src="{!!  $noticia->photo !!}" alt="img" class="img-thumbnail img-responsive fotoenviadapreview" width="760" height="400" />
                                    <?php } else { ?>
                                        <img src="{!! route('arquivo-carousel',$noticia->id) !!}" class="img-responsive fotoenviadapreview" alt="">
                                    <?php } ?>
                                @else
                                    <img src="" class="hide img-responsive fotoenviadapreview" alt="">

                                @endif

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Crédito Foto</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                {!! Form::text('creditophoto',old('creditophoto') ,['class'=>'form-control','']) !!}

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Legenda Foto</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                {!! Form::text('legendphoto',old('legendphoto') ,['class'=>'form-control','']) !!}

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Liberar Notícia</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <div class="">
                                    <label>
                                        <input name="ativo" value="1" type="checkbox" class="js-switch" @if($noticia->ativo) checked @endif /> Sim?
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Colocar como Destaque</label>
                            <div class="col-md-10 col-sm-10 col-xs-12">
                                <div class="">
                                    <label>
                                        <input name="carousel" value="1" type="checkbox" class="js-switch" @if($noticia->carousel) checked @endif /> Sim
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
                                {!! Form::textarea('texto',old('texto') ,['id'=>'editor']) !!}

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
