@extends('layouts.app')
@section('title', 'Pengguna')
@section('content')
	<div class="row">
        <div class="col-xs-12">
        	<div class="box">
	            <div class="box-header">
	              <h3 class="box-title">Data Pengguna</h3>
	              <a href="{{ route('pengguna.new') }}" class="btn btn-primary pull-right">Tambah Pengguna</a>
	            </div>
	            <!-- /.box-header -->
	            <div class="box-body">
	              <table id="datapost" class="table table-bordered table-striped">
	                <thead>
	                <tr>
	                  <th>ID</th>
	                  <th>Nama</th>
	                  <th>Email</th>
	                  <th>Proses</th>
	                </tr>
	                </thead>
	                <tbody>
	                	@foreach($pengguna as $pengguna)
	                		<tr>
	                			<td>{{$pengguna->id}}</td>
	                			<td>{{$pengguna->name}}</td>
	                			<td>{{$pengguna->email}}</td>
	                			<td>
	                				<a href="{{ route('pengguna').'/'.$pengguna->id }}/edit" class="badge bg-default">edit</a>
	                				<form method="post" action="{{ route('pengguna').'/'.$pengguna->id }}" style="display:inline">
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