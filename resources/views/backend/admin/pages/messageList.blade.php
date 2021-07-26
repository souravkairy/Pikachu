@extends('backend.admin.dashboard.index')
@section('content')
    @php
    $i = 1;
    @endphp
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
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Inbox</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="email-left-box px-0 mb-3">
                                <div class="mail-list mt-4">
                                    <a href="#" class="list-group-item active"><i
                                            class="fa fa-inbox font-18 align-middle mr-2"></i> Inbox <span
                                            class="badge badge-primary badge-sm float-right">{{$allMail->count()}}</span> </a>
                                    <a href="#" class="list-group-item"><i
                                            class="fa fa-paper-plane font-18 align-middle mr-2"></i>Sent</a>
                                </div>
                            </div>
                            <div class="email-right-box ml-0 ml-sm-4 ml-sm-0">
                                <div role="toolbar" class="toolbar ml-1 ml-sm-0">
                                    <div class="btn-group mb-1">
                                        <div class="custom-control custom-checkbox pl-2">
                                            <input type="checkbox" class="custom-control-input" id="checkAll">
                                            <label class="custom-control-label" for="checkAll"></label>
                                        </div>
                                    </div>
                                    <div class="btn-group mb-1">
                                        <a class="btn btn-primary light px-3 ml-2" type="button" href="{{url('contact-inbox')}}"><i class="ti-reload"></i></a>
                                    </div>
                                </div>
                                <div class="email-list mt-3">
                                    @forelse ($allMail as $item)
                                        <div class="message">
                                            <div>
                                                <div class="d-flex message-single">
                                                    <div class="pl-1 align-self-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="checkbox2">
                                                            <label class="custom-control-label" for="checkbox2"></label>
                                                        </div>
                                                    </div>
                                                    <div class="ml-2">
                                                        <button class="border-0 bg-transparent align-middle p-0"><i
                                                                class="fa fa-star" aria-hidden="true"></i></button>
                                                    </div>
                                                </div>
                                                <a href="{{url('view-message/'.$item->id)}}" class="col-mail col-mail-2">
                                                    <div class="subject">{{ substr($item->message, 0, 30) . '...' }}</div>
                                                    <div class="date">{{ $item->created_at }}</div>
                                                </a>
                                            </div>
                                        </div>
                                    @empty

                                    @endforelse

                                </div>
                                <!-- panel -->
                                <div class="row mt-4">
                                    <div class="col-12 pl-3">
                                        <nav class="float-right">
                                            {{ $allMail->links('pagination::bootstrap-4') }}
                                        </nav>
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
