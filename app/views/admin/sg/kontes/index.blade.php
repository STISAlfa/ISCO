@extends('layout.admin')

@section('title', 'Kontes Manager')

@section('header')
    @parent

        <meta name="csrf_token" content="{{csrf_token()}}">
        <meta charset="utf-8">
    	{{HTML::script('assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js')}}
        {{HTML::script('assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.css')}}
        {{HTML::script('assets/plugins/ckeditor/ckeditor.js')}}
        {{HTML::script('zontal-admin/assets/js/spin.js')}}
    	<style>

    		.cont-enroll-btn{
    			display: inline-block;
  				padding: 5px;
    		}

    		.cont-enroll-btn button{
    			margin: 5px;
  				width: 50px;
    		}

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
	<div class="panel panel-isco">
    	<div class="panel-heading">Manage Kontes</div>
        <div class="panel-body">
        	@if(count($data)==0)
        		<p style="text-align:center">Belum ada kontes yang dibuat. Klik <a href="#">disini</a> untuk membuat kontes baru</p>
        	@else
        	<div class="panel-group" id="accordion-kontes" role="tablist" aria-multiselectable="true">
  				@foreach($data as $kontes)
  				<div class="panel panel-default">
				  	<div class="panel-heading" role="tab" id="heading-{{$kontes->id}}">
				      <h4 class="panel-title">
				      	<a id="headerKontes-{{$kontes->id}}" role="button" data-toggle="collapse" data-parent="#accordion-kontes" href="#collapse-{{$kontes->id}}" aria-expanded="true" aria-controls="collapseOne">
				          {{$kontes->nama}}
				        </a>
				      </h4>
        			</div>
        			<div id="collapse-{{$kontes->id}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-{{$kontes->id}}">
				      	<div class="panel-body">
				      		<form role="form" id="kontesform-{{$kontes->id}}">
				      		<div class="row">
				      			<input hidden name="idKontes" value="{{$kontes->id}}">
				      			<div class="col-md-2" style="padding-bottom:30px">
				      				<div class="input-group">
									  <span class="input-group-addon">ID Kontes</span>
									  <input type="text" class="form-control" name="idKontes" value="{{$kontes->id}}" id="idkontes-{{$kontes->id}}" aria-describedby="basic-addon1" disabled>
									</div>
				      			</div>
				      			<div class="col-md-10" style="padding-bottom:30px">
				      				<div class="input-group">
									  <span class="input-group-addon">Nama Kontes</span>
									  <input type="text" class="form-control" name="name"  id="namakontes-{{$kontes->id}}" value="{{$kontes->nama}}" aria-describedby="basic-addon1">
									</div>
				      			</div>

				      			<div class="col-md-6">
							        <div class="input-group">
									  <span class="input-group-addon">Start Time</span>
									  <input type="text" class="form-control" name="starttime" id="starttime-{{$kontes->id}}" value="{{$kontes->starttime}}" aria-describedby="basic-addon1">
									</div>
									<p style="color:red;padding:20px">*format waktu : <i>"yyyy-mm-dd hh:mm:ss"</i></p>
								</div>
								<div class="col-md-6">
									<div class="input-group">
									  <span class="input-group-addon" >End Time  </span>
									  <input type="text" class="form-control" name="endtime" id="endtime-{{$kontes->id}}" value="{{$kontes->endtime}}" aria-describedby="basic-addon2">
									</div>
								</div>
							</div>
							</form>
							<br>
							<div class="pull-right">
							<button class="btn btn-primary update" onclick="update({{$kontes->id}})">Update</button>
							<button class="btn btn-primary" onclick="getListUser('s-{{$kontes->id}}', 'd-{{$kontes->id}}','{{$kontes->id}}')" data-toggle="modal" data-target="#myModalEnroll-{{$kontes->id}}">Enroll User</button>
							
							<!-- Modal -->
							<div class="modal fade" id="myModalEnroll-{{$kontes->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							        <h4 class="modal-title" id="myModalLabel">Enroll User</h4>
							      </div>
							      <div class="modal-body">
							      	<div class="row">
								        <div class="col-md-5">
								        <p>Daftar User : </p>
								        <SELECT id="s-{{$kontes->id}}" size="20" multiple class="form-control">
											<OPTION value="i" disabled>-Loading-</OPTION>
										</SELECT>
										</div>
										<div class="col-md-2">
											<p style="text-align:center">action</p>
											<div class="cont-enroll-btn">
												<button class="btn btn-primary" onclick="listbox_moveacross('s-{{$kontes->id}}', 'd-{{$kontes->id}}','{{$kontes->id}}')">>></button>
												<br>
												<button class="btn  btn-primary" onclick="listbox_moveacross('d-{{$kontes->id}}', 's-{{$kontes->id}}','{{$kontes->id}}')"><<</button>
											</div>
										</div>
										<div class="col-md-5">
										<p>Peserta : </p>
								        <SELECT id="d-{{$kontes->id}}" size="20" multiple class="form-control">
											<OPTION value="i" disabled>-Loading-</OPTION>
										</SELECT>
										</div>
									</div>

							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							        <button id="button-{{$kontes->id}}" type="button" onclick="submitList('d-{{$kontes->id}}','{{$kontes->id}}')" class="btn btn-primary">Save changes</button>
							      </div>
							    </div>
							  </div>
							</div>

							<button class="btn btn-primary" onclick="getListSoal('ss-{{$kontes->id}}', 'dd-{{$kontes->id}}','{{$kontes->id}}')" data-toggle="modal" data-target="#myModalSoal-{{$kontes->id}}">Add Soal</button>
							<!-- Modal -->
							<div class="modal fade" id="myModalSoal-{{$kontes->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							        <h4 class="modal-title" id="myModalLabel">Add Soal</h4>
							      </div>
							      <div class="modal-body">
							      	<div class="row">
								        <div class="col-md-5">
								        <p>Daftar Soal : </p>
								        <SELECT id="ss-{{$kontes->id}}" size="20" multiple class="form-control">
											<OPTION value="i" disabled>-Loading-</OPTION>
										</SELECT>
										</div>
										<div class="col-md-2">
											<p style="text-align:center">action</p>
											<div class="cont-enroll-btn">
												<button class="btn btn-primary" onclick="listbox_moveacross('ss-{{$kontes->id}}', 'dd-{{$kontes->id}}','{{$kontes->id}}')">>></button>
												<br>
												<button class="btn  btn-primary" onclick="listbox_moveacross('dd-{{$kontes->id}}', 'ss-{{$kontes->id}}','{{$kontes->id}}')"><<</button>
											</div>
										</div>
										<div class="col-md-5">
										<p>Peserta : </p>
								        <SELECT id="dd-{{$kontes->id}}" size="20" multiple class="form-control">
											<OPTION value="i" disabled>-Loading-</OPTION>
										</SELECT>
										</div>
									</div>

							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							        <button id="buttonSoal-{{$kontes->id}}" type="button" onclick="submitListSoal('dd-{{$kontes->id}}','{{$kontes->id}}')" class="btn btn-primary">Save changes</button>
							      </div>
							    </div>
							  </div>
							</div>



							<a href="./anounce/{{$kontes->id}}"><button class="btn btn-success">Hasil</button></a>
							<button class="btn btn-danger" disabled>Delete</button>
							</div>
				      	</div>
				    </div>
        		</div>
        		@endforeach
        	</div>
        	<button class="btn btn-danger pull-right" disabled>Kontes Baru</button>
        	@endif
        </div>
    </div>
