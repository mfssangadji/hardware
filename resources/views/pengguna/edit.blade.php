@extends('layouts.app')
@section('title', 'Ubah Pengguna')
@section('content')
	<div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Ubah Pengguna</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{ route('pengguna').'/'.$pengguna->id }}">
              @method('PATCH')
              @csrf
              <div class="box-body">
                <div class="form-group @error('name') has-error @enderror">
                  <label for="name">Nama</label>
                  <input type="text" class="form-control" value="{{ $pengguna->name }}" id="name" name="name" placeholder="masukan nama">
                  @error('name')
                  	<span class="help-block">nama tidak boleh kosong</span>
                  @enderror
                </div>
                <div class="form-group @error('email') has-error @enderror">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" value="{{ $pengguna->email }}" id="email" name="email" placeholder="masukan email">
                  @error('email')
                  	<span class="help-block">email tidak boleh kosong</span>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="masukan password">
                  <span class="help-block">kosongkan jika tidak diganti</span>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-warning">Ubah</button>
                <a href="{{ route('pengguna') }}" type="button" class="btn btn-default">Batal</a>
              </div>
            </form>
      	  </div>
      	</div>
  </div>
@endsection