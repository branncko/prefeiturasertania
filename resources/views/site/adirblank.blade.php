@extends('site.index')

@section('content_index')
    <div class="container">

        <div class="row">
            <!-- Slider -->
            <div class="col-sm-8 col-lg-8">
                <div class="well">

                        <h3>Lei Adir Blank</h3>
                        <h4>Sertânia</h4>
                        
                    <div class="article-like-comment-date">

                        <a href="javascript:print();" title="Imprimir" class="hidden-xs btn btn-default btn-xs"><i class="fa fa-print"></i></a>


                    </div>
                    <div class="divider-dashed">
                        <hr>
                    </div>

                   
                    <p>
                        <h2><strong>Chamada 01/2020</strong></h2>
                        <p><a href="https://docs.google.com/forms/d/e/1FAIpQLSfHjdEHOoYSAlOn4wrVpAuyUbI8ppL6iWArDvdTkel2mhsZ1A/viewform" target="_Blank"> Cadastro Inciso II - Chamada Pública - 001/2020</a></p>
                        <p><a href="http://sertania.pe.gov.br/downloads/100" target="_Blank"> Chamada Pública 002/2020 </a></p>
                    </p>
                    <p>
                        <h2><strong>Chamada 02/2020</strong></h2>
                        <p><a href="https://forms.gle/yRghkPfpEgMPii1J7" target="_Blank"> Cadastro Inciso III - Chamada Pública - 002/2020</a></p>
                        <p><a href="http://sertania.pe.gov.br/downloads/101" target="_Blank"> Chamada Pública 003/2020 </a></p>
                    </p>
                    <p>
                        <h2><strong>Chamada 03/2020</strong></h2>
                        <p><a href="https://docs.google.com/forms/d/e/1FAIpQLScX7-EjxvVoaqtCd6lNy9fCXBNfJflwEg_ZQhmjnwBYO5uxdg/viewform" target="_Blank"> Cadastro Inciso III - Chamada Pública - 003/2020</a></p>
                        <p><a href="http://sertania.pe.gov.br/downloads/101" target="_Blank"> Chamada Pública 003/2020 </a></p>
                    </p>


                </div>
            </div>

            <!-- Thumbnail Slider -->


            {{--Lateral--}}
            <div class="col-md-4 col-lg-4 pull-right">

                <div class="well" style="max-width: 340px; padding: 0px 0; ">

                    @include('site.menuprefeitura')


                </div>
            </div>
        </div>
    </div>

@endsection