@extends('shared.layouts.users')
@section('content')


    <!-- Breadcrumb Area -->
    <div class="breadcrumb-area">
        <h1>Profile Picture</h1>
        <ol class="breadcrumb">
            <li class="item"><a href="{{route('admin.home')}}">Home</a></li>
            <li class="item"><a href="#">Dashboard</a></li>
            <li class="item">Add Profile Picture</li>
        </ol>
    </div>
    <!-- End Breadcrumb Area -->

    @include('shared.util.profile_photo')


@endsection
