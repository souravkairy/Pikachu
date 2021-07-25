@extends('backend.admin.dashboard.index')
@section('content')
              <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
			<div class="container-fluid">
                <!-- row -->
                <div class="row">
                    @forelse ($packageData as $item)
                    <div class="col-xl-4 col-lg-12 col-sm-12">
						<div class="card overflow-hidden">
							<div class="text-center p-5 overlay-box" style="background-image: url(images/big/img5.jpg);">
								<img src="{{asset('Backend/assets/images/profile/profile.png')}}" width="100" class="img-fluid rounded-circle" alt="">
								<h3 class="mt-3 mb-0 text-white">{{$item->package_name}}</h3>
							</div>
                            <div class="card-body">
								<div class="row text-center">
                                    <div class="col-2">
                                    </div>
									<div class="col-8">
										<div class="bgl-primary rounded p-3">
											<h4 class="mb-0">{{$item->package_price}}$</h4>
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
                    @empty
                        <h2>No Package Available</h2>
                    @endforelse

                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

@endsection
