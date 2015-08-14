@extends('layout.admin')

@section('title', 'Soal Manager')

@section('header')
    @parent
        <meta name="csrf_token" content="{{csrf_token()}}">
        <meta charset="utf-8">

        {{HTML::script('assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js')}}
        {{HTML::script('assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.css')}}
        {{HTML::script('assets/plugins/ckeditor/ckeditor.js')}}
        {{HTML::script('zontal-admin/assets/js/spin.js')}}


        <style>

            .hidden{
                visibility: hidden;
            }

            h4{
                font-size: 14px; 
            }

            .inset{
                min-height: 200px; 

            }
            .inset>p{
                font-size: 20px;
                padding: 6px;
                background-color: #F0677C;
                color:#FFF;
            }

            .inset>h4{
                margin: 10px;
            }
            
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
                border:1px solid;
                border-color: #F0677C;
                color: #000000;
                margin: 5px;
                text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
                width:99%; 
            }

            #desksoal{
                margin: 10px;
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
                border: 1px solid;
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
                border-color: rgba(240, 103, 124, 0.58);
                background-color: rgba(240, 103, 124, 0.58);
            }

            .active{

                background-color: #F0677C;
                color: #FFFFFF;
                width: 105%;
                
            }

            .opsisoal{
                  border: 1pt;
                  background-color: rgb(217, 83, 79);
                  border-radius: 50% 0 0 50%;
                  color: #FFF;
                  text-align: right;
                  vertical-align: middle;
                  height: 50px;
                  width: 50px;
                  padding: 10px 15px 10px 0;
                  float: left;
            }

            .opsisoaldesk{
                float: none;
                text-align: left;
                vertical-align: middle;
                padding: 6px 10px 6px 10px;
                margin-left: 50px;
                border : 1pt solid;
                border-color: rgb(217, 83, 79); 
                min-height: 50px;
                transition: background-color 400ms ease;
                
            }

            .contopsi{
                margin-bottom: 10px;
                border-color: black;
            }

            .contopsi .correct{
                background-color: #337ab7;
                  border-color: #2e6da4;
                  color:#FFF;
            }

            #tambahSoal{
                float: right;  
            }

            /* enable absolute positioning */
            .inner-addon { 
                position: relative; 
            }

            /* style icon */
            .inner-addon .glyphicon {
              position: absolute;
              padding: 10px;
              pointer-events: none;
            }

            /* align icon */
            .left-addon .glyphicon  { left:  0px;}
            .right-addon .glyphicon { right: 0px;}

            /* add padding  */
            .left-addon input  { padding-left:  30px; }
            .right-addon input { padding-right: 30px; }

        </style>
    @stop


@section('content')

<?php
    $kat[1]="Mudah";
    $kat[2]="Sedang";
    $kat[3]="Susah";
?>

