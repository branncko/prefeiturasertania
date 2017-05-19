<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Administração Prefeitura de Sertânia </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap core CSS -->

    <link href="{{ asset('assets-admin/css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{ asset('assets-admin/fonts/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets-admin/css/animate.min.css')}}" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="{{ asset('assets-admin/css/custom.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets-admin/css/maps/jquery-jvectormap-2.0.3.css')}}" />
    <link href="{{ asset('assets-admin/css/icheck/flat/green.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets-admin/css/floatexamples.css')}}" rel="stylesheet" type="text/css" />

    <script src="{{ asset('assets-admin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets-admin/js/nprogress.js') }}"></script>

    <!-- Include Editor style. -->
    <!-- include summernote css/js-->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.js"></script>

    <!-- switchery -->
    <link rel="stylesheet" href="{{ asset('assets-admin/css/switchery/switchery.min.css') }}" />
{{--editor--}}
    <!-- select2 -->
    <link href="{{ asset('assets-admin/css/select/select2.min.css') }}" rel="stylesheet">


    <!--[if lt IE 9]>
    <script src="../assets/js/ie8-responsive-file-warning.js"></script>
    <![endif]-->

    <!-- HTML5 shim and Respond.js') }} for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js') }}"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js') }}"></script>
    <![endif]-->

</head>


<body class="nav-md">

<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">

                <div class="navbar nav_title" style="border: 0;">
                    <a href="{!! route('admin-home') !!}" class="site_title"><i class="fa fa-home"></i> <span>Sertânia</span></a>
                </div>
                <div class="clearfix"></div>

                <!-- menu prile quick info -->

                <!-- /menu prile quick info -->

                <br />
<div class="clearfix"></div>
                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>Administração</h3>
                        <ul class="nav side-menu">
                            <li ><a><i class="fa fa-home"></i> Usuários <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu" style="display: none">
                                    <li><a href="{!! route('admin-register') !!}">Adicionar Novos</a>
                                    </li>
                                    <li><a href="{!! route('admin-lista') !!}">Lista de Usuários</a>
                                    </li>
                                    <li><a href="{!! route('admin-lista-inativos') !!}">Usuários Inativos</a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </div>

                    <div class="menu_section">
                        <h3>Geral</h3>
                        <ul class="nav side-menu">
                            <li ><a><i class="fa fa-home"></i> Notícias <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu" style="display: none">
                                    <li><a href="{!! route('noticia-cadastro') !!}">Criar</a></li>
                                    <li><a href="{!! route('noticia-lista') !!}">Listar Notícias</a></li>
                                </ul>
                            </li>
                            {{--<li><a><i class="fa fa-edit"></i> Banners <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu" style="display: none">
                                    <li><a href="empty.html">Menu2.1</a>
                                    </li>
                                    <li><a href="empty.html">Meny2.2s</a>
                                    </li>
                                </ul>
                            </li>--}}
                            <li><a><i class="fa fa-edit"></i> Categorias <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu" style="display: none">
                                    <li><a href="{!! route('categoria-cadastro') !!}">Criar</a></li>
                                    <li><a href="{!! route('categoria-lista') !!}">Listar</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-edit"></i> Downloads <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu" style="display: none">
                                    <li><a href="{!! route('downloads-cadastro') !!}">Cadastrar</a></li>
                                    <li><a href="{!! route('downloads-lista') !!}">Listar</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" class="col-md-3" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    {{--<a data-toggle="tooltip" data-placement="top" title="FullScreen">--}}
                        {{--<span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>--}}
                    {{--</a>--}}
                    <a data-toggle="tooltip" class="col-md-3" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" class="col-md-3" data-placement="top" title="Logout" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>

      @include('layouts.navbar')


      @yield('contentadmin')

    </div>

</div>

<div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
</div>

<script src="{{ asset('assets-admin/js/bootstrap.min.js') }}"></script>

<!-- Include JS file. -->
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.6.0/js/froala_editor.min.js'></script>

<!-- switchery -->
<script src="{{ asset('assets-admin/js/switchery/switchery.min.js') }}"></script>

<!-- chart js -->
<script src="{{ asset('assets-admin/js/chartjs/chart.min.js') }}"></script>
<!-- bootstrap progress js -->
<script src="{{ asset('assets-admin/js/progressbar/bootstrap-progressbar.min.js') }}"></script>
<script src="{{ asset('assets-admin/js/nicescroll/jquery.nicescroll.min.js') }}"></script>
<!-- icheck -->
<script src="{{ asset('assets-admin/js/icheck/icheck.min.js') }}"></script>
<!-- daterangepicker -->
<script type="text/javascript" src="{{ asset('assets-admin/js/moment/moment.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets-admin/js/datepicker/daterangepicker.js') }}"></script>


<!-- Autocomplete -->
<script type="text/javascript" src="{{ asset('assets-admin/js/autocomplete/countries.js') }}"></script>
<script src="{{ asset('assets-admin/js/autocomplete/jquery.autocomplete.js') }}"></script>
<!-- pace -->
<script src="{{ asset('assets-admin/js/pace/pace.min.js') }}"></script>

<script src="{{ asset('assets-admin/js/custom.js')  }}"></script>


