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


    <nav class="navbar navbar-inverse navbar-static-top navbarprefeitura" >
        <div class="container">
            
            

            <div class="col-md-6"><img src="{!! asset('imagens/logoturismo.png') !!}" alt="Side Logo" style="padding-top: 0px; max-height: 100px;" data-pin-nopin="true"></div>
            <div class="col-md-6"><img src="{!! asset('imagens/logoprefeitura.png') !!}" alt="Site Logo" style="max-height: 100px" class="logo-brand"></div>
            

        </div><!-- /.container-fluid -->
    </nav>

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
 
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-100693864-1', 'auto');
  ga('send', 'pageview');

</script>
<script>
 
function changeFont(s) {

    if (s === 'inc') {
        var body = $("body").css('font-size');
        $("body").animate({'font-size' : (parseInt(body) +1) + 'px'});
        
        var label = $("label").css('font-size');
        $("label").animate({'font-size' : (parseInt(label) +1) + 'px'});
        
        var select = $("select").css('font-size');
        $("select").animate({'font-size' : parseInt((select) +1) + 'px'});
        
        var textarea = $("textarea").css('font-size');
        $("textarea").animate({'font-size' : parseInt((textarea) +1) + 'px'});
        
        var input = $("input").css('font-size');
        $("input").animate({'font-size' : (parseInt(input) +1) + 'px'});

        var navbar_inverse = $(".navbar-inverse").css('font-size');
        $(".navbar-inverse").animate({'font-size' : (parseInt(navbar_inverse) +1) + 'px'});
        
        var h5 = $("h5").css('font-size');
        $("h5").animate({'font-size' : (parseInt(h5) +1) + 'px'});
        
        var h4 = $("h4").css('font-size');
        $("h4").animate({'font-size' : (parseInt(h4) +1) + 'px'});
        
        var h3 = $("h3").css('font-size');
        $("h3").animate({'font-size' : (parseInt(h3) +1) + 'px'});
        
        var h1 = $("h1").css('font-size');
        $("h1").animate({'font-size' : (parseInt(h1) +1) + 'px'});
        
        var h2 = $("h2").css('font-size');
        $("h2").animate({'font-size' : (parseInt(h2) +1) + 'px'});
        
        var p = $("p").css('font-size');
        $("p").animate({'font-size' : (parseInt(p) +1) + 'px'});
        

    }

    if (s === 'dec') {
        var body = $("body").css('font-size');
        $("body").animate({'font-size' : (parseInt(body) -1) + 'px'});
        
        var label = $("label").css('font-size');
        $("label").animate({'font-size' : (parseInt(label) -1) + 'px'});
        
        var select = $("select").css('font-size');
        $("select").animate({'font-size' : parseInt((select) -1) + 'px'});
        
        var textarea = $("textarea").css('font-size');
        $("textarea").animate({'font-size' : parseInt((textarea) -1) + 'px'});
        
        var input = $("input").css('font-size');
        $("input").animate({'font-size' : (parseInt(input) -1) + 'px'});

        var navbar_inverse = $(".navbar_inverse").css('font-size');
        $(".navbar-inverse").animate({'font-size': (parseInt(navbar_inverse) -1) + 'px'});
     
        var h5 = $("h5").css('font-size');
        $("h5").animate({'font-size' : (parseInt(h5) -1) + 'px'});
        
        var h4 = $("h4").css('font-size');
        $("h4").animate({'font-size' : (parseInt(h4) -1) + 'px'});
        
        var h3 = $("h3").css('font-size');
        $("h3").animate({'font-size' : (parseInt(h3) -1) + 'px'});
        
        var h1 = $("h1").css('font-size');
        $("h1").animate({'font-size' : (parseInt(h1) -1) + 'px'});
        
        var h2 = $("h2").css('font-size');
        $("h2").animate({'font-size' : (parseInt(h2) -1) + 'px'});
        
        var p = $("p").css('font-size');
        $("p").animate({'font-size' : (parseInt(p) -1) + 'px'});

    }
    
    // $(".btn:not(button)").animate({'font-size' :  + 'px'});
    // $(".megamenu").animate({'font-size' :  + 'px'});
	// $("select, textarea, input, .btn").animate({'min-height' : (f16*2) + 'px'});
	// $("h5:not('.no-ch'),.h5,.lead").animate({'font-size' : f18 + 'px'});
	// $("ul:not('.no-ch'),table,p:not('.lead')").animate({'font-size' : f14 + 'px'});
	// $("h4, h3, h1, h2, p").animate({'font-size' : f12 + 'px'});
}
 

$(".inc-font").click(function (event) {
		event.preventDefault();
		changeFont('inc');
	});
	//diminuindo a fonte
	$(".dec-font").click(function (event) {
		event.preventDefault();
		changeFont('dec');
	});
 
 $('.alteracontraste').click(function(event) {
    event.preventDefault();
    document.documentElement.classList.toggle('contrastesite');

    if ( $(".iconecontraste").hasClass('fa-toggle-off') ) {
        $(".iconecontraste").removeClass('fa-toggle-off')
        $(".iconecontraste").addClass('fa-toggle-on')
    } else {
        $(".iconecontraste").removeClass('fa-toggle-on')
        $(".iconecontraste").addClass('fa-toggle-off')
    }
    
 })

</script>
@yield('content_index_js')


</body>
</html>
