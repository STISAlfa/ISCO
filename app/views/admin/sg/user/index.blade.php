@extends('layout.admin')

@section('title', 'Daftar Peserta Lomba Statistician Game')

@section('header')
    @parent
    	<!-- DataTables CSS -->
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
		<div style="text-align:right">
		   <h4><strong>Statistik Peserta</strong></h4>
		   <p>total pendaftar : {{$data[0]+$data[1]-1}}</p>
		   <p>terverifikasi : <span style="font-size:20px;color:red"><strong>{{$data[1]}}</strong></span></p>
		   <p>belum terverifikasi : {{$data[0]-1}}</p>
		   <p style="font-size:10px">* refresh window untuk mengupdate statistik peserta</p>
		</div>
		<div class="tabel">
		<div class="tabell">
					<div class="panel panel-default">
						<div class="panel-heading">
							User
						</div>
						<div class="panel-body">
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
@stop

@section('script')
	@parent
			{{HTML::script('assets/plugins/data-tables/jquery.dataTables.min.js')}}
			{{HTML::script('assets/plugins/data-tables/dataTables.bootstrap.js')}}
			{{HTML::script('assets/plugins/highlight/highlight.js')}}
			{{HTML::script('assets/plugins/bootstrap-switch/static/js/bootstrap-switch.js')}}
			{{HTML::script('assets/plugins/muthi/main.js')}}

				<script>	

				function format ( d ) {
		    // `d` is the original data object for the row
		    return '<table class="table table-striped">'+
		        '<tr>'+
		        	'<td colspan=2><b>Anggota 1 :</b></td>'+
		        '</tr>'+
		        '<tr>'+
		            '<td>Nama:</td>'+
		            '<td>'+d.nama1+'</td>'+
		        '</tr>'+
		        '<tr>'+
		            '<td>NIS:</td>'+
		            '<td>'+d.nis1+'</td>'+
		        '</tr>'+
		        '<tr>'+
		            '<td>Tahun Masuk:</td>'+
		            '<td>'+d.tahunmasuk1+'</td>'+
		        '</tr>'+
		        '<tr>'+
		            '<td>handphone:</td>'+
		            '<td>'+d.handphone1+'</td>'+
		        '</tr>'+
		        '<tr>'+
		            '<td>Kartu Pelajar:</td>'+
		            '<td>'+'<a href="/isco/public/'+d.kp1+'">'+d.kp1+'<br></a>'+
		            '<img src="/isco/public/'+d.kp1+'" class="img img-thumbnail" width="304" height="236"></td>'+
		        '</tr>'+
		        
		        '<tr>'+
		        	'<td colspan=2><b>Anggota 2 :</b></td>'+
		        '</tr>'+
		        '<tr>'+
		            '<td>Nama:</td>'+
		            '<td>'+d.nama2+'</td>'+
		        '</tr>'+
		        '<tr>'+
		            '<td>NIS:</td>'+
		            '<td>'+d.nis2+'</td>'+
		        '</tr>'+
		        '<tr>'+
		            '<td>Tahun Masuk:</td>'+
		            '<td>'+d.tahunmasuk2+'</td>'+
		        '</tr>'+
		        '<tr>'+
		            '<td>handphone:</td>'+
		            '<td>'+d.handphone2+'</td>'+
		        '</tr>'+
		        '<tr>'+
		            '<td>Kartu Pelajar:</td>'+
		            '<td>'+'<a href="/isco/public/'+d.kp2+'">'+d.kp2+'<br></a>'+
		            '<img src="/isco/public/'+d.kp2+'" class="img img-thumbnail" width="304" height="236"></td>'+
		        '</tr>'+
		        		        
		    '</table>';
		}


		$(document).ready(function() {
			
		var dt =	$('#example').DataTable( {
		    	"processing": true,
		        "serverSide": true,
		        "ajaxSource": "{{URL::Route('api.users.main')}}",
		        "columns": [
		            {
		            	"class":          "details-control",
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

		    var detailRows = [];
 			
 			$('#example tbody').on( 'click', 'tr td.details-control', function () {
        var tr = $(this).closest('tr');
        var row = dt.row( tr );
        var idx = $.inArray( tr.attr('id'), detailRows );
 
        if ( row.child.isShown() ) {
            tr.removeClass( 'details' );
            row.child.hide();
 
            // Remove from the 'open' array
            detailRows.splice( idx, 1 );
        }
        else {
            tr.addClass( 'details' );
            row.child( format( row.data() ) ).show();
 
            // Add to the 'open' array
            if ( idx === -1 ) {
                detailRows.push( tr.attr('id') );
            }
        }
    } );
 
    // On each draw, loop over the `detailRows` array and show any child rows
    dt.on( 'draw', function () {
        $.each( detailRows, function ( i, id ) {
            $('#'+id+' td.details-control').trigger( 'click' );
        } );
    } );



            $(document).on("click",'[data-toggle^="buttons"]',function(){
                        
                        
                       var idd = $(this).attr("id");
                       var st = $(this).children(":first").hasClass("active").toString();
                       
                    $.ajax({
                        url: "{{URL::route('service.confirm')}}",
                        type : "POST",
                        dataType : "json",
                        data: {
                            id : idd,
                            st : st
                        }
                    });
					

            });

		});	
	</script>
	@stop
	
