@extends('backend.admin.dashboard.index')
@section('content')

@php
    $packageId = session::get('packageId');
    $package_name = session::get('package_name');
    $package_price = session::get('package_price');
    $userId = session::get('userId');
    $chrage = DB::table('site_setting')->first();
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
                                                    <div class="col-sm-4">
                                                        <div class="mb-4">
                                                            <p class="mb-2">Package</p>
                                                            <h4 class="text-black">{{$package_name}}</h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="mb-4">
                                                            <p class="mb-2">Price</p>
                                                            <h4 class="text-black">{{$package_price}}$ + {{$chrage->package_buy_charge}}$ charge</h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="mb-4">
                                                            <p class="mb-2">Total</p>
                                                            <h4 class="text-black">{{$package_price + $chrage->package_buy_charge }}$</h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="mb-4">
                                                            <p class="mb-2">Wallet Address</p>
                                                            <div class="row">
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" value="{{$walletAddress->wallet_address}}" id="myInput" readonly>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <button class="btn btn-light" onclick="myFunction()"><i class="fa fa-copy color-success"></i></button>
                                                                </div>
                                                            </div>
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

        <script>
            function myFunction() {
              var copyText = document.getElementById("myInput");
              copyText.select();
              copyText.setSelectionRange(0, 99999)
              document.execCommand("copy");
              alert("Copied the text: " + copyText.value);
            }
        </script>
        <!--**********************************
            Content body end
        ***********************************-->
@endsection
