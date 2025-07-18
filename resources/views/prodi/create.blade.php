@extends('layouts.app')
@section('title','BHP')
@section('content')
					<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
<a href="{{ route('prodis.index') }}">
    <button type="button" class="text-white bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2">
        Kembali
    </button>
</a> 
<form id="bhpForm" action="{{ route ('prodis.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    @error('name')
        <small style="color: red">{{ $message }}</small>
    @enderror
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Nama Prodi</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control" type="text" name="name" placeholder="Nama Prodi">
		</div>
	</div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </div>
</form>
                    </div>	
@endsection