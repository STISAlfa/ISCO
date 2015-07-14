<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>Register Form</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	
    {{ HTML::style('assets/plugins/bootstrap/css/bootstrap.min.css') }}
	{{ HTML::style('assets/plugins/bootstrap/css/bootstrap-responsive.min.css') }}
	{{ HTML::style('assets/plugins/font-awesome/css/font-awesome.min.css') }}
	{{ HTML::style('assets/css/style-metro.css') }}
	{{ HTML::style('assets/css/style.css') }}
	{{ HTML::style('assets/css/style-responsive.css') }}
	{{ HTML::style('assets/css/themes/default.css') }}
	{{ HTML::style('assets/plugins/uniform/css/uniform.default.css') }}
	{{ HTML::style('assets/plugins/select2/select2_metro.css') }}
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN PAGE LEVEL STYLES -->
	{{ HTML::style('assets/css/pages/login-soft.css') }}
	<!-- END PAGE LEVEL STYLES -->
	<link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
	<!-- BEGIN LOGO -->
	<div class="logo">
		<img src="assets/img/isco/isco.png" class="img-responsive" alt="ISCO">
	</div>
	<!-- END LOGO -->
	<!-- BEGIN LOGIN -->
	<div class="content">
		<!-- BEGIN REGISTRATION FORM -->
		@if(Session::has('errors'))
			<?php $errors = Session::get('errors'); ?>
			<div class="alert alert-danger">
				<button class="close" data-dismiss="alert"></button>
				{{ implode('', $errors->all('<div>:message</div>')) }}
			</div>
			@endif

		@if(Session::has('error'))
			<?php $error = Session::get('error'); ?>
			<div class="alert alert-danger">
				<button class="close" data-dismiss="alert"></button>
				<span>{{$error}}</span>
			</div>
			@endif


		{{ Form::open(array('url' => 'register','class'=>'form-vertical register-form','id'=>'register-form')) }}
			<h3>Formulir Pendaftaran Statistician GAME 2015</h3>
			<p>Isi data diri ketua tim pada form berikut:</p>
			<div class="form-group">
				<label class="control-label visible-ie8 visible-ie9">Ketua Tim</label>
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-font"></i>
						<input class="form-control" type="text" placeholder="Nama Lengkap Ketua Tim" name="ketuatim"/>
					</div>
				</div>
			</div>
			
			<div class="form-group">
				<label class="control-label visible-ie8 visible-ie9">No. Handphone</label>
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-ok"></i>
						<input class="form-control" type="text" placeholder="No. Handphone" name="handphone"/>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label visible-ie8 visible-ie9">Sekolah</label>
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-location-arrow"></i>
						<input class="form-control" type="text" placeholder="Asal Sekolah" name="asal_sekolah"/>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label visible-ie8 visible-ie9">Alamat Sekolah</label>
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-location-arrow"></i>
						<input class="form-control" row="5" type="text" placeholder="Alamat Sekolah" name="alamat_sekolah"/>
					</div>
				</div>
			</div>
			
			<p>isi data akun tim pada form berikut:</p>
			<div class="form-group">
				<label class="control-label visible-ie8 visible-ie9">Nama Tim</label>
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-user"></i>
						<input class="form-control" type="text" autocomplete="off" placeholder="Nama Tim" name="username"/>
					</div>
				</div>
			</div>
			<div class="form-group">
				<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
				<label class="control-label visible-ie8 visible-ie9">Email</label>
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-envelope"></i>
						<input class="form-control" type="text" placeholder="Email" name="email"/>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label visible-ie8 visible-ie9">Password</label>
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-lock"></i>
						<input class="form-control" type="password" autocomplete="off" id="register_password" placeholder="Password" name="password"/>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label visible-ie8 visible-ie9">Re-type Your Password</label>
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-ok"></i>
						<input class="form-control" type="password" autocomplete="off" placeholder="Re-type Your Password" name="password_confirmation"/>
					</div>
				</div>
			</div>

			<div class="form-group">	
				{{HTML::image(Captcha::img(),'Captcha', ['class' => 'img-responsive'])}}
        		<input class="form-control" name="captcha" type="text" placeholder="captcha. isikan sesuai kode diatas"/>
        	</div>


			<div class="form-group">
				<div class="controls">
					<label class="checkbox">
					<input class="form-control" type="checkbox" name="tnc"/> Saya Bersedia mematuhi semua peraturan yang berlaku</a>
					</label>  
					<div id="register_tnc_error"></div>
				</div>
			</div>
			<div class="form-actions">
				<button type="submit" id="register-submit-btn" class="btn green pull-right">
				Daftar <i class="m-icon-swapright m-icon-white"></i>
				</button>            
			</div>
		</form>
		<!-- END REGISTRATION FORM -->
	</div>
	<!-- END LOGIN -->
	<!-- BEGIN COPYRIGHT -->
	<div class="copyright">
		2015 &copy; ISCO - ISI Indonesia
	</div>
	<!-- END COPYRIGHT -->
	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->   <script src="assets/plugins/jquery-1.10.1.min.js" type="text/javascript"></script>
	<script src="assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
	<script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript" ></script>
	<!--[if lt IE 9]>
	<script src="assets/plugins/excanvas.min.js"></script>
	<script src="assets/plugins/respond.min.js"></script>  
	<![endif]-->   
	<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
	<script src="assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
	<script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
	<!-- END CORE PLUGINS -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script src="assets/plugins/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
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
		  jQuery('.register-form').show();
		});
	</script>
	<!-- END JAVASCRIPTS -->
	
</body>
<!-- END BODY -->
</html>