<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE | Flot Charts</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="{{asset('css/ionicons.min.css')}}" rel="stylesheet" type="text/css" />

        <link href="{{asset('css/datatables/dataTables.bootstrap.css')}}" rel="stylesheet" type="text/css" />

        <!-- Theme style -->
        <link href="{{asset('css/AdminLTE.css')}}" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            @include('panel.partes.nav')
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                @include('panel.partes.menu')
            </aside>
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        CAINCO 
                        <small>/ Panel de Control</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Pagina Principal</a></li>
                        <li class="active">Escritorio</li>
                    </ol>
                </section>
                
                <section class="content">

                    @yield('contenido')
                
                </section> 

                
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        
        

        <!-- jQuery 2.0.2 -->
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <!-- Bootstrap -->
        <script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="{{asset('js/AdminLTE/app.js')}}" type="text/javascript"></script>

        <!-- DATA TABES SCRIPT -->
        <script src="{{asset('js/plugins/datatables/jquery.dataTables.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/plugins/datatables/dataTables.bootstrap.js')}}" type="text/javascript"></script>

        <!-- Page script -->
        <!-- page script -->
        <script type="text/javascript">
            $(function() {
                $("#example1").dataTable();
                $('#example2').dataTable({
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": false
                });
            });
        </script>
    </body>
</html>