<!-- flot js -->
<!--[if lte IE 8]><script type="text/javascript" src="{{ asset('assets-admin/js/excanvas.min.js')  }}"></script><![endif]-->
<script type="text/javascript" src="{{ asset('assets-admin/js/flot/jquery.flot.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets-admin/js/flot/jquery.flot.pie.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets-admin/js/flot/jquery.flot.orderBars.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets-admin/js/flot/jquery.flot.time.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets-admin/js/flot/date.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets-admin/js/flot/jquery.flot.spline.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets-admin/js/flot/jquery.flot.stack.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets-admin/js/flot/curvedLines.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets-admin/js/flot/jquery.flot.resize.js') }}"></script>
<script>
    $(document).ready(function() {
        // [17, 74, 6, 39, 20, 85, 7]
        //[82, 23, 66, 9, 99, 6, 2]
        var data1 = [
            [gd(2012, 1, 1), 17],
            [gd(2012, 1, 2), 74],
            [gd(2012, 1, 3), 6],
            [gd(2012, 1, 4), 39],
            [gd(2012, 1, 5), 20],
            [gd(2012, 1, 6), 85],
            [gd(2012, 1, 7), 7]
        ];

        var data2 = [
            [gd(2012, 1, 1), 82],
            [gd(2012, 1, 2), 23],
            [gd(2012, 1, 3), 66],
            [gd(2012, 1, 4), 9],
            [gd(2012, 1, 5), 119],
            [gd(2012, 1, 6), 6],
            [gd(2012, 1, 7), 9]
        ];
        $("#canvas_dahs").length && $.plot($("#canvas_dahs"), [
            data1, data2
        ], {
            series: {
                lines: {
                    show: false,
                    fill: true
                },
                splines: {
                    show: true,
                    tension: 0.4,
                    lineWidth: 1,
                    fill: 0.4
                },
                points: {
                    radius: 0,
                    show: true
                },
                shadowSize: 2
            },
            grid: {
                verticalLines: true,
                hoverable: true,
                clickable: true,
                tickColor: "#d5d5d5",
                borderWidth: 1,
                color: '#fff'
            },
            colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
            xaxis: {
                tickColor: "rgba(51, 51, 51, 0.06)",
                mode: "time",
                tickSize: [1, "day"],
                //tickLength: 10,
                axisLabel: "Date",
                axisLabelUseCanvas: true,
                axisLabelFontSizePixels: 12,
                axisLabelFontFamily: 'Verdana, Arial',
                axisLabelPadding: 10
                //mode: "time", timeformat: "%m/%d/%y", minTickSize: [1, "day"]
            },
            yaxis: {
                ticks: 8,
                tickColor: "rgba(51, 51, 51, 0.06)",
            },
            tooltip: false
        });

        function gd(year, month, day) {
            return new Date(year, month - 1, day).getTime();
        }
    });
</script>



<!-- worldmap -->
<script type="text/javascript" src="{{ asset('assets-admin/js/maps/jquery-jvectormap-2.0.3.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets-admin/js/maps/gdp-data.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets-admin/js/maps/jquery-jvectormap-world-mill-en.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets-admin/js/maps/jquery-jvectormap-us-aea-en.js') }}"></script>
<!-- pace -->
<script src="{{ asset('assets-admin/js/pace/pace.min.js') }}"></script>
<script>
    $(function() {
        $('#world-map-gdp').vectorMap({
            map: 'world_mill_en',
            backgroundColor: 'transparent',
            zoomOnScroll: false,
            series: {
                regions: [{
                    values: gdpData,
                    scale: ['#E6F2F0', '#149B7E'],
                    normalizeFunction: 'polynomial'
                }]
            },
            onRegionTipShow: function(e, el, code) {
                el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
            }
        });
    });
</script>
<!-- skycons -->
<script src="{{ asset('assets-admin/js/skycons/skycons.min.js') }}"></script>


<script>
    var icons = new Skycons({
            "color": "#73879C"
        }),
        list = [
            "clear-day", "clear-night", "partly-cloudy-day",
            "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
            "fog"
        ],
        i;

    for (i = list.length; i--;)
        icons.set(list[i], list[i]);

    icons.play();
</script>

<!-- datepicker -->
<script type="text/javascript">
    $(document).ready(function() {

        var cb = function(start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            //alert("Callback has fired: [" + start.format('MMMM D, YYYY') + " to " + end.format('MMMM D, YYYY') + ", label = " + label + "]");
        }

        var optionSet1 = {
            startDate: moment().subtract(29, 'days'),
            endDate: moment(),
            minDate: '01/01/2012',
            maxDate: '12/31/2015',
            dateLimit: {
                days: 60
            },
            showDropdowns: true,
            showWeekNumbers: true,
            timePicker: false,
            timePickerIncrement: 1,
            timePicker12Hour: true,
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            opens: 'left',
            buttonClasses: ['btn btn-default'],
            applyClass: 'btn-small btn-primary',
            cancelClass: 'btn-small',
            format: 'MM/DD/YYYY',
            separator: ' to ',
            locale: {
                applyLabel: 'Submit',
                cancelLabel: 'Clear',
                fromLabel: 'From',
                toLabel: 'To',
                customRangeLabel: 'Custom',
                daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                firstDay: 1
            }
        };
        $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
        $('#reportrange').daterangepicker(optionSet1, cb);
        $('#reportrange').on('show.daterangepicker', function() {
            console.log("show event fired");
        });
        $('#reportrange').on('hide.daterangepicker', function() {
            console.log("hide event fired");
        });
        $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
            console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
        });
        $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
            console.log("cancel event fired");
        });
        $('#options1').click(function() {
            $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
        });
        $('#options2').click(function() {
            $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
        });
        $('#destroy').click(function() {
            $('#reportrange').data('daterangepicker').remove();
        });
    });
</script>




<script>
    NProgress.done();
</script>
<!-- /datepicker -->
<!-- /footer content -->
</body>

</html>
