@extends('backend.admin.dashboard.index')
@section('content')
    @php
    $id = 1;
    @endphp
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Hi, welcome back!</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Admin</a></li>
                        <li class="breadcrumb-item active"><a href="{{url('pending-packages')}}">Pending-Packages</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>SS</th>
                                            <th>TxId</th>
                                            <th>Package</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($pendingPackages as $item)
                                            <tr>
                                                <td>{{ $id }}</td>
                                                <td>
                                                    <a href="{{url('viewSS/'.$item->id)}}" type="button" class="btn btn-rounded btn-warning"
                                                       ><span class="btn-icon-left text-warning"><i class="fa fa-eye color-warning"></i>
                                                        </span>View ScreenShot
                                                    </a>
                                                </td>
                                                <td>{{ $item->txnId }}</td>
                                                <td>{{ $item->package_name }}</td>
                                                <td><span class="badge light badge-warning">Pending</span></td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn btn-warning light sharp"
                                                            data-toggle="dropdown">
                                                            <svg width="20px" height="20px" viewBox="0 0 24 24"
                                                                version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <circle fill="#000000" cx="5" cy="12" r="2" />
                                                                    <circle fill="#000000" cx="12" cy="12" r="2" />
                                                                    <circle fill="#000000" cx="19" cy="12" r="2" />
                                                                </g>
                                                            </svg>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            {{-- <a class="dropdown-item" href="#">View</a> --}}
                                                            <a class="dropdown-item" href="{{url('activeUser/'.$item->user_id.'/'.$item->id)}}">Active</a>
                                                            <a class="dropdown-item" href="{{url('declineUser/'.$item->id)}}">Decline</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @php
                                                $id++;
                                            @endphp
                                        @empty
                                            <h2>No New Pending Users</h2>
                                        @endforelse


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
