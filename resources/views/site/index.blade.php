<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Governo Municipal</title>
    <link rel="stylesheet" href="{!! asset('assets/font-awesome/css/font-awesome.min.css') !!}">

    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,400italic,700,900' rel='stylesheet' type='text/css'>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Portal da Prefeitura de Sertânia">
    <meta name="keywords" content="governo, honestidade, prefeitura">
    <meta name="author" content="Dieggo Carrilho">

    <!-- Bootstrap css -->
    <link href="{!! asset('assets/css/bootstrap.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('assets/css/bootstrap.techie.css?'.rand(1,999)) !!}" rel="stylesheet">
@yield('completarheader')


</head>
<body>

<header id="ccr-header">


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
                        <li><a href="{!! route('transparencia') !!}" alt="Portal da Tranparência"  target="_blank">Portal da Transparência</a></li>
                        <li><a href="https://www.tributosmunicipais.com.br/NFE-sertania/" alt="Nota Fiscal Eletrônica" target="_blank">Nota Fiscal Eletrônica</a></li>
                        <li><a href="http://gestor.tributosmunicipais.com.br/sertania/views/publico/portaldocontribuinte" alt="Portal do Contribuinte" target="_blank">Portal do Contribuinte</a></li>
                        <li><a href="http://gecea.sertania.pe.gov.br" alt="Sistema GECEA" target="_blank">Sistema</a></li>
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


                <div class="hidden-xs hidden-sm">



                    <div class="site-logo float-left col-md-4">
                        <a href="{!! route('home') !!}">
                            <img src="{!! asset('imagens/logoprefeitura.png') !!}" alt="Side Logo" style="padding-top: 0px; max-height: 100px;" data-pin-nopin="true">
                        </a>
                    </div>


                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                        <ul class="nav nav-pills " style="padding-top: 25px;">

                            <li><a class="cidade" href="{!! route('cidade') !!}" >A CIDADE</a></li>
                            <li><a class="cidade" href="{!! route('prefeitura') !!}" >A PREFEITURA</a></li>
                            <li><a class="secretarias" href="{!! route('secretarias') !!}" >SECRETARIAS</a></li>
                            <li><a class="orgaos" href="{!! route('orgaos') !!}" >ORGÃOS</a></li>
                            <li><a class="downloads" href="{!! route('downloads') !!}" >DOWNLOADS</a></li>
                            <li><a class="noticias" href="{!! route('noticias') !!}" >NOTÍCIAS</a></li>

                        </ul> <!-- /.nav /.navbar-nav -->


                    </div>


                </div><!-- /.container -->
            </div>


        </div>

    </section><!-- / #ccr-nav-below-main -->

</header>

@yield('content_index')


<footer id="ccr-footer" class="hidden-xs hidden-sm">
    <div class="container">
        <div class="footer-social-icons">
            <ul>
                <li >
                    <a href="https://www.facebook.com/PrefeituradeSertaniaGovernoMunicipal/" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                </li>
            </ul>
        </div><!--  /.cocial-icons -->
        <div class="copyright">
            <strong>GOVERNO MUNICIPAL DE SERTÂNIA</strong><br/>
            Praça João Pereira Vale, 20, Centro – Sertânia-PE.

        </div> <!-- /.copyright -->
    </div> <!-- /.container -->
    <div class="menu-mobile hidden-md hidden-lg">
        <ul>
            <li></li>
        </ul>
    </div>

</footer>  <!-- /#ccr-footer -->

<!-- Main Scripts-->
<script src="{!! asset('assets/js/jquery.js') !!}"></script>
<script src="{!! asset('assets/js/bootstrap.min.js') !!}"></script>
<!-- Bootstrap 3 has typeahead optionally -->

<script src="{!! asset('assets/js/typeahead.min.js') !!}"></script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.9&appId=723601331137231";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

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




        $('.cidade').tooltip({title: "Informações sobre Sertânia", placement: "top"});
        $('.secretarias').tooltip({title: "Informações sobre as secretarias", placement: "top"});
        $('.orgaos').tooltip({title: "Sobre os orgãos da cidade", placement: "top"});
        $('.noticias').tooltip({title: "Notícias sobre a cidade", placement: "top"});
        $('.downloads').tooltip({title: "Baixe arquivos institucionais", placement: "top"});
    });

    $(window).load(function() {
        var boxheight = $('#myCarousel .carousel-inner').innerHeight();
        var itemlength = $('#myCarousel .item').length;
        var triggerheight = Math.round(boxheight/itemlength+1);
        $('#myCarousel .list-group-item').outerHeight(triggerheight);

        $('#myCarouselV').carousel(
            {
                interval: 2000
            }
        )

    });
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-100693864-1', 'auto');
  ga('send', 'pageview');

</script>

@yield('content_index_js')


</body>
</html>
