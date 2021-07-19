@extends('backend.admin.dashboard.index')
@section('sidebar')

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
                    <li><a href="{{url('/admin-dashboard')}}" aria-expanded="false">
							<i class="flaticon-144-layout"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
						<i class="flaticon-077-menu-1"></i>
							<span class="nav-text">Users</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{!!url('new-users')!!}">New User</a></li>
							<li><a href="{!!url('pending-users')!!}">Pending User</a></li>
							<li><a href="{!!url('active-users')!!}">Active User</a></li>

                        </ul>
                    </li>
                    <li><a href="{!!url('work-station-setting')!!}" aria-expanded="false">
							<i class="flaticon-061-puzzle"></i>
							<span class="nav-text">Work Station Setting</span>
						</a>

                    </li>
                    <li><a href="{!!url('wallet-setting')!!}" aria-expanded="false">
							<i class="flaticon-003-diamond"></i>
							<span class="nav-text">Wallet Setting</span>
						</a>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-053-heart"></i>
							<span class="nav-text">Contact Messages</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="./uc-select2.html">Inbox</a></li>
                            <li><a href="./uc-nestable.html">Sent</a></li>
                        </ul>
                    </li>
                    <li><a href="widget-basic.html" class="ai-icon" aria-expanded="false">
							<i class="flaticon-381-settings-2"></i>
							<span class="nav-text">Site-Setting</span>
						</a>
					</li>
                    <li><a href="javascript:void()" aria-expanded="false">
							<i class="flaticon-044-file"></i>
							<span class="nav-text">Admin-Role-Setting</span>
						</a>
                    </li>
                </ul>
				<div class="copyright">
					<p><strong>Pikachu Admin Dashboard</strong> © 2021 All Rights Reserved</p>
					{{-- <p class="fs-12">Developed <span class="heart"></span> by DexignZone</p> --}}
				</div>
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
@endsection
