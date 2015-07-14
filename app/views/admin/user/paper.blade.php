@extends('layout.admin')

@section('title', 'Daftar Peserta Lomba Paper SMA Nasional')

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
	                            Daftar Peserta Lomba Paper SMA Nasional
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
									                <th align="center" valign="middle" class="head2">id</th>
									                <th align="center" valign="middle" class="head3">judul paper</th>
									                <th align="center" valign="middle" class="head4">waktu pendaftaran</th>
									                
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
		        	'<td colspan=2><b>Anggota 1 :</b></td>'+
		        '</tr>'+
		        '<tr>'+
		            '<td>Nama:</td>'+
		            '<td>'+d.nama1+'</td>'+
		        '</tr>'+
		        '<tr>'+
		            '<td>SMA:</td>'+
		            '<td>'+d.sma1+'</td>'+
		        '</tr>'+
		        '<tr>'+
		            '<td>Jenis Kelamin:</td>'+
		            '<td>'+d.jeniskelamin1+'</td>'+
		        '</tr>'+
		        '<tr>'+
		            '<td>NIM:</td>'+
		            '<td>'+d.nim1+'</td>'+
		        '</tr>'+
		        '<tr>'+
		            '<td>Tahun Masuk:</td>'+
		            '<td>'+d.tahunmasuk1+'</td>'+
		        '</tr>'+
		        '<tr>'+
		            '<td>E-mail:</td>'+
		            '<td>'+d.email1+'</td>'+
		        '</tr>'+
		        '<tr>'+
		            '<td>Handphone:</td>'+
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
		            '<td>SMA:</td>'+
		            '<td>'+d.sma2+'</td>'+
		        '</tr>'+
		        '<tr>'+
		            '<td>Jenis Kelamin:</td>'+
		            '<td>'+d.jeniskelamin2+'</td>'+
		        '</tr>'+
		        '<tr>'+
		            '<td>NIM:</td>'+
		            '<td>'+d.nim2+'</td>'+
		        '</tr>'+
		        '<tr>'+
		            '<td>Tahun Masuk:</td>'+
		            '<td>'+d.tahunmasuk2+'</td>'+
		        '</tr>'+
		        '<tr>'+
		            '<td>E-mail:</td>'+
		            '<td>'+d.email2+'</td>'+
		        '</tr>'+
		        '<tr>'+
		            '<td>Handphone:</td>'+
		            '<td>'+d.handphone2+'</td>'+
		        '</tr>'+
		        '<tr>'+
		            '<td>Kartu Pelajar:</td>'+
		            '<td>'+'<a href="/isco/public/'+d.kp2+'">'+d.kp2+'<br></a>'+
		            '<img src="/isco/public/'+d.kp2+'" class="img img-thumbnail" width="304" height="236"></td>'+
		        '</tr>'+

		  		'<tr>'+
		        	'<td colspan=2><b>Anggota 3 :</b></td>'+
		        '</tr>'+
		        '<tr>'+
		            '<td>Nama:</td>'+
		            '<td>'+d.nama3+'</td>'+
		        '</tr>'+
		        '<tr>'+
		            '<td>SMA:</td>'+
		            '<td>'+d.sma3+'</td>'+
		        '</tr>'+
		        '<tr>'+
		            '<td>Jenis Kelamin:</td>'+
		            '<td>'+d.jeniskelamin3+'</td>'+
		        '</tr>'+
		        '<tr>'+
		            '<td>NIM:</td>'+
		            '<td>'+d.nim3+'</td>'+
		        '</tr>'+
		        '<tr>'+
		            '<td>Tahun Masuk:</td>'+
		            '<td>'+d.tahunmasuk3+'</td>'+
		        '</tr>'+
		        '<tr>'+
		            '<td>E-mail:</td>'+
		            '<td>'+d.email3+'</td>'+
		        '</tr>'+
		        '<tr>'+
		            '<td>Handphone:</td>'+
		            '<td>'+d.handphone3+'</td>'+
		        '</tr>'+
		        '<tr>'+
		            '<td>Kartu Pelajar:</td>'+
		            '<td>'+'<a href="/isco/public/'+d.kp3+'">'+d.kp3+'<br></a>'+
		            '<img src="/isco/public/'+d.kp3+'" class="img img-thumbnail" width="304" height="236"></td>'+
		        '</tr>'+
		              
		        '<tr>'+
		            '<td>Judul Paper:</td>'+
		            '<td>'+d.judulpaper+'</td>'+
		        '</tr>'+
		        '<tr>'+
		            '<td>File Paper:</td>'+
		            '<td>'+'<a href="/isco/public/'+d.paper+'">'+d.paper+'</a>'+'</td>'+
		        '</tr>'+
		        
		    '</table>';
		}
 
$(document).ready(function() {
    var dt = $('#example').DataTable( {
    	"processing": true,
        "serverSide": true,
        "ajaxSource": "http:\/\/localhost\/isco\/public\/admin\/api\/users\/paper",
        "columns": [
            {
                "class":          "details-control",
                "orderable":      false,
                "data":           null,
                "defaultContent": ""
            },
            {"data" : "id"},
            { "data" : "judulpaper" },
            { "data" : "created_at" }
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
