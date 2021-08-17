@extends('backend.admin.dashboard.index')
@section('content')


<?php
$id = 1;
?>

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
                        <li class="breadcrumb-item"><a href="{{url('/active-users')}}">Active Users</a></li>
                        <li class="breadcrumb-item active"><a href="#">View User</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">User Details</h4>
                        </div>
                        <div class="card-body">
                            <div class="table">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Name </td>
                                            <td class="color-primary">{{$viewActiveUsers->name}}</td>
                                        </tr>
                                        <tr>
                                            <td>Mobile </td>
                                            <td class="color-success">{{$viewActiveUsers->phone}}</td>
                                        </tr>
                                        <tr>
                                            <td>Email </td>
                                            <td class="color-danger">{{$viewActiveUsers->email}}</td>
                                        </tr>
                                        <tr>
                                            <td>DOB </td>
                                            <td class="color-danger">{{$viewActiveUsers->date_of_birth}}</td>
                                        </tr>
                                        <tr>
                                            <td>Customer ID</td>
                                            <td class="color-danger">{{$viewActiveUsers->ref_link}}</td>
                                        </tr>
                                        <tr>
                                            <td>Referal link</td>
                                            <td class="color-danger">{!! "https://$_SERVER[HTTP_HOST]/registration/" . $viewActiveUsers->ref_link !!}</td>
                                        </tr>
                                        <tr>
                                            <td>Trading bonous</td>
                                            <td class="color-danger">{{$viewActiveUsers->traiding_bonous}}</td>
                                        </tr>
                                        <tr>
                                            <td>Refer From</td>
                                            <td class="color-danger">{{$viewActiveUsers->ref_from}}</td>
                                        </tr>
                                        <tr>
                                            <td>Referal Comission</td>
                                            <td class="color-danger">{{$viewActiveUsers->ref_commision}}</td>
                                        </tr>
                                        <tr>
                                            <td>Remaining Balance</td>
                                            <td class="color-danger">{{$viewActiveUsers->remaining_balance}}</td>
                                        </tr>
                                        <tr>
                                            <td>Wallet Address</td>
                                            <td class="color-danger">{{$viewActiveUsers->wallet_address}}</td>
                                        </tr>
                                        <tr>
                                            <td>Account Created At</td>
                                            <td class="color-danger">{{$viewActiveUsers->created_at}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">All Packages</h4>
                        </div>
                        <div class="card-body">
                            <div class="table">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Trading Limit</th>
                                            <th>Txn Id</th>
                                            <th>Created at</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($packDetails as $item)
                                        <tr>
                                            <th>{{$id}}</th>
                                            <td>{{$item->package_name}}</td>
                                            <td>{{$item->package_price}}</td>
                                            <td>{{$item->traiding_limit}}</td>
                                            <td>{{$item->txnId}}</td>
                                            <td>{{$item->created_at}}</td>
                                            <td>
                                                @if ($item->status == 'active')
                                                <span class="badge light badge-success">Active</span>
                                                @else
                                                <span class="badge light badge-primary">Disabled</span>
                                                @endif
                                            </td>
                                        </tr>
                                        @php
                                            $id++;
                                        @endphp
                                        @empty
                                            <h6>No Package Avaiable</h6>
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
