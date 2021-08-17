@extends('backend.admin.dashboard.index')
@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <h4>Hi, welcome back!</h4>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Admin</a></li>
                        <li class="breadcrumb-item active"><a href="#">Site Setting</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Software Fee</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-2 col-lg-2">
                                    <button type="submit" class="btn btn-light">{{$SiteSetting->package_buy_charge}}$</button>
                                </div>
                                <div class="col-xl-5 col-lg-5">
                                    <div class="basic-form">
                                        <form method="POST" action="{{ url('save-site-setting') }}">
                                            @csrf
                                            <div class="form-group">
                                                <input type="text" class="form-control input" placeholder="Software Fee"
                                                    name="package_buy_charge" required>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-lg-5">
                                    <div class="basic-form">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary w-100">Submit</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-xxl-6 col-lg-6">
                    <div class="card border-0 pb-0">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Withdraw Charge</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-2 col-lg-2">
                                        <button type="submit" class="btn btn-light">{{$SiteSetting->withdraw_charge}}%</button>
                                    </div>
                                    <div class="col-xl-5 col-lg-5">
                                        <div class="basic-form">
                                            <form method="POST" action="{{ url('save-site-setting') }}">
                                                @csrf
                                                <div class="form-group">
                                                    <input type="text" class="form-control input"
                                                        placeholder="Withdraw Charge" name="withdraw_charge" required >
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-5 col-lg-5">
                                        <div class="basic-form">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary w-100">Submit</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-xxl-12 col-lg-12">
                    <div class="card border-0 pb-0">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Social Informations</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="basic-form">
                                            <form method="POST" action="{{ url('save-site-setting') }}">
                                                @csrf
                                                <div class="form-group">
                                                    <input type="text" class="form-control input" name="mobile_number" placeholder="Mobile Number" >
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control input" name="email_id" placeholder="Email" />
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control input" name="facebook" placeholder="Facebbok" >
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control input" name="instagram" placeholder="instagram" >
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control input" name="linkedin" placeholder="linkedin">
                                                </div>
                                                <button type="submit" class="btn btn-primary w-100">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="table">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>{{$SiteSetting->mobile_number}}</th>
                                                    </tr>
                                                    <tr>
                                                        <th>{{$SiteSetting->email_id}}</th>
                                                    </tr>
                                                    <tr>
                                                        <th>{{$SiteSetting->facebook}}</th>
                                                    </tr>
                                                    <tr>
                                                        <th>{{$SiteSetting->instagram}}</th>
                                                    </tr>
                                                    <tr>
                                                        <th>{{$SiteSetting->linkedin}}</th>
                                                    </tr>
                                                </thead>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-xl-6 col-xxl-6 col-lg-6">
                    <div class="card border-0 pb-0">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Site Logo</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="basic-form">
                                            <form method="POST" action="{{ url('save-site-setting') }}">
                                                @csrf
                                                <div class="form-group">
                                                    <input type="file" class="form-control input" name="logo">
                                                </div>
                                                <button type="submit" class="btn btn-primary w-100">Submit</button>

                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <img src="http://127.0.0.1:8000/qrCode/qrcode.svg" alt="" class="float-right w-50">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

            </div>
        </div>



    @endsection
