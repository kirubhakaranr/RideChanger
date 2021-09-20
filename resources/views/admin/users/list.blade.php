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
										<li class="breadcrumb-item active">Users
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
									<a class="dropdown-item" href="{{ route('admin.users.create') }}"><i class="mr-1" data-feather="plus-circle"></i><span class="align-middle">Add New</span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="content-body">
                    @include('admin.layouts.errors')
					<div class="row">
						<div class="col-12">
							<div class="card card-statistics">
								<div class="">
									<div class="card-datatable table-responsive">
                                        <table class="datatables-basic table">
                                            <thead>
                                                <tr>
                                                    <th>User</th>
                                                    <th>Mobile</th>
                                                    <th>OTP</th>
                                                    <th>Status</th>
                                                    <th>Is Account Created</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($datas as $data)
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex justify-content-left align-items-center">
                                                                <div class="avatar-wrapper">
                                                                    <div class="avatar mr-1">
                                                                        <img src="{{ asset('app-assets/images/admin-1.png') }}" alt="Avatar" height="32" width="32" />
                                                                    </div>
                                                                </div>
                                                                @if(!empty($data->name))
                                                                <div class="d-flex flex-column">
                                                                    <h6 class="user-name text-truncate mb-0">
                                                                        {{ Str::ucfirst($data->name) }}
                                                                    </h6>
                                                                    {{-- <small class="text-truncate text-muted">INV576868</small> --}}
                                                                </div>
                                                                @endif
                                                            </div>
                                                        </td>
                                                        <td>{{ $data->mobile }}</td>
                                                        <td>{{ $data->otp }}</td>
                                                        {{-- <td>
                                                            @if(!empty($data->email))
                                                                {{ $data->email }}
                                                            @else
                                                                -
                                                            @endif
                                                        </td> --}}
                                                        <td>
                                                          {!! $data->status_html !!}
                                                        </td>
                                                        <td>
                                                            {{ ($data->is_account_created ==1)?'Yes':'No' }}
                                                        </td>
                                                        <td class="cell-fit">
                                                            <div class="d-inline-flex">
                                                                <a class="pr-1 dropdown-toggle hide-arrow text-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="more-vertical"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end">
                                                                    {{-- <a class="dropdown-item"
                                                                    href="{{ route('admin.users.show',$data->id) }}"> <i data-feather="file-text"></i> Details</a> --}}
                                                                    <a class="dropdown-item" href="{{ route('admin.users.edit',$data->id) }}" ><i data-feather="edit"></i> Edit</a>
                                                                    @if($data->is_active ==1)
                                                                        <a class="dropdown-item"
                                                                        href="{{ route('admin.users.updateStatus',['user' =>$data->id,'status' => 0]) }}" onclick="return confirm('Are you sure to change status?');"><i data-feather="x"></i> In Active</a>
                                                                    @else
                                                                        <a class="dropdown-item" href="{{ route('admin.users.updateStatus',['user' =>$data->id,'status' => 1]) }}" onclick="return confirm('Are you sure to change status?');"><i data-feather="check"></i> Active</a>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
									</div>
								</div>
							</div>

						</div>
					</div>

				</div>
			</div>
		</div>
@endsection

