@extends('layout.master')

@section('title', 'User View Soal')

@section('header')
    @parent
        <meta name="csrf_token" content="{{csrf_token()}}">
        <meta charset="utf-8">

        {{HTML::script('assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js')}}
        {{HTML::script('assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.css')}}
        {{HTML::script('assets/plugins/ckeditor/ckeditor.js')}}
        <style>

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
        </style>
        <style type="text/css">
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
        #kirim{
            margin-top: 20px;
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
        .affix,.affix-top {
            position:static;
        }
    </style>
    @stop


@section('content')

<div style="background-color: white">

    <nav class="navbar navbar-default">
      <div class="container-fluid" style="background-color: #C36464">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#" style="color: white">Statistician Game 2015</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <a href="#"><button type="button" class="btn btn-default navbar-btn" disabled>Penyisihan</button></a>
            <a href="logout"><button type="button" class="btn btn-default navbar-btn">Logout</button></a>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
            
                

                <!-- <div class="col-md-3">
                    <div id="containerList">
                        <ul id="listSoal">
                            <?php
                                $c = 0;
                                foreach($data as $row){
                                    if($c==0)
                                        echo '<li id="record_'.$row['id'].'"><div class="dragdrop active">'.$row['kodesoal'].'</div></li>';
                                    else 
                                        echo '<li id="record_'.$row['id'].'"><div class="dragdrop">'.$row['kodesoal'].'</div></li>';
                                    $c=$c+1;
                                }
                            
                            ?>
                            
                        </ul>
                    </div>
                </div> -->
            
        <div class="container">
            <div class="row">
                <nav class="col-md-2 bs-docs-sidebar">
                    <ul id="sidebar" class="nav nav-stacked">
                        <p>current time: <span id="timer"> </p>
                        <?php 
                        $start = 1;
                        $end   = 5;
                        if( $data ){
                            $sz = count($data);    
                        }
                        
                        $N = floor($sz/5); if( $sz%5 != 0 ) $N = $N + 1;
                        $M = $sz%5; $M = ($M==0) ? 5 : $M;

                        $ix = 0;
                        $tmp = 5;
                        
                        for ($i=0; $i < $N; $i++) {
                            $end = ( $end > $sz ) ? $sz : $end;
                            echo "<li>"."\n";
                            echo "<a href=\"#GroupSoal".$start.$end."\">Soal ".$start." - ".$end."</a>"."\n";
                            echo "<ul class=\"nav nav-stacked\">"."\n"; 
                            $tmp = ($tmp < $sz) ? $tmp : $sz;
                            while( $ix<$tmp){
                            //for ($j=0; $j < $M; $j++) { 
                                $ix++;
                                echo "<li><a href=\"#GroupSubSoal".$ix."\">Soal ".$ix."</a></li>"."\n";
                                if($ix == $tmp){
                                    $tmp = (floor($ix/5)+1)*$tmp;
                                    break;
                                }
                            }
                            echo "</ul>"."\n";
                            echo "</li>"."\n";
                            $start = $end+1;
                            $end += 5;
                        }?>
                        <div id="kirim">
                            <button id="tombolSubmit" class="btn btn-danger">Submit</button>
                        </div>
                        
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
                <!--Nav Bar -->
                

                <!--Main Content -->
                <!-- <form action="ajax/recheck.php" method="post"> -->
                    <div class="col-md-10">
                        <?php 
                        $start = 1;
                        $end   = 5;

                        if( $data ){
                            $sz = count($data);    
                        }
                        
                        $N = floor($sz/5); if( $sz%5 != 0 ) $N = $N + 1;
                        $M = $sz%5; $M = ($M==0) ? 5 : $M;

                        $ix = 0;
                        $tmp = 5;

                        for ($i=0; $i < $N; $i++) {
                            $end = ( $end > $sz ) ? $sz : $end;
                            // $soal = "
                            // Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            // tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            // quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            // consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            // cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            // proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
                            // $jwb1 = "Ini Jawaban A";
                            // $jwb2 = "Ini Jawaban B";
                            // $jwb3 = "Ini Jawaban C";
                            // $jwb4 = "Ini Jawaban D";
                            // $jwb5 = "Ini Jawaban E";
                            
                            echo "<section id=\"GroupSoal".$start.$end."\" class=\"\">"."\n";
                            echo "<h2 class=\"badge text-danger\">Soal ".$start." - ".$end."</h2>"."\n";
                            $tmp = ($tmp < $sz) ? $tmp : $sz;
                            while( $ix<$tmp){
                            //for ($j=$start; $j <= $end; $j++) {
                                $soal = $data[$ix]['deskripsi'];
                                $jwb1 = $ans[$ix*5+0]['deskripsi'];
                                $jwb2 = $ans[$ix*5+1]['deskripsi'];
                                $jwb3 = $ans[$ix*5+2]['deskripsi'];
                                $jwb4 = $ans[$ix*5+3]['deskripsi'];
                                $jwb5 = $ans[$ix*5+4]['deskripsi'];
                                $ix++;
                                $judul = "Judul Soal Ke ".$ix;
                                echo "<div id=\"GroupSubSoal".$ix."\" class=\"panel panel-danger\">"."\n";
                                echo "  <div class=\"panel-heading\">"."\n";
                                echo "      <h3 class=\"panel-title text-center\"> $judul </h3>"."\n";
                                echo "  </div>"."\n";
                                echo "  <div class=\"panel-body\">"."\n";
                                echo "      ".$soal."</br>"."\n";
                                echo "  </div>"."\n";
                                echo "      "."<ul id=\"ListGroupSubSoal".$ix."\" class=\"list-group\">
                                <li class=\"list-group-item\"> <input type=\"radio\" name=\"soal".$ix."\" value=\"A\"> A. $jwb1 </li>
                                <li class=\"list-group-item\"> <input type=\"radio\" name=\"soal".$ix."\" value=\"B\"> B. $jwb2 </li>
                                <li class=\"list-group-item\"> <input type=\"radio\" name=\"soal".$ix."\" value=\"C\"> C. $jwb3 </li>
                                <li class=\"list-group-item\"> <input type=\"radio\" name=\"soal".$ix."\" value=\"D\"> D. $jwb4 </li>
                                <li class=\"list-group-item\"> <input type=\"radio\" name=\"soal".$ix."\" value=\"E\"> E. $jwb5 </li>
                                <button class=\"macho\" id=\"$ix\">Reset Jawaban</button>
                                </ul>
                                ";
                                echo "</div>"."\n";
                                if($ix == $tmp){
                                    $tmp = (floor($ix/5)+1)*$tmp;
                                    break;
                                }
                            }
                        echo "</section>"."\n";
                        $start = $end+1;
                        $end += 5;
                    }?>
                </div>
            <!-- </form> -->
        </div>
        </div>
    
