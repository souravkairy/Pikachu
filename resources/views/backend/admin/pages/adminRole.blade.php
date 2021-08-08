@extends('backend.admin.dashboard.index')
@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">User Role</a></li>
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
                            <h4 class="card-title">New Admin Add</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form method="POST" action="{{ route('store-admin') }}">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" class="form-control input" placeholder="Name" name="name" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control input" placeholder="Email" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control input" placeholder="Password" name="password" required>
                                    </div>

                                    <div class="row mb-3 mt-2">
                                        <div class="col-lg-6">
                                            <label class="ckbox">
                                                <input class="mr-1" type="checkbox" name="user" value="1">
                                                <span>User</span>
                                            </label>
                                        </div>
                                        <div class="col-lg-6">
                                            <label class="ckbox">
                                                <input class="mr-1" type="checkbox" name="workStation" value="1">
                                                <span>Work Station Setting</span>
                                            </label>
                                        </div>
                                        <div class="col-lg-6">
                                            <label class="ckbox">
                                                <input class="mr-1" type="checkbox" name="wallet" value="1">
                                                <span>Wallet Setting</span>
                                            </label>
                                        </div>
                                        <div class="col-lg-6">
                                            <label class="ckbox">
                                                <input class="mr-1" type="checkbox" name="package" value="1">
                                                <span>Package Setting</span>
                                            </label>
                                        </div>
                                        <div class="col-lg-6">
                                            <label class="ckbox">
                                                <input class="mr-1" type="checkbox" name="commission" value="1">
                                                <span>Commission Setting</span>
                                            </label>
                                        </div>
                                        <div class="col-lg-6">
                                            <label class="ckbox">
                                                <input class="mr-1" type="checkbox" name="setting" value="1">
                                                <span>Site Setting</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary w-100">Save</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-xxl-6 col-lg-6">
                    <div class="card border-0 pb-0">
                        <div class="card-header">
                            <h4 class="card-title">All Admin</h4>
                        </div>
                        <div class="card-body">
                            <div id="DZ_W_Todo3" class="widget-media dz-scroll height370">
                                @forelse ($admin as $row)
                                    <ul class="timeline pt-3">
                                        <li>
                                            <div class="timeline-panel">
                                                <div class="media mr-2">
                                                    <i class="flaticon-381-settings-1"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="mb-1">{{$row->name}}</h5>
                                                    <p class="mb-1">{{$row->email}}</p>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="{{ url('delete/admin/'.$row->id) }}" class="btn btn-outline-danger btn-xxs">Delete</a>
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
