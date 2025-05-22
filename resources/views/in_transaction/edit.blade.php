@extends('layouts.app')
@section('title','BHP')
@section('content')
<a href="{{ route('inTransactions.index') }}">
    <button type="button" class="text-white bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2">
        Kembali
    </button>
</a> 
<form id="inTransactionForm" action="{{ route ('inTransactions.update', $inTransaction->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')


                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tanggal Transaksi :</label>
                            <input
                                type="date"
                                class="form-control"
                                name="transaction_date"
                                placeholder="Select Date"
                                value="{{ $inTransaction->transaction_date }}"
                            />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Prodi :</label>
                            <input type="text" class="form-control" name="prodi" placeholder="Prodi" value="{{ $inTransaction->prodi }}"/>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="bhp_id">Nama BHP :</label>
                                <div class="">
                                    <select class="custom-select col-12" id="bhp_id" name="bhp_id">
                                        <option value="">Choose...</option>
                                        @foreach ($bhps as $bhp)
                                            <option value="{{ $bhp->id }}" {{ $bhp->id == $inTransaction->bhp_id?'selected' : '' }}>{{ $bhp->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Jumlah Barang Masuk :</label>
                            <input type="number" class="form-control" name="qty_intransaction" placeholder="Jumlah Barang Masuk" value="{{ $inTransaction->qty_intransaction }}"/>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="unit_id">Satuan :</label>
                                <div class="">
                                    <select class="custom-select col-12" id="unit_id" name="unit_id">
                                        <option value="">Choose...</option>
                                        @foreach ($units as $unit)
                                            <option value="{{ $unit->id }}" {{ $unit->id == $inTransaction->unit_id?'selected' : '' }}>{{ $unit->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Lokasi :</label>
                            <input type="text" class="form-control" name="location" placeholder="Lokasi" value="{{ $inTransaction->location }}"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Keterangan :</label>
                                <input class="form-control" type="text" name="description" placeholder="Keterangan tambahan" value="{{ $inTransaction->description }}">
                        </div>
                    </div>
                </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </div>

</form>
							
@endsection