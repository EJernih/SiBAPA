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
<a href="{{ route('bhpRequests.index') }}">
    <button type="button" class="text-white bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2">
        Kembali
    </button>
</a> 
    <div class="wizard-content">
        <form id="requestForm" class="tab-wizard wizard-circle wizard" action="{{ route('bhpRequests.store') }}" method="POST" enctype="multipart/form-data"> 
        @csrf


            <section>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Semester :</label>
                            <input type="text" class="form-control" name="semester" placeholder="Semester" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tahun ajaran :</label>
                            <input type="text" class="form-control" name="academic_year" placeholder="Tahun ajaran" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Diajukan Oleh :</label>
                            <input type="text" class="form-control" name="request_by" placeholder="Diajukan Oleh" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tanggal Pengajuan :</label>
                            <input
                                type="date"
                                class="form-control"
                                name="request_date"
                                placeholder="Select Date"
                            />
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