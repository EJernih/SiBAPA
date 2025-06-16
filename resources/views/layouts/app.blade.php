<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>@yield('pageTitle')</title>

		<!-- Site favicon -->
		<link
			rel="apple-touch-icon"
			sizes="180x180"
			href="{{ asset('back/vendors/images/apple-touch-icon.png') }}"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="32x32"
			href="{{ asset('back/vendors/images/favicon-32x32.png') }}"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="16x16"
			href="{{ asset('back/vendors/images/favicon-16x16.png') }}"
		/>

		<!-- Mobile Specific Metas -->
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"
		/>

		<!-- Google Font -->
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
			rel="stylesheet"
		/>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="{{ asset('back/vendors/styles/core.css') }}" />
		<link
			rel="stylesheet"
			type="text/css"
			href="{{ asset('back/vendors/styles/icon-font.min.css') }}"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="{{ asset('back/src/plugins/datatables/css/dataTables.bootstrap4.min.css') }}"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="{{ asset('back/src/plugins/datatables/css/responsive.bootstrap4.min.css') }}"
		/>
		<link rel="stylesheet" type="text/css" href="{{ asset('back/vendors/styles/style.css') }}" />

		<!-- Tailwind CSS -->
		<script src="https://cdn.tailwindcss.com"></script>





        @stack('stylesheets')
	</head>


	<body>

        <!-- Header section -->
        @include('layouts.partials.header')
        <!-- End Header section -->

        <!-- Sidebar section -->
        @include('layouts.partials.sidebar')
        <!-- End Sidebar section -->


		<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					<div class="page-header">
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="title">
									<h4>blank</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="index.html">Home</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											blank
										</li>
									</ol>
								</nav>
							</div>
							<div class="col-md-6 col-sm-12 text-right">
								<div class="dropdown">

									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#">Export List</a>
										<a class="dropdown-item" href="#">Policies</a>
										<a class="dropdown-item" href="#">View Assets</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					@yield('content')

				</div>
				<div class="footer-wrap pd-20 mb-20 card-box">
					Tugas Akhir - Jernih
				</div>
			</div>
		</div>



		<!-- js -->
		<script src="{{ asset('back/vendors/scripts/core.js') }}"></script>
		<script src="{{ asset('back/vendors/scripts/script.min.js') }}"></script>
		<script src="{{ asset('back/vendors/scripts/process.js') }}"></script>
		<script src="{{ asset('back/vendors/scripts/layout-settings.js') }}"></script>
		<script src="{{ asset('back/src/plugins/apexcharts/apexcharts.min.js')}}"></script>
		<script src="{{ asset('back/src/plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
		<script src="{{asset ('back/src/plugins/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
		<script src="{{ asset('back/src/plugins/datatables/js/dataTables.responsive.min.js') }}"></script>
		<script src="{{ asset('back/src/plugins/datatables/js/responsive.bootstrap4.min.js') }}"></script>
		<script src="{{ asset('back/vendors/scripts/dashboard3.js')}}"></script>
		<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

@push('scripts')
<script>
$(function () {
// Loop semua <table> yang punya class .data-table
$('table.data-table').each(function () {
// Cegah error “re‑initialisation” kalau sudah di‑init
if (! $.fn.DataTable.isDataTable(this)) {
$(this).DataTable({
responsive: true,
autoWidth : false,
// opsi lain sesuai kebutuhan
// paging    : false,
// searching : false,
// ordering  : false,
});
}
});
});
</script>
@endpush
            @stack('scripts')

	</body>
</html>
