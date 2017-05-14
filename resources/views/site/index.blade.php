<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prefeitura de Sertânia</title>


    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,400italic,700,900' rel='stylesheet' type='text/css'>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Portal da Prefeitura de Sertânia">
    <meta name="keywords" content="governo, honestidade, prefeitura">
    <meta name="author" content="Dieggo Carrilho">

    <!-- Bootstrap css -->
    <link href="{!! asset('assets/css/bootstrap.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('assets/css/bootstrap.techie.css') !!}" rel="stylesheet">

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
                <a class="navbar-brand  hidden-md hidden-lg" href="http://www.joaopessoa.pb.gov.br">

                    <img src="http://www.joaopessoa.pb.gov.br/portal/wp-content/themes/pmjp_2016%20eleicoes/assets/img/logo.png?x92016" alt="Site Logo" class="logo-brand">

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
                        <li class="e-sic analycts"><a href="http://transparencia.joaopessoa.pb.gov.br/sic/open.php" onclick="ga('send','event','Navbar Topo','http://transparencia.joaopessoa.pb.gov.br/sic/open.php')" alt="Acesso a Iformação" target="_blank"> Acesso a Informação</a></li>
                        <li><a href="http://transparencia.joaopessoa.pb.gov.br/" alt="Portal da Tranparência" onclick="ga('send','event','Navbar Topo','http://transparencia.joaopessoa.pb.gov.br/')" target="_blank">Portal da Transparência</a></li>
                        <li><a href="http://transparencia.joaopessoa.pb.gov.br/" alt="Tranparência Fiscal" onclick="ga('send','event','Navbar Topo','http://transparencia.joaopessoa.pb.gov.br/')" target="_blank">Transparência Fiscal</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="http://www.joaopessoa.pb.gov.br/perguntas-frequentes" title="Perguntas frequentes" onclick="ga('send','event','Navbar Topo','http://www.joaopessoa.pb.gov.br/perguntas-frequentes')">Perguntas frequentes</a></li>
                        <li>
                            <form class="navbar-form navbar-right" role="search" method="get" action="http://www.joaopessoa.pb.gov.br/">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Pesquisar…" value="" name="s">
                                    <span class="input-group-btn">
                                            <button type="submit" class="btn btn-default" onclick="ga('send','event','Pesquisa','')"><i class="fa fa-search"></i></button>
                                        </span>
                                </div>
                            </form>
                        </li>
                    </ul>
                </div><!-- /.col-md-12 -->
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>


    <section id="ccr-nav-below-main" style="border: 1px solid #ccc; margin-bottom: 0px">

        <div class="container">
            <div class="row">


                <div class="col-md-12 hidden-xs hidden-sm">

                    <div class="header-social-icons">
                        <ul>
                            <li >
                                <a href="https://www.instagram.com/pmjponline/" class="instagram" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </li>
                            <li >
                                <a href="https://www.facebook.com/PrefeituraDeJoaoPessoa/" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li >
                                <a href="https://twitter.com/pmjponline" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                            </li>

                        </ul>

                    </div><!--  /.cocial-icons -->


                    <!-- INICIO BLOCO INSERIDO POR BETO -->
                    <ul class="nav nav-pills" style="padding-top: 25px;">
                        <li>  <div class="site-logo">
                                <a href="http://www.joaopessoa.pb.gov.br">
                                    <img src="{!! asset('imagens/logo.png') !!}" alt="Side Logo" style="padding-top: 10px; max-height: 77px;" data-pin-nopin="true">
                                </a>
                            </div></li>
                        <li><a class="cidadao" data-toggle="collapse" data-parent="#accordion-2" href="#cidadao" data-original-title="" title="">CIDADÃO</a></li>
                        <li><a class="turista" data-toggle="collapse" data-parent="#accordion-2" href="#turista" data-original-title="" title="">TURISTA</a></li>
                        <li><a class="empresa" data-toggle="collapse" data-parent="#accordion-2" href="#empresa" data-original-title="" title="">EMPRESA</a></li>
                        <li><a class="servidor" data-toggle="collapse" data-parent="#accordion-2" href="#servidor" data-original-title="" title="">SERVIDOR</a></li>
                        <li><a class="sic" data-toggle="collapse" data-parent="#accordion-2" href="#sic" data-original-title="" title="">SIC</a></li>

                    </ul> <!-- /.nav /.navbar-nav -->


                    <div id="accordion-2"><!-- #accordion-2 -->
                        <div class="panel upage" style="background-color: transparent; margin-bottom: 0;">
                            <div data-id="Menu Cidadao" id="cidadao" class="panel-collapse collapse">
                                <div class="icones icones-red">
                                    <legend class="icones"><h3>Serviços para o Cidadão</h3></legend>
                                    <ul class="nav icones icones-red">
                                        <ul id="menu-menu-cidadao" class="menu"><li id="menu-item-125066" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-125066 jsomi-class-fa-fa-fa-info-circle-fa-2x-i-br-portal-da-transparencia-125066 analycts"><a target="_blank" href="http://transparencia.joaopessoa.pb.gov.br/" onclick="ga('send','event','Menu Cidadao','http://transparencia.joaopessoa.pb.gov.br/')"><i class="fa fa fa-info-circle fa-2x"></i> <br>Portal da Transparência</a></li>
                                            <li id="menu-item-66149" class="c-l17 menu-item menu-item-type-custom menu-item-object-custom menu-item-66149 jsomi-class-fa-fa-fa-users-fa-2x-i-br-portal-do-contribuinte-66149 analycts"><a target="_blank" href="http://joaopessoa.pb.gov.br/pc" onclick="ga('send','event','Menu Cidadao','http://joaopessoa.pb.gov.br/pc')"><i class="fa fa fa-users fa-2x"></i> <br>Portal do Contribuinte</a></li>
                                            <li id="menu-item-90354" class="c-l09 menu-item menu-item-type-custom menu-item-object-custom menu-item-90354 jsomi-class-fa-fa-fa-file-text-o-fa-2x-i-br-nota-fiscal-de-servicos-eletronica-90354 analycts"><a target="_blank" href="https://sispmjp.joaopessoa.pb.gov.br:8080/nfse" onclick="ga('send','event','Menu Cidadao','https://sispmjp.joaopessoa.pb.gov.br:8080/nfse')"><i class="fa fa fa-file-text-o fa-2x"></i> <br>Nota Fiscal de Serviços Eletrônica</a></li>
                                            <li id="menu-item-90385" class="c-l09 menu-item menu-item-type-custom menu-item-object-custom menu-item-90385 jsomi-class-fa-fa-fa-file-text-fa-2x-i-br-declaracao-de-servico-90385 analycts"><a target="_blank" href="https://sispmjp.joaopessoa.pb.gov.br:8080/sispmjp" onclick="ga('send','event','Menu Cidadao','https://sispmjp.joaopessoa.pb.gov.br:8080/sispmjp')"><i class="fa fa fa-file-text fa-2x"></i> <br>Declaração de Serviço</a></li>
                                            <li id="menu-item-66150" class="c-l12 menu-item menu-item-type-custom menu-item-object-custom menu-item-66150 jsomi-class-fa-fa-fa-external-link-fa-2x-i-br-consulta-de-processos-66150 analycts"><a href="http://www.joaopessoa.pb.gov.br/consultaprocesso/" onclick="ga('send','event','Menu Cidadao','http://www.joaopessoa.pb.gov.br/consultaprocesso/')"><i class="fa fa fa-external-link fa-2x"></i> <br>Consulta de Processos</a></li>
                                            <li id="menu-item-171255" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-171255 analycts"><a target="_blank" href="http://transparencia.joaopessoa.pb.gov.br/categoria/ouvidoria_demandas" onclick="ga('send','event','Menu Cidadao','http://transparencia.joaopessoa.pb.gov.br/categoria/ouvidoria_demandas')"><i class="fa fa fa-comments fa-2x"></i><br> Ouvidoria Municipal</a></li>
                                            <li id="menu-item-66152" class="c-l09 menu-item menu-item-type-custom menu-item-object-custom menu-item-66152 jsomi-class-fa-fa-fa-wpforms-fa-2x-i-br-editais-e-licitacoes-66152 analycts"><a target="_blank" href="http://www.joaopessoa.pb.gov.br/licitacoes/" onclick="ga('send','event','Menu Cidadao','http://www.joaopessoa.pb.gov.br/licitacoes/')"><i class="fa fa fa-wpforms fa-2x"></i><br> Editais e licitações</a></li>
                                            <li id="menu-item-66153" class="c-l09 menu-item menu-item-type-custom menu-item-object-custom menu-item-66153 jsomi-class-fa-fa-fa-newspaper-o-fa-2x-i-br-semanario-oficial-66153 analycts"><a href="http://www.joaopessoa.pb.gov.br/semanariooficial/" onclick="ga('send','event','Menu Cidadao','http://www.joaopessoa.pb.gov.br/semanariooficial/')"><i class="fa fa fa-newspaper-o fa-2x"></i> <br>Semanário Oficial</a></li>
                                            <li id="menu-item-126158" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-126158 jsomi-class-fa-fa-fa-bus-fa-2x-i-br-itinerarios-e-horarios-dos-onibus-126158 analycts"><a target="_blank" href="http://www.semobjp.pb.gov.br/itinerarios/" onclick="ga('send','event','Menu Cidadao','http://www.semobjp.pb.gov.br/itinerarios/')"><i class="fa fa fa-bus fa-2x"></i> <br>Itinerários e horários dos ônibus</a></li>
                                            <li id="menu-item-66154" class="c-l18 menu-item menu-item-type-custom menu-item-object-custom menu-item-66154 jsomi-class-fa-fa-fa-video-camera-fa-2x-i-br-cameras-ao-vivo-66154 analycts"><a href="http://semobjp.pb.gov.br/cameras" onclick="ga('send','event','Menu Cidadao','http://semobjp.pb.gov.br/cameras')"><i class="fa fa fa-video-camera fa-2x"></i> <br>Câmeras ao vivo</a></li>
                                            <li id="menu-item-66161" class="c-l04 menu-item menu-item-type-post_type menu-item-object-page menu-item-66161 analycts"><a title="Transportes Especiais" target="_blank" href="http://www.joaopessoa.pb.gov.br/secretarias/semob/transportesespeciais/" onclick="ga('send','event','Menu Cidadao','http://www.joaopessoa.pb.gov.br/secretarias/semob/transportesespeciais/')"><i class="fa fa fa-taxi fa-2x"></i><br> Motorista profissional</a></li>
                                            <li id="menu-item-66162" class="c-l12 menu-item menu-item-type-custom menu-item-object-custom menu-item-66162 jsomi-class-fa-fa-fa-external-link-square-fa-2x-i-br-consulta-de-multas-66162 analycts"><a target="_blank" href="http://semobjp.pb.gov.br/consulta/" onclick="ga('send','event','Menu Cidadao','http://semobjp.pb.gov.br/consulta/')"><i class="fa fa fa-external-link-square fa-2x"></i><br> Consulta de Multas</a></li>
                                            <li id="menu-item-66159" class="c-l12 menu-item menu-item-type-custom menu-item-object-custom menu-item-66159 jsomi-class-fa-fa-fa-money-fa-2x-i-br-pesquisas-de-preco-66159 analycts"><a href="http://joaopessoa.pb.gov.br/pesquisa-de-preco/" onclick="ga('send','event','Menu Cidadao','http://joaopessoa.pb.gov.br/pesquisa-de-preco/')"><i class="fa fa fa-money fa-2x"></i> <br>Pesquisas de Preço</a></li>
                                            <li id="menu-item-72271" class="c-l14 menu-item menu-item-type-custom menu-item-object-custom menu-item-72271 jsomi-class-fa-fa-fa-map-o-fa-2x-i-br-joao-pessoa-em-mapas-72271 analycts"><a href="http://geo.joaopessoa.pb.gov.br/digeoc/htmls/" onclick="ga('send','event','Menu Cidadao','http://geo.joaopessoa.pb.gov.br/digeoc/htmls/')"><i class="fa fa fa-map-o fa-2x"></i> <br>João Pessoa em Mapas</a></li>
                                            <li id="menu-item-83538" class="c-l09 menu-item menu-item-type-post_type menu-item-object-page menu-item-83538 analycts"><a href="http://www.joaopessoa.pb.gov.br/secretarias/seplan/perfil-joao-pessoa/" onclick="ga('send','event','Menu Cidadao','http://www.joaopessoa.pb.gov.br/secretarias/seplan/perfil-joao-pessoa/')"><i class="fa fa fa-sun-o fa-2x"></i> <br>Perfil João Pessoa</a></li>
                                            <li id="menu-item-112650" class="c-l16 menu-item menu-item-type-post_type menu-item-object-page menu-item-112650 analycts"><a href="http://www.joaopessoa.pb.gov.br/secretarias/semob/credencial-para-portadores-de-deficiencia-laudo-medico/" onclick="ga('send','event','Menu Cidadao','http://www.joaopessoa.pb.gov.br/secretarias/semob/credencial-para-portadores-de-deficiencia-laudo-medico/')"><i class="fa fa fa-wheelchair fa-2x"></i><br> Credencial de acessibilidade – SEMOB</a></li>
                                            <li id="menu-item-66163" class="c-l06 menu-item menu-item-type-post_type menu-item-object-page menu-item-66163 analycts"><a href="http://www.joaopessoa.pb.gov.br/secretarias/sedec/escolas-municipais/" onclick="ga('send','event','Menu Cidadao','http://www.joaopessoa.pb.gov.br/secretarias/sedec/escolas-municipais/')"><i class="fa fa fa-book fa-2x"></i> <br>Relação das Escolas Municipais</a></li>
                                            <li id="menu-item-126386" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-126386 jsomi-class-fa-fa-fa-desktop-fa-2x-i-br-cursos-a-distancia-126386 analycts"><a target="_blank" href="http://secitec.joaopessoa.pb.gov.br/moodle/" onclick="ga('send','event','Menu Cidadao','http://secitec.joaopessoa.pb.gov.br/moodle/')"><i class="fa fa fa-desktop fa-2x"></i> <br>Cursos à distância</a></li>
                                            <li id="menu-item-66164" class="c-l09 menu-item menu-item-type-post_type menu-item-object-page menu-item-66164 analycts"><a href="http://www.joaopessoa.pb.gov.br/secretarias/saude/gestao-hospitalar/" onclick="ga('send','event','Menu Cidadao','http://www.joaopessoa.pb.gov.br/secretarias/saude/gestao-hospitalar/')"><i class="fa fa fa-hospital-o fa-2x"></i> <br>Hospitais Municipais</a></li>
                                            <li id="menu-item-66165" class="c-l07 menu-item menu-item-type-post_type menu-item-object-page menu-item-66165 analycts"><a href="http://www.joaopessoa.pb.gov.br/governo/telefones-uteis/" onclick="ga('send','event','Menu Cidadao','http://www.joaopessoa.pb.gov.br/governo/telefones-uteis/')"><i class="fa fa fa-phone-square fa-2x"></i> <br>Telefones Úteis</a></li>
                                            <li id="menu-item-78810" class="c-l09 menu-item menu-item-type-custom menu-item-object-custom menu-item-78810 jsomi-class-fa-fa-fa-gavel-fa-2x-i-br-legislacao-78810 analycts"><a href="http://www.joaopessoa.pb.gov.br/legislacao/" onclick="ga('send','event','Menu Cidadao','http://www.joaopessoa.pb.gov.br/legislacao/')"><i class="fa fa fa-gavel fa-2x"></i><br> Legislação</a></li>
                                        </ul>                                            </ul>
                                </div>
                            </div>
                            <div data-id="Menu Turista" id="turista" class="panel-collapse collapse">
                                <div class="icones icones-orange">
                                    <legend class="icones"><h3>Serviços para o Turista</h3></legend>
                                    <ul class="nav icones icones-orange">
                                        <ul id="menu-menu-turista" class="menu"><li id="menu-item-66177" class="t-l05 menu-item menu-item-type-post_type menu-item-object-page menu-item-66177 analycts"><a href="http://www.joaopessoa.pb.gov.br/secretarias/semob/taxi/" onclick="ga('send','event','Menu Turista','http://www.joaopessoa.pb.gov.br/secretarias/semob/taxi/')"><i class="fa fa-taxi fa-2x"></i><br>Taxi</a></li>
                                            <li id="menu-item-126159" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-126159 analycts"><a target="_blank" href="http://www.semobjp.pb.gov.br/itinerarios/" onclick="ga('send','event','Menu Turista','http://www.semobjp.pb.gov.br/itinerarios/')"><i class="fa fa-bus fa-2x"></i><br> Itinerários e Horários dos ônibus</a></li>
                                            <li id="menu-item-121276" class="t-l07 menu-item menu-item-type-post_type menu-item-object-page menu-item-121276 analycts"><a href="http://www.joaopessoa.pb.gov.br/secretarias/setur/joaopessoa/" onclick="ga('send','event','Menu Turista','http://www.joaopessoa.pb.gov.br/secretarias/setur/joaopessoa/')"><i class="fa fa-picture-o fa-2x"></i><br> Conheça João Pessoa</a></li>
                                            <li id="menu-item-121279" class="t-l08 menu-item menu-item-type-post_type menu-item-object-page menu-item-121279 analycts"><a href="http://www.joaopessoa.pb.gov.br/secretarias/setur/roteiros/" onclick="ga('send','event','Menu Turista','http://www.joaopessoa.pb.gov.br/secretarias/setur/roteiros/')"><i class="fa fa-road fa-2x"></i><br> Roteiros de Lazer</a></li>
                                            <li id="menu-item-83859" class="t-l08 menu-item menu-item-type-custom menu-item-object-custom menu-item-83859 analycts"><a target="_blank" href="https://turismo.joaopessoa.pb.gov.br/onde-ficar/" onclick="ga('send','event','Menu Turista','https://turismo.joaopessoa.pb.gov.br/onde-ficar/')"><i class="fa fa-bed fa-2x"></i><br> Onde Ficar</a></li>
                                            <li id="menu-item-174716" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-174716 analycts"><a target="_blank" href="http://turismo.joaopessoa.pb.gov.br/onde-comer/" onclick="ga('send','event','Menu Turista','http://turismo.joaopessoa.pb.gov.br/onde-comer/')"><i class="fa fa-cutlery fa-2x"></i><br>Onde Comer</a></li>
                                            <li id="menu-item-175626" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-175626 analycts"><a href="http://www.joaopessoa.pb.gov.br/parquedalagoa/" onclick="ga('send','event','Menu Turista','http://www.joaopessoa.pb.gov.br/parquedalagoa/')"><i class="fa fa-picture-o fa-2x"></i><br> Parque da Lagoa</a></li>
                                            <li id="menu-item-175628" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-175628 analycts"><a href="http://www.joaopessoa.pb.gov.br/estacaocb" onclick="ga('send','event','Menu Turista','http://www.joaopessoa.pb.gov.br/estacaocb')"><i class="fa fa-picture-o fa-2x"></i><br>Estação Cabo Branco</a></li>
                                        </ul>                                            </ul>
                                </div>

                            </div>
                            <div data-id="Menu Empresa" id="empresa" class="panel-collapse collapse">
                                <div class="icones icones-blue">
                                    <legend class="icones"><h3>Serviços para a Empresa</h3></legend>
                                    <ul class="nav icones icones-blue">
                                        <ul id="menu-menu-empresas" class="menu"><li id="menu-item-66167" class="e-l01 menu-item menu-item-type-custom menu-item-object-custom menu-item-66167 analycts"><a target="_blank" href="http://joaopessoa.pb.gov.br/pc/" onclick="ga('send','event','Menu Empresa','http://joaopessoa.pb.gov.br/pc/')"><i class="fa fa-users fa-2x"></i><br> Portal do contribuinte</a></li>
                                            <li id="menu-item-66173" class="e-l02 menu-item menu-item-type-custom menu-item-object-custom menu-item-66173 analycts"><a target="_blank" href="http://www.joaopessoa.pb.gov.br/fornecedor" onclick="ga('send','event','Menu Empresa','http://www.joaopessoa.pb.gov.br/fornecedor')"><i class="fa fa-user fa-2x"></i><br> Portal do Fornecedor</a></li>
                                            <li id="menu-item-66174" class="e-l04 menu-item menu-item-type-custom menu-item-object-custom menu-item-66174 analycts"><a target="_blank" href="https://sispmjp.joaopessoa.pb.gov.br:8080/nfse" onclick="ga('send','event','Menu Empresa','https://sispmjp.joaopessoa.pb.gov.br:8080/nfse')"><i class="fa fa-file-text-o fa-2x"></i><br>Nota Fiscal de Serviços Eletrônica</a></li>
                                            <li id="menu-item-66172" class="e-l03 menu-item menu-item-type-custom menu-item-object-custom menu-item-66172 analycts"><a target="_blank" href="https://sispmjp.joaopessoa.pb.gov.br:8080/sispmjp" onclick="ga('send','event','Menu Empresa','https://sispmjp.joaopessoa.pb.gov.br:8080/sispmjp')"><i class="fa fa-file-text fa-2x"></i><br> Declaração de Serviço</a></li>
                                            <li id="menu-item-66175" class="e-l04 menu-item menu-item-type-custom menu-item-object-custom menu-item-66175 analycts"><a target="_blank" href="http://www.joaopessoa.pb.gov.br/consultaprocesso/" onclick="ga('send','event','Menu Empresa','http://www.joaopessoa.pb.gov.br/consultaprocesso/')"><i class="fa fa-search fa-2x"></i><br>Consulta de Processos</a></li>
                                            <li id="menu-item-126384" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-126384 analycts"><a target="_blank" href="http://www.joaopessoa.pb.gov.br/licitacoes/" onclick="ga('send','event','Menu Empresa','http://www.joaopessoa.pb.gov.br/licitacoes/')"><i class="fa fa fa-wpforms fa-2x"></i><br> Editais e Licitações</a></li>
                                            <li id="menu-item-126387" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-126387 analycts"><a href="http://www.joaopessoa.pb.gov.br/semanariooficial/" onclick="ga('send','event','Menu Empresa','http://www.joaopessoa.pb.gov.br/semanariooficial/')"><i class="fa fa-book fa-2x"></i><br> Semanário oficial</a></li>
                                            <li id="menu-item-126388" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-126388 analycts"><a href="http://www.joaopessoa.pb.gov.br/secretarias/seplan/alvaras-e-licencas/" onclick="ga('send','event','Menu Empresa','http://www.joaopessoa.pb.gov.br/secretarias/seplan/alvaras-e-licencas/')"><i class="fa fa-file-o fa-2x"></i><br> Alvarás, certidões e licenças</a></li>
                                        </ul>                                            </ul>
                                </div>
                            </div>
                            <div data-id="Menu Servidor" id="servidor" class="panel-collapse collapse">
                                <div class="icones icones-greem">
                                    <legend class="icones"><h3>Serviços para o Servidor</h3></legend>
                                    <ul class="nav icones icones-greem">
                                        <ul id="menu-menu-servidor" class="menu"><li id="menu-item-66168" class="s-l01 menu-item menu-item-type-custom menu-item-object-custom menu-item-66168 analycts"><a target="_blank" href="http://www.joaopessoa.pb.gov.br/portalservidor" onclick="ga('send','event','Menu Servidor','http://www.joaopessoa.pb.gov.br/portalservidor')"><i class="fa fa-user fa-2x"></i><br> Portal do Servidor</a></li>
                                            <li id="menu-item-66170" class="s-l04 menu-item menu-item-type-custom menu-item-object-custom menu-item-66170 analycts"><a target="_blank" href="http://mail.joaopessoa.pb.gov.br/" onclick="ga('send','event','Menu Servidor','http://mail.joaopessoa.pb.gov.br/')"><i class="fa fa-envelope fa-2x"></i><br>Webmail</a></li>
                                            <li id="menu-item-174580" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-174580 analycts"><a target="_blank" href="http://www.joaopessoa.pb.gov.br/secretarias/sead/manual-do-servidor-aposentado/" onclick="ga('send','event','Menu Servidor','http://www.joaopessoa.pb.gov.br/secretarias/sead/manual-do-servidor-aposentado/')"><i class="fa fa-columns fa-2x"></i><br> Manual do Servidor Aposentado</a></li>
                                            <li id="menu-item-98868" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-98868 analycts"><a target="_blank" href="http://www.ipmjp.pb.gov.br/site/?Pagina=requerimento-aposentadoria" onclick="ga('send','event','Menu Servidor','http://www.ipmjp.pb.gov.br/site/?Pagina=requerimento-aposentadoria')"><i class="fa fa-file-text-o fa-2x"></i><br> Solicitação Aposentadoria</a></li>
                                            <li id="menu-item-98869" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-98869 analycts"><a target="_blank" href="http://www.ipmjp.pb.gov.br/site/?Pagina=requerimento-pensao" onclick="ga('send','event','Menu Servidor','http://www.ipmjp.pb.gov.br/site/?Pagina=requerimento-pensao')"><i class="fa fa-file-text-o fa-2x"></i><br> Solicitação Pensão</a></li>
                                            <li id="menu-item-98870" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-98870 analycts"><a target="_blank" href="http://www.ipmjp.pb.gov.br/site/?Pagina=requerimento-revisao" onclick="ga('send','event','Menu Servidor','http://www.ipmjp.pb.gov.br/site/?Pagina=requerimento-revisao')"><i class="fa fa-file-text-o fa-2x"></i><br> Solicitação Revisão</a></li>
                                            <li id="menu-item-169096" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-169096 analycts"><a href="http://www.joaopessoa.pb.gov.br/secretarias/sead/solicitacao-de-licenca-medica/" onclick="ga('send','event','Menu Servidor','http://www.joaopessoa.pb.gov.br/secretarias/sead/solicitacao-de-licenca-medica/')"><i class="fa fa-file-text-o fa-2x"></i><br> Solicitação de Licença Médica</a></li>
                                        </ul>                                            </ul>
                                    <legend class="icones" style="clear: left;"><h3>Serviços de Tecnologia para o Servidor</h3></legend>
                                    <ul class="nav icones icones-greem">
                                        <ul id="menu-menu-umti" class="menu"><li id="menu-item-121467" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-121467 analycts"><a target="_blank" href="http://www.joaopessoa.pb.gov.br/mulher" onclick="ga('send','event','Menu Servidor','http://www.joaopessoa.pb.gov.br/mulher')"><i class="fa fa-female fa-2x"></i><br> Atende Mulher</a></li>
                                            <li id="menu-item-121468" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-121468 analycts"><a target="_blank" href="http://sim.joaopessoa.pb.gov.br:8180/sim-orc-web" onclick="ga('send','event','Menu Servidor','http://sim.joaopessoa.pb.gov.br:8180/sim-orc-web')"><i class="fa fa-calculator fa-2x"></i><br>PPA e elaboração Orçamentária</a></li>
                                            <li id="menu-item-121469" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-121469 analycts"><a target="_blank" href="http://sim.joaopessoa.pb.gov.br:8180/sim" onclick="ga('send','event','Menu Servidor','http://sim.joaopessoa.pb.gov.br:8180/sim')"><i class="fa fa-align-justify fa-2x"></i><br>Protocolo</a></li>
                                            <li id="menu-item-121470" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-121470 analycts"><a target="_blank" href="http://www.joaopessoa.pb.gov.br/suporte/" onclick="ga('send','event','Menu Servidor','http://www.joaopessoa.pb.gov.br/suporte/')"><i class="fa fa-list-alt fa-2x"></i><br> Abertura de Chamados</a></li>
                                            <li id="menu-item-162350" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-162350 analycts"><a target="_blank" href="http://www.joaopessoa.pb.gov.br/portal/wp-content/uploads/2015/12/MANUAL-DO-SISTEMA-DE-PROTOCOLO-WEB-1.0.pdf?x92016" onclick="ga('send','event','Menu Servidor','http://www.joaopessoa.pb.gov.br/portal/wp-content/uploads/2015/12/MANUAL-DO-SISTEMA-DE-PROTOCOLO-WEB-1.0.pdf?x92016')"><i class="fa fa fa-server fa-2x"></i><br> Manual do Sistema de Protocolo Web</a></li>
                                        </ul>                                            </ul>
                                </div>
                            </div>
                            <div data-id="Menu Sic" id="sic" class="panel-collapse collapse">
                                <div class="icones icones-wine">
                                    <legend class="icones"><h3>Serviço de Informação ao Cidadão</h3></legend>
                                    <ul class="nav icones icones-wine">
                                        <ul id="menu-menu-sic" class="menu"><li id="menu-item-169155" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-169155 analycts"><a target="_blank" href="http://transparencia.joaopessoa.pb.gov.br/sic/open.php" onclick="ga('send','event','Menu Sic','http://transparencia.joaopessoa.pb.gov.br/sic/open.php')"><i class="fa fa-plus-square fa-2x"></i><br> Nova Demanda</a></li>
                                            <li id="menu-item-169154" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-169154 analycts"><a target="_blank" href="http://transparencia.joaopessoa.pb.gov.br/sic/tickets.php" onclick="ga('send','event','Menu Sic','http://transparencia.joaopessoa.pb.gov.br/sic/tickets.php')"><i class="fa fa-sign-out fa-2x"></i><br> Acompanhar Demanda</a></li>
                                        </ul>                                            </ul>
                                </div>
                            </div><!-- / #umti dotted | dashed | solid | double | groove | ridge | inset | outse -->

                        </div><!-- / #painel -->
                    </div><!-- / #accordion-2 -->

                    <!-- FIM BLOCO INSERIDO POR BETO -->
                </div><!-- /.container -->
            </div>

        </div>

    </section><!-- / #ccr-nav-below-main -->

</header>




<!-- Main Scripts-->
<script src="{!! asset('assets/js/jquery.js') !!}"></script>
<script src="{!! asset('assets/js/bootstrap.min.js') !!}"></script>
<!-- Bootstrap 3 has typeahead optionally -->

<script src="{!! asset('assets/js/typeahead.min.js') !!}"></script>


<script>
    $(document).ready(function(){
        $('.cidadao').tooltip({title: "Serviços para o Cidadão", placement: "top"});
        $('.turista').tooltip({title: "Serviços para o Turísta", placement: "top"});
        $('.empresa').tooltip({title: "Serviços para a Empresa", placement: "top"});
        $('.servidor').tooltip({title: "Serviços para o Servidor", placement: "top"});
        $('.sic').tooltip({title: "Serviço de Informação ao Cidadão", placement: "top"});
    });
</script>
</body>
</html>