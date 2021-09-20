@extends('admin.layouts.master')
@section('css')
<link rel="stylesheet" type="text/css" href="{{  asset('app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
<link rel="stylesheet" type="text/css" href="{{  asset('app-assets/css/pages/app-user.css') }}">
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
										<li class="breadcrumb-item active">View
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
                        <div class="alert alert-danger" role="alert">
                            {{ $error }}
                          </div>
                        @endforeach
                    @endif
                    @include('admin.layouts.errors')
                    <section class="app-user-view">
						<!-- User Card & Plan Starts -->
						<div class="row">
							<!-- User Card starts-->
							<div class="col-xl-12 col-lg-8 col-md-7">
								<div class="card user-card">
									<div class="card-body">
										<div class="row">
											<div class="col-xl-6 col-lg-12 d-flex flex-column justify-content-between border-container-lg">
												<div class="user-avatar-section">
													<div class="d-flex justify-content-start">
														<img class="img-fluid rounded" src="{{ asset('app-assets/images/admin-1.png') }}" height="104" width="104" alt="User avatar" />
														<div class="d-flex flex-column ml-1">
															<div class="user-info mb-1">
                                                                @if(!empty($data->name))
																    <h4 class="mb-0">{{ Str::ucfirst($data->name) }}</h4>
                                                                @endif

																<span class="card-text">{{ $data->mobile }}</span>

															</div>
															<div class="d-flex flex-wrap">
																<a href="{{ route('admin.users.edit',$data->id) }}" class="btn btn-primary">Edit</a>
																<a href="{{ route('admin.users.updateStatus',$data->id) }}" onclick="return confirm('Are you sure to change status?')"; class="btn btn-outline-danger ml-1">
                                                                    {{ ($data->is_active ==1)?'Deactivate':'Activate' }}</a>
															</div>
														</div>
													</div>
												</div>
												<div class="d-flex align-items-center user-total-numbers">
													<div class="d-flex align-items-center mr-2">
														<div class="color-box bg-light-primary">
															<i data-feather="calendar" class="text-primary"></i>
														</div>
														<div class="ml-1">
															<h5 class="mb-0">{{ $data->subscriptions->count() }}</h5>
															<small>Total Plans</small>
														</div>
													</div>
													<div class="d-flex align-items-center">
														<div class="color-box bg-light-success">
															<i data-feather="trending-up" class="text-success"></i>
														</div>
														<div class="ml-1">
															<h5 class="mb-0">{{ $data->activePlans() }}</h5>
															<small>Active Plans</small>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-6 col-lg-12 mt-2 mt-xl-0">
												<div class="user-info-wrapper">
                                                    <div class="d-flex flex-wrap my-50">
														<div class="user-info-title">
															<i data-feather="phone" class="mr-1"></i>
															<span class="card-text user-info-title font-weight-bold mb-0">Contact</span>
														</div>
														<p class="card-text mb-0">{{ $data->mobile }}</p>
													</div>
                                                    @if(!empty($data->email))
                                                        <div class="d-flex flex-wrap">
                                                            <div class="user-info-title">
                                                                <i data-feather="mail" class="mr-1"></i>
                                                                <span class="card-text user-info-title font-weight-bold mb-0">Mail</span>
                                                            </div>
                                                            <p class="card-text mb-0">{{ $data->email }}</p>
                                                        </div>
                                                    @endif
													{{-- <div class="d-flex flex-wrap">
														<div class="user-info-title">
															<i data-feather="user" class="mr-1"></i>
															<span class="card-text user-info-title font-weight-bold mb-0">User ID</span>
														</div>
														<p class="card-text mb-0">INV23429089</p>
													</div> --}}
													<div class="d-flex flex-wrap my-50">
														<div class="user-info-title">
															<i data-feather="check" class="mr-1"></i>
															<span class="card-text user-info-title font-weight-bold mb-0">Status</span>
														</div>
														<p class="card-text mb-0">{{ ($data->is_active == 1)?'Active':'Inactive' }}</p>
													</div>
													<div class="d-flex flex-wrap my-50">
														<div class="user-info-title">
															<i data-feather="star" class="mr-1"></i>
															<span class="card-text user-info-title font-weight-bold mb-0">Role</span>
														</div>
														<p class="card-text mb-0">Subscriber</p>
													</div>

                                                    @if(isset($data->user_detail->state_id) && !empty($data->user_detail->state_id))
                                                        <div class="d-flex flex-wrap my-50">
                                                            <div class="user-info-title">
                                                                <i data-feather="flag" class="mr-1"></i>
                                                                <span class="card-text user-info-title font-weight-bold mb-0">State</span>
                                                            </div>
                                                            <p class="card-text mb-0">{{ $data->user_detail->state->name }}</p>
                                                        </div>
                                                    @endif
                                                    @if(isset($data->user_detail->city_id) && !empty($data->user_detail->city_id))
                                                    <div class="d-flex flex-wrap my-50">
														<div class="user-info-title">
															<i data-feather="flag" class="mr-1"></i>
															<span class="card-text user-info-title font-weight-bold mb-0">City</span>
														</div>
														<p class="card-text mb-0">{{ $data->user_detail->city->name }}</p>
													</div>
                                                    @endif
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /User Card Ends-->

						</div>
						<!-- User Card & Plan Ends -->

						<!-- Order Details -->
						<div class="row">
							<div class="col-12">
								<div class="card card-statistics">
									<div class="">
										<div class="card-datatable table-responsive">
                                            <table class="datatables-basic table">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>User</th>
                                                        <th>Package</th>
                                                        <th>Date</th>
                                                        <th>Amount</th>
                                                        <th>Payment Method</th>
                                                        <th>Payment Status</th>
                                                        <th>Status</th>

                                                        {{-- <th>Actions</th> --}}
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($data->order as $ord)
                                                        <tr>
                                                            <td><a class="font-weight-bold" href="javascript:;"> #{{ $ord->invoice_no }}</a></td>
                                                            <td>
                                                                <div class="d-flex justify-content-left align-items-center">
                                                                    @if(!empty($ord->user->first_letter))
                                                                    <div class="avatar-wrapper">
                                                                        <div class="avatar bg-light-warning mr-50">
                                                                            <div class="avatar-content">{{ Str::ucfirst($ord->user->first_letter) }}</div>
                                                                        </div>
                                                                    </div>
                                                                    @endif
                                                                    <div class="d-flex flex-column">
                                                                        @if(!empty($ord->user->name))
                                                                        <h6 class="user-name text-truncate  mb-0">{{ Str::ucfirst($ord->user->name) }}</h6>
                                                                        @endif
                                                                        <small class="text-truncate text-muted">{{ $ord->user->mobile }}</small>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>{{ $ord->plan->name }}</td>
                                                            <td>{{ date('d M Y',strtotime($ord->created_at)) }}</td>
                                                            <td><span class="font-weight-bold">
                                                            {{ $ord->plan->amount  }}
                                                            </span></td>
                                                            <td>{!! $ord->payment_method_html !!}</td>
                                                            <td>{!! $ord->status_html !!}</td>
                                                            <td>{{ (@$ord->subscription->is_active ==1)?'Active':'Expired' }}</td>
                                                            {{-- <td class="cell-fit">
                                                                <a class="mr-1" href="#" title="Send Mail"><i data-feather="send"></i></a>
                                                                <a class="mr-1" href="#"><i data-feather="eye"></i></a>
                                                                <div class="d-inline-flex">
                                                                    <a class="pr-1 dropdown-toggle hide-arrow text-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="more-vertical"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end">
                                                                        <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#edit-script-list"><i data-feather="edit"></i> Edit</a>
                                                                        <a class="dropdown-item" href="javascript:void(0);"><i data-feather="download"></i> Download</a>

                                                                    </div>

                                                                </div>

                                                            </td> --}}
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
										</div>
									</div>
								</div>

							</div>
						</div>
						<!-- Order Details -->


					</section>
				</div>
			</div>
		</div>
@endsection

