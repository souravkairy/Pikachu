@extends('backend.admin.dashboard.index')
@section('sidebar')

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
                    <li><a href="{{url('/user-wallet')}}" aria-expanded="false">
							<i class="flaticon-144-layout"></i>
							<span class="nav-text">My Wallet</span>
						</a>
                    </li>
                    @if (Auth::user()->status == 1)
                    <li><a href="{!!url('user-work-station')!!}" aria-expanded="false">
						<i class="flaticon-077-menu-1"></i>
							<span class="nav-text">Work Station</span>
						</a>
                    </li>
                    @endif
                    <li><a href="{!!url('packages')!!}" aria-expanded="false">
							<i class="flaticon-003-diamond"></i>
							<span class="nav-text">Buy Package</span>
						</a>
                    </li>
                    @if (Auth::user()->status == 1)
                    <li><a href="{!!url('user-add-member')!!}" aria-expanded="false">
                        <i class="flaticon-061-puzzle"></i>
                        <span class="nav-text">Add Member</span>
                    </a>
                    </li>
                    <li><a href="{!!url('downline-members')!!}" aria-expanded="false">
                        <i class="flaticon-381-network"></i>
                        <span class="nav-text">Downline Members</span>
                    </a>
                    </li>
                    @endif


                </ul>
				<div class="copyright">
					<p><strong>PIKAFUTURE Admin Dashboard</strong> © 2021 All Rights Reserved</p>
					{{-- <p class="fs-12">Developed <span class="heart"></span> by DexignZone</p> --}}
				</div>
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
@endsection
