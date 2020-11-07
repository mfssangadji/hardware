@extends('layouts.app')
@section('title', 'Tambah Kategori')
@section('content')
	<div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Kategori</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{ route('kategori.store') }}">
              @csrf
              <div class="box-body">
                <div class="form-group @error('nama_kategori') has-error @enderror">
                  <label for="name">Kategori</label>
                  <input type="text" class="form-control" value="{{ old('nama_kategori') }}" id="nama_kategori" name="nama_kategori" placeholder="masukan nama kategori">
                  @error('nama_kategori')
                  	<span class="help-block">nama kategori tidak boleh kosong</span>
                  @enderror
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Tambah</button>
                <a href="{{ route('kategori') }}" type="button" class="btn btn-default">Batal</a>
              </div>
            </form>
      	  </div>
      	</div>
  </div>
@endsection