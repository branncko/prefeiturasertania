@extends('layouts.app-ad')

@section('conteudo')

    <div class="page-title">
        <div class="title_left">
            <h3>Administradores </h3>
        </div>

    </div>
    <div class="clearfix"></div>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">

            <div class=" x_title">

                    <h3>Lista de usuários registrados</h3>
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
                                <th class="column-title">Email</th>
                                <th class="column-title">Data Cadastrado</th>

                                <th class="column-title">Data de dados atualizados</th>
                                <th class="bulk-actions" colspan="7">
                                    Excluir administradores selecionadas? ( <span class="action-cnt"> </span> ) <a class="antoo btn btn-danger btn-xs" style="color:#fff; font-weight:500;"><i class="fa fa-trash"></i></a>
                                </th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($admins as $admin)
                            <tr class="even pointer @if(!$admin->ativo) warning @endif">
                                <td class="a-center ">
                                    <input type="checkbox" value="{!! $admin->id !!}" class="flat" name="table_records">
                                </td>

                                <td class=" ">{!! $admin->name !!}</td>
                                <td class=" ">{!! $admin->email !!}</td>
                                <td class=" ">{!! $admin->created_at->format('d/m/Y') !!}</td>
                                <td class=" ">{!! $admin->updated_at->format('d/m/Y')  !!}</td>


                                </td>
                            </tr>
                           @endforeach
                            </tbody>

                        </table>

                        {{ $admins->links() }}


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
