@extends('app')
@section('title', 'eLearning')
@section('content')
    <div style="width: 100%; background-color: #FFF">
      <div class="box-header with-border">
        <h3 class="box-title">Hardware Komputer</h3>
      </div>
      <div class="box-body">
        <div class="col-md-12">
            @foreach($e as $e)
                <div class="box box-widget">
                    <div class="box-header with-border">
                      <div class="user-block">
                        <img class="img-circle" src="{{asset('vid.png')}}" alt="User Image">
                        <span class="username"><a href="#">{{$e->judul}}</a></span>
                        <span class="description">Postingan: {{$e->created_at}}</span>
                      </div>
                      <!-- /.user-block -->

                      <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <!-- post text -->

                      <!-- Attachment -->
                        <center>
                            {!! $e->vlink_html !!}
                        </center>    
                      <!-- /.attachment-block -->
                    </div>
                    <!-- /.box-body -->
                    <!-- /.box-footer -->
                  </div>
            @endforeach
        </div>
      </div>
    </div>
@endsection