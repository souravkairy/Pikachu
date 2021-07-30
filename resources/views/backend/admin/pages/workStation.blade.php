@extends('backend.admin.dashboard.index')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Work Station Setting</a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="basic-form">
                            <form method="POST" action="{{url('update-task')}}" >
                                @csrf
                                <div class="form-row">
                                    <div class="input-group input-Secondary col-md-12 mb-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Youtube Link - 1</span>
                                        </div>
                                        <input type="hidden" name="id" value="{{$alldata->id ?? NULL}}">
                                        <input type="text" class="form-control" name="link1" value={{$alldata->link1 ?? NULL }}>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="input-group input-Secondary col-md-12 mb-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Youtube Link - 2</span>
                                        </div>
                                        <input type="text" class="form-control" name="link2" value={{$alldata->link2 ?? NULL }}>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="input-group input-Secondary col-md-12 mb-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" >Youtube Link - 3</span>
                                        </div>
                                        <input type="text" class="form-control" name="link3" value={{$alldata->link3?? NULL }}>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="input-group input-Secondary col-md-12 mb-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Youtube Link - 4</span>
                                        </div>
                                        <input type="text" class="form-control" name="link4" value={{$alldata->link4 ?? NULL }}>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mt-3 w-100">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
