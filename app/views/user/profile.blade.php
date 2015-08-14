@extends('layout.master')

@section('title', 'Lomba Statistician Game')

@section('header')
@parent
{{ HTML::style('assets/css/pages/paper-form.css') }}
<style>
	.info-maroon{
		background-color:maroon;
		color:white;
	}
</style>
@stop

@section('content')
<!-- BEGIN REGISTRATION FORM -->

<div class="content2">



	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Statistician Game 2015</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<a href="logout"><button type="button" class="btn btn-default navbar-btn">Logout</button></a>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
		@if(count($dataKontes)>0)
		<hr>
		<table class="table table-condensed text-center">
			<thead>
				<tr>
					<th class="text-center">Kontes Aktif</th>
					<th class="text-center">Waktu Tersisa</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><h4><kbd>{{$dataKontes[0]->nama}}</kbd></h4></td>
					<td id="timerUser"></td>
					<td><a href="kontes/{{$dataKontes[0]->id}}"><button type="button" class="btn btn-default">Mulai</button></a></td>
					
				</tr>
			</tbody>
		</table>
		@endif
	</nav>


	@if(Session::has('error'))
	<?php $error = Session::get('error'); ?>
	<div class="alert alert-danger">
		<button class="close" data-dismiss="alert"></button>
		<span>{{$error}}</span>
	</div>
	@endif

	@if(Session::has('success'))
	<?php $success = Session::get('success'); ?>
	<div class="alert alert-success">
		<button class="close" data-dismiss="alert"></button>
		<span>{{$success}}</span>
	</div>
	@endif

	<div class="alert alert-info">
		<button class="close" data-dismiss="alert"></button>
		<span>Harap segera melengkapi data tim anda, terima kasih</span>
	</div>

	<!-- END REGISTRATION FORM -->
	<div id="#anggota">
		<br>
		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">Tim {{Auth::user()->username}}</div>
					<div class="panel-body">
						<table class="table table table-striped">
							<tr>
								<td>E-Mail </td>
							</tr>
							<tr>
								<td class="pull-right">{{Auth::user()->email}}</td>
							</tr>

							<tr>
								<td>Sekolah </td>
							</tr>
							<tr>
								<td class="pull-right">{{Auth::user()->asal_sekolah}}</td>
							</tr>
							<tr>
								<td>Status </td>
							</tr>
							<tr>
								@if(Auth::user()->status)
								<td class="pull-right">Terverifikasi</td>
								@else
								<td class="pull-right info-maroon">Belum Terverifikasi</td>
								@endif
							</tr>
						</table>
					</div>
				</div>
			</div>
			<div class="col-md-8">
				<!--Ketua Tim-->
				<div class="panel panel-default">
					<div class="panel-heading">Identitas Ketua Tim :</div>
					<div class="panel-body">
						@if(isset($data[0]))
						<table class="table">
							<tr>
								<td class="col-md-3">Nama </td>
								@if($data[0]->nama!=null)
								<td>{{$data[0]->nama}}</td>
								@else
								<td class="info-maroon">belum terisi</td>
								@endif
							</tr>
							<tr>
								<td>NIS </td>
								@if($data[0]->nis!=null)
								<td>{{$data[0]->nis}}</td>
								@else
								<td class="info-maroon">belum terisi</td>
								@endif
							</tr>
							<tr>
								<td>Tahun Masuk </td>
								@if($data[0]->tahun_masuk!=null)
								<td>{{$data[0]->tahun_masuk}}</td>
								@else
								<td class="info-maroon">belum terisi</td>
								@endif
							</tr>
							<tr>
								<td>Kontak </td>
								@if($data[0]->handphone!=null)
								<td>{{$data[0]->handphone}}</td>
								@else
								<td class="info-maroon">belum terisi</td>
								@endif
							</tr>
							<tr>
								<td>Kartu Pelajar </td>
								@if($data[0]->kartu_pelajar_dir!=null)
								<td>sudah terupload</td>
								@else
								<td class="info-maroon">belum terisi</td>
								@endif
							</tr>
							<tr>
								<td colspan=2 style="text-align:right"><a href="edit-profile">Edit/Update</a></td>
							</tr>
						</table>
						@endif
					</div>
				</div>
			</div>
			<div class="col-md-4">
			</div>
			<div class="col-md-8">
				<!--Ketua Tim-->
				<div class="panel panel-default">
					<div class="panel-heading">Identitas Anggota :</div>
					<div class="panel-body">
						<!-- Table -->
						@if(isset($data[1]))
						<table class="table">
							<tr>
								<td class="col-md-3">Nama </td>
								@if($data[1]->nama!=null)
								<td>{{$data[1]->nama}}</td>
								@else
								<td class="info-maroon">belum terisi</td>
								@endif
							</tr>
							<tr>
								<td>NIS </td>
								@if($data[1]->nis!=null)
								<td>{{$data[1]->nis}}</td>
								@else
								<td class="info-maroon">belum terisi</td>
								@endif
							</tr>
							<tr>
								<td>Tahun Masuk </td>
								@if($data[1]->tahun_masuk!=null)
								<td>{{$data[1]->tahun_masuk}}</td>
								@else
								<td class="info-maroon">belum terisi</td>
								@endif
							</tr>
							<tr>
								<td>Kontak </td>
								@if($data[1]->handphone!=null)
								<td>{{$data[1]->handphone}}</td>
								@else
								<td class="info-maroon">belum terisi</td>
								@endif
							</tr>
							<tr>
								<td>Kartu Pelajar </td>
								@if($data[1]->kartu_pelajar_dir!=null)
								<td>sudah terupload</td>
								@else
								<td class="info-maroon">belum terisi</td>
								@endif
							</tr>
							<tr>
								<td colspan=2 style="text-align:right"><a href="edit-profile">Edit/Update</a></td>
							</tr>
						</table>
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

@stop

@section('script')
@parent
<!-- BEGIN PAGE LEVEL PLUGINS -->
{{HTML::script('assets/plugins/jquery-validation/dist/jquery.validate.min.js')}}
{{HTML::script('assets/plugins/jquery-validation/dist/additional-methods.min.js')}}
{{HTML::script('assets/plugins/backstretch/jquery.backstretch.min.js')}}
{{HTML::script('assets/plugins/select2/select2.min.js')}}
{{HTML::script('assets/plugins/jquery.countdown/jquery.countdown.js')}}
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
{{HTML::script('assets/scripts/app.js')}}
{{HTML::script('assets/scripts/login-soft.js')}} 
<!-- END PAGE LEVEL SCRIPTS --> 

<script>
	jQuery(document).ready(function() {     
		App.init();
		Login.init();

		$('#paper-form input, #paper-form select').not([type="submit"]).addClass('required');
	});
</script>

@if(count($dataKontes)>0)
<script>
	$.ajax({
		type: 'POST',
		url: "{{URL::route('currenttime.user')}}",
		data :{
			time : "{{$dataKontes[0]->endtime}}"
		},
		success: function(data) {
			var $date =   new Date(new Date().valueOf() +  data*1000);
			var $clock = $('#timerUser');
			$clock.countdown($date, function(event) {
				$(this).html(event.strftime('<h4><kbd>%H:%M:%S</h4></kbd>'));
			}); 
		}
	});
</script>
@endif
<!-- END JAVASCRIPTS -->

@stop
