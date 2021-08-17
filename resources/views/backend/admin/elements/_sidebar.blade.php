@extends('backend.admin.dashboard.index')
@section('sidebar')
{{-- @php

echo "<pre>";
print_r(Auth::user()->user);
exit();
@endphp --}}
    <!--**********************************
        Sidebar start
    ***********************************-->
    <div class="deznav">
        <div class="deznav-scroll">
            <ul class="metismenu" id="menu">
                <li><a href="{{url('/admin/home')}}" aria-expanded="false">
                        <i class="flaticon-144-layout"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>
                @if(Auth::user()->user == 1)
                <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-077-menu-1"></i>
                        <span class="nav-text">Users</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{!! url('new-users') !!}">New Users</a></li>
                        <li><a href="{!! url('active-users') !!}">Active Users</a></li>
                        <li><a href="{!! url('de-actived-users') !!}">De-Avtive Users</a></li>
                        <li><a href="{!! url('pending-packages') !!}">Pending Packages</a></li>
                        <li><a href="{!! url('active-packages') !!}">Avtive Packages</a></li>
                        <li><a href="{!! url('de-actived-packages') !!}">De-Avtive Packages</a></li>

                    </ul>
                </li>

                @else
                @endif
                @if(Auth::user()->withdraw == 1)

                <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-network"></i>
                    <span class="nav-text">Withdraw</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{!! url('pending-withdraw-list') !!}">Pending Request</a></li>
                    <li><a href="{!! url('completed-withdraw-list') !!}">Completed Withdraw</a></li>
                </ul>

            </li>


                </li>
                @else
                @endif
                @if(Auth::user()->workStation == 1)

                <li><a href="{!! url('work-station-setting') !!}" aria-expanded="false">
                        <i class="flaticon-061-puzzle"></i>
                        <span class="nav-text">Work Station Setting</span>
                    </a>
                </li>
                @else
                @endif
                @if(Auth::user()->wallet == 1)
                <li><a href="{!! url('wallet-setting') !!}" aria-expanded="false">
                        <i class="flaticon-003-diamond"></i>
                        <span class="nav-text">Wallet Setting</span>
                    </a>
                </li>
                @else
                @endif
                @if(Auth::user()->package == 1)
                <li><a href="{!!url('package-setting')!!}" class="ai-icon" aria-expanded="false">
                        <i class="flaticon-381-settings-1"></i>
                        <span class="nav-text">Package Setting</span>
                    </a>
                </li>
                @else
                @endif
                @if(Auth::user()->commission == 1)
                <li><a href="{!!url('commisions-setting')!!}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-settings-3"></i>
                    <span class="nav-text">Commisions Setting</span>
                </a>
                </li>
                @else
                @endif
                <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-053-heart"></i>
                        <span class="nav-text">Contact Messages</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{url('contact-inbox')}}">Inbox</a></li>
                        {{-- <li><a href="#">Sent</a></li> --}}
                    </ul>
                </li>

                 @if(Auth::user()->setting == 1)
                <li><a href="{{url('site-setting')}}" class="ai-icon" aria-expanded="false">
                        <i class="flaticon-381-settings-2"></i>
                        <span class="nav-text">Site-Setting</span>
                    </a>
                </li>
                @else
                @endif
                @if(Auth::user()->type == 1)
                <li><a href="{{route('user-role')}}" aria-expanded="false">
                        <i class="flaticon-044-file"></i>
                        <span class="nav-text">Admin-Role-Setting</span>
                    </a>
                </li>
                @else
                @endif
            </ul>
            <div class="copyright">
                <p><strong>PIKAFUTURE Admin Dashboard</strong> © 2021 All Rights Reserved</p>
            </div>
        </div>
    </div>
    <!--**********************************
        Sidebar end
    ***********************************-->
@endsection



