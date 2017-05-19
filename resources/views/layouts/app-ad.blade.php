@extends('layouts.admin')

@section('contentadmin')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        @yield('conteudo')
    </div>
    <br />

    <!-- footer content -->

    <footer>
        <div class="copyright-info">
            <p class="pull-right">Sistema Administrativo - by <a href="mailto:dieggopsc@gmail.com">Dieggo Carrilho</a>
            </p>
        </div>
        <div class="clearfix"></div>
    </footer>
    <!-- /footer content -->
</div>
<!-- /page content -->
@endsection