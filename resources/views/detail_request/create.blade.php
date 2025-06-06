@extends('layouts.app')
@section('title','BHP')
@section('content')
<a href="{{ route('detailRequests.index') }}">
    <button type="button" class="text-white bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2">
        Kembali
    </button>
</a> 
<form id="detailRequestForm" action="{{ route ('detailRequests.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    @error('bhp_request_id')
        <small style="color: red">{{ $message }}</small>
    @enderror
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label" for="bhp_request_id">Pengajuan</label>
		<div class="col-sm-12 col-md-10">
			<select class="custom-select col-12" id="bhp_request_id" name="bhp_request_id">
				<option value="">Choose...</option>
				@foreach ($bhpRequests as $bhpRequest)
					<option value="{{ $bhpRequest->id }}">{{ $bhpRequest->request_by }} - {{ $bhpRequest->request_date }}</option>
				@endforeach
			</select>
		</div>
	</div>

    @error('bhp_id')
        <small style="color: red">{{ $message }}</small>
    @enderror
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label" for="bhp_id">Nama BHP</label>
		<div class="col-sm-12 col-md-10">
			<select class="custom-select col-12" id="bhp_id" name="bhp_id">
				<option value="">Choose...</option>
				@foreach ($bhps as $bhp)
					<option value="{{ $bhp->id }}">{{ $bhp->name_bhp }}</option>
				@endforeach
			</select>
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

    @error('quantity_request')
        <small style="color: red">{{ $message }}</small>
    @enderror
    <div class="form-group row">
        <label class="col-sm-12 col-md-2 col-form-label">Jumlah yang diajukan</label>
        <div class="col-sm-12 col-md-10">
            <input class="form-control" type="number" name="quantity_requested" placeholder="Jumlah yang diajukan">
        </div>
    </div>

    @error('description')
        <small style="color: red">{{ $message }}</small>
    @enderror
    <div class="form-group row">
        <label class="col-sm-12 col-md-2 col-form-label">Keterangan</label>
        <div class="col-sm-12 col-md-10">
            <input class="form-control" type="text" name="description" placeholder="Keterangan tambahan">
        </div>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </div>

</form>
							
@endsection