@stop

@section('script')
    @parent
    	<script>

    	function update(kontesID){
    		var but = $('.update');
    		but.html("loading");
    		but.prop('disabled',true);
    		$.post("{{URL::route('sg.kontes.update')}}",$("#kontesform-"+kontesID).serialize())
    		.done(function(data){
    			but.html("Update");
    			but.prop('disabled',false);
    			$("#headerKontes-"+kontesID).html(data);
    			
    		});
    	}

    	function getListSoal(sourceID,destID,kontesID){
    		//console.log(kontesID);
    		$.ajax({
	                url: "{{URL::route('sg.kontes.get.soallist')}}",
	                type : "GET",
	                dataType : "json",
	                data: {
	                	idKontes : kontesID
	                }
	                
	        }).done (function(data) { 
                //alert(data.lainnya[0].id);   
                $('#'+sourceID).empty();
                $('#'+destID).empty();
                //alert(data.lainnya);

                $.each(data.added,function(){
                	//console.log(this.id);
                	var myopt =  $("<option></option>").html(this.kodesoal);
                  	myopt.attr("value",this.id);
                	
                  	//console.log();              
                	$('#'+destID).append(myopt);
                });

                $.each(data.lainnya,function(){
                	var myopt =  $("<option></option>").html(this.kodesoal);
                	myopt.attr("value",this.id);
                	//console.log(myopt);
                  	$('#'+sourceID).append(myopt);
                });                  
            });  
    	} 	

    	function submitListSoal(destID,kontesID){
    		var but = $('#buttonSoal-'+kontesID);
    		but.html("loading");
    		but.prop('disabled',true);
    		var list = [];
    		var c = 0;	
    		$('#'+destID+" option").each(function(){
    			//console.log(this);
    			list[c++] = this.value;
    		});

    		console.log(list);

    		$.ajax({
    			url : "{{URL::route('sg.kontes.submit.soallist')}}",
    			type : "POST",
    			data :{
    				idKontes : kontesID,
    				list : list
    			}
    		}).done(function(data){
    			console.log(data);
    			if(data=="1"){
    				but.html("save changes");
    				but.prop('disabled',false);
    			}
    			else{
    				console.log("error, please reload");
    			}
    		});
    	}

    	function submitList(destID,kontesID){
    		var but = $('#button-'+kontesID);
    		but.html("loading");
    		but.prop('disabled',true);
    		var list = [];
    		var c = 0;	
    		$('#'+destID+" option").each(function(){
    			//console.log(this);
    			list[c++] = this.value;
    		});

    		console.log(list);

    		$.ajax({
    			url : "{{URL::route('sg.kontes.submit.userlist')}}",
    			type : "POST",
    			data :{
    				idKontes : kontesID,
    				list : list
    			}
    		}).done(function(data){
    			console.log(data);
    			if(data=="1"){
    				but.html("save changes");
    				but.prop('disabled',false);
    			}
    			else{
    				console.log("error, please reload");
    			}
    		});
    	}

    	function getListUser(sourceID,destID,kontesID){
    		//console.log(kontesID);
    		$.ajax({
	                url: "{{URL::route('sg.kontes.get.userlist')}}",
	                type : "GET",
	                dataType : "json",
	                data: {
	                	idKontes : kontesID
	                }
	                
	        }).done (function(data) { 
                //alert(data.lainnya[0].id);   
                $('#'+sourceID).empty();
                $('#'+destID).empty();
                //alert(data.lainnya);

                $.each(data.added,function(){
                	//console.log(this.id);
                	var myopt =  $("<option></option>").html(this.username);
                  	myopt.attr("value",this.id);
                	
                  	//console.log();              
                	$('#'+destID).append(myopt);
                });

                $.each(data.lainnya,function(){
                	var myopt =  $("<option></option>").html(this.username);
                	myopt.attr("value",this.id);
                	//console.log(myopt);
                  	$('#'+sourceID).append(myopt);
                });                  
            });  
    	}
    		
	        
    	function listbox_moveacross(sourceID,destID,kontesID){
    		var src=document.getElementById(sourceID);
    		var dest=document.getElementById(destID);
    		for(var count=0;count<src.options.length;count++){
    			if(src.options[count].selected==true){
    				var option=src.options[count];
    				var newOption=document.createElement("option");
    				newOption.value=option.value;
    				newOption.text=option.text;
    				newOption.selected=true;
    				try{
    					dest.add(newOption,null);
    					src.remove(count,null);
    				}catch(error){
    					dest.add(newOption);
    					src.remove(count);
    				}
					count--;
				}
			}
		}

    	</script>
    @stop