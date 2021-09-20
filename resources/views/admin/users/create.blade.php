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
								<h2 class="content-header-title float-left mb-0">Users</h2>
								<div class="breadcrumb-wrapper">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="#">Home</a>
										</li>
										<li class="breadcrumb-item"><a href="#">Users</a>
										</li>
										<li class="breadcrumb-item active">Create
										</li>
									</ol>
								</div>
							</div>
						</div>
					</div>
					<div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
						<div class="form-group breadcrumb-right">
							<div class="dropdown">
								<button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="{{ route('admin.users.index') }}"><i class="mr-1" data-feather="plus-circle"></i><span class="align-middle">Back</span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="content-body">

                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">
                            {{ $error }}
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
										<form class="form-validate" method="post" action="{{ route('admin.users.store') }}">
                                            @csrf
											<div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label for="name">Name</label>
														<input type="text" class="form-control" placeholder="Name"  name="name"   />
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label for="mobile">Primary Mobile</label>
														<input type="tel" class="form-control" placeholder="Mobile"  name="mobile" id="mobile" />
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label for="status">Status</label>
														<select class="form-control select2-form" name="is_active">
															<option value="1" >Active</option>
															<option value="0" >In Active</option>
														</select>
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

