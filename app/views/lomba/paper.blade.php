@extends('layout.master')

@section('title', 'Lomba Paper Statistika SMA')

@section('header')
    @parent
    	
		{{ HTML::style('assets/css/pages/paper-form.css') }}
	@stop

@section('content')
	<!-- BEGIN REGISTRATION FORM -->
		
	<div class="content2">
		{{ Form::open(array('url' => 'paper','class'=>'form-vertical paper-form width-max','id'=>'paper-form','files' => true)) }}
			<h3>Formulir Pendaftaran<br> Lomba Paper Statistika SMA</h3>
			
			@if(Session::has('errors'))
			<?php $errors = Session::get('errors'); ?>
			<div class="alert alert-danger">
				<button class="close" data-dismiss="alert"></button>
				{{ implode('', $errors->all('<div>:message</div>')) }}
			</div>
			@endif

			<p>Isi data diri peserta pada form berikut:</p>
				<div class="row">
					<div class="col-md-4">
					<!--Peserta 1 -->
					<p><b>Identitas Peserta 1</b> </p>
					<div class="form-group">
						<label class="control-label visible-ie8 visible-ie9">Nama 1</label>
						<div class="controls">
							<div class="input-icon left">
								<i class="icon-font"></i>
								<input class="form-control" type="text" placeholder="Nama Lengkap" name="nama1"/>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label visible-ie8 visible-ie9">Jenis Kelamin 1</label>
						<div class="controls">
							<div class="input-icon left">
								<select class="form-control selectpicker" name="jeniskelamin1">
									<option selected disabled>Jenis Kelamin :</option>
							        <option value="laki-laki">Laki-Laki</option>
							        <option value="perempuan">Perempuan</option>
							    </select>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label visible-ie8 visible-ie9">Asal SMA 1</label>
						<div class="controls">
							<div class="input-icon left">
								<i class="icon-ok"></i>
								<input class="form-control" type="text" placeholder="Asal Sekolah" name="sma1"/>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label visible-ie8 visible-ie9">Jurusan 1</label>
						<div class="controls">
							<div class="input-icon left">
								<i class="icon-ok"></i>
								<input class="form-control" type="text" placeholder="Jurusan" name="jurusan1"/>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label visible-ie8 visible-ie9">NIM 1</label>
						<div class="controls">
							<div class="input-icon left">
								<i class="icon-ok"></i>
								<input class="form-control" type="text" placeholder="NIM" name="nim1"/>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label visible-ie8 visible-ie9">Tahun Masuk 1</label>
						<div class="controls">
							<div class="input-icon left">
								<i class="icon-ok"></i>
								<input class="form-control" type="number" placeholder="Tahun Masuk" name="tahunmasuk1"/>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label visible-ie8 visible-ie9">E-Mail 1</label>
						<div class="controls">
							<div class="input-icon left">
								<i class="icon-envelope"></i>
								<input class="form-control" type="email" placeholder="E-Mail" name="email1"/>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label visible-ie8 visible-ie9">No. HP 1</label>
						<div class="controls">
							<div class="input-icon left">
								<i class="icon-ok"></i>
								<input class="form-control" type="text" placeholder="Handphone" name="handphone1"/>
							</div>
						</div>
					</div>
					
					<p>Kartu Pelajar (ekstensi : .jpg)</p>
					<div class="form-group">
						<label class="control-label visible-ie8 visible-ie9">Upload Kartu Pelajar 1</label>
						<div class="controls">
							<div class="input-icon left">
								<i class="icon-ok"></i>
								<input class="form-control" type="file" name="kp1" accept="image/*"/>
							</div>
						</div>
					</div>	
				</div>
					<!--Peserta 2 -->
					<div class="col-md-4">
					<p><b>Identitas Peserta 2</b> </p>
					<div class="form-group">
						<label class="control-label visible-ie8 visible-ie9">Nama 2</label>
						<div class="controls">
							<div class="input-icon left">
								<i class="icon-font"></i>
								<input class="form-control" type="text" placeholder="Nama Lengkap" name="nama2"/>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label visible-ie8 visible-ie9">Jenis Kelamin 2</label>
						<div class="controls">
							<div class="input-icon left">
								<select class="form-control selectpicker" name="jeniskelamin2">
									<option selected disabled>Jenis Kelamin :</option>
							        <option value="laki-laki">Laki-Laki</option>
							        <option value="perempuan">Perempuan</option>
							    </select>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label visible-ie8 visible-ie9">Asal SMA 2</label>
						<div class="controls">
							<div class="input-icon left">
								<i class="icon-ok"></i>
								<input class="form-control" type="text" placeholder="Asal Sekolah" name="sma2"/>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label visible-ie8 visible-ie9">Jurusan 2</label>
						<div class="controls">
							<div class="input-icon left">
								<i class="icon-ok"></i>
								<input class="form-control" type="text" placeholder="Jurusan" name="jurusan2"/>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label visible-ie8 visible-ie9">NIM 2</label>
						<div class="controls">
							<div class="input-icon left">
								<i class="icon-ok"></i>
								<input class="form-control" type="text" placeholder="NIM" name="nim2"/>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label visible-ie8 visible-ie9">Tahun Masuk 2</label>
						<div class="controls">
							<div class="input-icon left">
								<i class="icon-ok"></i>
								<input class="form-control" type="number" placeholder="Tahun Masuk" name="tahunmasuk2"/>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label visible-ie8 visible-ie9">E-Mail 2</label>
						<div class="controls">
							<div class="input-icon left">
								<i class="icon-envelope"></i>
								<input class="form-control" type="email" placeholder="E-Mail" name="email2"/>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label visible-ie8 visible-ie9">No. HP 2</label>
						<div class="controls">
							<div class="input-icon left">
								<i class="icon-ok"></i>
								<input class="form-control" type="text" placeholder="Handphone" name="handphone2"/>
							</div>
						</div>
					</div>
					
					<p>Kartu Pelajar (ekstensi : .jpg)</p>
					<div class="form-group">
						<label class="control-label visible-ie8 visible-ie9">Upload Kartu Pelajar 2</label>
						<div class="controls">
							<div class="input-icon left">
								<i class="icon-ok"></i>
								<input class="form-control" type="file" name="kp2" accept="image/*"/>
							</div>
						</div>
					</div>
				</div>
					<!--Peserta 3 -->
					<div class="col-md-4">
					<p><b>Identitas Peserta 3</b> </p>
					<div class="form-group">
						<label class="control-label visible-ie8 visible-ie9">Nama 3</label>
						<div class="controls">
							<div class="input-icon left">
								<i class="icon-font"></i>
								<input class="form-control" type="text" placeholder="Nama Lengkap" name="nama3"/>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label visible-ie8 visible-ie9">Jenis Kelamin 3</label>
						<div class="controls">
							<div class="input-icon left">
								<select class="form-control selectpicker" name="jeniskelamin3">
									<option selected disabled>Jenis Kelamin :</option>
							        <option value="laki-laki">Laki-Laki</option>
							        <option value="perempuan">Perempuan</option>
							    </select>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label visible-ie8 visible-ie9">Asal SMA 3</label>
						<div class="controls">
							<div class="input-icon left">
								<i class="icon-ok"></i>
								<input class="form-control" type="text" placeholder="Asal Sekolah" name="sma3"/>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label visible-ie8 visible-ie9">Jurusan 3</label>
						<div class="controls">
							<div class="input-icon left">
								<i class="icon-ok"></i>
								<input class="form-control" type="text" placeholder="Jurusan" name="jurusan3"/>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label visible-ie8 visible-ie9">NIM 3</label>
						<div class="controls">
							<div class="input-icon left">
								<i class="icon-ok"></i>
								<input class="form-control" type="text" placeholder="NIM" name="nim3"/>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label visible-ie8 visible-ie9">Tahun Masuk 3</label>
						<div class="controls">
							<div class="input-icon left">
								<i class="icon-ok"></i>
								<input class="form-control" type="number" placeholder="Tahun Masuk" name="tahunmasuk3"/>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label visible-ie8 visible-ie9">E-Mail 3</label>
						<div class="controls">
							<div class="input-icon left">
								<i class="icon-envelope"></i>
								<input class="form-control" type="email" placeholder="E-Mail" name="email3"/>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label visible-ie8 visible-ie9">No. HP 3</label>
						<div class="controls">
							<div class="input-icon left">
								<i class="icon-ok"></i>
								<input class="form-control" type="text" placeholder="Handphone" name="handphone3"/>
							</div>
						</div>
					</div>
					
					<p>Kartu Pelajar (ekstensi : .jpg)</p>
					<div class="form-group">
						<label class="control-label visible-ie8 visible-ie9">Upload Kartu Pelajar 3</label>
						<div class="controls">
							<div class="input-icon left">
								<i class="icon-ok"></i>
								<input class="form-control" type="file" name="kp3" accept="image/*"/>
							</div>
						</div>
					</div>	
				</div>
					<p>Submit Paper (Ekstensi .pdf)</p>
					<div class="form-group">
						<label class="control-label visible-ie8 visible-ie9">Judul Paper</label>
						<div class="controls">
							<div class="input-icon left">
								<i class="icon-ok"></i>
								<input class="form-control" type="text" placeholder="judul paper" name="judulpaper"/>
							</div>
						</div>
					</div>			

					<div class="form-group">
						<label class="control-label visible-ie8 visible-ie9">Upload Paper</label>
						<div class="controls">
							<div class="input-icon left">
								<i class="icon-ok"></i>
								<input class="form-control" type="file" name="paper" accept="application/pdf"/>
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
			</div>		
		{{ Form::close() }}
		<!-- END REGISTRATION FORM -->
	</div>
@stop

@section('script')
	@parent
	<!-- BEGIN PAGE LEVEL PLUGINS -->
		{{HTML::script('assets/plugins/jquery-validation/dist/jquery.validate.min.js')}}
		{{HTML::script('assets/plugins/jquery-validation/dist/additional-methods.min.js')}}
		{{HTML::script('assets/plugins/backstretch/jquery.backstretch.min.js')}}
		{{HTML::script('assets/plugins/select2/select2.min.js')}}
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
		<!-- END JAVASCRIPTS -->

	@stop