</div>


@stop

@section('script')
    @parent
            
            <script type="text/javascript">

            $(document).ready(function(){ 

                $(document).on('click',".macho",function(){
                    var ix = $(this).attr('id');
                    $('#ListGroupSubSoal'+ix).children('li').children('input').each(function () { 
                        $(this).attr('checked',false);
                    });
                });
                                       
                $(function sortSoal() {
                    $("#listSoal").sortable({ opacity: 0.6, cursor: 'move', update: function() {
                        var order = $(this).sortable("serialize") + '&action=updateRecordsListings';
                        $.ajax({
                            url:"{{URL::Route('sg.soal.update')}}",
                            type:"POST",
                            beforeSend:function(xhr){
                                var token = $('meta[name="csrf_token"]').attr('content');
                                if(token){
                                    return xhr.setRequestHeader('X-CSRF-TOKEN',token);
                                }
                            },
                            data:order
                        });

                        //$.post("{{URL::Route('sg.soal.update')}}",order, function(datas){alert(datas)}); 
                    }  

                    
                    });

                    $(document).on('dblclick',"#listSoal div",function(){
                        $("#listSoal div").removeClass("active");
                        $(this).toggleClass('active');
                    });

                    /*
                    $("#listSoal div").on('dblclick',function(){
                        $("#listSoal div").removeClass("active");
                        $(this).toggleClass('active');
                        
                    });
                    */
                    $("#tombolTambah").click(function(){
                        var myli =  $("<li></li>").attr("id","record_10000");
                        var mydiv = $("<div></div>").addClass("dragdrop").text("asdad");
                        myli.append(mydiv);
                        $("#listSoal").append(myli);
                    });
                }); 

            

            $(document).on('click',"#kirim",function(){
                var i;
                var ans = '{';
                for(i=1; i<=40; i++){
                    var pil = $("input[name='soal"+i+"']:checked").val();
                    if( !pil ){
                        ans += '\'\'';    
                    }else{
                        ans += '\''+pil+'\'';    
                    }
                    if( i < 40 ) ans += ';';
                }
                ans += '}';

                $.ajax({
                    url: "{{URL::route('soal.submit')}}",
                    type : "POST",
                    data: {
                        answer : ans
                    }
                });
            });

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

            });


            </script>

            <script type="text/javascript">
                $('#sidebar').affix({
                    offset: {
                        top: $('header').height()+
                             $('.navbar-inverse').height()+
                             $('.menu-section').height()+50
                    }
                }); 
                $('body').scrollspy({
                    target: '.bs-docs-sidebar',
                    offset: 40
                });
            </script>

    @stop
    


