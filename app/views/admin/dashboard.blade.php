@extends('layout.admin')

@section('title', 'Daftar Peserta Lomba Essay Nasional')

@section('header')
    @parent

	{{HTML::script('assets/plugins/data-tables/jquery.dataTables.min.js')}}
	{{HTML::script('assets/plugins/data-tables/dataTables.bootstrap.js')}}
	@stop

@section('content')
	<p>Welcome to admin page for ISCO 2015</p>
	<p>Pilih :</p>
	<ul>
		<li><a href="admin/sg">Statistician Game</a></li>
		<li><a href="admin/paper">Lomba Paper SMA</a></li>
	</ul>

@stop

@section('script')
	@parent
		<script>
			$( "#dashboard" ).addClass( "menu-top-active" );
		</script>
	@stop
	