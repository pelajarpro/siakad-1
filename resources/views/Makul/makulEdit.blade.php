@extends('Makul.makulMaster')
@section('title', 'Edit Data Mata Kuliah')

@section('content')
	<div class="col s12">
		<h4 class="text-center">Edit Mata Kuliah</h4>
	</div>
	<div class="container">
		<div class="row">
			{{csrf_field()}}
			{{Form::open(array('method' => 'post','class' => 'col s12','action' => ['Makul\MakulController@update',$data->id]))}}
				{{Form::hidden('_method','PATCH')}}
				<div class="row">
					<div class="input-field col s12">
						{{Form::text('kode_mk',$data->kode_mk,array('id' => 'kode','data-length' => '8'))}}
						<label for="kode">Kode Mata Kuliah</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						{{Form::text('makul',$data->makul,array('id' => 'makul','data-length' => '20'))}}
						<label for="makul">Nama Mata Kuliah</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						{{Form::text('sks',$data->sks,array('id' => 'sks','data-length' => '2'))}}
						<label for="sks">Jumlah SKS</label>
					</div>
				</div>
				<div class="col s12 text-center">
					<button type="submit" class="btn waves-light waves-effect blue"><i class="material-icons left">cloud_upload</i>Update</button>
				</div>
			{{Form::close()}}
		</div>
	</div>
@endsection