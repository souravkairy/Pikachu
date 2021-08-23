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
                            <form method="POST" action="{{ url('confirm-withdraw') }}">
                                @csrf
                                <div class="form-group">
                                    <input type="hidden" name="id" value="{{$viewwithdraw->id}}">
                                    <input type="text" class="form-control input" placeholder="Txn Id"
                                        name="transection_txnId" required>
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
                        <h4 class="card-title">Customer Wallet Details</h4>
                    </div>
                    <div class="card-body">
                        <div id="DZ_W_Todo3" class="widget-media dz-scroll height370">

                                <ul class="timeline pt-3">
                                    <li>
                                        <div class="timeline-panel">
                                            <div class="media-body">
                                                <div class="row">
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" value="{{$viewwithdraw->wallet_address}}" id="myInput" readonly>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <button class="btn btn-light" onclick="myFunction()"><i class="fa fa-copy color-success"></i></button>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-sm-12">
                                                        Customer Id : {{$viewwithdraw->customer_id}}
                                                    </div>
                                                    <div class="col-sm-12">
                                                        Gross Ammount : {{$viewwithdraw->gross_amount}}$
                                                    </div>
                                                    <div class="col-sm-12">
                                                        Withdraw Ammount : {{$viewwithdraw->withdraw_amount}}$
                                                    </div>
                                                </div>
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
<script>
    function myFunction() {
      var copyText = document.getElementById("myInput");
      copyText.select();
      copyText.setSelectionRange(0, 99999)
      document.execCommand("copy");
      alert("Copied the text: " + copyText.value);
    }
</script>
@endsection
