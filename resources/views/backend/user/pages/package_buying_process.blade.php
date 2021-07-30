@extends('backend.admin.dashboard.index')
@section('content')

@php
    $packageId = session::get('packageId');
    $package_name = session::get('package_name');
    $package_price = session::get('package_price');
    $userId = session::get('userId');
@endphp
             <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
			<div class="container-fluid">
                <!-- row -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
					<div class="col-xl-4 col-xxl-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Buy Package</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <p>Please provide your transection TxId & transection successfull Screen Shot</p>
                                    <form method="POST" action="{{ url('process-completed') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <input type="hidden" value="{{$userId}}" name="user_id">
                                            <input type="hidden" value="{{$packageId}}" name="package_id">
                                            <input type="hidden" value="{{$package_name}}" name="package_name">
                                            <input type="text" class="form-control input" placeholder="TxId"
                                                name="txnId" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="file" class="form-control input" placeholder="ScreenShot"
                                                name="screen_shot" required>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary w-100">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
					</div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="row">

                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Add Packages</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row align-items-end">
                                            <div class="col-xl-6 col-lg-12 col-xxl-12">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="mb-4">
                                                            <p class="mb-2">Package Name</p>
                                                            <h4 class="text-black">{{$package_name}}</h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="mb-4">
                                                            <p class="mb-2">Price</p>
                                                            <h4 class="text-black">{{$package_price}}</h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="mb-4">
                                                            <p class="mb-2">Wallet Address</p>
                                                            <h4 class="text-black">{{$walletAddress->wallet_address}}</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-xxl-12 mb-lg-0 mb-3">
                                                <p>Earning Limits</p>
                                                <div class="row">
                                                    <div class="col-sm-4 mb-sm-0 mb-4 text-center">
                                                        <div class="d-inline-block position-relative donut-chart-sale mb-3">
                                                            <span class="donut1"
                                                                data-peity='{ "fill": ["rgb(255, 104, 38)", "rgba(240, 240, 240)"],   "innerRadius": 40, "radius": 10}'>5/8</span>
                                                            <small>66%</small>
                                                        </div>
                                                        <h5 class="fs-18 text-black">Total Bonous</h5>
                                                        <span>$10,000</span>
                                                    </div>
                                                    <div class="col-sm-4 mb-sm-0 mb-4 text-center">
                                                        <div class="d-inline-block position-relative donut-chart-sale mb-3">
                                                            <span class="donut1"
                                                                data-peity='{ "fill": ["rgb(29, 198, 36)", "rgba(240, 240, 240)"],   "innerRadius": 40, "radius": 10}'>4/9</span>
                                                            <small>31%</small>
                                                        </div>
                                                        <h5 class="fs-18 text-black">Referal Bonous</h5>
                                                        <span>$500</span>
                                                    </div>
                                                    <div class="col-sm-4 text-center">
                                                        <div class="d-inline-block position-relative donut-chart-sale mb-3">
                                                            <span class="donut1"
                                                                data-peity='{ "fill": ["rgb(158, 158, 158)", "rgba(240, 240, 240)"],   "innerRadius": 40, "radius": 10}'>2/8</span>
                                                            <small>7%</small>
                                                        </div>
                                                        <h5 class="fs-18 text-black">Commisions</h5>
                                                        <span>$100</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
@endsection
