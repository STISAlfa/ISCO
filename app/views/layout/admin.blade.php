<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>ISCO - @yield('title')</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="ISCO 2015" name="description" />
	<meta content="KOMNET" name="author" />
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
        @if(Auth::user()->isadmin())
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
        @endif
        </script>
    @show

</head>
 	
<body>
    @if(Auth::user()->isadmin())
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
                @if(Auth::user()->isadmin())
                <div>
                    <div class="row">
                        <div class="col-md-2 col-md-offset-1">
                            <a href="{{URL::to('admin')}}"><img src="{{URL::to('/')}}/assets/img/isco/isco.png" class="img-responsive" alt="ISCO"></a>
                        </div>
                        <div class="col-md-9">
                            <a href="{{URL::to('admin')}}"><h4 class="header-tittle" style="padding-top:30px">INDONESIAN STATISTICS CONFERENCE & OLYMPIAD</h4></a>
                        </div>
                    </div>
                </div>
                @else
                <div>
                    <div class="row">
                        <div class="col-md-2 col-md-offset-1">
                            <a href="{{URL::to('/')}}"><img src="{{URL::to('/')}}/assets/img/isco/isco.png" class="img-responsive" alt="ISCO"></a>
                        </div>
                        <div class="col-md-9">
                            <a href="{{URL::to('/')}}"><h4 class="header-tittle" style="padding-top:30px">INDONESIAN STATISTICS CONFERENCE & OLYMPIAD</h4></a>
                        </div>
                    </div>
                </div>
                @endif
            </div>

            
        </div>
    </div>
    @if(Auth::user()->isadmin())
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