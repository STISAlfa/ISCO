@extends('layout.admin')

@section('title', 'Pengumuman Hasil Penyisihan')

@section('header')
@parent

{{HTML::script('https://code.jquery.com/jquery-1.11.3.min.js')}}
{{HTML::style('https://cdn.datatables.net/buttons/1.0.1/css/buttons.dataTables.min.css')}}
{{HTML::style('//cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.css')}}	    
{{HTML::style('assets/plugins/bootstrap-switch/static/stylesheets/bootstrap-switch.css')}}
{{HTML::style('assets/plugins/highlight/highlight.css')}}
<style>
	.centered{
		margin: 0 auto;
	}

	.btn-white{
		background-color: #FFFFFF;
	}
</style>
@stop

@section('content')
<div style="text-align:center">
	<h4>Dashboard Score Peserta</h4>
	<h2>{{$kontes}}</h2>
</div>
<div class="tabel">
	<div class="tabell">
		<div class="panel panel-default">
			<div class="panel-heading">
				User
			</div>
			<div class="panel-body">
				<table id="example" class="table table-bordered display">
					<!--<table class="table table-striped table-bordered table-hover" id="example">-->
					<thead>
						<tr>
							<th>Peringkat</th>
							<th>id</th>
							<th>Nama Tim</th>
							<th>E-Mail</th>
							<th>Asal Sekolah</th>
							<th>Skor</th>        
						</tr>
					</thead>
					<tbody>
						<?php $i=0 ?>
						@foreach($data as $datum)
						<?php
						$i++;
						$user = User::find($datum->user_id);
						?>
						<tr>
							<td>{{$i}}</td>
							<td>{{$user->id}}</td>	
							<td>{{$user->username}}</td>
							<td>{{$user->email}}</td>
							<td>{{$user->asal_sekolah}}</td>
							<td>{{$datum->score}}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				 <input type="text" id="usrname1" placeholder="Username 1">
				<button id="cekUji" class="btn btn-primary">
				<span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span>Cek Kesamaan</button><br> 
				
				<input type="text" id="usrname2" placeholder="Username 2"><div id="hasill"></div><br>
				<input type="text" id="mirip" placeholder="Tingkat Kemiripan">
				<button id="CekKembar" class="btn btn-warning">
				<span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>Find Suspicious</button>
				
				<div id="hasill2"></div>
			</div>
		</div>
	</div>
</div>

@stop

@section('script')
@parent

{{HTML::script('https://cdn.datatables.net/1.10.8/js/jquery.dataTables.min.js')}}
{{HTML::script('https://cdn.datatables.net/buttons/1.0.1/js/buttons.flash.min.js')}}
{{HTML::script('https://cdn.datatables.net/buttons/1.0.1/js/dataTables.buttons.min.js')}}
{{HTML::script('https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js')}}
{{HTML::script('https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js')}}
{{HTML::script('https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js')}}
{{HTML::script('https://cdn.datatables.net/buttons/1.0.1/js/buttons.html5.min.js')}}
{{HTML::script('https://cdn.datatables.net/buttons/1.0.1/js/buttons.print.min.js')}}
{{HTML::script('assets/plugins/data-tables/dataTables.bootstrap.js')}}
{{HTML::script('assets/plugins/highlight/highlight.js')}}
{{HTML::script('assets/plugins/bootstrap-switch/static/js/bootstrap-switch.js')}}
{{HTML::script('assets/plugins/muthi/main.js')}}

<script>	

	$(document).on('click',"#cekUji",function(){
		$.ajax({
			url: "{{URL::route('api.users.ceksama')}}",
			type: "POST",
			data: {
				user1 : $("#usrname1").val(),
				user2 : $("#usrname2").val()
			},
			beforeSend: function() { 
				$("#hasill").html("Pengecekan..."); 
			},
			success: function(data) {
				$("#hasill").html("Kemiripan Jawaban 2 User = <b>"+data+"</b>%");
			},
			error: function(xhr, textStatus, thrownError) {
				$("#hasill").html(xhr.responseText);
			}
		});
	});

	$(document).on('click',"#CekKembar",function(){
		$.ajax({
			url: "{{URL::route('api.users.cekkembar')}}",
			type: "POST",
			data: {
				mirip : $("#mirip").val()
			},
			beforeSend: function() { 
				$("#hasill2").html("Pengecekan..."); 
			},
			success: function(data) {
				$("#hasill2").html(data);
			},
			error: function(xhr, textStatus, thrownError) {
				$("#hasill2").html(xhr.responseText);
			}
		});
	});

	$(document).ready(function() {
		$('#example').DataTable( {
			dom: 'Bfrtip',
			buttons: [
			'copy', 'csv', 'excel', 'pdf', 'print'
			]
		} );
	} );
</script>

@stop
