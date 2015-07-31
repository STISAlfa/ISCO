@extends('layout.admin')

@section('title', 'Soal View For User')

@section('header')
@parent
<meta name="csrf_token" content="{{csrf_token()}}">
<meta charset="utf-8">
<style type="text/css">
	
	.section-isco{
              color: #FFF;
              background-color: #C36464;
              border-color: #C36464;
            }
	#mask {
              position: absolute;
              left: 0;
              top: 0;
              z-index: 9000;
              background-color: #000;
              display: none;
            }
             
            #boxes .window {
              position: absolute;
              left: 0;
              top: 0;
              width: 440px;
              height: 200px;
              display: none;
              z-index: 9999;
              padding: 20px;
              border-radius: 15px;
              text-align: center;
            }
             
            #boxes #dialog {
              width: 750px;
              height: 500px;
              padding: 10px;
              background-color: #ffffff;
              font-family: 'Segoe UI Light', sans-serif;
              font-size: 15pt;
            }
             
            #popupfoot {
              font-size: 16pt;
              position: relative;
              bottom: 5px;
              width: 100px;
              margin: auto;
            }

            #popupfoot a{
                text-decoration: none;
            }
            .agree:hover{
              background-color: #D1D1D1;
            }
            .popupoption:hover{
                background-color:#D1D1D1;
                color: green;
            }
            .popupoption2:hover{
                
                color: red;
            }


	/* all links */
	.bs-docs-sidebar .nav>li>a {
		color: #999;
		border-left: 2px solid transparent;
		padding: 4px 2px;
		font-size: 13px;
		font-weight: 400;
	}

	/* nested links */
	.bs-docs-sidebar .nav .nav>li>a {
		padding-top: 1px;
		padding-bottom: 1px;
		padding-left: 10px;
		font-size: 12px;
	}

	/* active & hover links */
	.bs-docs-sidebar .nav>.active>a, 
	.bs-docs-sidebar .nav>li>a:hover, 
	.bs-docs-sidebar .nav>li>a:focus {
		color: #CC0000;                 
		text-decoration: none;          
		background-color: transparent;  
		border-left-color: #CC0000; 
	}
	/* all active links */
	.bs-docs-sidebar .nav>.active>a, 
	.bs-docs-sidebar .nav>.active:hover>a,
	.bs-docs-sidebar .nav>.active:focus>a {
		font-weight: 700;
	}
	/* nested active links */
	.bs-docs-sidebar .nav .nav>.active>a, 
	.bs-docs-sidebar .nav .nav>.active:hover>a,
	.bs-docs-sidebar .nav .nav>.active:focus>a {
		font-weight: 500;
	}

	/* hide inactive nested list */
	.bs-docs-sidebar .nav ul.nav {
		display: none;           
	}
	/* show active nested list */
	.bs-docs-sidebar .nav>.active>ul.nav {
		display: block;           
	}

	@media (min-width: 979px) {
		#sidebar.affix-top {
			position: static;
			margin-top:25px;
			width:228px;
		}

		#sidebar.affix {
			position: fixed;
			top:25px;
			width:228px;
		}
	}

	.float{
		position: fixed;
		bottom: 10px;
		right: 10px;
		margin-bottom: -5px;
	}



	.affix,.affix-top {
		position:static;
	}
</style>
@stop


@section('content')

