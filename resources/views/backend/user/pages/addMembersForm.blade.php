@extends('backend.admin.dashboard.index')
@section('content')

    <!--**********************************
                Content body start
            ***********************************-->
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add Member In Your Downline</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form class="form-valide-with-icon" action="{{ route('register') }}" method="POST">
                                    <div class="form-group">
                                        <label class="text-label">Reffered By</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"> <i class="fa fa-link"></i> </span>
                                            </div>
                                            <input type="text" class="form-control" id="" name="val-username"
                                                value="{{ Auth::user()->ref_link }}" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-label">Name</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                            </div>
                                            <input class="form-control @error('name') is-invalid @enderror" type="text"
                                                name="name" value="{{ old('name') }}" required placeholder="Name">

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-label">Sure Name</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                            </div>
                                            <input class="form-control @error('sure_name') is-invalid @enderror" type="text"
                                                name="sure_name" value="{{ old('sure_name') }}" placeholder="Surname">

                                            @error('sure_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-label">Phone</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                            </div>
                                            <input class="form-control @error('phone') is-invalid @enderror" type="text"
                                                name="phone" value="{{ old('phone') }}" placeholder="Phone">

                                            @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-label">DOB</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                            </div>
                                            <input class="form-control @error('date_of_birth') is-invalid @enderror"
                                                type="date" name="date_of_birth" value="{{ old('date_of_birth') }}"
                                                placeholder="Date Of Birth">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-label">Email</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                            </div>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                                name="email" value="{{ old('email') }}" required
                                                placeholder="Email Address">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-label">password</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                            </div>
                                            <input class="form-control @error('password') is-invalid @enderror" required
                                                type="password" name="password" placeholder="Password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-label">Email</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                            </div>
                                            <input class="form-control" required type="password"
                                                name="password_confirmation" placeholder="Confirm Password">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn mr-2 btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
                Content body end
            ***********************************-->
@endsection
