@extends('layout.master')

@section('title', 'Success')

@section('header')
    @parent
    	<style>
    		.anounce{
    			text-align: center;
    			font-size: 23px;
    		}
    	</style>
    	<script type="text/javascript">
		<!--
		function delayer(){
			document.location = "../paper"
		}
		//-->
		</script>
	@stop

@section('content')
	<div class="content anounce" onLoad="setTimeout('delayer()', 5000)">
		<p>Selamat! Paper Tim Anda yang berjudul <b>{{$data}}</b> telah berhasil terdaftar sebagai peserta ISCO 2015 Kategori Lomba Paper Tingkat SMA, kami dari panitia mengucapkan terima kasih yang sebesar-besarnya atas partisipasi Anda</p>
	</div>

@stop

@section('script')
	@parent
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

      		  //$('#paper-form input, #paper-form select').not([type="submit"]).addClass('required');
			});
		</script>
		<!-- END JAVASCRIPTS -->

	@stop