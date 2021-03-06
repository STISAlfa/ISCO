@extends('layout.master')

@section('title', 'Lomba Statistician Game')

@section('header')
    @parent
    {{ HTML::style('assets/css/pages/paper-form.css') }}
    <style>
      .info-maroon{
        background-color:maroon;
        color:white;
      }
    </style>
  @stop

@section('content')
  <!-- BEGIN REGISTRATION FORM -->
  
  <div class="content2">
    @if(Session::has('errors'))
      <?php $errors = Session::get('errors'); ?>
      <div class="alert alert-danger">
        <button class="close" data-dismiss="alert"></button>
        {{ implode('', $errors->all('<div>:message</div>')) }}
      </div>
    @endif

    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{URL::to('/')}}">Statistician Game 2015</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <a href="#"><button type="button" class="btn btn-default navbar-btn" disabled>Penyisihan</button></a>
            <a href="logout"><button type="button" class="btn btn-default navbar-btn">Logout</button></a>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <!-- END REGISTRATION FORM -->
    <div id="#anggota">
      {{ Form::open(array('url' => 'edit-profile','id'=>'edit-form' ,'enctype'=>'multipart/form-data')) }}
      <br>
      <div class="row">
        <?php
          for( $i=0;$i<2;$i++){
            if($i==0){
        ?>              
        <div class="col-md-4">
          <div class="panel panel-default">
            <div class="panel-heading">Tim <b>{{Auth::user()->username}}</b></div>
            <div class="panel-body">
               <table class="table table table-striped">
                <tr>
                  <td>E-Mail </td>
                </tr>
                <tr>
                  <td class="pull-right">{{Auth::user()->email}}</td>
                </tr>

                <tr>
                  <td>Sekolah </td>
                </tr>
                <tr>
                  <td class="pull-right">{{Auth::user()->asal_sekolah}}</td>
                </tr>
                <tr>
                  <td>Status </td>
                </tr>
                <tr>
                  @if(Auth::user()->status)
                  <td class="pull-right">Terverifikasi</td>
                  @else
                  <td class="pull-right info-maroon">Belum Terverifikasi</td>
                  @endif
                </tr>
              </table>
            </div>
          </div>
        </div>
        <?php
          }
          else{
            echo '<div class="col-md-4"></div>';
          }
        ?>
        <div class="col-md-8">
          <!--Ketua Tim-->
          <div class="panel panel-default">
            @if($i==0)
            <div class="panel-heading">Identitas Ketua Tim :</div>
            @else
            <div class="panel-heading">Anggota Tim :</div>
            @endif
            <div class="panel-body">
              @if(isset($data[$i]))

                <input name="idag{{$i+1}}" type="hidden" value="{{$data[$i]->id}}">

                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3">
                      <label for="nama">Nama</label>
                    </div>
                    <div class="col-md-9">
                    @if($data[$i]->nama!=null)
                      <input type="text" class="form-control" name="nama{{$i+1}}" id="nama{{$i+1}}" placeholder="Nama" value="{{$data[$i]->nama}}">
                    @else
                      <input type="text" class="form-control" name="nama{{$i+1}}" id="nama{{$i+1}}" placeholder="Nama">
                    @endif
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3">
                      <label for="nis">NIS</label>
                    </div>
                    <div class="col-md-9">
                    @if($data[$i]->nis!=null)
                      <input type="text" class="form-control" name="nis{{$i+1}}" id="nis{{$i+1}}" placeholder="NIS" value="{{$data[$i]->nis}}">
                    @else
                      <input type="text" class="form-control" name="nis{{$i+1}}" id="nis{{$i+1}}" placeholder="NIS">
                    @endif
                    </div>
                  </div>
                </div>
                
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3">
                      <label for="tahunmasuk1">Tahun Masuk</label>
                    </div>
                    <div class="col-md-9">
                    @if($data[$i]->tahun_masuk!=null)
                      <input type="number" class="form-control" name="tahunmasuk{{$i+1}}" id="tahunmasuk{{$i+1}}" placeholder="Tahun Masuk" value="{{$data[$i]->tahun_masuk}}">
                    @else
                      <input type="number" class="form-control" name="tahunmasuk{{$i+1}}" id="tahunmasuk{{$i+1}}" placeholder="Tahun Masuk">
                    @endif
                    </div>
                  </div>
                </div>
                
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3">
                      <label for="kontak">kontak</label>
                    </div>
                    <div class="col-md-9">
                    @if($data[$i]->handphone!=null)
                      <input type="text" class="form-control" name="kontak{{$i+1}}" id="kontak{{$i+1}}" placeholder="No. Handphone" value="{{$data[$i]->handphone}}">
                    @else
                      <input type="text" class="form-control" name="kontak{{$i+1}}" id="kontak{{$i+1}}" placeholder="No. Handphone">
                    @endif
                    </div>
                  </div>
                </div>
                
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3">
                      <label for="kp">Kartu Pelajar</label>
                    </div>
                    <div class="col-md-9">
                    @if($data[$i]->kartu_pelajar_dir!=null)
                      <!--<input type="file" class="form-control" name="kp1" id="kp1">-->
                      <input type="text" class="form-control" name="kp{{$i+1}}" id="kp{{$i+1}}" disabled value="sudah terupload">
                    @else
                      <input type="file"  accept="image/*" class="form-control" name="kp{{$i+1}}" id="kp{{$i+1}}">
                    @endif
                    </div>
                  </div>
                </div>
              @endif

            
            </div>
          </div>
        </div>
        <?php
         }
        ?>

      </div>
      <div class="form-actions">
        <button type="submit" class="btn green pull-right" type="submit">Update <i class="m-icon-swapright m-icon-white"></i></button>
      </div>

    </form>
    </div>

    
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

            
      });
    </script>
    <!-- END JAVASCRIPTS -->

  @stop