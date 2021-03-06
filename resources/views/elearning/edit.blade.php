@extends('layouts.app')
@section('title', 'Ubah Elearning')
@section('content')
	<div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Ubah Elearning</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{url('elearning/'.$kid.'/'.$id)}}" enctype="multipart/form-data">
              @method('PATCH')
              @csrf
              <div class="box-body">
                <div class="form-group @error('kategori_id') has-error @enderror">
                  <label for="name">Kategori</label>
                  <select name="kategori_id" class="form-control">
                      @foreach($kategori as $kategori)
                          @if($kategori->id == $kid)
                              <option value="{{$kategori->id}}" selected>{{$kategori->nama_kategori}}</option>
                          @endif
                      @endforeach
                  </select>
                  @error('kategori_id')
                    <span class="help-block">kategori tidak boleh kosong</span>
                  @enderror
                </div>
                <div class="form-group @error('judul') has-error @enderror">
                  <label for="name">Judul</label>
                  <input type="text" name="judul" id="judul" value="{{$elearning->judul}}" class="form-control">
                  @error('judul')
                    <span class="help-block">judul tidak boleh kosong</span>
                  @enderror
                </div>
                <div class="form-group @error('deskripsi') has-error @enderror">
                  <label for="name">Deskripsi</label>
                  <textarea class="form-control" name="deskripsi" id="textarea">{{$elearning->deskripsi}}</textarea>
                  @error('deskripsi')
                    <span class="help-block">deskripsi tidak boleh kosong</span>
                  @enderror
                </div>
                <div class="form-group @error('vlink') has-error @enderror">
                  <label for="name">Link Youtube</label>
                  <input type="text" name="vlink" id="vlink" value="{{$elearning->vlink}}" class="form-control">
                  @error('vlink')
                    <span class="help-block">link tidak boleh kosong</span>
                  @enderror
                </div>
                <div class="form-group @error('vlink') has-error @enderror">
                  <img src="/upload/{{$elearning->gambar}}" style="width: 300px; border-radius:5px;">
                </div>
                <div class="form-group @error('gambar') has-error @enderror">
                  <label for="name">Gambar</label>
                  <input type="file" name="gambar" id="gambar">
                  @error('gambar')
                    <span class="help-block">gambar tidak boleh kosong</span>
                  @enderror
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-warning">Ubah</button>
                <a href="{{ url('elearning/'.$kid) }}" type="button" class="btn btn-default">Batal</a>
              </div>
            </form>
      	  </div>
      	</div>
  </div>
@endsection