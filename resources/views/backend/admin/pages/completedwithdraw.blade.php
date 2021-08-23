@extends('backend.admin.dashboard.index')
@section('content')


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
                    <li class="breadcrumb-item"><a href="{{url('/completed-withdraw-list')}}">Completed Withdraw</a></li>
                    <li class="breadcrumb-item active"><a href="#">View Withdraw</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->

        <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Withdraw Details</h4>
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
                                        <td> Customer Id :  </td>
                                        <td class="color-primary">{{$completedwithdraw->customer_id}}</td>
                                    </tr>
                                    <tr>
                                        <td> Wallet Address :  </td>
                                        <td class="color-primary">{{$completedwithdraw->wallet_address}}</td>
                                    </tr>
                                    <tr>
                                        <td> Gross Ammount :  </td>
                                        <td class="color-primary">{{$completedwithdraw->gross_amount}}$</td>
                                    </tr>
                                    <tr>
                                        <td> Net Widthdraw Ammount :  </td>
                                        <td class="color-primary">{{$completedwithdraw->withdraw_amount}}$</td>
                                    </tr>
                                    <tr>
                                        <td> Transection TxN Id :  </td>
                                        <td class="color-primary">{{$completedwithdraw->transection_txnId}}</td>
                                    </tr>
                                    <tr>
                                        <td> Created At :  </td>
                                        <td class="color-primary">{{$completedwithdraw->created_at}}</td>
                                    </tr>
                                    <tr>
                                        <td> Completed At :  </td>
                                        <td class="color-primary">{{$completedwithdraw->updated_at}}</td>
                                    </tr>
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
