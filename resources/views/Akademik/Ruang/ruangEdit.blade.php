@extends('Akademik.masterAkademik')

@section('judul','Edit Data Ruangan')

@section('content')
	<div class="container-fluid">
		<div class="col s12 m6 l4">
			<div class="card z-depth-2">
				<div class="card-content">
					<span class="card-title text-center"><strong class="cyan-text">Edit Data Ruang</strong></span>
					<div class="container">
						<div class="row">
							{{ Form::open(array('action' => ['Akademik\Ruang\RuangController@update',encrypt($edit->id)],'method' => 'post','class' => 'col s12')) }}
								{{ form::hidden('_method','PATCH') }}
								<div class="row">
									<div class="col s12 m6 input-field">
										{{ Form::text('kode_ruang',$edit->kode_ruang,['id' => 'kode_ruang','data-length' => '8']) }}
										<label for="kode_ruang">Kode Ruang</label>
									</div>
									<div class="col s12 m6 input-field">
										{{ Form::text('ruang',$edit->nama_ruang,['id' => 'ruang','data-length' => '50']) }}
										<label for="ruang">Nama Ruangan</label>
									</div>
								</div>
								<div class="col s12 text-center">
									<button type="submit" class="btn waves-light waves-effect blue"><i class="material-icons right">send</i>Simpan</button>
								</div>
							{{ Form::close() }}
						</div>
						@if(session()->has('status'))
							<script type="text/javascript">
					      		const Icon = '<i class="material-icons print">{{ session('status') }}</i>';
								const Message = '{{ session('pesan') }}';
								const $Content = Icon + Message ;
								Materialize.toast( $Content, 4000,'rounded cyan' );
				      		</script>
						@endif
						@if($errors->any())
							@foreach($errors->all() as $error)
								<script type="text/javascript">
							      		const Icon = '<i class="material-icons print">clear</i>';
										const Message = '{!! $error !!}';
										const $Content = Icon + Message ;
									Materialize.toast( $Content, 4000,'rounded red' );
					      		</script>
				      		@endforeach
						@endif	
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection