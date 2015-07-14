@extends('layout.master')

@section('title', 'Lomba Essay Nasional')

@section('header')
    @parent
	@stop

@section('content')
	<div class="content">
	<!-- BEGIN REGISTRATION FORM -->
		@if(Session::has('errors'))
			<?php $errors = Session::get('errors'); ?>
			<div class="alert alert-danger">
				<button class="close" data-dismiss="alert"></button>
				{{ implode('', $errors->all('<div>:message</div>')) }}
			</div>
			@endif

		{{ Form::open(array('url' => 'essay','class'=>'form-vertical essay-form','id'=>'essay-form','files' => true)) }}
			<h3>Formulir Pendaftaran<br> Kompetisi Essay Nasional</h3>
			<p>Isi data diri peserta pada form berikut:</p>
			<div class="form-group">
				<label class="control-label visible-ie8 visible-ie9">Nama</label>
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-font"></i>
						<input class="form-control" type="text" placeholder="Nama Lengkap" name="nama"/>
					</div>
				</div>
			</div>
			
			<div class="form-group">
				<label class="control-label visible-ie8 visible-ie9">Asal Universitas</label>
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-ok"></i>
						<input class="form-control" type="text" placeholder="Asal Universitas" name="universitas"/>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label visible-ie8 visible-ie9">Jurusan</label>
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-ok"></i>
						<input class="form-control" type="text" placeholder="Jurusan" name="jurusan"/>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label visible-ie8 visible-ie9">NIM</label>
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-ok"></i>
						<input class="form-control" type="text" placeholder="NIM" name="nim"/>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label visible-ie8 visible-ie9">Angkatan</label>
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-ok"></i>
						<input class="form-control" type="text" placeholder="Angkatan" name="angkatan"/>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label visible-ie8 visible-ie9">E-Mail</label>
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-envelope"></i>
						<input class="form-control" type="email" placeholder="E-Mail" name="email"/>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label visible-ie8 visible-ie9">No. HP</label>
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-ok"></i>
						<input class="form-control" type="text" placeholder="Handphone" name="handphone"/>
					</div>
				</div>
			</div>
			
			<p>Kartu Tanda Mahasiswa (ekstensi : .jpg)</p>
			<div class="form-group">
				<label class="control-label visible-ie8 visible-ie9">Upload KTM</label>
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-ok"></i>
						<input class="form-control" type="file" name="ktm" accept="image/*"/>
					</div>
				</div>
			</div>	

			<p>Submit Essay (Ekstensi .pdf)</p>
			<div class="form-group">
				<label class="control-label visible-ie8 visible-ie9">Judul Essay</label>
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-ok"></i>
						<input class="form-control" type="text" placeholder="judul essay" name="judulessay"/>
					</div>
				</div>
			</div>			

			<div class="form-group">
				<label class="control-label visible-ie8 visible-ie9">Upload Essay</label>
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-ok"></i>
						<input class="form-control" type="file" name="essay" accept="application/pdf"/>
					</div>
				</div>
			</div>		
			<div class="form-group">	
				{{HTML::image(Captcha::img(),'Captcha', ['class' => 'img-responsive'])}}
        		<input class="form-control" name="captcha" type="text" placeholder="captcha"/>
        	</div>
			<div class="form-actions">
				<button type="submit" id="register-submit-btn" class="btn green pull-right">
				Daftar <i class="m-icon-swapright m-icon-white"></i>
				</button>            
			</div>
		{{ Form::close() }}
		<!-- END REGISTRATION FORM -->
	</div>
@stop

@section('script')
	@parent
	<!-- BEGIN PAGE LEVEL PLUGINS -->
		<script src="assets/plugins/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
		<script src="assets/plugins/jquery-validation/dist/additional-methods.min.js" type="text/javascript"></script>	
		<script src="assets/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
		<script type="text/javascript" src="assets/plugins/select2/select2.min.js"></script>
		<!-- END PAGE LEVEL PLUGINS -->
		<!-- BEGIN PAGE LEVEL SCRIPTS -->
		<script src="assets/scripts/app.js" type="text/javascript"></script>
		<script src="assets/scripts/login-soft.js" type="text/javascript"></script>      
		<!-- END PAGE LEVEL SCRIPTS --> 
		
		<script>
			jQuery(document).ready(function() {     
			  App.init();
			  Login.init();
			});
		</script>
		<!-- END JAVASCRIPTS -->

	@stop