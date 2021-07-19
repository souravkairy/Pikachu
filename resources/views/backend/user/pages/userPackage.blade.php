@extends('backend.admin.dashboard.index')
@section('content')
              <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
			<div class="container-fluid">
                <!-- row -->
                <div class="row">
                    <div class="col-xl-4 col-lg-12 col-sm-12">
						<div class="card overflow-hidden">
							<div class="text-center p-5 overlay-box" style="background-image: url(images/big/img5.jpg);">
								<img src="{{asset('Backend/assets/images/profile/profile.png')}}" width="100" class="img-fluid rounded-circle" alt="">
								<h3 class="mt-3 mb-0 text-white">Silver</h3>
							</div>
                            <div class="card-body">
								<div class="row text-center">
                                    <div class="col-2">
                                    </div>
									<div class="col-8">
										<div class="bgl-primary rounded p-3">
											<h4 class="mb-0">100$</h4>
											{{-- <small>Years Old</small> --}}
										</div>
									</div>
                                    <div class="col-2">
                                    </div>
								</div>
                            </div>
							<div class="card-footer mt-0">
								<button class="btn btn-primary btn-lg btn-block">BUY</button>
                            </div>
                        </div>
					</div>
                    <div class="col-xl-4 col-lg-12 col-sm-12">
						<div class="card overflow-hidden">
							<div class="text-center p-5 overlay-box" style="background-image: url(images/big/img5.jpg);">
								<img src="{{asset('Backend/assets/images/profile/profile.png')}}" width="100" class="img-fluid rounded-circle" alt="">
								<h3 class="mt-3 mb-0 text-white">Gold</h3>
							</div>
                            <div class="card-body">
								<div class="row text-center">
                                    <div class="col-2">
                                    </div>
									<div class="col-8">
										<div class="bgl-primary rounded p-3">
											<h4 class="mb-0">300$</h4>
											{{-- <small>Years Old</small> --}}
										</div>
									</div>
                                    <div class="col-2">
                                    </div>
								</div>
                            </div>
							<div class="card-footer mt-0">
								<button class="btn btn-primary btn-lg btn-block">BUY</button>
                            </div>
                        </div>
					</div>
                    <div class="col-xl-4 col-lg-12 col-sm-12">
						<div class="card overflow-hidden">
							<div class="text-center p-5 overlay-box" style="background-image: url(images/big/img5.jpg);">
								<img src="{{asset('Backend/assets/images/profile/profile.png')}}" width="100" class="img-fluid rounded-circle" alt="">
								<h3 class="mt-3 mb-0 text-white">Platinum</h3>
							</div>
                            <div class="card-body">
								<div class="row text-center">
                                    <div class="col-2">
                                    </div>
									<div class="col-8">
										<div class="bgl-primary rounded p-3">
											<h4 class="mb-0">500$</h4>
											{{-- <small>Years Old</small> --}}
										</div>
									</div>
                                    <div class="col-2">
                                    </div>
								</div>
                            </div>
							<div class="card-footer mt-0">
								<button class="btn btn-primary btn-lg btn-block">BUY</button>
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
