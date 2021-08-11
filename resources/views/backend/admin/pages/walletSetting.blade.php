@extends('backend.admin.dashboard.index')
@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Wallet</a></li>
                </ol>
            </div>
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
                <div class="col-xl-6 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add Wallet</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form method="POST" action="{{url('update-wallet')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <input type="hidden" name="id" value="{{$wallet['id'] ?? NULL}}">
                                        <input type="text" class="form-control input" value="{{$wallet['wallet_title'] ?? NULL}}" name="wallet_title">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control input" value="{{$wallet['wallet_address'] ?? NULL}}" name="wallet_address">
                                    </div>
                                    <div class="form-group">
                                        <input type="file" class="form-control input" placeholder="Qr Code"
                                            name="qrCode" required>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Active Wallet</h4>
                        </div>
                        <div class="card-body text-center">
                            <button class="btn btn-rounded btn-outline-primary mb-2"> {{$wallet['wallet_address'] ?? NULL}}</button>
                            <img src="{{$wallet['qrCode']}}" alt="" class="mt-2">
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="testimonial-one owl-right-nav owl-carousel owl-loaded owl-drag">
                                <div class="items">
                                    <div>
                                        <img class="mb-3" src="{{ asset('BackEnd/assets/images/profile/bin.png') }}" alt="">
                                        <h5 class="text-black mb-0">Binance</h5>
                                    </div>
                                </div>
                                <div class="items">
                                    <div>
                                        <img class="mb-3" src="{{ asset('BackEnd/assets/images/profile/coin.jpg') }}" alt="">
                                        <h5 class="text-black mb-0">Coinbase</h5>
                                    </div>
                                </div>
                                <div class="items">
                                    <div>
                                        <img class="mb-3" src="{{ asset('BackEnd/assets/images/profile/bit.png') }}" alt="">
                                        <h5 class="text-black mb-0">Bitpay</h5>
                                    </div>
                                </div>
                                <div class="items">
                                    <div>
                                        <img class="mb-3" src="{{ asset('BackEnd/assets/images/profile/bc.png') }}" alt="">
                                        <h5 class="text-black mb-0">BlockChain </h5>
                                    </div>
                                </div>
                                <div class="items">
                                    <div>
                                        <img class="mb-3" src="{{ asset('BackEnd/assets/images/profile/gm.png') }}" alt="">
                                        <h5 class="text-black mb-0">Gemini </h5>
                                    </div>
                                </div>
                                <div class="items">
                                    <div>
                                        <img class="mb-3" src="{{ asset('BackEnd/assets/images/profile/cx.png') }}" alt="">
                                        <h5 class="text-black mb-0">cex.io</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
