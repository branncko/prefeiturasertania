<div class="col-md-4 pull-right">

    <div id="myCarouselV" class="carousel thumbnail">



        <div class="carousel-inner">
            <!-- Slide 1 -->
            <?php $viac = 0; ?>
            @foreach($videoscinco as $vi)
            <div class="item @if($viac == 0) active @endif">

                <iframe width="100%" src="{!! $vi->link !!}?ecver=1" frameborder="0" allowfullscreen></iframe>

                <?php $viac++; ?>
            </div>
            @endforeach

        </div>

        <!-- Indicators -->
        <ol class="carousel-indicadores">
            <?php $iv =0; ?>
            @while($iv < count($videoscinco))
            <li data-target="#myCarouselV" data-slide-to="{!! $iv !!}"></li>
                    <?php $iv++; ?>
            @endwhile
        </ol>


    </div>



    <ul class="breadcrumb" style="margin-bottom: 0px;">
        <li class="active">Acesso Rápido</li>
    </ul>
    <div class="well" style="max-width: 340px; padding: 8px 0; ">

        <ul class="nav nav-list">
            <li><a href="{!! route('noticias') !!}">Notícias</a></li>
            <li class="divider"></li>
            <li><a href="http://www.transparencianomunicipio.com.br/portal/v81/index/index.php?municipio=50&represent=2" target="_blank">Portal da Transparência</a></li>
            <li><a href="https://www.tributosmunicipais.com.br/NFE-sertania/" target="_blank">Nota Fiscal Eletrônica</a></li>
            <li><a href="#">Site Câmara de Vereadores</a></li>
            <li class="divider"></li>
            <li><a href="https://www.facebook.com/PrefeituradeSertaniaGovernoMunicipal/"><i class="fa fa-facebook"></i> Perfil do Facebook</a></li>
        </ul>
    </div>
</div>