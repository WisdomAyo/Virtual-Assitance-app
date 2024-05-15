
@extends('shared.layouts.admin')
@section('content')
    <!-- Breadcrumb Area -->
    <div class="breadcrumb-area">
        <h1>welcome, {{Auth::user()->firstname}}</h1>
        <ol class="breadcrumb">
            <li class="item"><a href="{{route('admin.home')}}">Home</a></li>
            <li class="item">Dashboard</li>
        </ol>
    </div>
    <!-- End Breadcrumb Area -->

    <!-- Start Notification Alert Area -->
{{--    <div class="notification-alert alert alert-success alert-dismissible fade show" role="alert">--}}
{{--        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.--}}
{{--        <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">--}}
{{--            <span aria-hidden="true">&times;</span>--}}
{{--        </button>--}}
{{--    </div>--}}
    <!-- End Notification Alert Area -->

    <!-- Start Dashboard Fun Fact Area -->
    <div class="dashboard-fun-fact-area">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="stats-fun-fact-box">
                    <div class="icon-box">
                        <i class="ri-briefcase-line"></i>
                    </div>
                    <span class="sub-title">Posted Jobs</span>
                    <h3>{{$jobs}}</h3>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="stats-fun-fact-box">
                    <div class="icon-box">
                        <i class="ri-file-list-line"></i>
                    </div>
                    <span class="sub-title">Requests</span>
                    <h3>{{$request}}</h3>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="stats-fun-fact-box">
                    <div class="icon-box">
                        <i class="ri-chat-2-line"></i>
                    </div>
                    <span class="sub-title">Messages</span>
                    <h3>{{$messages}}</h3>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="stats-fun-fact-box">
                    <div class="icon-box">
                        <i class="ri-bookmark-line"></i>
                    </div>
                    <span class="sub-title">Services</span>
                    <h3>{{$service}}</h3>
                </div>
            </div>
        </div>




    </div>
    <!-- End Dashboard Fun Fact Area -->

    <div class="all-applicants-box">
        <h2>Recent Applicants</h2>

        <div class="row">
            @foreach($requests as $row)

                @include('shared.util.applicant')

            @endforeach
        </div>
    </div>

@endsection
