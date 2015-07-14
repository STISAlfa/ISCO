@extends('layout.master')

@section('title', 'Lomba Paper Statistika SMA')

@section('header')
    @parent
	@stop

@section('content')
	<!-- BEGIN REGISTRATION FORM -->
		

		{{ Form::open(array('url' => 'paper','class'=>'form-vertical paper-form','id'=>'paper-form','files' => true)) }}
			<h3>Formulir Pendaftaran<br> Lomba Paper Statistika SMA</h3>
			
			@if(Session::has('errors'))
			<?php $errors = Session::get('errors'); ?>
			<div class="alert alert-danger">
				<button class="close" data-dismiss="alert"></button>
				{{ implode('', $errors->all('<div>:message</div>')) }}
			</div>
			@endif

			<p>Isi data diri peserta pada form berikut:</p>

			<div class="tab-content">
				<div id="anggota1" class="tab-pane active">
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
					<div class="form-actions">
						<a href="#anggota2" data-toggle="tab"><button class="btn blue pull-right">
						Next <i class="m-icon-swapright m-icon-white"></i>
						</button></a>
					</div>
				</div>
                <div id="anggota2" class="tab-pane fade">
					<!--Peserta 2 -->

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
					<div class="form-actions">
						<a href="#anggota1" data-toggle="tab"><button class="btn red pull-left">
						Previous <i class="m-icon-swapleft m-icon-white"></i>
						</button></a>
						<a href="#anggota3" data-toggle="tab"><button class="btn blue pull-right">
						Next <i class="m-icon-swapright m-icon-white"></i>
						</button></a>
					</div>
				</div>
                <div id="anggota3" class="tab-pane fade">
					<!--Peserta 3 -->

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
					<div class="form-actions">
						<a href="#anggota2" data-toggle="tab"><button class="btn red pull-left">
						Previous <i class="m-icon-swapleft m-icon-white"></i>
						</button></a>
						<a href="#paper" data-toggle="tab"><button class="btn blue pull-right">
						Next <i class="m-icon-swapright m-icon-white"></i>
						</button></a>
					</div>
				</div>
				<div id="paper" class="tab-pane fade">
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
						<a href="#anggota3" data-toggle="tab"><button class="btn red pull-left">
						Previous <i class="m-icon-swapleft m-icon-white"></i>
						</button></a>
						<button type="submit" id="register-submit-btn" class="btn green pull-right">
						Daftar <i class="m-icon-swapright m-icon-white"></i>
						</button>            
					</div>
				</div>
			</div>

		
		{{ Form::close() }}
		<!-- END REGISTRATION FORM -->
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

      		  $('#paper-form input, #paper-form select').not([type="submit"]).addClass('required');
			});
		</script>
		<!-- END JAVASCRIPTS -->

	@stop