<div class="container">

	

	<div class="row">
		<!--Nav Bar -->
		<nav class="col-md-2 bs-docs-sidebar">
			<ul id="sidebar" class="nav nav-stacked">
				<?php 
				$start = 1;
				$end   = 5;

				if( $data ){
                            $sz = count($data);    
                        }
                        
                        $N = floor($sz/5); if( $sz%5 != 0 ) $N = $N + 1;
                        $M = $sz%5; $M = ($M==0) ? 5 : $M;
                        
                        for ($i=0; $i < $N; $i++) {
                            $end = ( $end > $sz ) ? $sz : $end;
                            echo "<li>"."\n";
                            echo "<a href=\"#GroupSoal".$start.$end."\">Soal ".$start." - ".$end."</a>"."\n";
                            echo "<ul class=\"nav nav-stacked\">"."\n"; 
                            for ($j=0; $j < $M; $j++) { 
                                echo "<li><a href=\"#GroupSubSoal".($start+$j)."\">Soal ".($start+$j)."</a></li>"."\n";
                            }
                            echo "</ul>"."\n";
                            echo "</li>"."\n";
                            $start = $end+1;
                            $end += 5;
				}?>
			</ul>
		</nav>

		<div id="boxes">
                    <div id="dialog" class="window" style="overflow: auto; position: fixed;">
                    <div class="panel panel-info">
                    <div class="panel-heading">PERATURAN SOAL</div>
                        <div class="panel-body">
                        Ini adalah bagian popup.. TestIni adalah bagian popup.. TestIni adalah bagian popup.. Test
                        Ini adalah bagian popup.. TestIni adalah bagian popup.. TestIni adalah bagian popup.. Test
                        Ini adalah bagian popup.. TestIni adalah bagian popup.. TestIni adalah bagian popup.. Test
                        Ini adalah bagian popup.. TestIni adalah bagian popup.. TestIni adalah bagian popup.. Test
                        Ini adalah bagian popup.. TestIni adalah bagian popup.. TestIni adalah bagian popup.. Test
                        Ini adalah bagian popup.. TestIni adalah bagian popup.. TestIni adalah bagian popup.. Test
                        Ini adalah bagian popup.. TestIni adalah bagian popup.. TestIni adalah bagian popup.. Test
                        Ini adalah bagian popup.. TestIni adalah bagian popup.. TestIni adalah bagian popup.. Test
                        Ini adalah bagian popup.. TestIni adalah bagian popup.. TestIni adalah bagian popup.. Test
                        Ini adalah bagian popup.. TestIni adalah bagian popup.. TestIni adalah bagian popup.. Test
                        Ini adalah bagian popup.. TestIni adalah bagian popup.. TestIni adalah bagian popup.. Test
                        Ini adalah bagian popup.. TestIni adalah bagian popup.. TestIni adalah bagian popup.. Test
                        Ini adalah bagian popup.. TestIni adalah bagian popup.. TestIni adalah bagian popup.. Test
                        Ini adalah bagian popup.. TestIni adalah bagian popup.. TestIni adalah bagian popup.. Test
                        Ini adalah bagian popup.. TestIni adalah bagian popup.. TestIni adalah bagian popup.. Test
                        Ini adalah bagian popup.. TestIni adalah bagian popup.. TestIni adalah bagian popup.. Test
                        Ini adalah bagian popup.. TestIni adalah bagian popup.. TestIni adalah bagian popup.. Test
                        Ini adalah bagian popup.. TestIni adalah bagian popup.. TestIni adalah bagian popup.. Test
                        Ini adalah bagian popup.. TestIni adalah bagian popup.. TestIni adalah bagian popup.. Test
                        Ini adalah bagian popup.. TestIni adalah bagian popup.. TestIni adalah bagian popup.. Test
                        Ini adalah bagian popup.. TestIni adalah bagian popup.. TestIni adalah bagian popup.. Test
                        Ini adalah bagian popup.. TestIni adalah bagian popup.. TestIni adalah bagian popup.. Test
                        Ini adalah bagian popup.. TestIni adalah bagian popup.. TestIni adalah bagian popup.. Test
                        Ini adalah bagian popup.. TestIni adalah bagian popup.. TestIni adalah bagian popup.. Test
                        Ini adalah bagian popup.. TestIni adalah bagian popup.. TestIni adalah bagian popup.. Test
                        Ini adalah bagian popup.. TestIni adalah bagian popup.. TestIni adalah bagian popup.. Test
                        Ini adalah bagian popup.. TestIni adalah bagian popup.. TestIni adalah bagian popup.. Test
                        Ini adalah bagian popup.. TestIni adalah bagian popup.. TestIni adalah bagian popup.. Test
                        Ini adalah bagian popup.. TestIni adalah bagian popup.. TestIni adalah bagian popup.. Test
                        Ini adalah bagian popup.. TestIni adalah bagian popup.. TestIni adalah bagian popup.. Test
                        </div>
                        <div id="popupfoot" class="panel-heading tutup"><a style="color:blue;" href="#">Oke</a> </div>
                    </div>
                    </div>
                    <div id="mask"></div>
                </div>


		<!--Main Content -->
		<form action="ajax/recheck.php" method="post">
			<div class="col-md-10">
				<?php 
				$start = 1;
				$end   = 5;

				if( $data ){
                            $sz = count($data);    
                        }
                        
                        $N = floor($sz/5); if( $sz%5 != 0 ) $N = $N + 1;
                        $M = $sz%5; $M = ($M==0) ? 5 : $M;


				for ($i=0; $i < $N; $i++) {
                            $end = ( $end > $sz ) ? $sz : $end;


                            echo "<section id=\"GroupSoal".$start.$end."\" class=\"\">"."\n";
                            echo "<h2 class=\"badge text-danger\">Soal ".$start." - ".$end."</h2>"."\n";
                            for ($j=0; $j < $M; $j++) { 

                            	$soal = $data[$i*5+$j]->deskripsi;
	                            
	                            $jwb1 = $ans[$i*5+$j][0];
	                            $jwb2 = $ans[$i*5+$j][1];
	                            $jwb3 = $ans[$i*5+$j][2];
	                            $jwb4 = $ans[$i*5+$j][3];
	                            $jwb5 = $ans[$i*5+$j][4];
								/*
	                            $jwb1 = "";
	                            $jwb2 = "";
	                            $jwb3 = "";
	                            $jwb4 = "";
	                            $jwb5 = "";
								*/

                                $judul = "Judul Soal Ke ".($start+$j);
                                echo "<div id=\"GroupSubSoal".($start+$j)."\" class=\"panel panel-danger\">"."\n";
                                echo "  <div class=\"panel-heading\">"."\n";
                                echo "      <h3 class=\"panel-title text-center\"> $judul </h3>"."\n";
                                echo "  </div>"."\n";
                                echo "  <div class=\"panel-body\">"."\n";
                                echo "      ".$soal."</br>"."\n";
                                echo "  </div>"."\n";
                                echo "      "."<ul class=\"list-group\">
                                <li class=\"list-group-item\"> <input type=\"radio\" name=\"soal".($start+$j)."\" value=\"A\"> $jwb1 </li>
                                <li class=\"list-group-item\"> <input type=\"radio\" name=\"soal".($start+$j)."\" value=\"B\"> $jwb2 </li>
                                <li class=\"list-group-item\"> <input type=\"radio\" name=\"soal".($start+$j)."\" value=\"C\"> $jwb3 </li>
                                <li class=\"list-group-item\"> <input type=\"radio\" name=\"soal".($start+$j)."\" value=\"D\"> $jwb4 </li>
                                <li class=\"list-group-item\"> <input type=\"radio\" name=\"soal".($start+$j)."\" value=\"E\"> $jwb5 </li>
                            </ul>
                            ";
                            echo "</div>"."\n";
                        }
                        echo "</section>"."\n";
                        $start = $end+1;
                        $end += 5;
			}?>
			<div class="panel panel-default float">
				<div class="panel-body">
					<input 
					<input type="submit" data-toggle="tooltip" data-placement="top" title="Tombol Submit Jawaban" name="formSubmit" value="Submit" class="btn btn-primary btn-lg pull-right" /> 
				</div>
			</div> 
		</div>
	</form>
