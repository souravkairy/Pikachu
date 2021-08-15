@extends('backend.admin.dashboard.index')
@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Hi, welcome back!</h4>
                        <span>View ScreenShot</span>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/pending-users')}}">Pending Users Table</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">ScreenShot</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                           <img src="{{asset($viewSS->screen_shot)}}" alt="" width="80%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
