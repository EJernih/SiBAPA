@extends('layouts.app')
@section('title','BHP')

    @push('stylesheets')
    		<!-- jQuery CSS -->
		<link rel="stylesheet" href="{{ asset('back/src/plugins/jquery-steps/jquery.steps.css') }}">
		{{-- <!-- Date Picker -->
		<link rel="stylesheet" href="{{ asset('back/src/plugins/air-datepicker/dist/css/datepicker.css') }}"> --}}
		
		<!-- Select 2 -->
		<link rel="stylesheet" href="{{ asset('back/src/plugins/select2/select2.min.css') }}">
        
    @endpush
    
@section('content')
					<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
<a href="{{ route('outTransactions.index') }}">
    <button type="button" class="text-white bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2">
        Kembali
    </button>
</a> 
    <div class="wizard-content">
        <form id="requestForm" class="tab-wizard wizard-circle wizard" action="{{ route('outTransactions.store') }}" method="POST" enctype="multipart/form-data"> 
        @csrf
            <section>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Tanggal Transaksi :</label>
                            <input
                                type="date"
                                class="form-control"
                                name="outtransaction_date"
                                placeholder="Select Date"
                            />
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Matakuliah :</label>
                            <input type="text" class="form-control" name="matakuliah" placeholder="Matakuliah" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="lab_id">Lokasi :</label>
                                <div class="">
                                    <select class="custom-select col-12" id="lab_id" name="lab_id">
                                        <option value="">Choose...</option>
                                        @foreach ($labs as $lab)
                                            <option value="{{ $lab->id }}">{{ $lab->name_lab}} - {{ $lab->prodi->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
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
                                            <option value="{{ $bhp->id }}">{{ $bhp->name_bhp }}</option>
                                        @endforeach
                                    </select>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Jumlah Barang Keluar :</label>
                            <input type="number" class="form-control" name="qty_outtransaction" placeholder="Jumlah Barang Keluar" />
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Keterangan :</label>
                                <input class="form-control" type="text" name="description" placeholder="Keterangan tambahan">
                        </div>
                    </div>
                </div>
            </section>
            <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </div>
        </form>
    </div>

    @push('scripts')
	<!-- jQuery Validation -->
	<script src="{{ asset('back/src/plugins/jquery-validation/dist/jquery.validate.min.js') }}"></script>
	<script src="{{ asset('back/src/plugins/jquery-steps/jquery.steps.js') }}"></script>
	{{-- <!-- Date Picker -->
	<script src="{{ asset('back/src/plugins/air-datepicker/dist/js/datepicker.min.js') }}"></script>
	<script src="{{ asset('back/src/plugins/air-datepicker/dist/js/i18n/datepicker.en.js') }}"></script> --}}
	<!-- Select 2 -->
	<script src="{{ asset('back/src/plugins/select2/select2.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            //inisialisasi select2
            $('#bhp_id').select2();
            $('#unit_id').select2();


            // inisialisasi form requests yang dari form wizard
            $('#requestForm').steps({
                headerTag: "h5",
                bodyTag: "section",
                transitionEffect: "fade",
                autoFocus: true,
                onStepChanging: function(event, currentIndex, newIndex) {
                    return $('#requestForm').valid();
                },
                onFinished: function(event, currentIndex) {
                    alert("Form submitted.");
                    $('#requestForm').submit();
                }
                },
            });
    </script>
@endpush
                    </div>
@endsection