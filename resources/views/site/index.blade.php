<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prefeitura de Sertânia</title>

    <link rel="stylesheet" href="{!! asset('assets/font-awesome/css/font-awesome.min.css') !!}">

    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,400italic,700,900' rel='stylesheet' type='text/css'>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Portal da Prefeitura de Sertânia">
    <meta name="keywords" content="governo, honestidade, prefeitura">
    <meta name="author" content="Dieggo Carrilho">

    <!-- Bootstrap css -->
    <link href="{!! asset('assets/css/bootstrap.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('assets/css/bootstrap.techie.css?'.rand(1,999)) !!}" rel="stylesheet">

<style>
    .header-social-icons {
        position: absolute;
        right: 15px;
        top: 1px;
        height: 40px;
        width: 160px;
        margin-top: 25px;
    }
    .header-social-icons ul {
        list-style: none;
    }
    .header-social-icons li a{
        font-size: 1.35em;
        color: #999999;
        float: right;
        line-height: 40px;
        text-align: center;
        width: 40px;
    }
    #ccr-contact-sidebar li .google-plus:hover,
     #social-buttons .google-plus:hover,
     .google-plus:hover{
         color: #FFF;
         background-color: #db514f;
     }
    #ccr-contact-sidebar li .linkedin:hover,
    #social-buttons .linkedin:hover,
    .linkedin:hover{
        color: #FFF;
        background-color: #0077b5;
    }
    #ccr-contact-sidebar li .twitter:hover,
    #social-buttons .twitter:hover,
    .twitter:hover{
        color: #FFF;
        background-color: #2e9edd;
    }
    #ccr-contact-sidebar li .facebook:hover,
    #social-buttons .facebook:hover,
    .facebook:hover{
        color: #FFF;
        background-color: #3b5998;
    }

    #ccr-contact-sidebar li .instagram:hover,
    #social-buttons .instagram:hover,
    .instagram:hover{
        color: #FFF;
        background-color: #663399;
    }
    .google-plus, .linkedin, .twitter, .facebook, .instagram

    {
        display: inline-block;
    }
    .ccr-thumbnail p,
    .ccr-thumbnail a,
    .nav-paging i,
    input[type="submit"],
    button[type="submit"],
    .footer-social-icons li a,
    .header-social-icons li a,
    #social-buttons a,
    #ccr-contact-sidebar li a
    {
        -webkit-transition: all .25s ease-in;
        -moz-transition: all .25s ease-in;
        -ms-transition: all .25s ease-in;
        -o-transition: all .25s ease-in;
        transition: all .25s ease-in;
    }
    body,html{overflow-x:hidden}footer{border-top:1px solid #ddd;padding:30px;margin-top:50px}.row>[class*=col-]{margin-bottom:40px}.navbar-container{position:relative;min-height:100px}.navbar.navbar-fixed-bottom,.navbar.navbar-fixed-top{position:absolute;top:50px;z-index:0}.navbar.navbar-fixed-bottom .container,.navbar.navbar-fixed-top .container{max-width:90%}.btn-group{margin-bottom:10px}.form-inline input[type=password],.form-inline input[type=text],.form-inline select{width:180px}.input-group{margin-bottom:10px}.pagination{margin-top:0}

</style>

</head>
<body>

<header id="ccr-header">


    <div style="background: #E83333;">
        <div class="container">

        </div>
    </div>

    <nav class="navbar navbar-inverse navbar-static-top" style="border-bottom: 2px solid #CC0000; margin-bottom: 0;">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand  hidden-md hidden-lg" href="http://www.sertania.pe.gov.br">

                    <img src="{!! asset('imagens/logoprefeitura.png') !!}" alt="Site Logo" style="max-height: 100px" class="logo-brand">

                </a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <div class="col-md-12">
                    <ul class="nav navbar-nav">
                        <li ><a href="http://www.sic.tenosoft.com.br/sistema/app_Login/app_Login.php?entidade=210" alt="Acesso a Informação" target="_blank"> Acesso a Informação</a></li>
                        <li><a href="http://www.transparencianomunicipio.com.br/portal/v81/index/index.php?municipio=50&represent=2" alt="Portal da Tranparência"  target="_blank">Portal da Transparência</a></li>
                        <li><a href="https://www.tributosmunicipais.com.br/NFE-sertania/" alt="Nota Fiscal Eletrônica" target="_blank">Nota Fiscal Eletrônica</a></li>
                        <li><a href="http://www.sertania.pe.gov.br/webmail" alt="WebMail" target="_blank">WebMail</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <form class="navbar-form navbar-right" role="search" method="post" action="{!! route('noticias-busca') !!}">
                                {!! csrf_field() !!}
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Pesquisar…" value="" name="busca">
                                    <span class="input-group-btn">
                                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                        </span>
                                </div>
                            </form>
                        </li>
                    </ul>
                </div><!-- /.col-md-12 -->
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>


    <section id="ccr-nav-below-main" >

        <div class="container">
            <div class="row">


                <div class="col-md-12 hidden-xs hidden-sm">

                    <div class="header-social-icons">
                        <ul>
                            <li >
                                <a href="https://www.instagram.com/PrefeituradeSertaniaGovernoMunicipal/" class="instagram" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </li>
                            <li >
                                <a href="https://www.facebook.com/PrefeituradeSertaniaGovernoMunicipal/" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li >
                                <a href="https://twitter.com/PrefeituradeSertaniaGovernoMunicipal" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                            </li>

                        </ul>

                    </div><!--  /.cocial-icons -->

                    <div class="site-logo float-left col-md-4">
                        <a href="{!! route('home') !!}">
                            <img src="{!! asset('imagens/logoprefeitura.png') !!}" alt="Side Logo" style="padding-top: 0px; max-height: 100px;" data-pin-nopin="true">
                        </a>
                    </div>


                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                        <ul class="nav nav-pills " style="padding-top: 25px;">

                            <li><a class="turista" href="{!! route('turista') !!}" >TURISTA</a></li>
                            <li><a class="empresa" href="{!! route('empresa') !!}" >EMPRESA</a></li>
                            <li><a class="sic" href="{!! route('sic') !!}" >SIC</a></li>

                        </ul> <!-- /.nav /.navbar-nav -->
                    </div>


                </div><!-- /.container -->
            </div>


        </div>

    </section><!-- / #ccr-nav-below-main -->

</header>

@yield('content_index')

<div class="container">
    <div class="row">
        <!-- Slider -->
        <div class="col-sm-6 col-lg-6">

            <div class="container">
                footer
            </div>
        </div>
    </div>
</div>
<!-- Main Scripts-->
<script src="{!! asset('assets/js/jquery.js') !!}"></script>
<script src="{!! asset('assets/js/bootstrap.min.js') !!}"></script>
<!-- Bootstrap 3 has typeahead optionally -->

<script src="{!! asset('assets/js/typeahead.min.js') !!}"></script>


<script>
    $(document).ready(function(){



            var clickEvent = false;
            $('#myCarousel').carousel({
                interval:   4000
            }).on('click', '.list-group li', function() {
                clickEvent = true;
                $('.list-group li').removeClass('active');
                $(this).addClass('active');
            }).on('slid.bs.carousel', function(e) {
                if(!clickEvent) {
                    var count = $('.list-group').children().length -1;
                    var current = $('.list-group li.active');
                    current.removeClass('active').next().addClass('active');
                    var id = parseInt(current.data('slide-to'));
                    if(count == id) {
                        $('.list-group li').first().addClass('active');
                    }
                }
                clickEvent = false;
            });




        $('.cidadao').tooltip({title: "Serviços para o Cidadão", placement: "top"});
        $('.turista').tooltip({title: "Serviços para o Turísta", placement: "top"});
        $('.empresa').tooltip({title: "Serviços para a Empresa", placement: "top"});
        $('.servidor').tooltip({title: "Serviços para o Servidor", placement: "top"});
        $('.sic').tooltip({title: "Serviço de Informação ao Cidadão", placement: "top"});
    });

    $(window).load(function() {
        var boxheight = $('#myCarousel .carousel-inner').innerHeight();
        var itemlength = $('#myCarousel .item').length;
        var triggerheight = Math.round(boxheight/itemlength+1);
        $('#myCarousel .list-group-item').outerHeight(triggerheight);
    });
</script>
</body>
</html>