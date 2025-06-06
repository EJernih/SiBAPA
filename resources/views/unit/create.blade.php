@extends('layouts.app')
@section('title','BHP')
@section('content')
<a href="{{ route('units.index') }}">
    <button type="button" class="text-white bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2">
        Kembali
    </button>
</a> 
<form id="bhpForm" action="{{ route ('units.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    @error('name_unit')
        <small style="color: red">{{ $message }}</small>
    @enderror
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Satuan</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control" type="text" name="name_unit" placeholder="Satuan">
		</div>
	</div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </div>
</form>
							
@endsection