<div>
     
    <div class="panel panel-isco">
        <div class="panel-heading">Manage Soal</div>
        <div class="panel-body">
            <div class='row'>
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
                        <div id="tambahSoal">
                            <button id="tombolTambah" class="btn btn-danger">tambah</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">

                    <div id="foo"></div>
                    <div id="containerSoal">
                        <div id="detail">
                            <div class="inset">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h4 style="text-align:center;font-weight: bold;" contenteditable="true" id="kodesoal">{{$data[0]['kodesoal']}}</h4>
                                    </div>
                                    <div class="col-md-4">
                                        <div style="float:right;padding:0 10px 0 0">
                                        @if($data[0]['kategori'])
                                            <h4 id="kategorisoal">{{$kat[$data[0]['kategori']]}}</h4>
                                        @else
                                            <h4>Belum Ditentukan</h4>
                                        @endif
                                        </div>
                                    </div>
                                </div>
                                <p>Deskripsi</p>

                                <div id="desksoal" contenteditable="true">{{$data[0]['deskripsi']}}</div>
                            </div>
                            <div class="inset">
                                <p>Pilihan Jawaban</p>
                                
                                <div class="row" style="margin:10px">
                                    <div class="contopsi">
                                        <div class="opsisoal"><p>A</p></div>
                                        <div class="opsisoaldesk">
                                            <h4 id="opt1" contenteditable="true">{{$ans[0]['deskripsi']}}</h4>
                                        </div>
                                    </div>
                                    <div class="contopsi">
                                        <div class="opsisoal"><p>B</p></div>
                                        <div class="opsisoaldesk">
                                            <h4 id="opt2" contenteditable="true">{{$ans[1]['deskripsi']}}</h4>
                                        </div>
                                    </div>
                                    <div class="contopsi">
                                        <div class="opsisoal">C</div>
                                        <div class="opsisoaldesk">
                                            <h4 id="opt3" contenteditable="true">{{$ans[2]['deskripsi']}}</h4>
                                        </div>
                                    </div>
                                    <div class="contopsi">
                                        <div class="opsisoal">D</div>
                                        <div class="opsisoaldesk">
                                            <h4 id="opt4" contenteditable="true">{{$ans[3]['deskripsi']}}</h4>
                                        </div>
                                    </div>
                                    <div class="contopsi">
                                        <div class="opsisoal">E</div>
                                        <div class="opsisoaldesk">
                                            <h4 id="opt5" contenteditable="true">{{$ans[4]['deskripsi']}}</h4>
                                        </div>
                                    </div>
                                    <div class="btn-group">
                                              <button data-toggle="dropdown" class="btn btn-danger dropdown-toggle">Pilih Kategori Soal <span class="caret"></span></button>
                                              <ul id="daftarkategori" class="dropdown-menu">
                                                <li><a onclick="setkategori(1)">Mudah</a></li>
                                                <li><a onclick="setkategori(2)">Sedang</a></li>
                                                <li><a onclick="setkategori(3)">Susah</a></li>
                                              </ul>
                                            </div>
                                    <div style="float:right">
                                            <div class="btn-group">
                                              <button data-toggle="dropdown" class="btn btn-danger dropdown-toggle">Pilih jawaban yang benar <span class="caret"></span></button>
                                              <ul id="daftaropsi" class="dropdown-menu">
                                                <li><a onclick="coba({{$ans[0]['id']}},0)">A</a></li>
                                                <li><a onclick="coba({{$ans[1]['id']}},1)">B</a></li>
                                                <li><a onclick="coba({{$ans[2]['id']}},2)">C</a></li>
                                                <li><a onclick="coba({{$ans[3]['id']}},3)">D</a></li>
                                                <li><a onclick="coba({{$ans[4]['id']}},4)">E</a></li>
                                              </ul>
                                            </div>
                                    </div>
                                </div>  

                                
                            </div>
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
        var idSoal= 'record_{{$data[0]['id']}}';
        var ar = [];
        ar[0] = "Belum Ditentukan";
        ar[1] = "Mudah";
        ar[2] ="Sedang";
        ar[3] ="Susah";

        function setkategori(kat){
            $.ajax({
                url :"{{URL::route('pilih.kategori')}}",
                type : "POST",
                data :{
                    idSoal : idSoal,
                    kat : kat
                }
            }).done(function(){
                $('#kategorisoal').html(ar[kat]);
            });
        }

        function coba( op , urutan){

            $.ajax({
                url: "{{URL::route('pilih.opsi')}}",
                type : "POST",
                data: {
                    idSoal : idSoal,
                    idAnswer : op
                }
            }).done (function(data) { 
                $('#opt1').parent().removeClass('correct');
                $('#opt2').parent().removeClass('correct');
                $('#opt3').parent().removeClass('correct');
                $('#opt4').parent().removeClass('correct');
                $('#opt5').parent().removeClass('correct');
                
                if(urutan==0) $('#opt1').parent().addClass('correct');
                if(urutan==1) $('#opt2').parent().addClass('correct');
                if(urutan==2) $('#opt3').parent().addClass('correct');
                if(urutan==3) $('#opt4').parent().addClass('correct');
                if(urutan==4) $('#opt5').parent().addClass('correct');
                     
            });    
        }

        <?php
            if($data[0]['id_correct_answer']!=null){
                for($i=0;$i<=4;$i++){
                    if($data[0]['id_correct_answer']==$ans[$i]['id']){
                        if($i==0) echo "$('#opt1').parent().addClass('correct');";
                        if($i==1) echo "$('#opt2').parent().addClass('correct');";
                        if($i==2) echo "$('#opt3').parent().addClass('correct');";
                        if($i==3) echo "$('#opt4').parent().addClass('correct');";
                        if($i==4) echo "$('#opt5').parent().addClass('correct');";
                    }
                }
            }
        ?>
        
        CKEDITOR.on( 'instanceCreated', function ( event ) {
            var editor = event.editor,
                    element = editor.element;
            // Customize editors for headers and tag list.
            // These editors do not need features like smileys, templates, iframes etc.
            if (element.getAttribute( 'id' ) == 'desksoal' ) {
                // Customize the editor configuration on "configLoaded" event,
                // which is fired after the configuration file loading and
                // execution. This makes it possible to change the
                // configuration before the editor initialization takes place.

                

                editor.on( 'configLoaded', function () {                    
                    /*
                    //Remove redundant plugins to make the editor simpler.
                    editor.config.removePlugins = 'colorbutton,find,flash,font,' +
                            'forms,iframe,image,newpage,removeformat,' +
                            'smiley,specialchar,stylescombo,templates';
                    
                    // Rearrange the toolbar layout.
                    editor.config.toolbarGroups = [
                        { name: 'editing', groups: [ 'basicstyles', 'links' ] },
                        { name: 'undo' },
                        { name: 'clipboard', groups: [ 'selection', 'clipboard' ] },
                        { name: 'about' }
                    ];
                    */
                } );

                editor.on( 'change', function ( ev ) {
                    //ajax for editor here
                    //document.getElementById( 'editorcontent2' ).innerHTML = editor.getData();
                    //alert(editor.getData());
                    
                    $.ajax({
                        url: "{{URL::route('soal.update')}}",
                        type : "POST",
                        data: {
                            id : idSoal,
                            deskripsi : editor.getData()
                        }
                    });

                } );
            }

            if (element.getAttribute( 'id' ) == 'kodesoal' ) {
                // Customize the editor configuration on "configLoaded" event,
                // which is fired after the configuration file loading and
                // execution. This makes it possible to change the
                // configuration before the editor initialization takes place.

                

                editor.on( 'configLoaded', function () {                    
                    /*
                    //Remove redundant plugins to make the editor simpler.
                    editor.config.removePlugins = 'colorbutton,find,flash,font,' +
                            'forms,iframe,image,newpage,removeformat,' +
                            'smiley,specialchar,stylescombo,templates';
                    
                    // Rearrange the toolbar layout.
                    editor.config.toolbarGroups = [
                        { name: 'editing', groups: [ 'basicstyles', 'links' ] },
                        { name: 'undo' },
                        { name: 'clipboard', groups: [ 'selection', 'clipboard' ] },
                        { name: 'about' }
                    ];
                    */
                } );

                editor.on( 'change', function ( ev ) {
                    //ajax for editor here
                    //document.getElementById( 'editorcontent2' ).innerHTML = editor.getData();
                    //alert(editor.getData());
                    
                    $.ajax({
                        url: "{{URL::route('soal.update.kode')}}",
                        type : "POST",
                        data: {
                            id : idSoal,
                            kodesoal : editor.getData()
                        }
                    }).done(function(){
                        $('.active').html(editor.getData());
                    });

                } );
            }

            if (element.getAttribute( 'id' ) == 'opt1' ) {
                // Customize the editor configuration on "configLoaded" event,
                // which is fired after the configuration file loading and
                // execution. This makes it possible to change the
                // configuration before the editor initialization takes place.
                
                editor.on( 'change', function ( ev ) {
                    //ajax for editor here
                    //document.getElementById( 'editorcontent2' ).innerHTML = editor.getData();
                    //alert(editor.getData());
                    
                    $.ajax({
                        url: "{{URL::route('opsi.update')}}",
                        type : "POST",
                        data: {
                            idSoal : idSoal,
                            opsi : 1,
                            deskripsi : editor.getData()
                        }
                    });

                } );
            }
            if (element.getAttribute( 'id' ) == 'opt2' ) {
                // Customize the editor configuration on "configLoaded" event,
                // which is fired after the configuration file loading and
                // execution. This makes it possible to change the
                // configuration before the editor initialization takes place.
                
                editor.on( 'change', function ( ev ) {
                    //ajax for editor here
                    //document.getElementById( 'editorcontent2' ).innerHTML = editor.getData();
                    //alert(editor.getData());
                    
                    $.ajax({
                        url: "{{URL::route('opsi.update')}}",
                        type : "POST",
                        data: {
                            idSoal : idSoal,
                            opsi : 2,
                            deskripsi : editor.getData()
                        }
                    });

                } );
            }
            if (element.getAttribute( 'id' ) == 'opt3' ) {
                // Customize the editor configuration on "configLoaded" event,
                // which is fired after the configuration file loading and
                // execution. This makes it possible to change the
                // configuration before the editor initialization takes place.
                
                editor.on( 'change', function ( ev ) {
                    //ajax for editor here
                    //document.getElementById( 'editorcontent2' ).innerHTML = editor.getData();
                    //alert(editor.getData());
                    
                    $.ajax({
                        url: "{{URL::route('opsi.update')}}",
                        type : "POST",
                        data: {
                            idSoal : idSoal,
                            opsi : 3,
                            deskripsi : editor.getData()
                        }
                    });

                } );
            }
            if (element.getAttribute( 'id' ) == 'opt4' ) {
                // Customize the editor configuration on "configLoaded" event,
                // which is fired after the configuration file loading and
                // execution. This makes it possible to change the
                // configuration before the editor initialization takes place.
                
                editor.on( 'change', function ( ev ) {
                    //ajax for editor here
                    //document.getElementById( 'editorcontent2' ).innerHTML = editor.getData();
                    //alert(editor.getData());
                    
                    $.ajax({
                        url: "{{URL::route('opsi.update')}}",
                        type : "POST",
                        data: {
                            idSoal : idSoal,
                            opsi : 4,
                            deskripsi : editor.getData()
                        }
                    });

                } );
            }
            if (element.getAttribute( 'id' ) == 'opt5' ) {
                // Customize the editor configuration on "configLoaded" event,
                // which is fired after the configuration file loading and
                // execution. This makes it possible to change the
                // configuration before the editor initialization takes place.
                
                editor.on( 'change', function ( ev ) {
                    //ajax for editor here
                    //document.getElementById( 'editorcontent2' ).innerHTML = editor.getData();
                    //alert(editor.getData());
                    
                    $.ajax({
                        url: "{{URL::route('opsi.update')}}",
                        type : "POST",
                        data: {
                            idSoal : idSoal,
                            opsi : 5,
                            deskripsi : editor.getData()
                        }
                    });

                } );
            }
        } );


            $(document).ready(function(){ 
                

                idSoal = $("#listSoal li").first().attr("id");
                
                 


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
                      idSoal = $(this).parent().attr("id");
                      var aa = $(this);     
                      
                    $.ajax({
                        url: "{{URL::route('soal.service')}}",
                        type : "GET",
                        dataType : "json",
                        data: {
                            id : idSoal
                        }
                    })
                    .done (function(data) {

                        $("#listSoal div").removeClass("active");
                        aa.toggleClass('active');

                        $('#opt1').parent().removeClass('correct');
                        $('#opt2').parent().removeClass('correct');
                        $('#opt3').parent().removeClass('correct');
                        $('#opt4').parent().removeClass('correct');
                        $('#opt5').parent().removeClass('correct');
                    
                        $('#kodesoal').html(data.soal.kodesoal);
                        
                        console.log(data.soal.kategori);
                        $('#kategorisoal').html(ar[data.soal.kategori]);

                        $('#opt1').html(data.answer[0].deskripsi);
                        $('#opt2').html(data.answer[1].deskripsi);
                        $('#opt3').html(data.answer[2].deskripsi);
                        $('#opt4').html(data.answer[3].deskripsi);
                        $('#opt5').html(data.answer[4].deskripsi);
                        
                        $('#daftaropsi li').each(function(i, obj) {
                            $(obj).removeAttr('onclick');
                            $(obj).attr('onclick','coba('+data.answer[i].id+','+i+')');
                        });

                        if(data.soal.id_correct_answer!=null){
                            for($i=0;$i<=4;$i++){
                                if(data.answer[$i].id==data.soal.id_correct_answer){
                                    if($i==0) $('#opt1').parent().addClass('correct');
                                    if($i==1) $('#opt2').parent().addClass('correct');
                                    if($i==2) $('#opt3').parent().addClass('correct');
                                    if($i==3) $('#opt4').parent().addClass('correct');
                                    if($i==4) $('#opt5').parent().addClass('correct');
                                    break;
                                }
                            }
                        }

                        $('#desksoal').html(data.soal.deskripsi);

                    })
                    .fail   (function()     { alert("Error")   ; })
                    ;
                    });

                    /*
                    $("#listSoal div").on('dblclick',function(){
                        $("#listSoal div").removeClass("active");
                        $(this).toggleClass('active');
                        
                    });
                    */
                    $(document).on('click',"#tambahSoal",function(){
                        var code = prompt("masukkan Kode Soal", "");
                        $('#tambahSoal').attr('disabled','disabled');
                        if (code != null && code!="") {

                            var opts = {
                              lines: 13 // The number of lines to draw
                            , length: 28 // The length of each line
                            , width: 14 // The line thickness
                            , radius: 42 // The radius of the inner circle
                            , scale: 1 // Scales overall size of the spinner
                            , corners: 1 // Corner roundness (0..1)
                            , color: 'red' // #rgb or #rrggbb or array of colors
                            , opacity: 0.25 // Opacity of the lines
                            , rotate: 0 // The rotation offset
                            , direction: 1 // 1: clockwise, -1: counterclockwise
                            , speed: 1 // Rounds per second
                            , trail: 60 // Afterglow percentage
                            , fps: 20 // Frames per second when using setTimeout() as a fallback for CSS
                            , zIndex: 2e9 // The z-index (defaults to 2000000000)
                            , className: 'spinner' // The CSS class to assign to the spinner
                            , top: '50%' // Top position relative to parent
                            , left: '50%' // Left position relative to parent
                            , shadow: false // Whether to render a shadow
                            , hwaccel: false // Whether to use hardware acceleration
                            , position: 'absolute' // Element positioning
                            }
                            var target = document.getElementById('foo')
                            var spinner = new Spinner(opts).spin(target);


                            $.ajax({
                                url:"{{URL::Route('sg.soal.add')}}",
                                type:"POST",
                                data:{
                                    kode : code
                                }
                            }).done(function(data) {
                                var myli =  $("<li></li>").attr("id","record_"+data);
                                var mydiv = $("<div></div>").addClass("dragdrop").text(code);
                                myli.append(mydiv);
                                $("#listSoal").append(myli);
                                spinner.stop();
                                $('#tambahSoal').removeAttr('disabled');
                            })
                            .fail   (function()     { alert("Terjadi Kesalahan")   ;spinner.stop(); $('#tambahSoal').removeAttr('disabled'); });
                        }
                        else{
                            alert("harus ada kode soal");
                        }
                        
                    });
            });               

            }); 

        
             
    
    </script>

    @stop
    


