@extends('layout.admin')

@section('title', 'Daftar Peserta Lomba Statistician Game')

@section('header')
    @parent
    	<!-- DataTables CSS -->
	    {{HTML::style('//cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.css')}}
	    
		{{HTML::style('assets/plugins/bootstrap-switch/static/stylesheets/bootstrap-switch.css')}}
		
		{{HTML::style('assets/plugins/highlight/highlight.css')}}

    
	@stop

@section('content')

		<div class="tabel">
		<div class="tabell">
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							User
						</div>
						<div class="panel-body">
							<div class="table-responsive">
								<table id="example" class="table table-bordered">
								<!--<table class="table table-striped table-bordered table-hover" id="example">-->
									<thead>
									    <tr>

									        <th align="center" valign="middle" class="head1"></th>
									        <th align="center" valign="middle" class="head2">id</th>
									        <th align="center" valign="middle" class="head3">Waktu Pendaftaran</th>
									        <th align="center" valign="middle" class="head4">Nama Tim</th>
									        <th align="center" valign="middle" class="head5">E-Mail</th>
									        <th align="center" valign="middle" class="head6">Asal Sekolah</th>
									        <th align="center" valign="middle" class="head6">Status</th>        
									    </tr>
									</thead>
									<tbody>
										
									</tbody>
								</table>
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
			{{HTML::script('assets/plugins/data-tables/jquery.dataTables.min.js')}}
			{{HTML::script('assets/plugins/data-tables/dataTables.bootstrap.js')}}
			{{HTML::script('assets/plugins/highlight/highlight.js')}}
			{{HTML::script('assets/plugins/bootstrap-switch/static/js/bootstrap-switch.js')}}
			{{HTML::script('assets/plugins/muthi/main.js')}}

				<script>	
		$(document).ready(function() {
			
			$('#example').DataTable( {
		    	"processing": true,
		        "serverSide": true,
		        "ajaxSource": "{{URL::Route('api.users.main')}}",
		        "columns": [
		            {
		                "orderable":      false,
		                "data":           null,
		                "defaultContent": ""
		            },
		            {"data" : "id"},
		            { "data" : "created_at" },
		            { "data" : "username" },
		            { "data" : "email" },
		            { "data" : "asal_sekolah" },
		            { "data" : "status" }
		        ],
		        "order": [[1, 'asc']]
		    } );
            $(document).on("checkbox",function(){
                        
                        $(this).bootstrapSwitch();
                    });

		});	
	</script>
	@stop
	
