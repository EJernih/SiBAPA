@extends('layouts.app')
@section('title','BHP')
@section('content')
<a href="{{ route('detailRequests.index') }}">
    <button type="button" class="text-white bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2">
        Kembali
    </button>
</a> 
<form id="detailRequestForm" action="{{ route ('detailRequests.update', $detailRequest->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    @error('bhp_request_id')
        <small style="color: red">{{ $message }}</small>
    @enderror
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label" for="bhp_request_id">Pengajuan</label>
		<div class="col-sm-12 col-md-10">
			<select class="custom-select col-12" id="bhp_request_id" name="bhp_request_id">
				<option value="">Choose...</option>
                @if ($bhpRequests->isEmpty())
                    <option value="">Tidak ada pengajuan yang tersedia</option>
                @else
                    @foreach ($bhpRequests as $bhpRequest)
					    <option value="{{ $bhpRequest->id }}" {{ $detailRequest->bhp_request_id == $bhpRequest->id?'selected' : '' }}>
                            {{ $bhpRequest->request_by }} - {{ $bhpRequest->request_date }}
                        </option>
                    @endforeach
                @endif
			</select>
		</div>
	</div>

    @error('bhp_id')
        <small style="color: red">{{ $message }}</small>
    @enderror
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label" for="bhp_id">Pengajuan</label>
		<div class="col-sm-12 col-md-10">
			<select class="custom-select col-12" id="bhp_id" name="bhp_id">
				<option value="">Choose...</option>
                @if ($bhps->isEmpty())
                    <option value="">Tidak ada pengajuan yang tersedia</option>
                @else
                    @foreach ($bhps as $bhp)
					    <option value="{{ $bhp->id }}" {{ $detailRequest->bhp_id == $bhp->id?'selected' : '' }}>
                            {{ $bhp->name_bhp }}
                        </option>
                    @endforeach
                @endif
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
                @if ($units->isEmpty())
                    <option value="">Tidak ada satuan yang tersedia</option>
                @else
                    @foreach ($units as $unit)
					    <option value="{{ $unit->id }}"
                            {{ $bhp->unit_id == $unit->id?'selected' : '' }}>
                            {{ $unit->name_unit }}
                        </option>
                    @endforeach
                @endif
			</select>
		</div>
	</div>

    @error('quantity_request')
        <small style="color: red">{{ $message }}</small>
    @enderror
    <div class="form-group row">
        <label class="col-sm-12 col-md-2 col-form-label">Jumlah yang diajukan</label>
        <div class="col-sm-12 col-md-10">
            <input class="form-control" type="number" name="quantity_requested" placeholder="Jumlah yang diajukan" value="{{ $detailRequest->quantity_requested }}">
        </div>
    </div>

    @error('description')
        <small style="color: red">{{ $message }}</small>
    @enderror
    <div class="form-group row">
        <label class="col-sm-12 col-md-2 col-form-label">Keterangan</label>
        <div class="col-sm-12 col-md-10">
            <input class="form-control" type="text" name="description" placeholder="Keterangan tambahan" value="{{ $detailRequest->description }}">
        </div>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </div>

</form>
							
@endsection