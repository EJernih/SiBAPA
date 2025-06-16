@extends('layouts.app')
@section('title','BHP')
@section('content')
					<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
<a href="{{ route('bhps.index') }}">
    <button type="button" class="text-white bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2">
        Kembali
    </button>
</a> 
<form id="bhpForm" action="{{ route ('bhps.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    @error('name_bhp')
        <small style="color: red">{{ $message }}</small>
    @enderror
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Nama BHP</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control" type="text" name="name_bhp" placeholder="Nama BHP">
		</div>
	</div>

    @error('stock')
        <small style="color: red">{{ $message }}</small>
    @enderror
    <div class="form-group row">
        <label class="col-sm-12 col-md-2 col-form-label">Stok</label>
        <div class="col-sm-12 col-md-10">
            <input class="form-control" type="number" name="stock" placeholder="Stok">
        </div>
    </div>

    @error('minimum_stock')
        <small style="color: red">{{ $message }}</small>
    @enderror
    <div class="form-group row">
        <label class="col-sm-12 col-md-2 col-form-label">Stok Minimum</label>
        <div class="col-sm-12 col-md-10">
            <input class="form-control" type="number" name="minimum_stock" placeholder="Stok Minimum">
        </div>
    </div>

    @error('unit_id')
        <small style="color: red">{{ $message }}</small>
    @enderror
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label" for="unit_id">Satuan</label>
		<div class="col-sm-12 col-md-10">
			<select class="custom-select col-12" id="unit_id" name="unit_id">
				<option value="">Choose...</option>
				@foreach ($units as $unit)
					<option value="{{ $unit->id }}">{{ $unit->name_unit }}</option>
				@endforeach
			</select>
		</div>
	</div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </div>

</form>
                    </div>			
@endsection