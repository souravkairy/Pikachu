@extends('backend.admin.dashboard.index')
@section('sidebar')

<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li><a href="{!!url('admin-dashboard')!!}" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-television"></i>
                    <span class="nav-text">Users</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{!!url('pending-users')!!}">Pending Users</a></li>
                    <li><a href="{!!url('active-users')!!}">Active Users</a></li>
                </ul>
            </li>
            <li><a href="{!!url('work-station-setting')!!}" aria-expanded="false">
                    <i class="flaticon-381-controls-3"></i>
                    <span class="nav-text">Work Station Setting</span>
                </a>
            </li>
            <li><a href="{!!url('package-setting')!!}" aria-expanded="false">
                    <i class="flaticon-381-internet"></i>
                    <span class="nav-text">Package Setting</span>
                </a>
            </li>
            <li><a href="{!!url('wallet-setting')!!}" aria-expanded="false">
                    <i class="flaticon-381-heart"></i>
                    <span class="nav-text">Wallet Setting</span>
                </a>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-notepad"></i>
                    <span class="nav-text">Contact Messages</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{!!url('contact-inbox')!!}">Inbox</a></li>
                    <li><a href="{!!url('contact-sent')!!}">Sent</a></li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-network"></i>
                    <span class="nav-text">Site Setting</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{!!url('site-setting')!!}">Site Setting</a></li>
                </ul>
            </li>
            <li><a href="{!!url('admin-role-setting')!!}" class="ai-icon" aria-expanded="false">
                <i class="flaticon-381-settings-2"></i>
                <span class="nav-text">Admin Role Setting</span>
            </a>
        </li>
        </ul>

        <div class="add-menu-sidebar">
            <p>Generate Monthly Credit Report</p>
            <a href="javascript:void(0);">
            <svg width="24" height="12" viewBox="0 0 24 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M23.725 5.14889C23.7248 5.14861 23.7245 5.14828 23.7242 5.148L18.8256 0.272997C18.4586 -0.0922062 17.865 -0.0908471 17.4997 0.276184C17.1345 0.643169 17.1359 1.23675 17.5028 1.602L20.7918 4.875H0.9375C0.419719 4.875 0 5.29472 0 5.8125C0 6.33028 0.419719 6.75 0.9375 6.75H20.7917L17.5029 10.023C17.1359 10.3882 17.1345 10.9818 17.4998 11.3488C17.865 11.7159 18.4587 11.7172 18.8256 11.352L23.7242 6.477C23.7245 6.47672 23.7248 6.47639 23.7251 6.47611C24.0923 6.10964 24.0911 5.51414 23.725 5.14889Z" fill="white"/>
            </svg>
            </a>
        </div>
        <div class="copyright">
            <p><strong>Chrev - Crypto Admin Dashboard</strong> © 2020 All Rights Reserved</p>
            <p>Made with <i class="fa fa-heart"></i> by DexignZone</p>
        </div>
    </div>
</div>
@endsection
