<!DOCTYPE html>
<html>
  <head>    
    <meta charset="UTF-8">
    <title>Dashboard ISCO 2015 - Statistician Game</title>
    <meta name="description" content="Dashboard ISCO 2015 - Statistician Game">
    <meta name="author" content="Rahayu">
    
    <!-- Mobile Specific Meta -->   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <!-- Bootstrap -->
    {{HTML::style('assets/plugins/bootstrap/css/bootstrap.min.css')}}

    <!-- Custom stylesheet -->
    
    {{HTML::style('assets/css/rahayu/style.css')}}
    {{HTML::style('assets/css/rahayu/animate.css')}}


    <!-- Added google font -->
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700|Lobster|Roboto+Slab:400,700' rel='stylesheet' type='text/css'>


	<!--[if IE 9]> 
    	<link rel="stylesheet" href="assets/css/ie9.css">
    <![endif]-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>

 <body>
    <div id="wrapper">
        <div id="bg"></div>
        <div id="overlay"></div>
        <div id="main"></div>
    </div>  

 <div  class="sun-content">
      <div class="container content">
            <div class="row">
                <div class="sun clearfix">
                  <div style="padding-top:100px">
                    <div class="col-sm-4 col-sm-offset-4">
                        <img src="{{URL::to('/')}}/assets/img/isco/isco.png" class="img-responsive" alt="ISCO"> 
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <a href="{{URL::route('sg.soal')}}">
                        <span style="font-size:14.0em" class="glyphicon glyphicon-file animated bounceInUp" aria-hidden="true"></span>
                      </a>                              
                      <h4>SOAL</h4>
                    </div>
                    <div class="col-md-6 ">
                      <a href="{{URL::route('sg.user')}}">
                        <span style="font-size:14.0em" class="glyphicon glyphicon-user animated bounceInUp" aria-hidden="true"></span>
                      </a>
                      <h4>USER</h4>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        <!-- .container end here -->
 </div>

 
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    {{HTML::script('assets/plugins/jquery-1.10.1.min.js')}}
    {{HTML::script('assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    {{HTML::script('assets/plugins/bootstrap/js/bootstrap.min.js')}}        
  </body>

</html>