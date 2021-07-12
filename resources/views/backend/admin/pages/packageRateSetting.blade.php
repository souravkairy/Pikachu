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
                <div class="col-xl-6 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add Packages</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form>
                                    <div class="form-group">
                                        <input type="text" class="form-control input" placeholder="Package Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control input" placeholder="Package Value">
                                    </div>
                                    <div class="form-group">
                                        <button type="button" class="btn btn-primary btn-sm">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">All Packages</h4>
                        </div>
                        <div class="card-body">
                            <div id="accordion-one" class="accordion accordion-primary">
                                <div class="accordion__item">
                                    <div class="accordion__header collapsed rounded-lg" data-toggle="collapse"
                                        data-target="#default_collapseTwo">
                                        <span class="accordion__header--text">Package One</span>
                                        <span class="accordion__header--indicator"></span>
                                    </div>
                                    <div id="default_collapseTwo" class="collapse accordion__body"
                                        data-parent="#accordion-one">
                                        <div class="accordion__body--text">
                               $500
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
