@extends('admin.layouts.master')
@section('css')
<link rel="stylesheet" type="text/css" href="{{  asset('app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
@endsection
@section('content')
		<div class="app-content content ">
			<div class="content-overlay"></div>
			<div class="header-navbar-shadow"></div>
			<div class="content-wrapper">
				<div class="content-header row">
					<div class="content-header-left col-md-9 col-12 mb-2">
						<div class="row breadcrumbs-top">
							<div class="col-12">
								<h2 class="content-header-title float-left mb-0">Fast Parity</h2>
								<div class="breadcrumb-wrapper">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="#">Home</a>
										</li>
										<li class="breadcrumb-item"><a href="#">Fast Parity</a>
										</li>
										<li class="breadcrumb-item active">Setting
										</li>
									</ol>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="content-body">
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                         <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Danger!</strong>  {{ $error }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endforeach
                    @endif
					<!-- users edit start -->
					<section class="app-user-edit">
						<div class="card">
							<div class="card-body">
                                @include('admin.layouts.errors')
								<div class="tab-content">
									<!-- Account Tab starts -->
									<div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
										<!-- users edit account form start -->
										<form class="form-validate" method="post" action="{{ route('admin.fast-parity.store') }}">
                                            @csrf
											<div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label for="name">Green Ratio</label>
														<input type="text" class="form-control" placeholder="Green Ratio"  name="green_ratio" value="{{ @$fast_parity->green_ratio }}"  />
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label for="mobile">Violet Ratio</label>
														<input type="text" class="form-control" placeholder="Violet Ratio"  name="violet_ratio" value="{{ @$fast_parity->violet_ratio }}" />
													</div>
												</div>
                                                <div class="col-md-4">
													<div class="form-group">
														<label for="mobile">Red Ratio</label>
														<input type="text" class="form-control" placeholder="Red Ratio"  name="red_ratio" value="{{ @$fast_parity->red_ratio }}" />
													</div>
												</div>
                                                <div class="col-md-4">
													<div class="form-group">
														<label for="mobile">Number Ratio</label>
														<input type="text" class="form-control" placeholder="Number Ratio"  name="number_ratio" value="{{ @$fast_parity->number_ratio }}" />
													</div>
												</div>
                                                <div class="col-md-4">
													<div class="form-group">
														<label for="mobile">Duration</label>
														<input type="text" class="form-control" placeholder="Duration"  name="duration" value="{{ @$fast_parity->duration }}"  />
													</div>
												</div>
												<div class="col-12 d-flex flex-sm-row flex-column mt-2">
													<button type="submit" class="btn btn-primary mb-1 mb-sm-0 mr-0 mr-sm-1">Submit</button>
												</div>
											</div>
										</form>
										<!-- users edit account form ends -->
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
		</div>
@endsection

