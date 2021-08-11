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
                    <div class="col-xl-3 col-lg-3">
                    </div>
					<div class="col-xl-4 col-xxl-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Identifications(step-2)</h4>
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
                                            <input type="hidden" value="{{$package_price}}" name="package_price">
                                            {{-- <input type="hidden" value="{{$dff ?? null}}" name="dff"> --}}
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
                    <div class="col-xl-3 col-lg-3">
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
@endsection
