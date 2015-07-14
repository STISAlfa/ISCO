@extends('layout.admin')

@section('title', 'Daftar Peserta Lomba Essay Nasional')

@section('header')
    @parent

	{{HTML::script('assets/plugins/data-tables/jquery.dataTables.min.js')}}
	{{HTML::script('assets/plugins/data-tables/dataTables.bootstrap.js')}}
	@stop

@section('content')
	<div class="panel panel-default">

                	<div class="row">
                		<div class="col-md-12">
	                        <div class="panel-heading">
	                            Daftar Peserta Lomba Essay Nasional
	                        </div>
	                        <div class="panel-body"> 
		                        	
	                        	 <table id="example" class="table table-bordered">
									    <colgroup>
									                <col class="con0" />
									                <col class="con1" />
									                <col class="con2" />
									                <col class="con3" />
									                <col class="con4" />
									            </colgroup>
									    <thead>
									    <tr>
									                <th align="center" valign="middle" class="head1"></th>
									                <th align="center" valign="middle" class="head2">nama</th>
									                <th align="center" valign="middle" class="head3">universitas</th>
									                <th align="center" valign="middle" class="head4">Judul essay</th>
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
		<script>
			$( "#paper" ).addClass( "menu-top-active" );
		</script>
	   <script>
    	function format ( d ) {
		    // `d` is the original data object for the row
		    return '<table class="table table-striped">'+
		        '<tr>'+
		            '<td>Nama:</td>'+
		            '<td>'+d.nama+'</td>'+
		        '</tr>'+
		        '<tr>'+
		            '<td>universitas:</td>'+
		            '<td>'+d.universitas+'</td>'+
		        '</tr>'+
		        '<tr>'+
		            '<td>Jurusan:</td>'+
		            '<td>'+d.jurusan+'</td>'+
		        '</tr>'+
		        '<tr>'+
		            '<td>NIM:</td>'+
		            '<td>'+d.nim+'</td>'+
		        '</tr>'+
		        '<tr>'+
		            '<td>Angkatan:</td>'+
		            '<td>'+d.angkatan+'</td>'+
		        '</tr>'+
		        '<tr>'+
		            '<td>e-mail:</td>'+
		            '<td>'+d.email+'</td>'+
		        '</tr>'+
		        '<tr>'+
		            '<td>Handphone:</td>'+
		            '<td>'+d.handphone+'</td>'+
		        '</tr>'+
		        '<tr>'+
		            '<td>KTM:</td>'+
		            '<td>'+'<a href="/isco/public/'+d.ktm+'">'+d.ktm+'</a><br>'+
		            '<img src="/isco/public/'+d.ktm+'" class="img-thumbnail" width="304" height="236"></td>'

		        '</tr>'+
		        '<tr>'+
		            '<td>Judul Essay:</td>'+
		            '<td>'+d.judulessay+'</td>'+
		        '</tr>'+
		        '<tr>'+
		            '<td>File Essay:</td>'+
		            '<td>'+'<a href="/isco/public/'+d.essay+'">'+d.essay+'</a>'+'</td>'+
		        '</tr>'+
		        
		        
		        
		        
		        
		        
		        
		    '</table>';
		}
 
$(document).ready(function() {
    var dt = $('#example').DataTable( {
    	"processing": true,
        "serverSide": true,
        "ajaxSource": "http:\/\/localhost\/isco\/public\/admin\/api\/users\/essay",
        "columns": [
            {
                "class":          "details-control",
                "orderable":      false,
                "data":           null,
                "defaultContent": ""
            },
            { "data" : "nama" },
            { "data" : "universitas" },
            { "data" : "judulessay" }
        ],
        "order": [[1, 'asc']]
    } );
 
    // Array to track the ids of the details displayed rows
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
} );
    </script>

	@stop
