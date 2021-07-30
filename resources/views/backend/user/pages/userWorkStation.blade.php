@extends('backend.admin.dashboard.index')
@section('content')
{{-- <?php
if (session::get('dd')) {
    print_r(session::get('dd');
}
?> --}}
             <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
			<div class="container-fluid">
                <!-- row -->
                <div class="row">
                    <div class="col-xl-12 col-xxl-12 col-lg-12">
                        <div class="card">
                            <strong class="p-3 text-center text-primary">You have to complete all the task, then the commision will add in Your
                                Account.
                            </strong>

                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2">

                    </div>
					<div class="col-xl-8 col-xxl-8 col-lg-8">
                        <div class="card">
                            <div class="card-header border-0 pb-0">
                                <h4 class="card-title">Your Work</h4>
                            </div>
                            <div class="card-body">
                                <div id="DZ_W_TimeLine" class="widget-timeline dz-scroll height370">
                                    <ul class="timeline">
                                        <li>
                                            <div class="timeline-badge primary"></div>
                                            <a target="_blank" class="timeline-panel text-muted" href="{{$dailyWorks->link1}}">
                                                <span>5 minutes </span>
                                                <h6 class="mb-0">Video Link<strong class="text-primary">(youtube)</strong>.</h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge info">
                                            </div>
                                            <a target="_blank" class="timeline-panel text-muted" href="{{$dailyWorks->link2}}">
                                                <span>5 minutes </span>
                                                <h6 class="mb-0">Video Link <strong class="text-info">(youtube)</strong></h6>

                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge danger">
                                            </div>
                                            <a target="_blank" class="timeline-panel text-muted" href="{{$dailyWorks->link3}}">
                                                <span>5 minutes </span>
                                                <h6 class="mb-0">Video Link <strong class="text-warning">(youtube)</strong></h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge success">
                                            </div>
                                            <a target="_blank" class="timeline-panel text-muted" href="{{$dailyWorks->link4}}">
                                                <span>5 minutes </span>
                                                <h6 class="mb-0">Video Link <strong class="text-warning">(youtube)</strong></h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge success">
                                            </div>
                                            <a class="timeline-panel text-muted" href="{{url('update-work-status')}}">
                                                <span>5 minutes </span>
                                                <h6 class="mb-0">Video Link <strong class="text-info">(youtube)</strong></h6>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
					</div>
                    <div class="col-xl-2 col-lg-2">

                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
@endsection
