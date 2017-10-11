@extends('Akademik.masterAkademik')
@section('judul','Daftar Jurusan')

@section('content')
	<div class="col s12">
		<h4 class="text-center cyan-text">Daftar Jurusan</h4>
	</div>
	<div class="content" >
		<table class="table centered responsive-table bordered">
			<thead>
				<tr>
					<td class="text-center">No</td>
					<td class="text-center">Kode Jurusan</td>
					<td class="text-center">Nama Jurusan</td>
					<td class="text-center">Jenjang</td>
					<td class="text-center">Semester</td>
					<td class="text-center">Action</td>
				</tr>
			</thead>
			<tbody>
				@foreach($jurusan as $no => $jurusan)
				<tr>
					<td>{{++$no}}</td>
					<td>{{$jurusan->kode_jurusan}}</td>
					<td>{{$jurusan->nama_jurusan}}</td>
					<td>{{$jurusan->jenjang}}</td>
					<td>{{$jurusan->jumlah_semester}}</td>
					<td>
						{{Form::Open(['method' => 'DELETE','route' => ['Jurusan.destroy',encrypt($jurusan->id)]])}}
							<a href="{{action('Akademik\Jurusan\JurusanController@edit', encrypt($jurusan->id))}}" class="btn-floating btn-sm waves-light waves-effect blue">
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
			<script type="text/javascript">
	      		const Icon = '<i class="material-icons print">{{ session('status') }}</i>';
				const Message = '{{ session('pesan') }}';
				const $Content = Icon + Message ;
				Materialize.toast( $Content, 4000,'rounded cyan' );
      		</script>
		@endif
	</div>
@endsection