@extends('backend.admin.dashboard.index')
@section('content')
@php
//    echo "<pre>";
//    print_r($activePackages);
//    exit();
@endphp
    <!--**********************************
                Content body start
            ***********************************-->
    <div class="content-body">
        <div class="container-fluid">
            <div class="form-head mb-sm-5 mb-3 d-flex align-items-center flex-wrap">
                <h2 class="font-w600 mb-0 mr-auto mb-2 text-black">My Wallet</h2>
            </div>
            <div class="row">
                <div class="col-xl-3 col-xxl-4">
                    <div class="swiper-box">
                        <div class="swiper-container card-swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card-bx stacked card">
                                        <img src="{{ asset('Backend/assets/images/card/card1.jpg') }}" alt="">
                                        <div class="card-info">
                                            <p class="mb-1 text-white fs-14">Total Earnings</p>
                                            <div class="d-flex justify-content-between">
                                                <h2 class="num-text text-white mb-5 font-w600">${{$user_data->traiding_bonous + $user_data->ref_commision
                                                ?? NULL}}</h2>
                                            </div>
                                            {{-- <div class="d-flex">
                                                <div class="mr-4 text-white">
                                                    <p class="fs-12 mb-1 op6">VALID THRU</p>
                                                    <span>08/21</span>
                                                </div>
                                                <div class="text-white">
                                                    <p class="fs-12 mb-1 op6">CARD HOLDER</p>
                                                    <span>Marquezz Silalahi</span>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-bx stacked card">
                                        <img src="{{ asset('Backend/assets/images/card/card2.jpg') }}" alt="">
                                        <div class="card-info">
                                            <p class="fs-14 mb-1 text-white">Available Earnings</p>
                                            <div class="d-flex justify-content-between">
                                                <h2 class="num-text text-white mb-5 font-w600">$673,412.66</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-bx stacked card">
                                        <img src="{{ asset('Backend/assets/images/card/card3.jpg') }}" alt="">
                                        <div class="card-info">
                                            <p class="mb-1 text-white fs-14">Trading Bonous</p>
                                            <div class="d-flex justify-content-between">
                                                <h2 class="num-text text-white mb-5 font-w600">${{$user_data->traiding_bonous ?? NULL}}</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-bx stacked card">
                                        <img src="{{ asset('Backend/assets/images/card/card4.jpg') }}" alt="">
                                        <div class="card-info">
                                            <p class="mb-1 text-white fs-14">Referal Commision</p>
                                            <div class="d-flex justify-content-between">
                                                <h2 class="num-text text-white mb-5 font-w600">${{$user_data->ref_commision ?? NULL}}</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Add Scroll Bar -->
                            <div class="swiper-scrollbar"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-xxl-8">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-end">
                                        <div class="col-xl-6 col-lg-12 col-xxl-12">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="mb-4">
                                                        <p class="mb-2">Name</p>
                                                        <h4 class="text-black">{{$user_data->name}}</h4>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="mb-4">
                                                        <p class="mb-2">Refered By</p>
                                                        <h4 class="text-black">{{$user_data->ref_from ?? NULL}}</h4>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="mb-4">
                                                        <p class="mb-2">Wallet Address</p>
                                                        <button type="button" class="btn btn-rounded btn-danger"
                                                            data-toggle="modal" data-target="#basicModal"><span
                                                                class="btn-icon-left text-danger"><i
                                                                    class="fa fa-eye color-danger"></i>
                                                            </span>View Wallet</button>
                                                    </div>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="basicModal">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Your Current Wallet Address</h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal"><span>&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">{{$user_data->wallet_address}}</div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-danger light"
                                                                        data-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="mb-4">
                                                        <p class="mb-2">Account Status (Packages)</p>
                                                        <ul>
                                                            @forelse ($activePackages as $item)
                                                               <li><h4 class="text-black">-> {{ $item->package_name}}</h4></li>
                                                            @empty
                                                                <button type="button" class="btn btn-rounded btn-warning"><span
                                                                    class="btn-icon-left text-warning"><i
                                                                        class="fa fa-eye color-warning"></i>
                                                                </span>Pending</button>
                                                            @endforelse
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="mb-4">
                                                        <p class="mb-2">Customer ID</p>
                                                        @forelse ($activePackages as $item)
                                                        <li><h4 class="text-black">{!!$item->customer_id!!}</h4></li>
                                                     @empty
                                                         <button type="button" class="btn btn-rounded btn-warning"><span
                                                             class="btn-icon-left text-warning"><i
                                                                 class="fa fa-eye color-warning"></i>
                                                         </span>Account Pending</button>
                                                     @endforelse

                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="mb-4">
                                                        <p class="mb-2">Referal Link</p>
                                                        <h4 class="text-black">{!!$refData->ref_link ?? 'No Link Found'!!}</h4>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="mb-4">
                                                        <p>Trading Bonous</p>
                                                        <h3 class="float-left">1$</h3>
                                                        <h3 class="float-right">300$</h3>
                                                        <div class="progress mb-2">
                                                            <div class="progress-bar progress-animated bg-warning" style="width: 95%"></div>
                                                        </div>
                                                        <br>
                                                        <small>300% Increase in 25 Days</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header d-sm-flex d-block pb-0 border-0">
                                    <div>
                                        <h4 class="fs-20 text-black">Withdraw</h4>
                                        <p class="mb-0 fs-12">Please Make Sure Your Wallet Is Correct
                                            <button type="button" class="btn btn-rounded btn-success mt-2"
                                            data-toggle="modal" data-target="#basicModal2"><span
                                                class="btn-icon-left text-success"><i
                                                    class="fa fa-edit color-success"></i>
                                            </span>Set Wallet Address</button>
                                        </p>
                                    </div>
                                    <div class="dropdown custom-dropdown d-block mt-3 mt-sm-0 mb-0">
                                        <div class="btn border border-warning btn-sm d-flex align-items-center svg-btn"
                                            role="button" data-toggle="dropdown" aria-expanded="false">
                                            {{-- <svg class="mr-2" width="42" height="42" viewBox="0 0 42 42" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M21 0C9.40213 0 0.00012207 9.40201 0.00012207 20.9999C0.00012207 32.5978 9.40213 41.9998 21 41.9998C32.5979 41.9998 41.9999 32.5978 41.9999 20.9999C41.9867 9.4075 32.5924 0.0132751 21 0ZM28.5 31.5001H16.5002C15.6717 31.5001 15.0001 30.8286 15.0001 30C15.0001 29.929 15.0052 29.8581 15.0152 29.7876L16.1441 21.8843L13.864 22.4547C13.7449 22.4849 13.6227 22.5 13.5 22.5C12.6715 22.4991 12.0009 21.8271 12.0013 20.9985C12.0022 20.311 12.4701 19.7122 13.137 19.5447L16.6018 18.6786L18.015 8.78723C18.1321 7.96692 18.892 7.39746 19.7123 7.51465C20.5327 7.63184 21.1021 8.39172 20.9849 9.21204L19.7444 17.8931L25.1364 16.545C25.9388 16.3403 26.755 16.8251 26.9592 17.6276C27.1638 18.43 26.679 19.2462 25.8766 19.4508C25.872 19.4518 25.8674 19.4531 25.8629 19.454L19.2857 21.0983L18.2287 28.4999H28.5C29.3286 28.4999 30.0001 29.1714 30.0001 30C30.0001 30.8281 29.3286 31.5001 28.5 31.5001Z"
                                                    fill="#5974D5" />
                                            </svg> --}}
                                            <span class="text-black fs-16">23,511 USDT</span>
                                        </div>
                                        {{-- <div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item">345,455 ETH</a>
												<a href="#" class="dropdown-item ">789,123 BTH</a>
											</div> --}}
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-wrapper">
                                        <div class="form-group">
                                            <div class="input-group input-group-lg">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Amount USDT</span>
                                                </div>
                                                <input type="number" class="form-control" placeholder="742.2">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pt-5 align-items-center">
                                        <div class="col-sm-6 mb-2">
                                            <p class="mb-0 fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                sed do eiusmod tempor incididunt ut</p>
                                        </div>
                                        <div class="col-sm-6 mb-2">
                                            <a href="javascript:void(0);" class="btn btn-secondary d-block">Withdraw Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header pb-2 d-block d-sm-flex flex-wrap border-0">
                                    <div class="mb-3">
                                        <h4 class="fs-20 text-black">Withdraw Status</h4>
                                        <p class="mb-0 fs-13">Lorem ipsum dolor sit amet, consectetur</p>
                                    </div>
                                    <div class="card-action card-tabs mb-3 style-1">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#monthly" role="tab">
                                                    Pending
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#Weekly" role="tab">
                                                    Completed
                                                </a>
                                            </li>
                                            {{-- <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#Today" role="tab">
                                                    Today
                                                </a>
                                            </li> --}}
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body tab-content p-0">
                                    <div class="tab-pane active show fade" id="monthly">
                                        <div class="table-responsive">
                                            <table class="table shadow-hover card-table border-no tbl-btn short-one">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <span>
                                                                <svg width="63" height="63" viewBox="0 0 63 63" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <rect width="63" height="63" rx="14" fill="#625794" />
                                                                    <path
                                                                        d="M25.4813 24.6343L25.4813 24.6343L30.3544 19.7376C30.3571 19.7348 30.3596 19.7323 30.3619 19.7301M25.4813 24.6343L30.7116 20.0875L30.3587 19.7333C30.368 19.7241 30.3756 19.7172 30.3789 19.7143L30.38 19.7133C30.3775 19.7155 30.3709 19.7214 30.3627 19.7293C30.3625 19.7295 30.3622 19.7298 30.3619 19.7301M25.4813 24.6343C24.9214 25.197 24.9234 26.1071 25.4862 26.6672C26.0489 27.2273 26.9591 27.2251 27.5191 26.6624L27.5192 26.6624L29.9377 24.232M25.4813 24.6343L29.9377 24.232M30.3619 19.7301C30.9212 19.1741 31.8279 19.1724 32.389 19.7304C32.3902 19.7316 32.3914 19.7329 32.3927 19.7341L32.3941 19.7356L32.4062 19.7477L37.2691 24.6342L36.9147 24.9869L37.2692 24.6342C37.829 25.1968 37.8271 26.107 37.2642 26.6672C36.7015 27.2272 35.7914 27.225 35.2314 26.6623L35.2313 26.6623L32.8127 24.232L32.8127 42.875C32.8127 43.6689 32.1692 44.3125 31.3752 44.3125C30.5813 44.3125 29.9377 43.6689 29.9377 42.875L29.9377 24.232M30.3619 19.7301C30.3605 19.7315 30.3591 19.7329 30.3577 19.7343L29.9377 24.232M32.3927 19.7342C32.3932 19.7347 32.3937 19.7351 32.3941 19.7356L32.3927 19.7342Z"
                                                                        fill="white" stroke="white" />
                                                                </svg>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span class="font-w600 text-black">Topup</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-black">06:24:45 AM</span>
                                                        </td>
                                                        <td>
                                                            <span class="font-w600 text-black">+$5,553</span>
                                                        </td>
                                                        <td><a class="btn-link text-success float-right"
                                                                href="javascript:void(0);">Completed</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span>
                                                                <svg width="63" height="63" viewBox="0 0 63 63" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <rect width="63" height="63" rx="14" fill="#625794" />
                                                                    <path
                                                                        d="M37.2692 38.9908L37.2692 38.9908L32.3961 43.8874C32.3934 43.8902 32.3909 43.8927 32.3885 43.895M37.2692 38.9908L32.0389 43.5375L32.3918 43.8917C32.3825 43.9009 32.3749 43.9078 32.3716 43.9107L32.3705 43.9117C32.373 43.9095 32.3796 43.9036 32.3877 43.8957C32.388 43.8955 32.3883 43.8952 32.3885 43.895M37.2692 38.9908C37.8291 38.4281 37.827 37.5179 37.2643 36.9578C36.7016 36.3978 35.7914 36.3999 35.2314 36.9626L35.2313 36.9627L32.8127 39.393M37.2692 38.9908L32.8127 39.393M32.3885 43.895C31.8292 44.4509 30.9226 44.4526 30.3615 43.8946C30.3603 43.8934 30.3591 43.8922 30.3578 43.8909L30.3563 43.8894L30.3442 43.8773L25.4813 38.9908L25.8357 38.6381L25.4813 38.9908C24.9215 38.4282 24.9234 37.518 25.4862 36.9578C26.049 36.3978 26.9591 36.4 27.5191 36.9627L27.5192 36.9627L29.9377 39.393L29.9377 20.75C29.9377 19.9561 30.5813 19.3125 31.3752 19.3125C32.1692 19.3125 32.8127 19.9561 32.8127 20.75L32.8127 39.393M32.3885 43.895C32.39 43.8935 32.3914 43.8921 32.3928 43.8907L32.8127 39.393M30.3577 43.8908C30.3573 43.8903 30.3568 43.8899 30.3564 43.8894L30.3577 43.8908Z"
                                                                        fill="white" stroke="white" />
                                                                </svg>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span class="font-w600 text-black">Withdraw</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-black">06:24:45 AM</span>
                                                        </td>
                                                        <td>
                                                            <span class="font-w600 text-black">+$5,553</span>
                                                        </td>
                                                        <td>
                                                            <a class="btn-link text-light float-right"
                                                                href="javascript:void(0);">Pending</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span>
                                                                <svg width="63" height="63" viewBox="0 0 63 63" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <rect width="63" height="63" rx="14" fill="#625794" />
                                                                    <path
                                                                        d="M37.2692 38.9908L37.2692 38.9908L32.3961 43.8874C32.3934 43.8902 32.3909 43.8927 32.3885 43.895M37.2692 38.9908L32.0389 43.5375L32.3918 43.8917C32.3825 43.9009 32.3749 43.9078 32.3716 43.9107L32.3705 43.9117C32.373 43.9095 32.3796 43.9036 32.3877 43.8957C32.388 43.8955 32.3883 43.8952 32.3885 43.895M37.2692 38.9908C37.8291 38.4281 37.827 37.5179 37.2643 36.9578C36.7016 36.3978 35.7914 36.3999 35.2314 36.9626L35.2313 36.9627L32.8127 39.393M37.2692 38.9908L32.8127 39.393M32.3885 43.895C31.8292 44.4509 30.9226 44.4526 30.3615 43.8946C30.3603 43.8934 30.3591 43.8922 30.3578 43.8909L30.3563 43.8894L30.3442 43.8773L25.4813 38.9908L25.8357 38.6381L25.4813 38.9908C24.9215 38.4282 24.9234 37.518 25.4862 36.9578C26.049 36.3978 26.9591 36.4 27.5191 36.9627L27.5192 36.9627L29.9377 39.393L29.9377 20.75C29.9377 19.9561 30.5813 19.3125 31.3752 19.3125C32.1692 19.3125 32.8127 19.9561 32.8127 20.75L32.8127 39.393M32.3885 43.895C32.39 43.8935 32.3914 43.8921 32.3928 43.8907L32.8127 39.393M30.3577 43.8908C30.3573 43.8903 30.3568 43.8899 30.3564 43.8894L30.3577 43.8908Z"
                                                                        fill="white" stroke="white" />
                                                                </svg>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span class="font-w600 text-black">Wihtdraw</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-black">06:24:45 AM</span>
                                                        </td>
                                                        <td>
                                                            <span class="font-w600 text-black">-$912</span>
                                                        </td>
                                                        <td>
                                                            <a class="btn-link  text-danger float-right"
                                                                href="javascript:void(0);">Canceled</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span>
                                                                <svg width="63" height="63" viewBox="0 0 63 63" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <rect width="63" height="63" rx="14" fill="#625794" />
                                                                    <path
                                                                        d="M25.4813 24.6343L25.4813 24.6343L30.3544 19.7376C30.3571 19.7348 30.3596 19.7323 30.3619 19.7301M25.4813 24.6343L30.7116 20.0875L30.3587 19.7333C30.368 19.7241 30.3756 19.7172 30.3789 19.7143L30.38 19.7133C30.3775 19.7155 30.3709 19.7214 30.3627 19.7293C30.3625 19.7295 30.3622 19.7298 30.3619 19.7301M25.4813 24.6343C24.9214 25.197 24.9234 26.1071 25.4862 26.6672C26.0489 27.2273 26.9591 27.2251 27.5191 26.6624L27.5192 26.6624L29.9377 24.232M25.4813 24.6343L29.9377 24.232M30.3619 19.7301C30.9212 19.1741 31.8279 19.1724 32.389 19.7304C32.3902 19.7316 32.3914 19.7329 32.3927 19.7341L32.3941 19.7356L32.4062 19.7477L37.2691 24.6342L36.9147 24.9869L37.2692 24.6342C37.829 25.1968 37.8271 26.107 37.2642 26.6672C36.7015 27.2272 35.7914 27.225 35.2314 26.6623L35.2313 26.6623L32.8127 24.232L32.8127 42.875C32.8127 43.6689 32.1692 44.3125 31.3752 44.3125C30.5813 44.3125 29.9377 43.6689 29.9377 42.875L29.9377 24.232M30.3619 19.7301C30.3605 19.7315 30.3591 19.7329 30.3577 19.7343L29.9377 24.232M32.3927 19.7342C32.3932 19.7347 32.3937 19.7351 32.3941 19.7356L32.3927 19.7342Z"
                                                                        fill="white" stroke="white" />
                                                                </svg>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span class="font-w600 text-black">Topup</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-black">06:24:45 AM</span>
                                                        </td>
                                                        <td>
                                                            <span class="font-w600 text-black">+$7,762</span>
                                                        </td>
                                                        <td>
                                                            <a class="btn-link text-success float-right"
                                                                href="javascript:void(0);">Completed</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span>
                                                                <svg width="63" height="63" viewBox="0 0 63 63" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <rect width="63" height="63" rx="14" fill="#625794" />
                                                                    <path
                                                                        d="M25.4813 24.6343L25.4813 24.6343L30.3544 19.7376C30.3571 19.7348 30.3596 19.7323 30.3619 19.7301M25.4813 24.6343L30.7116 20.0875L30.3587 19.7333C30.368 19.7241 30.3756 19.7172 30.3789 19.7143L30.38 19.7133C30.3775 19.7155 30.3709 19.7214 30.3627 19.7293C30.3625 19.7295 30.3622 19.7298 30.3619 19.7301M25.4813 24.6343C24.9214 25.197 24.9234 26.1071 25.4862 26.6672C26.0489 27.2273 26.9591 27.2251 27.5191 26.6624L27.5192 26.6624L29.9377 24.232M25.4813 24.6343L29.9377 24.232M30.3619 19.7301C30.9212 19.1741 31.8279 19.1724 32.389 19.7304C32.3902 19.7316 32.3914 19.7329 32.3927 19.7341L32.3941 19.7356L32.4062 19.7477L37.2691 24.6342L36.9147 24.9869L37.2692 24.6342C37.829 25.1968 37.8271 26.107 37.2642 26.6672C36.7015 27.2272 35.7914 27.225 35.2314 26.6623L35.2313 26.6623L32.8127 24.232L32.8127 42.875C32.8127 43.6689 32.1692 44.3125 31.3752 44.3125C30.5813 44.3125 29.9377 43.6689 29.9377 42.875L29.9377 24.232M30.3619 19.7301C30.3605 19.7315 30.3591 19.7329 30.3577 19.7343L29.9377 24.232M32.3927 19.7342C32.3932 19.7347 32.3937 19.7351 32.3941 19.7356L32.3927 19.7342Z"
                                                                        fill="white" stroke="white" />
                                                                </svg>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span class="font-w600 text-black">Topup</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-black">06:24:45 AM</span>
                                                        </td>
                                                        <td>
                                                            <span class="font-w600 text-black">+$5,553</span>
                                                        </td>
                                                        <td>
                                                            <a class="btn-link text-success float-right"
                                                                href="javascript:void(0);">Completed</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span>
                                                                <svg width="63" height="63" viewBox="0 0 63 63" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <rect width="63" height="63" rx="14" fill="#625794" />
                                                                    <path
                                                                        d="M37.2692 38.9908L37.2692 38.9908L32.3961 43.8874C32.3934 43.8902 32.3909 43.8927 32.3885 43.895M37.2692 38.9908L32.0389 43.5375L32.3918 43.8917C32.3825 43.9009 32.3749 43.9078 32.3716 43.9107L32.3705 43.9117C32.373 43.9095 32.3796 43.9036 32.3877 43.8957C32.388 43.8955 32.3883 43.8952 32.3885 43.895M37.2692 38.9908C37.8291 38.4281 37.827 37.5179 37.2643 36.9578C36.7016 36.3978 35.7914 36.3999 35.2314 36.9626L35.2313 36.9627L32.8127 39.393M37.2692 38.9908L32.8127 39.393M32.3885 43.895C31.8292 44.4509 30.9226 44.4526 30.3615 43.8946C30.3603 43.8934 30.3591 43.8922 30.3578 43.8909L30.3563 43.8894L30.3442 43.8773L25.4813 38.9908L25.8357 38.6381L25.4813 38.9908C24.9215 38.4282 24.9234 37.518 25.4862 36.9578C26.049 36.3978 26.9591 36.4 27.5191 36.9627L27.5192 36.9627L29.9377 39.393L29.9377 20.75C29.9377 19.9561 30.5813 19.3125 31.3752 19.3125C32.1692 19.3125 32.8127 19.9561 32.8127 20.75L32.8127 39.393M32.3885 43.895C32.39 43.8935 32.3914 43.8921 32.3928 43.8907L32.8127 39.393M30.3577 43.8908C30.3573 43.8903 30.3568 43.8899 30.3564 43.8894L30.3577 43.8908Z"
                                                                        fill="white" stroke="white" />
                                                                </svg>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span class="font-w600 text-black">Withdraw</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-black">06:24:45 AM</span>
                                                        </td>
                                                        <td>
                                                            <span class="font-w600 text-black">-$912</span>
                                                        </td>
                                                        <td>
                                                            <a class="btn-link text-danger float-right"
                                                                href="javascript:void(0);">Canceled</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="Weekly">
                                        <div class="table-responsive">
                                            <table class="table shadow-hover card-table border-no tbl-btn short-one">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <span>
                                                                <svg width="63" height="63" viewBox="0 0 63 63" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <rect width="63" height="63" rx="14" fill="#625794" />
                                                                    <path
                                                                        d="M25.4813 24.6343L25.4813 24.6343L30.3544 19.7376C30.3571 19.7348 30.3596 19.7323 30.3619 19.7301M25.4813 24.6343L30.7116 20.0875L30.3587 19.7333C30.368 19.7241 30.3756 19.7172 30.3789 19.7143L30.38 19.7133C30.3775 19.7155 30.3709 19.7214 30.3627 19.7293C30.3625 19.7295 30.3622 19.7298 30.3619 19.7301M25.4813 24.6343C24.9214 25.197 24.9234 26.1071 25.4862 26.6672C26.0489 27.2273 26.9591 27.2251 27.5191 26.6624L27.5192 26.6624L29.9377 24.232M25.4813 24.6343L29.9377 24.232M30.3619 19.7301C30.9212 19.1741 31.8279 19.1724 32.389 19.7304C32.3902 19.7316 32.3914 19.7329 32.3927 19.7341L32.3941 19.7356L32.4062 19.7477L37.2691 24.6342L36.9147 24.9869L37.2692 24.6342C37.829 25.1968 37.8271 26.107 37.2642 26.6672C36.7015 27.2272 35.7914 27.225 35.2314 26.6623L35.2313 26.6623L32.8127 24.232L32.8127 42.875C32.8127 43.6689 32.1692 44.3125 31.3752 44.3125C30.5813 44.3125 29.9377 43.6689 29.9377 42.875L29.9377 24.232M30.3619 19.7301C30.3605 19.7315 30.3591 19.7329 30.3577 19.7343L29.9377 24.232M32.3927 19.7342C32.3932 19.7347 32.3937 19.7351 32.3941 19.7356L32.3927 19.7342Z"
                                                                        fill="white" stroke="white" />
                                                                </svg>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span class="font-w600 text-black">Topup</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-black">06:24:45 AM</span>
                                                        </td>
                                                        <td>
                                                            <span class="font-w600 text-black">+$5,553</span>
                                                        </td>
                                                        <td><a class="btn-link text-success float-right"
                                                                href="javascript:void(0);">Completed</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span>
                                                                <svg width="63" height="63" viewBox="0 0 63 63" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <rect width="63" height="63" rx="14" fill="#625794" />
                                                                    <path
                                                                        d="M37.2692 38.9908L37.2692 38.9908L32.3961 43.8874C32.3934 43.8902 32.3909 43.8927 32.3885 43.895M37.2692 38.9908L32.0389 43.5375L32.3918 43.8917C32.3825 43.9009 32.3749 43.9078 32.3716 43.9107L32.3705 43.9117C32.373 43.9095 32.3796 43.9036 32.3877 43.8957C32.388 43.8955 32.3883 43.8952 32.3885 43.895M37.2692 38.9908C37.8291 38.4281 37.827 37.5179 37.2643 36.9578C36.7016 36.3978 35.7914 36.3999 35.2314 36.9626L35.2313 36.9627L32.8127 39.393M37.2692 38.9908L32.8127 39.393M32.3885 43.895C31.8292 44.4509 30.9226 44.4526 30.3615 43.8946C30.3603 43.8934 30.3591 43.8922 30.3578 43.8909L30.3563 43.8894L30.3442 43.8773L25.4813 38.9908L25.8357 38.6381L25.4813 38.9908C24.9215 38.4282 24.9234 37.518 25.4862 36.9578C26.049 36.3978 26.9591 36.4 27.5191 36.9627L27.5192 36.9627L29.9377 39.393L29.9377 20.75C29.9377 19.9561 30.5813 19.3125 31.3752 19.3125C32.1692 19.3125 32.8127 19.9561 32.8127 20.75L32.8127 39.393M32.3885 43.895C32.39 43.8935 32.3914 43.8921 32.3928 43.8907L32.8127 39.393M30.3577 43.8908C30.3573 43.8903 30.3568 43.8899 30.3564 43.8894L30.3577 43.8908Z"
                                                                        fill="white" stroke="white" />
                                                                </svg>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span class="font-w600 text-black">Withdraw</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-black">06:24:45 AM</span>
                                                        </td>
                                                        <td>
                                                            <span class="font-w600 text-black">+$5,553</span>
                                                        </td>
                                                        <td>
                                                            <a class="btn-link text-light float-right"
                                                                href="javascript:void(0);">Pending</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span>
                                                                <svg width="63" height="63" viewBox="0 0 63 63" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <rect width="63" height="63" rx="14" fill="#625794" />
                                                                    <path
                                                                        d="M37.2692 38.9908L37.2692 38.9908L32.3961 43.8874C32.3934 43.8902 32.3909 43.8927 32.3885 43.895M37.2692 38.9908L32.0389 43.5375L32.3918 43.8917C32.3825 43.9009 32.3749 43.9078 32.3716 43.9107L32.3705 43.9117C32.373 43.9095 32.3796 43.9036 32.3877 43.8957C32.388 43.8955 32.3883 43.8952 32.3885 43.895M37.2692 38.9908C37.8291 38.4281 37.827 37.5179 37.2643 36.9578C36.7016 36.3978 35.7914 36.3999 35.2314 36.9626L35.2313 36.9627L32.8127 39.393M37.2692 38.9908L32.8127 39.393M32.3885 43.895C31.8292 44.4509 30.9226 44.4526 30.3615 43.8946C30.3603 43.8934 30.3591 43.8922 30.3578 43.8909L30.3563 43.8894L30.3442 43.8773L25.4813 38.9908L25.8357 38.6381L25.4813 38.9908C24.9215 38.4282 24.9234 37.518 25.4862 36.9578C26.049 36.3978 26.9591 36.4 27.5191 36.9627L27.5192 36.9627L29.9377 39.393L29.9377 20.75C29.9377 19.9561 30.5813 19.3125 31.3752 19.3125C32.1692 19.3125 32.8127 19.9561 32.8127 20.75L32.8127 39.393M32.3885 43.895C32.39 43.8935 32.3914 43.8921 32.3928 43.8907L32.8127 39.393M30.3577 43.8908C30.3573 43.8903 30.3568 43.8899 30.3564 43.8894L30.3577 43.8908Z"
                                                                        fill="white" stroke="white" />
                                                                </svg>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span class="font-w600 text-black">Wihtdraw</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-black">06:24:45 AM</span>
                                                        </td>
                                                        <td>
                                                            <span class="font-w600 text-black">-$912</span>
                                                        </td>
                                                        <td>
                                                            <a class="btn-link  text-danger float-right"
                                                                href="javascript:void(0);">Canceled</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span>
                                                                <svg width="63" height="63" viewBox="0 0 63 63" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <rect width="63" height="63" rx="14" fill="#625794" />
                                                                    <path
                                                                        d="M25.4813 24.6343L25.4813 24.6343L30.3544 19.7376C30.3571 19.7348 30.3596 19.7323 30.3619 19.7301M25.4813 24.6343L30.7116 20.0875L30.3587 19.7333C30.368 19.7241 30.3756 19.7172 30.3789 19.7143L30.38 19.7133C30.3775 19.7155 30.3709 19.7214 30.3627 19.7293C30.3625 19.7295 30.3622 19.7298 30.3619 19.7301M25.4813 24.6343C24.9214 25.197 24.9234 26.1071 25.4862 26.6672C26.0489 27.2273 26.9591 27.2251 27.5191 26.6624L27.5192 26.6624L29.9377 24.232M25.4813 24.6343L29.9377 24.232M30.3619 19.7301C30.9212 19.1741 31.8279 19.1724 32.389 19.7304C32.3902 19.7316 32.3914 19.7329 32.3927 19.7341L32.3941 19.7356L32.4062 19.7477L37.2691 24.6342L36.9147 24.9869L37.2692 24.6342C37.829 25.1968 37.8271 26.107 37.2642 26.6672C36.7015 27.2272 35.7914 27.225 35.2314 26.6623L35.2313 26.6623L32.8127 24.232L32.8127 42.875C32.8127 43.6689 32.1692 44.3125 31.3752 44.3125C30.5813 44.3125 29.9377 43.6689 29.9377 42.875L29.9377 24.232M30.3619 19.7301C30.3605 19.7315 30.3591 19.7329 30.3577 19.7343L29.9377 24.232M32.3927 19.7342C32.3932 19.7347 32.3937 19.7351 32.3941 19.7356L32.3927 19.7342Z"
                                                                        fill="white" stroke="white" />
                                                                </svg>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span class="font-w600 text-black">Topup</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-black">06:24:45 AM</span>
                                                        </td>
                                                        <td>
                                                            <span class="font-w600 text-black">+$7,762</span>
                                                        </td>
                                                        <td>
                                                            <a class="btn-link text-success float-right"
                                                                href="javascript:void(0);">Completed</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span>
                                                                <svg width="63" height="63" viewBox="0 0 63 63" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <rect width="63" height="63" rx="14" fill="#625794" />
                                                                    <path
                                                                        d="M25.4813 24.6343L25.4813 24.6343L30.3544 19.7376C30.3571 19.7348 30.3596 19.7323 30.3619 19.7301M25.4813 24.6343L30.7116 20.0875L30.3587 19.7333C30.368 19.7241 30.3756 19.7172 30.3789 19.7143L30.38 19.7133C30.3775 19.7155 30.3709 19.7214 30.3627 19.7293C30.3625 19.7295 30.3622 19.7298 30.3619 19.7301M25.4813 24.6343C24.9214 25.197 24.9234 26.1071 25.4862 26.6672C26.0489 27.2273 26.9591 27.2251 27.5191 26.6624L27.5192 26.6624L29.9377 24.232M25.4813 24.6343L29.9377 24.232M30.3619 19.7301C30.9212 19.1741 31.8279 19.1724 32.389 19.7304C32.3902 19.7316 32.3914 19.7329 32.3927 19.7341L32.3941 19.7356L32.4062 19.7477L37.2691 24.6342L36.9147 24.9869L37.2692 24.6342C37.829 25.1968 37.8271 26.107 37.2642 26.6672C36.7015 27.2272 35.7914 27.225 35.2314 26.6623L35.2313 26.6623L32.8127 24.232L32.8127 42.875C32.8127 43.6689 32.1692 44.3125 31.3752 44.3125C30.5813 44.3125 29.9377 43.6689 29.9377 42.875L29.9377 24.232M30.3619 19.7301C30.3605 19.7315 30.3591 19.7329 30.3577 19.7343L29.9377 24.232M32.3927 19.7342C32.3932 19.7347 32.3937 19.7351 32.3941 19.7356L32.3927 19.7342Z"
                                                                        fill="white" stroke="white" />
                                                                </svg>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span class="font-w600 text-black">Topup</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-black">06:24:45 AM</span>
                                                        </td>
                                                        <td>
                                                            <span class="font-w600 text-black">+$5,553</span>
                                                        </td>
                                                        <td>
                                                            <a class="btn-link text-success float-right"
                                                                href="javascript:void(0);">Completed</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span>
                                                                <svg width="63" height="63" viewBox="0 0 63 63" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <rect width="63" height="63" rx="14" fill="#625794" />
                                                                    <path
                                                                        d="M37.2692 38.9908L37.2692 38.9908L32.3961 43.8874C32.3934 43.8902 32.3909 43.8927 32.3885 43.895M37.2692 38.9908L32.0389 43.5375L32.3918 43.8917C32.3825 43.9009 32.3749 43.9078 32.3716 43.9107L32.3705 43.9117C32.373 43.9095 32.3796 43.9036 32.3877 43.8957C32.388 43.8955 32.3883 43.8952 32.3885 43.895M37.2692 38.9908C37.8291 38.4281 37.827 37.5179 37.2643 36.9578C36.7016 36.3978 35.7914 36.3999 35.2314 36.9626L35.2313 36.9627L32.8127 39.393M37.2692 38.9908L32.8127 39.393M32.3885 43.895C31.8292 44.4509 30.9226 44.4526 30.3615 43.8946C30.3603 43.8934 30.3591 43.8922 30.3578 43.8909L30.3563 43.8894L30.3442 43.8773L25.4813 38.9908L25.8357 38.6381L25.4813 38.9908C24.9215 38.4282 24.9234 37.518 25.4862 36.9578C26.049 36.3978 26.9591 36.4 27.5191 36.9627L27.5192 36.9627L29.9377 39.393L29.9377 20.75C29.9377 19.9561 30.5813 19.3125 31.3752 19.3125C32.1692 19.3125 32.8127 19.9561 32.8127 20.75L32.8127 39.393M32.3885 43.895C32.39 43.8935 32.3914 43.8921 32.3928 43.8907L32.8127 39.393M30.3577 43.8908C30.3573 43.8903 30.3568 43.8899 30.3564 43.8894L30.3577 43.8908Z"
                                                                        fill="white" stroke="white" />
                                                                </svg>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span class="font-w600 text-black">Withdraw</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-black">06:24:45 AM</span>
                                                        </td>
                                                        <td>
                                                            <span class="font-w600 text-black">-$912</span>
                                                        </td>
                                                        <td>
                                                            <a class="btn-link text-danger float-right"
                                                                href="javascript:void(0);">Canceled</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="Today">
                                        <div class="table-responsive">
                                            <table class="table shadow-hover card-table border-no tbl-btn short-one">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <span>
                                                                <svg width="63" height="63" viewBox="0 0 63 63" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <rect width="63" height="63" rx="14" fill="#625794" />
                                                                    <path
                                                                        d="M25.4813 24.6343L25.4813 24.6343L30.3544 19.7376C30.3571 19.7348 30.3596 19.7323 30.3619 19.7301M25.4813 24.6343L30.7116 20.0875L30.3587 19.7333C30.368 19.7241 30.3756 19.7172 30.3789 19.7143L30.38 19.7133C30.3775 19.7155 30.3709 19.7214 30.3627 19.7293C30.3625 19.7295 30.3622 19.7298 30.3619 19.7301M25.4813 24.6343C24.9214 25.197 24.9234 26.1071 25.4862 26.6672C26.0489 27.2273 26.9591 27.2251 27.5191 26.6624L27.5192 26.6624L29.9377 24.232M25.4813 24.6343L29.9377 24.232M30.3619 19.7301C30.9212 19.1741 31.8279 19.1724 32.389 19.7304C32.3902 19.7316 32.3914 19.7329 32.3927 19.7341L32.3941 19.7356L32.4062 19.7477L37.2691 24.6342L36.9147 24.9869L37.2692 24.6342C37.829 25.1968 37.8271 26.107 37.2642 26.6672C36.7015 27.2272 35.7914 27.225 35.2314 26.6623L35.2313 26.6623L32.8127 24.232L32.8127 42.875C32.8127 43.6689 32.1692 44.3125 31.3752 44.3125C30.5813 44.3125 29.9377 43.6689 29.9377 42.875L29.9377 24.232M30.3619 19.7301C30.3605 19.7315 30.3591 19.7329 30.3577 19.7343L29.9377 24.232M32.3927 19.7342C32.3932 19.7347 32.3937 19.7351 32.3941 19.7356L32.3927 19.7342Z"
                                                                        fill="white" stroke="white" />
                                                                </svg>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span class="font-w600 text-black">Topup</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-black">06:24:45 AM</span>
                                                        </td>
                                                        <td>
                                                            <span class="font-w600 text-black">+$5,553</span>
                                                        </td>
                                                        <td><a class="btn-link text-success float-right"
                                                                href="javascript:void(0);">Completed</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span>
                                                                <svg width="63" height="63" viewBox="0 0 63 63" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <rect width="63" height="63" rx="14" fill="#625794" />
                                                                    <path
                                                                        d="M37.2692 38.9908L37.2692 38.9908L32.3961 43.8874C32.3934 43.8902 32.3909 43.8927 32.3885 43.895M37.2692 38.9908L32.0389 43.5375L32.3918 43.8917C32.3825 43.9009 32.3749 43.9078 32.3716 43.9107L32.3705 43.9117C32.373 43.9095 32.3796 43.9036 32.3877 43.8957C32.388 43.8955 32.3883 43.8952 32.3885 43.895M37.2692 38.9908C37.8291 38.4281 37.827 37.5179 37.2643 36.9578C36.7016 36.3978 35.7914 36.3999 35.2314 36.9626L35.2313 36.9627L32.8127 39.393M37.2692 38.9908L32.8127 39.393M32.3885 43.895C31.8292 44.4509 30.9226 44.4526 30.3615 43.8946C30.3603 43.8934 30.3591 43.8922 30.3578 43.8909L30.3563 43.8894L30.3442 43.8773L25.4813 38.9908L25.8357 38.6381L25.4813 38.9908C24.9215 38.4282 24.9234 37.518 25.4862 36.9578C26.049 36.3978 26.9591 36.4 27.5191 36.9627L27.5192 36.9627L29.9377 39.393L29.9377 20.75C29.9377 19.9561 30.5813 19.3125 31.3752 19.3125C32.1692 19.3125 32.8127 19.9561 32.8127 20.75L32.8127 39.393M32.3885 43.895C32.39 43.8935 32.3914 43.8921 32.3928 43.8907L32.8127 39.393M30.3577 43.8908C30.3573 43.8903 30.3568 43.8899 30.3564 43.8894L30.3577 43.8908Z"
                                                                        fill="white" stroke="white" />
                                                                </svg>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span class="font-w600 text-black">Withdraw</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-black">06:24:45 AM</span>
                                                        </td>
                                                        <td>
                                                            <span class="font-w600 text-black">+$5,553</span>
                                                        </td>
                                                        <td>
                                                            <a class="btn-link text-light float-right"
                                                                href="javascript:void(0);">Pending</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span>
                                                                <svg width="63" height="63" viewBox="0 0 63 63" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <rect width="63" height="63" rx="14" fill="#625794" />
                                                                    <path
                                                                        d="M37.2692 38.9908L37.2692 38.9908L32.3961 43.8874C32.3934 43.8902 32.3909 43.8927 32.3885 43.895M37.2692 38.9908L32.0389 43.5375L32.3918 43.8917C32.3825 43.9009 32.3749 43.9078 32.3716 43.9107L32.3705 43.9117C32.373 43.9095 32.3796 43.9036 32.3877 43.8957C32.388 43.8955 32.3883 43.8952 32.3885 43.895M37.2692 38.9908C37.8291 38.4281 37.827 37.5179 37.2643 36.9578C36.7016 36.3978 35.7914 36.3999 35.2314 36.9626L35.2313 36.9627L32.8127 39.393M37.2692 38.9908L32.8127 39.393M32.3885 43.895C31.8292 44.4509 30.9226 44.4526 30.3615 43.8946C30.3603 43.8934 30.3591 43.8922 30.3578 43.8909L30.3563 43.8894L30.3442 43.8773L25.4813 38.9908L25.8357 38.6381L25.4813 38.9908C24.9215 38.4282 24.9234 37.518 25.4862 36.9578C26.049 36.3978 26.9591 36.4 27.5191 36.9627L27.5192 36.9627L29.9377 39.393L29.9377 20.75C29.9377 19.9561 30.5813 19.3125 31.3752 19.3125C32.1692 19.3125 32.8127 19.9561 32.8127 20.75L32.8127 39.393M32.3885 43.895C32.39 43.8935 32.3914 43.8921 32.3928 43.8907L32.8127 39.393M30.3577 43.8908C30.3573 43.8903 30.3568 43.8899 30.3564 43.8894L30.3577 43.8908Z"
                                                                        fill="white" stroke="white" />
                                                                </svg>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span class="font-w600 text-black">Wihtdraw</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-black">06:24:45 AM</span>
                                                        </td>
                                                        <td>
                                                            <span class="font-w600 text-black">-$912</span>
                                                        </td>
                                                        <td>
                                                            <a class="btn-link  text-danger float-right"
                                                                href="javascript:void(0);">Canceled</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span>
                                                                <svg width="63" height="63" viewBox="0 0 63 63" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <rect width="63" height="63" rx="14" fill="#625794" />
                                                                    <path
                                                                        d="M25.4813 24.6343L25.4813 24.6343L30.3544 19.7376C30.3571 19.7348 30.3596 19.7323 30.3619 19.7301M25.4813 24.6343L30.7116 20.0875L30.3587 19.7333C30.368 19.7241 30.3756 19.7172 30.3789 19.7143L30.38 19.7133C30.3775 19.7155 30.3709 19.7214 30.3627 19.7293C30.3625 19.7295 30.3622 19.7298 30.3619 19.7301M25.4813 24.6343C24.9214 25.197 24.9234 26.1071 25.4862 26.6672C26.0489 27.2273 26.9591 27.2251 27.5191 26.6624L27.5192 26.6624L29.9377 24.232M25.4813 24.6343L29.9377 24.232M30.3619 19.7301C30.9212 19.1741 31.8279 19.1724 32.389 19.7304C32.3902 19.7316 32.3914 19.7329 32.3927 19.7341L32.3941 19.7356L32.4062 19.7477L37.2691 24.6342L36.9147 24.9869L37.2692 24.6342C37.829 25.1968 37.8271 26.107 37.2642 26.6672C36.7015 27.2272 35.7914 27.225 35.2314 26.6623L35.2313 26.6623L32.8127 24.232L32.8127 42.875C32.8127 43.6689 32.1692 44.3125 31.3752 44.3125C30.5813 44.3125 29.9377 43.6689 29.9377 42.875L29.9377 24.232M30.3619 19.7301C30.3605 19.7315 30.3591 19.7329 30.3577 19.7343L29.9377 24.232M32.3927 19.7342C32.3932 19.7347 32.3937 19.7351 32.3941 19.7356L32.3927 19.7342Z"
                                                                        fill="white" stroke="white" />
                                                                </svg>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span class="font-w600 text-black">Topup</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-black">06:24:45 AM</span>
                                                        </td>
                                                        <td>
                                                            <span class="font-w600 text-black">+$7,762</span>
                                                        </td>
                                                        <td>
                                                            <a class="btn-link text-success float-right"
                                                                href="javascript:void(0);">Completed</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span>
                                                                <svg width="63" height="63" viewBox="0 0 63 63" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <rect width="63" height="63" rx="14" fill="#625794" />
                                                                    <path
                                                                        d="M25.4813 24.6343L25.4813 24.6343L30.3544 19.7376C30.3571 19.7348 30.3596 19.7323 30.3619 19.7301M25.4813 24.6343L30.7116 20.0875L30.3587 19.7333C30.368 19.7241 30.3756 19.7172 30.3789 19.7143L30.38 19.7133C30.3775 19.7155 30.3709 19.7214 30.3627 19.7293C30.3625 19.7295 30.3622 19.7298 30.3619 19.7301M25.4813 24.6343C24.9214 25.197 24.9234 26.1071 25.4862 26.6672C26.0489 27.2273 26.9591 27.2251 27.5191 26.6624L27.5192 26.6624L29.9377 24.232M25.4813 24.6343L29.9377 24.232M30.3619 19.7301C30.9212 19.1741 31.8279 19.1724 32.389 19.7304C32.3902 19.7316 32.3914 19.7329 32.3927 19.7341L32.3941 19.7356L32.4062 19.7477L37.2691 24.6342L36.9147 24.9869L37.2692 24.6342C37.829 25.1968 37.8271 26.107 37.2642 26.6672C36.7015 27.2272 35.7914 27.225 35.2314 26.6623L35.2313 26.6623L32.8127 24.232L32.8127 42.875C32.8127 43.6689 32.1692 44.3125 31.3752 44.3125C30.5813 44.3125 29.9377 43.6689 29.9377 42.875L29.9377 24.232M30.3619 19.7301C30.3605 19.7315 30.3591 19.7329 30.3577 19.7343L29.9377 24.232M32.3927 19.7342C32.3932 19.7347 32.3937 19.7351 32.3941 19.7356L32.3927 19.7342Z"
                                                                        fill="white" stroke="white" />
                                                                </svg>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span class="font-w600 text-black">Topup</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-black">06:24:45 AM</span>
                                                        </td>
                                                        <td>
                                                            <span class="font-w600 text-black">+$5,553</span>
                                                        </td>
                                                        <td>
                                                            <a class="btn-link text-success float-right"
                                                                href="javascript:void(0);">Completed</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span>
                                                                <svg width="63" height="63" viewBox="0 0 63 63" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <rect width="63" height="63" rx="14" fill="#625794" />
                                                                    <path
                                                                        d="M37.2692 38.9908L37.2692 38.9908L32.3961 43.8874C32.3934 43.8902 32.3909 43.8927 32.3885 43.895M37.2692 38.9908L32.0389 43.5375L32.3918 43.8917C32.3825 43.9009 32.3749 43.9078 32.3716 43.9107L32.3705 43.9117C32.373 43.9095 32.3796 43.9036 32.3877 43.8957C32.388 43.8955 32.3883 43.8952 32.3885 43.895M37.2692 38.9908C37.8291 38.4281 37.827 37.5179 37.2643 36.9578C36.7016 36.3978 35.7914 36.3999 35.2314 36.9626L35.2313 36.9627L32.8127 39.393M37.2692 38.9908L32.8127 39.393M32.3885 43.895C31.8292 44.4509 30.9226 44.4526 30.3615 43.8946C30.3603 43.8934 30.3591 43.8922 30.3578 43.8909L30.3563 43.8894L30.3442 43.8773L25.4813 38.9908L25.8357 38.6381L25.4813 38.9908C24.9215 38.4282 24.9234 37.518 25.4862 36.9578C26.049 36.3978 26.9591 36.4 27.5191 36.9627L27.5192 36.9627L29.9377 39.393L29.9377 20.75C29.9377 19.9561 30.5813 19.3125 31.3752 19.3125C32.1692 19.3125 32.8127 19.9561 32.8127 20.75L32.8127 39.393M32.3885 43.895C32.39 43.8935 32.3914 43.8921 32.3928 43.8907L32.8127 39.393M30.3577 43.8908C30.3573 43.8903 30.3568 43.8899 30.3564 43.8894L30.3577 43.8908Z"
                                                                        fill="white" stroke="white" />
                                                                </svg>
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span class="font-w600 text-black">Withdraw</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-black">06:24:45 AM</span>
                                                        </td>
                                                        <td>
                                                            <span class="font-w600 text-black">-$912</span>
                                                        </td>
                                                        <td>
                                                            <a class="btn-link text-danger float-right"
                                                                href="javascript:void(0);">Canceled</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer border-0 p-0 caret">
                                    <a href="coin-details.html" class="btn-link mt-1"><i class="fa fa-caret-down"
                                            aria-hidden="true"></i></a>
                                </div>
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

{{-- //modal for set wallet_address --}}
<div class="modal fade" id="basicModal2">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Set Your Wallet Addres</h5>
                <button type="button" class="close"
                    data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="basic-form">
                    <form method="POST" action="{{ url('update-wallet-address') }}">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control input" placeholder="Enter Your Wallet Address"
                                name="wallet_address" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success w-100">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light"
                    data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@endsection
