<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>ISCO - @yield('title')</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	{{HTML::style('assets/plugins/bootstrap/css/bootstrap.min.css')}}
	{{HTML::style('assets/plugins/font-awesome/css/font-awesome.min.css')}}
	{{HTML::style('//cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.css')}}
	{{HTML::style('zontal-admin/assets/css/style.css')}}
	{{HTML::script('assets/plugins/jquery-1.11.1.min.js')}}
    {{HTML::script('assets/plugins/bootstrap/js/bootstrap.min.js')}}
	<link rel="shortcut icon" href="favicon.ico" />
    @section('header')
        <script>
        $(document).ready(function() {

            function update() {
              $.ajax({
               type: 'POST',
               //url: 'http:\/\/localhost\/isco\/public\/admin\/currenttime',
               url: "{{URL::route('currenttime')}}",
               timeout: 1000,
               success: function(data) {
                  $("#timer").html(data); 
                  window.setTimeout(update, 1000);
               }
              });
             }
             update();

        });
        </script>
    @show

</head>
 	
<body>
    @if(!Auth::guest())
	<header>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="pull-left">
                        
                        <p>current time: <span id="timer"> </p>
                        
                    </div>
                </div>
                <div class="col-md-9">
                    <strong>Email: </strong>isco@komputasi.net
                    &nbsp;&nbsp;
                    <strong>Support: </strong>+62878-6396-9334
                </div>

            </div>
        </div>
    </header>
    @endif
    <!-- HEADER END-->

    <div class="navbar navbar-inverse set-radius-zero">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                @if(!Auth::guest())
                <a href="{{URL::to('admin')}}"><h4 class="header-tittle">ISCO 2015</h4></a>
                @else
                <a href="{{URL::to('/')}}"><h4 class="header-tittle">ISCO 2015</h4></a>
                @endif
            </div>

            
        </div>
    </div>
    @if(!Auth::guest())
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a id="dashboard"  href="{{URL::to('/admin')}}">Dashboard</a></li>
                            <li><a id="sg" href="{{URL::route('sg')}}">Statistician Game</a></li>
                            <li><a  id="paper"  href="{{URL::route('paper')}}">Lomba Paper Statistika</a></li>
                            <li><a href="{{URL::route('admin.logout')}}">Logout</a></li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    @endif
    <!-- MENU SECTION END-->

        <div class="content-wrapper">
        	<div class="container">
        			@yield('content')
   			</div>			
  
  	</div>
    <!-- CONTENT-WRAPPER SECTION END-->
   
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    &copy; ISCO - 2015  | By : <a target="_blank" href="http://www.komputasi.net/" >KOMNET</a>
                </div>

            </div>
        </div>
    </footer>
@section('script')
@show
        
</body>
</html>