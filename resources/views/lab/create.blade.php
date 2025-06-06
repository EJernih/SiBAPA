@extends('layouts.app')
@section('title','lab')
@section('content')
<a href="{{ route('labs.index') }}">
    <button type="button" class="text-white bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2">
        Kembali
    </button>
</a> 
<form id="labForm" action="{{ route ('labs.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    @error('name_lab')
        <small style="color: red">{{ $message }}</small>
    @enderror
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Nama Laboratorium</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control" type="text" name="name_lab" placeholder="Nama Laboratorium">
		</div>
	</div>

    @error('prodi_id')
        <small style="color: red">{{ $message }}</small>
    @enderror
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label" for="prodi_id">Prodi</label>
		<div class="col-sm-12 col-md-10">
			<select class="custom-select col-12" id="prodi_id" name="prodi_id">
				<option value="">Choose...</option>
				@foreach ($prodis as $prodi)
					<option value="{{ $prodi->id }}">{{ $prodi->name }}</option>
				@endforeach
			</select>
		</div>
	</div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </div>

</form>
							
@endsection