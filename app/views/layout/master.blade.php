<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<html>
	<head>
		<meta charset="utf-8" />
		<meta content="width=device-width, initial-scale=1.0" name="viewport" />
		<meta content="" name="description" />
		<meta content="" name="author" />
		<title>ISCO - @yield('title')</title>
		
		<!-- BEGIN GLOBAL MANDATORY STYLES -->
		
	    {{ HTML::style('assets/plugins/bootstrap/css/bootstrap.min.css') }}
		{{ HTML::style('assets/plugins/bootstrap/css/bootstrap-responsive.min.css') }}
		{{ HTML::style('assets/plugins/font-awesome/css/font-awesome.min.css') }}
		{{ HTML::style('assets/css/style-metro.css') }}
		{{ HTML::style('assets/css/style.css') }}
		{{ HTML::style('assets/css/style-responsive.css') }}
		{{ HTML::style('assets/css/themes/default.css') }}
		{{ HTML::style('assets/plugins/uniform/css/uniform.default.css') }}
		{{ HTML::style('assets/plugins/select2/select2_metro.css') }}
		<!-- END GLOBAL MANDATORY STYLES -->
		<!-- BEGIN PAGE LEVEL STYLES -->
		{{ HTML::style('assets/css/pages/login-soft.css') }}
		<!-- END PAGE LEVEL STYLES -->
		<link rel="shortcut icon" href="favicon.ico" />
		@section('header')
        @show

	</head>
    <body class="login">
    	<!-- BEGIN LOGO -->
		<div class="logo">
			<img src="{{URL::to('/')}}/assets/img/isco/isco.png" class="img-responsive" alt="ISCO">
		</div>
		
		<!-- BEGIN LOGIN -->	
            @yield('content')
        

	    <!-- BEGIN COPYRIGHT -->
		<div class="copyright">
			2015 &copy; ISCO - ISI Indonesia
		</div>
		<!-- END COPYRIGHT -->
		<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
		<!-- BEGIN CORE PLUGINS -->   
		{{HTML::script('assets/plugins/jquery-1.10.1.min.js')}}
		{{HTML::script('assets/plugins/jquery-migrate-1.2.1.min.js')}}
		<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
		{{HTML::script('assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js')}}
		{{HTML::script('assets/plugins/bootstrap/js/bootstrap.min.js')}}
		{{HTML::script('assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js')}}
		<!--[if lt IE 9]>
		<script src="assets/plugins/excanvas.min.js"></script>
		<script src="assets/plugins/respond.min.js"></script>  
		<![endif]-->   
		{{HTML::script('assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}
		{{HTML::script('assets/plugins/jquery.blockui.min.js')}}
		{{HTML::script('assets/plugins/jquery.cookie.min.js')}}
		{{HTML::script('assets/plugins/uniform/jquery.uniform.min.js')}}
		<!-- END CORE PLUGINS -->
		@section('script')
        @show
		
    </body>
</html>