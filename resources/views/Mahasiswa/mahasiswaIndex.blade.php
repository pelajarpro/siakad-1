@extends('Mahasiswa.masterMahasiswa')
@section('judul','Daftar Mahasiswa')

@section('content')
	<div class="col s12">
		<h4 class="text-center">Daftar mahasiswa</h4>
	</div>
	<div class="content" style="margin-right: 20px;">
		<table class="table centered responsive-table bordered">
			<thead>
				<tr>
					<td class="text-center">NIM</td>
					<td class="text-center">Nama</td>
					<td class="text-center">Jenis Kelamin</td>
					<td class="text-center">Tempat Tanggal Lahir</td>
					<td class="text-center">Aksi</td>
				</tr>
			</thead>
			<tbody>
				@foreach($data as $data)
				<tr>
					<td>{{$data->nim}}</td>
					<td><a href="{{ action('Mahasiswa\MahasiswaController@show',$data->id) }}">{{$data->nama}}</a></td>
					<td>{{$data->jenis_kelamin}}</td>
					<td>{{$data->tempat.','.$data->tanggal}}</td>
					<td>
						{{Form::Open(['method' => 'DELETE','route' => ['Mahasiswa.destroy',$data->id]])}}
							<a href="{{action('Mahasiswa\MahasiswaController@edit', $data->id)}}" class="btn-floating btn-sm waves-light waves-effect blue">
								<i class="material-icons">mode_edit</i>
							</a>
							<button type="submit" class="btn btn-floating waves-effect waves-light red">
								<i class="material-icons">delete</i>
							</button>
						{{ Form::close()}}
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		@if(session()->has('status'))
			<div class="col-sm-12">
				<div class="alert alert-{{session('status')}}">
					{!!session('pesan')!!}
				</div>
			</div>
		@endif
	</div>
@endsection