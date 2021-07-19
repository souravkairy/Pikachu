@extends('backend.admin.dashboard.index')
@section('content')

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
			<div class="container-fluid">
				<!-- Add Project -->
				<div class="modal fade" id="addProjectSidebar">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Create Project</h5>
								<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="form-group">
										<label class="text-black font-w500">Project Name</label>
										<input type="text" class="form-control">
									</div>
									<div class="form-group">
										<label class="text-black font-w500">Deadline</label>
										<input type="date" class="form-control">
									</div>
									<div class="form-group">
										<label class="text-black font-w500">Client Name</label>
										<input type="text" class="form-control">
									</div>
									<div class="form-group">
										<button type="button" class="btn btn-primary">CREATE</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Add Member In Your Downline</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form class="form-valide-with-icon" action="#">
                                        <div class="form-group">
                                            <label class="text-label">Reffered By</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"> <i class="fa fa-link"></i> </span>
                                                </div>
                                                <input type="text" class="form-control" id="" name="val-username" value="Link of the user" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="text-label">Name</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                                </div>
                                                <input type="text" class="form-control" id="" name="val-username" placeholder="Enter Name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="text-label">Email</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                                </div>
                                                <input type="text" class="form-control" id="" name="val-username" placeholder="Enter Email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="text-label">Username</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                                                </div>
                                                <input type="text" class="form-control" id="val-username1" name="val-username" placeholder="Enter Username">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="text-label">Password *</label>
                                            <div class="input-group transparent-append">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                                </div>
                                                <input type="password" class="form-control" id="dz-password" name="val-password" placeholder="Choose a safe one..">
                                                <div class="input-group-append show-pass ">
                                                    <span class="input-group-text ">
														<i class="fa fa-eye-slash"></i>
														<i class="fa fa-eye"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="form-group">
                                            <div class="form-check">
                                                <input id="checkbox1" class="form-check-input" type="checkbox">
                                                <label for="checkbox1" class="form-check-label">Check me out</label>
                                            </div>
                                        </div> --}}
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
