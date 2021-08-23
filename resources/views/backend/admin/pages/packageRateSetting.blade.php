@extends('backend.admin.dashboard.index')
@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Packages</a></li>
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
                            <h4 class="card-title">Add Packages</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form method="POST" action="{{ url('save-package') }}">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" class="form-control input" placeholder="Package Name"
                                            name="package_name" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control input" placeholder="Package Value"
                                            name="package_price" required>
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
                            <h4 class="card-title">All Packages</h4>
                        </div>
                        <div class="card-body">
                            <div id="DZ_W_Todo3" class="widget-media dz-scroll height370">
                                @forelse ($packageData as $item)
                                    <ul class="timeline pt-3">
                                        <li>
                                            <div class="timeline-panel">
                                                <div class="media mr-2">
                                                    <i class="flaticon-381-settings-1"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="mb-1">{{$item->package_name}} <small class="text-muted">{{$item->created_at}}</small></h5>
                                                    <p class="mb-1">{{$item->package_price}}$</p>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="{{url('delete-package/'.$item->id)}}" class="btn btn-outline-danger btn-xxs">Delete</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                @empty
                                   <h2>No Active Package</h2>
                                @endforelse

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
