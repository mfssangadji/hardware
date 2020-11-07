@extends('layouts.app')
@section('title', 'eLearning')
@section('content')
	<div class="row">
        <div class="col-xs-12">
        	<div class="box">
	            <div class="box-header">
	              <h3 class="box-title">Data eLearning</h3>
	              <a href="{{url('elearning/'.$id.'/create')}}" class="btn btn-primary pull-right">Tambah eLearning</a>
	            </div>
	            <!-- /.box-header -->
	            <div class="box-body">
	              <table id="datapost" class="table table-bordered table-striped">
	                <thead>
	                <tr>
	                  <th>ID</th>
	                  <th>Kategori</th>
	                  <th>Judul</th>
	                  <th>Proses</th>
	                </tr>
	                </thead>
	                <tbody>
	                	@foreach($elearning as $elearning)
	                		<tr>
	                			<td>{{$loop->iteration}}</td>
	                			<td>{{$elearning->kategori->nama_kategori}}</td>
	                			<td>{{$elearning->judul}}</td>
	                			<td>
	                				<a href="{{url('elearning/'.$id.'/'.$elearning->id.'/edit')}}" class="badge bg-default">edit</a>
	                				<form method="post" action="{{url('elearning/'.$id.'/'.$elearning->id)}}" style="display:inline">
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