</div>
</div>

@stop
@section('script')
@parent
<script type="text/javascript">
	$('#sidebar').affix({
		offset: {
			top: $('header').height()+
				 $('.navbar-inverse').height()+
				 $('.menu-section').height()+25
		}
	});	

	$(function () {
	  $('[data-toggle="tooltip"]').tooltip()
	});

	$('body').scrollspy({
		target: '.bs-docs-sidebar',
		offset: 40
	});

	var id = '#dialog';
        
            //Get the screen height and width
            var maskHeight = $(document).height();
            var maskWidth = $(window).width();
        
            //Set heigth and width to mask to fill up the whole screen
            $('#mask').css({'width':maskWidth,'height':maskHeight});
            
            //transition effect     
            $('#mask').fadeIn(500); 
            $('#mask').fadeTo("slow",0.9);  
        
            //Get the window height and width
            var winH = $(window).height();
            var winW = $(window).width();
                  
            //Set the popup window to center
            $(id).css('top',  winH/2-$(id).height()/2);
            $(id).css('left', winW/2-$(id).width()/2);
        
            //transition effect
            $(id).fadeIn(2000);     
            
            //if close button is clicked
            $('.window .tutup').click(function (e) {
                //Cancel the link behavior
                e.preventDefault();
                
                $('#mask').hide();
                $('.window').hide();
            });     
            
            //if mask is clicked
            $('#mask').click(function () {
                $(this).hide();
                $('.window').hide();
            });     

</script>
@stop