@extends('layout.admin')

@section('title', 'Under Construction')

@section('header')
    @parent
    	<style>
    		.styled div {
		  	  display: inline-block;
			  margin-left: 10px;
			  font-size: 70px;
			  font-weight: normal; 
			  text-align: center;
			  margin:0 15px; 
			  padding:0 30px;   
			  color: #F0677C;  
			  text-shadow:none;
			  vertical-align: middle;  
			}

	/* IE7 inline-block hack */
*+html .styled div{
  display: inline;
  zoom: 1;
}
.styled div:first-child {
  margin-left: 0;
}
.styled div span {
  display: block;
  padding-top: 30px;
  font-size: 19px;
  font-weight: normal; 
  text-align: center;
}

    		.countdown {
			text-align: center;
			margin-top: 30px;
			padding: 60px 0;
			}
    	</style>
	@stop

@section('content')
			<div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Under Construction</h4>

                </div>

            </div>

            <div class="countdown styled"></div>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-warning">
                        Website ini masih dalam proses pembuatan
                        <br />
                       	Kami akan segera menghubungi anda melalui E-Mail jika website ini telah siap digunakan. terima kasih.
                    </div>
                </div>
                
            </div>
            
@stop

@section('script')
	@parent
		{{HTML::script('assets/plugins/jquery.countdown.js')}}
		<script type="text/javascript">
			$( function() {
        var endDate = "July  27, 2015 15:00:00";

        $('.countdown.simple').countdown({ date: endDate });

        $('.countdown.styled').countdown({
          date: endDate,
          render: function(data) {
            $(this.el).html("<div>" + this.leadingZeros(data.days, 3) + " <span>hari</span></div><div>" + this.leadingZeros(data.hours, 2) + " <span>jam</span></div><div>" + this.leadingZeros(data.min, 2) + " <span>menit</span></div><div>" + this.leadingZeros(data.sec, 2) + " <span>detik</span></div>");
          }
        });

        $('.countdown.callback').countdown({
          date: +(new Date) + 10000,
          render: function(data) {
            $(this.el).text(this.leadingZeros(data.sec, 2) + " sec");
          },
          onEnd: function() {
            $(this.el).addClass('ended');
          }
        }).on("click", function() {
          $(this).removeClass('ended').data('countdown').update(+(new Date) + 10000).start();
        });
		
		
		
      });
		</script>
	@stop
