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
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Danger!</strong>  {{ Session::get('danger') }}
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
								<ul class="nav nav-pills" role="tablist">
									<li class="nav-item">
										<a class="nav-link d-flex align-items-center active" id="account-tab" data-toggle="tab" href="#account" aria-controls="account" role="tab" aria-selected="true">
											<i data-feather="user"></i><span class="d-none d-sm-block">Account</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link d-flex align-items-center" id="information-tab" data-toggle="tab" href="#information" aria-controls="information" role="tab" aria-selected="false">
											<i data-feather="info"></i><span class="d-none d-sm-block">Information</span>
										</a>
									</li>

								</ul>
								<div class="tab-content">
									<!-- Account Tab starts -->
									<div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
										<!-- users edit media object start -->
										<div class="media mb-2">

                                            @if(isset($user->user_detail->avatar) && !empty($user->user_detail->avatar))
                                            <img src="{{ asset($user->user_detail->avatar) }}" alt="users avatar" class="user-avatar users-avatar-shadow rounded mr-2 my-25 cursor-pointer" height="90" width="90" />
                                            @else
											<img src="{{ asset('app-assets/images/admin-1.png') }}" alt="users avatar" class="user-avatar users-avatar-shadow rounded mr-2 my-25 cursor-pointer" height="90" width="90" />
                                            @endif
											<div class="media-body mt-50">
												<h4>{{ Str::ucfirst($user->name) }}</h4>
												{{-- <div class="col-12 d-flex mt-1 px-0">
													<label class="btn btn-primary mr-75 mb-0" for="change-picture">
														<span class="d-none d-sm-block">Change</span>
														<input class="form-control" type="file" id="change-picture" hidden accept="image/png, image/jpeg, image/jpg" />
														<span class="d-block d-sm-none">
															<i class="mr-0" data-feather="edit"></i>
														</span>
													</label>
													<button class="btn btn-outline-secondary d-none d-sm-block">Remove</button>
													<button class="btn btn-outline-secondary d-block d-sm-none">
														<i class="mr-0" data-feather="trash-2"></i>
													</button>
												</div> --}}
											</div>
										</div>
										<!-- users edit media object ends -->
										<!-- users edit account form start -->
										<form class="form-validate" method="post"  action="{{ route('admin.users.update',$user->id) }}">
                                            @csrf
                                            @method('patch')
											<div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label for="name">Name</label>
														<input type="text" class="form-control" placeholder="Name"  name="name" value="{{ $user->name }}"   />
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label for="mobile">Mobile</label>
														<input type="tel" class="form-control" readonly placeholder="Mobile" value="{{ $user->mobile }}" />
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label for="status">Status</label>
														<select class="form-control select2-form" name="is_active">
															<option value="1" {{ ($user->is_Active ==1)?'selected':'' }}>Active</option>
															<option value="0" {{ ($user->is_Active ==0)?'selected':'' }}>In Active</option>
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
									<!-- Account Tab ends -->

									<!-- Information Tab starts -->
									<div class="tab-pane" id="information" aria-labelledby="information-tab" role="tabpanel">
										<!-- users edit Info form start -->
										<form class="form-validate" method="post" action="{{ route('admin.users.personalInformationUpdate',$user->id) }}" enctype="multipart/form-data">
                                            @csrf
											<div class="row mt-1">
												<div class="col-12">
													<h4 class="mb-1">
														<i data-feather="user" class="font-medium-4 mr-25"></i>
														<span class="align-middle">Personal Information</span>
													</h4>
												</div>
												<div class="col-lg-4 col-md-4">
													<div class="form-group">
														<label for="mobile">Mobile</label>
														<input id="mobile" type="text" class="form-control"
                                                         value="{{ $user->mobile }}" readonly />
													</div>
												</div>

												<div class="col-lg-4 col-md-4">
													<div class="form-group">
														<label for="languages">Gender</label>
														<select id="languages" class="form-control select2-form" name="gender">
                                                            <option value="">Select Gender</option>
															<option value="1" >Male</option>
															<option value="2" >Female</option>
														</select>
													</div>
												</div>

                                                <div class="col-lg-4 col-md-4">
													<div class="form-group">
														<label for="languages">Avatar</label>
														<input type="file" class="form-control" name="avatar">
													</div>
												</div>

												<div class="col-12">
													<h4 class="mb-1 mt-2">
														<i data-feather="map-pin" class="font-medium-4 mr-25"></i>
														<span class="align-middle">Address</span>
													</h4>
												</div>
												<div class="col-lg-4 col-md-6">
													<div class="form-group">
														<label for="address-1">Address Line 1</label>
														<input id="address-1" type="text" class="form-control"  name="address_line_1" />
													</div>
												</div>
												<div class="col-lg-4 col-md-6">
													<div class="form-group">
														<label for="address-2">Address Line 2</label>
														<input id="address-2" type="text" class="form-control" placeholder="" name="address_line_2"  />
													</div>
												</div>
												<div class="col-lg-4 col-md-6">
													<div class="form-group">
														<label for="postcode">Postcode</label>
														<input id="postcode" type="text" class="form-control" placeholder="597626" name="postcode"  />
													</div>
												</div>
												<div class="col-12 d-flex flex-sm-row flex-column mt-2">
													<button type="submit" class="btn btn-primary mb-1 mb-sm-0 mr-0 mr-sm-1">Save Changes</button>

												</div>
											</div>
										</form>
										<!-- users edit Info form ends -->
									</div>
									<!-- Information Tab ends -->

								</div>
							</div>
						</div>
					</section>
					<!-- users edit ends -->
				</div>
			</div>
		</div>
@endsection

