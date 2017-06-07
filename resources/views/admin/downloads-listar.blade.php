@extends('layouts.app-ad')

@section('conteudo')

    <div class="page-title">
        <div class="title_left">
            <h3>Downloads </h3>
        </div>

        <div class="title_right">
            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <form action="{!! route('downloads-buscar') !!}" method="post">
                    {!! csrf_field() !!}
                    <div class="input-group">
                        <input type="text" name="busca" class="form-control" placeholder="Buscar...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">

            <div class=" x_title">

                    <h3>Lista de downloads registradas</h3>
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

                        @if (Session::has('sucesso'))
                            <div class="alert alert-info">{{ Session::get('sucesso') }}</div>
                        @endif


                        <table class="table table-striped responsive-utilities jambo_table bulk_action">
                            <thead>
                            <tr class="headings">
                                <th>
                                    <input type="checkbox" id="check-all" class="flat">
                                </th>
                                <th class="column-title">Nome </th>
                                <th class="column-title">Data Cadastrada</th>

                                <th class="column-title">Editada em</th>

                                <th class="column-title no-link last"><span class="nobr">Ações</span>
                                </th>
                                <th class="bulk-actions" colspan="7">
                                    Excluir selecionadas? ( <span class="action-cnt"> </span> ) <a class="antoo btn btn-danger btn-xs" style="color:#fff; font-weight:500;"><i class="fa fa-trash"></i></a>
                                </th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($downloads as $download)
                            <tr class="even pointer">
                                <td class="a-center ">
                                    <input type="checkbox" value="{!! $download->id !!}" class="flat" name="table_records">
                                </td>
                                <td class=" ">{!! $download->title !!}</td>
                                <td class=" ">{!! $download->created_at !!}</td>
                                <td class=" ">{!! $download->updated_at !!}</td>



                                <td class=" last"><a href="{!! route("downloads-mostra",$download->id) !!}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i> </a><a href="{!! route('downloads-deleta',$download->id) !!}" onclick="return confirm('Você deseja mesmo excluir este download?')" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                           @endforeach
                            </tbody>

                        </table>

                        {{ $downloads->links() }}


                </div>
            </div>

            <div class="clearfix"></div>
        </div>


    </div>

</div>

    <script>
        $(document).ready(function() {

            $(".select2_multiple").select2({
                maximumSelectionLength: 1,
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
