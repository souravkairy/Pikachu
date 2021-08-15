@extends('backend.admin.dashboard.index')
@section('content')

@php
    $packageId = session::get('packageId');
    $package_name = session::get('package_name');
    $package_price = session::get('package_price');
    $userId = session::get('userId');
    // $dff = session::get('dff');
@endphp
             <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
			<div class="container-fluid">
                <!-- row -->
                <div class="row">
					<div class="col-xl-2 col-xxl-3 col-lg-3">
					</div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Wallet Address (Step-1)</h4>
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
                                            <div class="col-xl-6 col-lg-12 col-xxl-12 text-center">
                                                <h5>Qr Code</h5>
                                                <img src="{{$walletAddress->qrCode}}" alt="">
                                                <form method="POST" action="{{ url('package-buying-processtwo') }}" enctype="multipart/form-data">
                                                    @csrf
                                                        <input type="hidden" value="{{$userId}}" name="user_id">
                                                        <input type="hidden" value="{{$packageId}}" name="package_id">
                                                        <input type="hidden" value="{{$package_name}}" name="package_name">
                                                        <input type="hidden" value="{{$package_price}}" name="package_price">

                                                        <button type="submit" class="btn btn-primary w-100 mt-3">Next</button>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-xxl-3 col-lg-3">
					</div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
@endsection
