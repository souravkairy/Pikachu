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
            <div class="row">
                <div class="col-xl-12 mt-2">
                    <div class="card">
                        <div class="card-header d-sm-flex d-block pb-0 border-0">
                            <div>
                                <h4 class="fs-20 text-black">First Level <strong>({{$level1->count()}}p)</strong></h4>
                                <p class="mb-0 fs-12">From first level refer you will get 12% from profit</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="testimonial-one px-4 owl-right-nav owl-carousel owl-loaded owl-drag">
                                @forelse ($level1 as $item)
                                <div class="items">
                                    <div class="text-center">
                                        <img class="mb-3 rounded"
                                            src="{{ asset('Backend/assets/images/contacts/Untitled-1.jpg') }}" alt="">
                                        <h5 class="mb-0"><a class="text-black" href="javascript:void(0);">{{$item->ref_link}}</a></h5>
                                        {{-- <span class="fs-12">@sam224</span> --}}
                                    </div>
                                </div>
                                @empty
                                    {{-- <h6>No Members In Downline</h6> --}}
                                @endforelse

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 mt-2">
                    <div class="card">
                        <div class="card-header d-sm-flex d-block pb-0 border-0">
                            <div>
                                <h4 class="fs-20 text-black">Second Level <strong>({{$level2->count()}}p)</strong></h4>
                                <p class="mb-0 fs-12">From first level refer you will get 8% from profit</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="testimonial-one px-4 owl-right-nav owl-carousel owl-loaded owl-drag">
                                @forelse ($level2 as $item)
                                <div class="items">
                                    <div class="text-center">
                                        <img class="mb-3 rounded"
                                            src="{{ asset('Backend/assets/images/contacts/Untitled-1.jpg') }}" alt="">
                                        <h5 class="mb-0"><a class="text-black" href="javascript:void(0);">{{$item->ref_link}}</a></h5>
                                        {{-- <span class="fs-12">@sam224</span> --}}
                                    </div>
                                </div>
                                @empty
                                    {{-- <h6>No Members In Downline</h6> --}}
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 mt-2">
                    <div class="card">
                        <div class="card-header d-sm-flex d-block pb-0 border-0">
                            <div>
                                <h4 class="fs-20 text-black">Third Level <strong>({{$level3->count()}}p)</strong></h4>
                                <p class="mb-0 fs-12">From first level refer you will get 5% from profit</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="testimonial-one px-4 owl-right-nav owl-carousel owl-loaded owl-drag">
                                @forelse ($level3 as $item)
                                <div class="items">
                                    <div class="text-center">
                                        <img class="mb-3 rounded"
                                            src="{{ asset('Backend/assets/images/contacts/Untitled-1.jpg') }}" alt="">
                                        <h5 class="mb-0"><a class="text-black" href="javascript:void(0);">{{$item->ref_link}}</a></h5>
                                        {{-- <span class="fs-12">@sam224</span> --}}
                                    </div>
                                </div>
                                @empty
                                    {{-- <h6>No Members In Downline</h6> --}}
                                @endforelse
                            </div>
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

@endsection
