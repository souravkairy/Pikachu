@extends('backend.admin.dashboard.index')
@section('content')

             <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
			<div class="container-fluid">
                <!-- row -->
                <div class="row">
					<div class="col-xl-4 col-xxl-6 col-lg-6">
                        <div class="card">
                            <div class="card-header border-0 pb-0">
                                <h4 class="card-title">Your Work</h4>
                            </div>
                            <div class="card-body">
                                <div id="DZ_W_TimeLine" class="widget-timeline dz-scroll height370">
                                    <ul class="timeline">
                                        <li>
                                            <div class="timeline-badge primary"></div>
                                            <a class="timeline-panel text-muted" href="#">
                                                <span>10 minutes </span>
                                                <h6 class="mb-0">Video Link<strong class="text-primary">(youtube)</strong>.</h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge info">
                                            </div>
                                            <a class="timeline-panel text-muted" href="#">
                                                <span>20 minutes </span>
                                                <h6 class="mb-0">Video Link <strong class="text-info">(youtube)</strong></h6>

                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge danger">
                                            </div>
                                            <a class="timeline-panel text-muted" href="#">
                                                <span>30 minutes </span>
                                                <h6 class="mb-0">Video Link <strong class="text-warning">(youtube)</strong></h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge success">
                                            </div>
                                            <a class="timeline-panel text-muted" href="#">
                                                <span>15 minutes </span>
                                                <h6 class="mb-0">Video Link</h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge warning">
                                            </div>
                                            <a class="timeline-panel text-muted" href="#">
                                                <span>20 minutes </span>
                                                <h6 class="mb-0">Video Link</h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge dark">
                                            </div>
                                            <a class="timeline-panel text-muted" href="#">
                                                <span>20 minutes </span>
                                                <h6 class="mb-0">Video Link</h6>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
					</div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Done Work List</h4>
                            </div>
                            <div class="card-body">
                                <div id="accordion-one" class="accordion accordion-primary">
                                    <div class="accordion__item">
                                        <div class="accordion__header collapsed rounded-lg" data-toggle="collapse"
                                            data-target="#default_collapseTwo">
                                            <span class="accordion__header--text">Wallet</span>
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
        <!--**********************************
            Content body end
        ***********************************-->
@endsection
