@extends('layouts.app')
@section('title','BHP')
@section('content')
						<div class="col-lg-6 col-md-12 col-sm-12 mb-30">
							<div class="pd-20 card-box">
								<h5 class="h4 text-blue mb-20">Customtab Tab</h5>
								<div class="tab">
									<ul class="nav nav-tabs customtab" role="tablist">
										<li class="nav-item">
											<a
												class="nav-link active"
												data-toggle="tab"
												href="#home2"
												role="tab"
												aria-selected="true"
												>Home</a
											>
										</li>
										<li class="nav-item">
											<a
												class="nav-link"
												data-toggle="tab"
												href="#profile2"
												role="tab"
												aria-selected="false"
												>Profile</a
											>
										</li>
										<li class="nav-item">
											<a
												class="nav-link"
												data-toggle="tab"
												href="#contact2"
												role="tab"
												aria-selected="false"
												>Contact</a
											>
										</li>
									</ul>
									<div class="tab-content">
										<div
											class="tab-pane fade show active"
											id="home2"
											role="tabpanel"
										>
											<div class="pd-20">
												Lorem ipsum dolor sit amet, consectetur adipisicing
												elit, sed do eiusmod tempor incididunt ut labore et
												dolore magna aliqua. Ut enim ad minim veniam, quis
												nostrud exercitation ullamco laboris nisi ut aliquip ex
												ea commodo consequat. Duis aute irure dolor in
												reprehenderit in voluptate velit esse cillum dolore eu
												fugiat nulla pariatur. Excepteur sint occaecat cupidatat
												non proident, sunt in culpa qui officia deserunt mollit
												anim id est laborum.
											</div>
										</div>
										<div class="tab-pane fade" id="profile2" role="tabpanel">
											<div class="pd-20">
												Lorem ipsum dolor sit amet, consectetur adipisicing
												elit, sed do eiusmod tempor incididunt ut labore et
												dolore magna aliqua. Ut enim ad minim veniam, quis
												nostrud exercitation ullamco laboris nisi ut aliquip ex
												ea commodo consequat. Duis aute irure dolor in
												reprehenderit in voluptate velit esse cillum dolore eu
												fugiat nulla pariatur. Excepteur sint occaecat cupidatat
												non proident, sunt in culpa qui officia deserunt mollit
												anim id est laborum.
											</div>
										</div>
										<div class="tab-pane fade" id="contact2" role="tabpanel">
											<div class="pd-20">
												Lorem ipsum dolor sit amet, consectetur adipisicing
												elit, sed do eiusmod tempor incididunt ut labore et
												dolore magna aliqua. Ut enim ad minim veniam, quis
												nostrud exercitation ullamco laboris nisi ut aliquip ex
												ea commodo consequat. Duis aute irure dolor in
												reprehenderit in voluptate velit esse cillum dolore eu
												fugiat nulla pariatur. Excepteur sint occaecat cupidatat
												non proident, sunt in culpa qui officia deserunt mollit
												anim id est laborum.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
@endsection