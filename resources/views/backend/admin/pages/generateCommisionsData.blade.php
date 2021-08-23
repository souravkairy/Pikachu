@extends('backend.admin.dashboard.index')
@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Generate Commission</a></li>
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
                            <h4 class="card-title">Add Commission For Today</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form method="POST" action="{{ url('update-commisions') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="">Todays Commission</label>
                                        <input type="hidden" name="id" value="{{$generateCommisionsData->id ?? NULL}}">
                                        <input type="text" class="form-control input" placeholder="Percentage"
                                            name="comission_percantage" value="{{$generateCommisionsData->comission_percantage ?? NULL}}">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary w-100">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-xxl-6 col-lg-6">
                    <div class="card border-0 pb-0">
                        <div class="card-header">
                            <h4 class="card-title">Todays Commision</h4>
                        </div>
                        <div class="card-body">
                            <div id="DZ_W_Todo3" class="widget-media dz-scroll height370">

                                    <ul class="timeline pt-3">
                                        <li>
                                            <div class="timeline-panel">
                                                <div class="media mr-2">
                                                    <i class="flaticon-381-settings-1"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="mb-1">Active</h5>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="#" class="btn btn-outline-primary btn-xxs">{{$generateCommisionsData->comission_percantage ?? NULL}}%</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
