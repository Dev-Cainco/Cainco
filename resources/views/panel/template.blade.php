<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>DASHGUM - Bootstrap Admin Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{asset('assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/js/bootstrap-datepicker/css/datepicker.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/js/bootstrap-daterangepicker/daterangepicker.css')}}" />
        
    <!-- Custom styles for this template -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style-responsive.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
        
          <section id="container" >
              
              <!--header start-->
              @include('panel.partes.nav')
              <!--header end-->
              <!--sidebar start-->
              <aside>
                  @include('panel.partes.menu')
              </aside>
              <!--sidebar end-->
              <!--main content start-->
                <section id="main-content">
                    <section class="wrapper">
                               
                        @yield('contenido')
                      
                      </section>
              </section><!-- /MAIN CONTENT -->
        
              <!--main content end-->
              <!--footer start-->
              <footer class="site-footer">
                  @include('panel.partes.footer')
              </footer>
              <!--footer end-->
          </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{asset('assets/js/jquery.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script class="include" type="text/javascript" src="{{asset('assets/js/jquery.dcjqaccordion.2.7.js')}}"></script>
    <script src="{{asset('assets/js/jquery.scrollTo.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.nicescroll.js')}}" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="{{asset('assets/js/common-scripts.js')}}"></script>

    <!--script for this page-->
    <script src="{{asset('assets/js/jquery-ui-1.9.2.custom.min.js')}}"></script>

	<!--custom switch-->
	<script src="{{asset('assets/js/bootstrap-switch.js')}}"></script>
	
	<!--custom tagsinput-->
	<script src="{{asset('assets/js/jquery.tagsinput.js')}}"></script>
	
	<!--custom checkbox & radio-->
	
	<script type="text/javascript" src="{{asset('assets/js/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/bootstrap-daterangepicker/date.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
	
	<script type="text/javascript" src="{{asset('assets/js/bootstrap-inputmask/bootstrap-inputmask.min.js')}}"></script>
	
	
	<script src="{{asset('assets/js/form-component.js')}}"></script>    
    
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
