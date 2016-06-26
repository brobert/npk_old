<!DOCTYPE html>
<html class="backend">
    <!-- START Head -->
    <head>
        <!-- START META SECTION -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>{{$title or 'Niepubliczne przedszkole "Krasnal"'}}</title>
        <meta name="author" content="optimisticdesigns">
        <meta name="description" content="Lander.v2 Admin is a clean and flat backend built with twitter bootstrap">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/image/touch/apple-touch-icon-144x144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/image/touch/apple-touch-icon-114x114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/image/touch/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="/image/touch/apple-touch-icon-57x57-precomposed.png">
        <link rel="shortcut icon" href="/image/favicon.ico">
        <!--/ END META SECTION -->

        <!-- START STYLESHEETS -->
        <!-- Plugins stylesheet : optional -->
        <!--/ Plugins stylesheet : optional -->

        <!-- Application stylesheet : mandatory -->
        <link rel="stylesheet" href="/stylesheet/bootstrap.css">
        <link rel="stylesheet" href="/stylesheet/layout.css">
        <link rel="stylesheet" href="/stylesheet/uielement.css">
        <!--/ Application stylesheet -->

        <!-- Theme stylesheet -->
		<link rel="stylesheet" href="/stylesheet/themes/theme.css">
        <!--/ Theme stylesheet -->

        <!-- modernizr script -->
        <script type="text/javascript" src="/plugins/modernizr/js/modernizr.js"></script>
        <!--/ modernizr script -->
        <!-- END STYLESHEETS -->

        <!-- Theme stylesheet : optional -->
        <link rel="stylesheet" href="/stylesheet/themes/layouts/fixed-header.css">

        @if( isset($_assets))
            @if( isset( $_assets[ 'css' ] ) )
                @foreach( $_assets[ 'css' ] as $_asset )
                    <link rel="stylesheet" href="/{{$_asset}}">
                @endforeach
            @endif
        @endif
        <!-- Theme stylesheet : optional -->
    </head>
    <!--/ END Head -->

    <!-- START Body -->
    <body>
        <!-- START Template Header -->
        @include('layouts.partials.header')
        <!--/ END Template Header -->

        <!-- START Template Sidebar (Left) -->
        @include('layouts.partials.sidebar_left')
        <!--/ END Template Sidebar (Left) -->

		<!-- START Template Sidebar (right) -->
        @include('layouts.partials.sidebar_right')
        <!--/ END Template Sidebar (right) -->

        <!-- START Template Footer -->
        @include('layouts.partials.footer')
        <!--/ END Template Footer -->

        <!-- START Template Main -->
        <!-- START Template Main -->
        <section id="main" role="main">
            <!-- START Template Container -->
            <div class="container-fluid" style="min-height:1024px;"><!-- add min-height to simulate scrolling -->
                <!-- Page Header -->
                <div class="page-header page-header-block">

                    <div class="page-header-section">
                        <!-- Toolbar -->
                        <div class="toolbar">
                            @include('layouts.partials.breadcrumb')
                        </div>
                        <!--/ Toolbar -->
                    </div>
                </div>
                <!-- Page Header -->
                @yield('content')

            </div>
            <!--/ END Template Container -->

            <!-- START To Top Scroller -->
            <a href="#" class="totop animation" data-toggle="waypoints totop" data-showanim="bounceIn" data-hideanim="bounceOut" data-offset="50%"><i class="ico-angle-up"></i></a>
            <!--/ END To Top Scroller -->
        </section>
        <!--/ END Template Main -->

        <!--/ END Template Main -->

        <!-- START JAVASCRIPT SECTION (Load javascripts at bottom to reduce load time) -->
        <!-- Application and vendor script : mandatory -->
        <script type="text/javascript" src="/javascript/vendor.js"></script>
        <script type="text/javascript" src="/javascript/core.js"></script>
        <script type="text/javascript" src="/javascript/backend/app.js"></script>
        <!--/ Application and vendor script : mandatory -->

        <!-- Plugins and page level script : optional -->
		<script type="text/javascript" src="/javascript/pace.min.js"></script>
        <script type="text/javascript" src="/plugins/nprogress/nprogress.js"></script>
        <!--/ Plugins and page level script : optional -->

		<script type="text/javascript" src="/plugins/datatables/js/jquery.dataTables.js"></script>
        <script type="text/javascript" src="/plugins/datatables/tabletools/js/dataTables.tableTools.js"></script>
        <script type="text/javascript" src="/plugins/datatables/js/datatables-bs3.js"></script>

        @if( isset($_assets))
            @if( isset( $_assets[ 'js' ] ) )
                @foreach( $_assets[ 'js' ] as $_asset )
                    <script type="text/javascript" src="/javascript/{{$_asset}}"></script>
                @endforeach
            @endif
        @endif
        <!--/ END JAVASCRIPT SECTION -->
    </body>
    <!--/ END Body -->
</html>