@extends('Dosen.masterDosen')
@section('judul', 'Data Dosen')

@section('content')
	<div class="col s12">
		<h4 class="text-center">Daftar Data Dosen</h4>
	</div>
	<div class="content">
		<table class="table table-stripped">
			<thead>
				<tr>
					<td>No</td>
					<td>NIP</td>
					<td>Nama</td>
					<td>No Telpon</td>
					<td>Jenis Kelamin</td>
					<td>Alamat</td>
					<td>Aksi</td>
				</tr>
			</thead>
			<tbody>
				@foreach($dosen as $no => $data)
				<tr>
					<td>{{++$no}}</td>
					<td>{{$data->nip}}</td>
					<td>{{$data->nama}}</td>
					<td>{{$data->notlp}}</td>
					<td>{{$data->jeniskelamin}}</td>
					<td>{{$data->alamat}}</td>
					<td>
						{{Form::Open(['method' => 'DELETE','route' => ['Dosen.destroy',$data->id]])}}
							<a href="{{action('Dosen\DosenController@edit',$data->id)}}" class="btn-floating btn-sm waves-light waves-effect blue">
								<i class="material-icons">mode_edit</i>
							</a>
							<button type="submit" class="btn btn-floating waves-effect waves-light red">
								<i class="material-icons">delete</i>
							</button>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection