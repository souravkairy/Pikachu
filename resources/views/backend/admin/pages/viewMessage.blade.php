@extends('backend.admin.dashboard.index')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <span>Email</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Email</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Read</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="ml-0 ml-sm-4 ml-sm-0">
                            <div class="row">
                                <div class="col-12">
                                    <div class="right-box-padding">
                                        <div class="read-content">
                                            <div class="media pt-3 d-sm-flex d-block justify-content-between">
                                                <div class="clearfix mb-3 d-flex">
                                                    <div class="media-body mr-2">
                                                        <h5 class="text-primary mb-0 mt-1">User Name: {{$message->name}}</h5>
                                                        <p class="mb-0">{{$message->created_at}}</p>
                                                    </div>
                                                </div>
                                                <div class="clearfix mb-3">
                                                    <a href="{{url('contact-inbox')}}" class="btn btn-primary px-3 light"><i class="fa fa-reply"></i> </a>
                                                    <a href="javascript:void()" class="btn btn-primary px-3 light ml-2"><i class="fa fa-trash"></i></a>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="media mb-2 mt-3">
                                                    <p class="read-content-email">User Email:{{$message->email}}</p>
                                                </div>
                                            </div>
                                            <div class="read-content-body">
                                                <p class="mb-2">{{$message->message}}</p>
                                                <hr>
                                            </div>
                                            <div class="read-content-attachment">
                                                <h6><i class="fa fa-send mb-2"></i>Reply</h6>
                                            </div>
                                            <hr>
                                            <div class="form-group pt-3">
                                                <input type="text" class="form-control" value="{{$message->email}}" readonly>
                                            </div>
                                            <div class="form-group pt-3">
                                                <textarea name="write-email" id="write-email" cols="30" rows="5" class="form-control" placeholder="Reply The Message Here"></textarea>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <button class="btn btn-primary w-100" type="button">Send</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
