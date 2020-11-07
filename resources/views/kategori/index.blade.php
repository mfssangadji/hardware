@extends('layouts.app')
@section('title', 'Kategori')
@section('content')
	<div class="row">
        <div class="col-xs-12">
        	<div class="box">
	            <div class="box-header">
	              <h3 class="box-title">Data Kategori</h3>
	              <a href="{{ route('kategori.new') }}" class="btn btn-primary pull-right">Tambah Kategori</a>
	            </div>
	            <!-- /.box-header -->
	            <div class="box-body">
	              <table id="datapost" class="table table-bordered table-striped">
	                <thead>
	                <tr>
	                  <th>ID</th>
	                  <th>Kategori</th>
	                  <th>Proses</th>
	                </tr>
	                </thead>
	                <tbody>
	                	@foreach($kategori as $kategori)
	                		<tr>
	                			<td>{{$loop->iteration}}</td>
	                			<td>{{$kategori->nama_kategori}}</td>
	                			<td>
	                				<a href="{{ route('kategori').'/'.$kategori->id }}/edit" class="badge bg-default">edit</a>
	                				<form method="post" action="{{ route('kategori').'/'.$kategori->id }}" style="display:inline">
	                					@method('DELETE')
	                					@csrf
	                				<button type="submit" class="badge bg-red" onclick="return confirm('Apakan anda yakin?')" style="border: none;">hapus</button>
	                				</form>
	                			</td>
	                		</tr>
	                	@endforeach
	                </tbody>
	              </table>
	            </div>
	        </div>
        </div>
    </div>
@endsection