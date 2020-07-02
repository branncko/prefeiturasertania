@extends('site.index')

@section('content_index')
    <div class="container">

        <div class="row">
            <!-- Slider -->
            <div class="col-sm-8 col-lg-8">
                <div class="well">

                        <h3>Cadastro Artístico Cultural</h3>
                        
                    <div class="article-like-comment-date">

                        <a href="javascript:print();" title="Imprimir" class="hidden-xs btn btn-default btn-xs"><i class="fa fa-print"></i></a>


                    </div>
                    <div class="divider-dashed">
                        <hr>
                    </div>

                   <div class="jumbontron">
                    
                        <div class="row">
                            <div class="btn-group-vertical col-md-12" role="group" >
                                <a href="https://forms.gle/92ZNSRmxbUNQ8Ua16" target="_blank" type="button " style="font-size: 18px!important;" class="btn btn-danger col-md-12">Artista Pessoa Física</a>
                                <a href="https://forms.gle/htVJWed3XUMSAACE9" target="_blank" type="button " style="font-size: 18px!important; border-top: 1px solid #fff" class="btn btn-danger col-md-12">Artista Pessoa Jurídica</a>
                            </div>
                        </div>
                   </div>
 

                </div>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="alert alert-danger" role="alert">Para realizar o cadastro será necessário fazer login usando uma conta Gmail</div>
                    </div>
                  </div>
            </div>

            <!-- Thumbnail Slider -->


             
        </div>
    </div>

@endsection