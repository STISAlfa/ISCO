@extends('layout.master')

@section('title', 'Soal Manager')

@section('header')
    @parent
        <meta name="csrf_token" content="{{csrf_token()}}">
        <meta charset="utf-8">

        {{HTML::script('assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js')}}
        {{HTML::script('assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.css')}}
        {{HTML::script('assets/plugins/ckeditor/ckeditor.js')}}
        <style>
            
            .btn-tambah{
                color: #333;
                background-color: #fff;
                border-color: #ccc;
            }

            .panel-isco{
                border-color: #C36464;
            }

            .panel-isco>.panel-heading {
              color: #FFF;
              background-color: #C36464;
              border-color: #C36464;
            }

            #containerList{

                border-radius: 4px 4px 4px 4px;
                
            }

            #containerSoal{

                min-height: 500px;
                border-style: solid;
                border-color: #F0677C;
                color: #000000;
                margin: 5px;
                padding: 5px;
                text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
                width:99%; 
            }

            #listSoal{
                list-style: none;
                display: block;
                margin: 0;
                padding: 0;
                margin: 0;
                padding: 0; 
            }

            #detail{

            }

            .dragdrop{

                display: block;
                border-style: solid;
                border-color: #F0677C;
                color: #000000;
                margin: 5px;
                padding: 5px;
                text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
                width:99%;
                transition: background-color 400ms ease;
                transition: width 100ms linear;
            }

            .dragdrop:hover{

                background-color: rgba(240, 103, 124, 0.58);
            }

            .active{

                background-color: #F0677C;
                color: #FFFFFF;
                width: 105%;
                
            }

            #tambahSoal{
                float: right;  
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
              height: 300px;
              padding: 10px;
              background-color: #ffffff;
              font-family: 'Segoe UI Light', sans-serif;
              font-size: 15pt;
            }
             
            #popupfoot {
              font-size: 16pt;
              position: absolute;
              bottom: 5px;
              width: 300px;
              left: 250px;
            }


        </style>
    @stop


@section('content')

<div>

    <div class="panel panel-isco">
        <div class="panel-heading">Manage Soal</div>
        <div class="panel-body">
            <div class='row'>
                <div id="boxes">
                    <div id="dialog" class="window">
                        Ini adalah bagian popup.. TestIni adalah bagian popup.. TestIni adalah bagian popup.. Test
                        Ini adalah bagian popup.. TestIni adalah bagian popup.. TestIni adalah bagian popup.. Test
                        Ini adalah bagian popup.. TestIni adalah bagian popup.. TestIni adalah bagian popup.. Test
                        Ini adalah bagian popup.. TestIni adalah bagian popup.. TestIni adalah bagian popup.. Test
                        <div id="popupfoot"> <a href="#" class="close agree">I agree</a> | <a class="agree"style="color:red;" href="#">I do not agree</a> </div>
                    </div>
                    <div id="mask"></div>
                </div>

                <div class="col-md-3">
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
                        <!-- <div id="tambahSoal">
                            <button id="tombolTambah" class="btn btn-default">tambah</button>
                        </div> -->
                    </div>
                </div>
                <div class="col-md-9">
                    <div id="containerSoal">
                        <div id="detail">
                            <form>
                                <label>Entry Soal</label>
                                <textarea name="editor1" id="editor1" rows="10" cols="80">
                                   
                                </textarea>
                                <script>
                                    // Replace the <textarea id="editor1"> with a CKEditor
                                    // instance, using default configuration.
                                    CKEDITOR.replace( 'editor1' );
                                </script>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>


@stop

@section('script')
    @parent

            <script type="text/javascript">

            $(document).ready(function(){ 
                                       
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
                $('.window .close').click(function (e) {
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

    @stop
    


