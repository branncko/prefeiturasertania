@extends('site.index-turismo')

@section('content_index')
    <div class="container">

        <div class="row">
            <!-- Slider -->
            <div class="col-sm-12 col-lg-12" style="margin-top: 20px">
                <div class="well">


                    <div class="row">
                        <?php $x=01; ?>
                        @while ($x <= 10)

                        <div class="col-lg-6 col-sm-5 ">
                            <div class="">
                                <img class="img-responsive" src="{{ asset('imagens/turismo/190721/'. ($x < 10 ? '0'.$x : $x) .'.jpg') }}" alt="">
                            </div>
                        </div>
    

                        <?php $x++; ?>
                        @endwhile

                        <?php $x=01; ?>
                        @while ($x < 23)

                        <div class="col-lg-6 col-sm-5 ">
                            <div class="">
                                <img class="img-responsive" src="{{ asset('imagens/turismo/'. ($x < 10 ? '0'.$x : $x) .'.jpg') }}" alt="">
                            </div>
                        </div>
    

                        <?php $x++; ?>
                        @endwhile
                        
                    </div>
                        
                    
                </div>
            </div>

            <!-- Thumbnail Slider -->


        </div>
    </div>

@endsection