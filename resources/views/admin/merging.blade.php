@extends('admin.content')
@section('content')


    <!-- Breadcrumb Area -->
    <div class="breadcrumb-area">
        <h1>Merging Employer's Job to Candidate</h1>
        <ol class="breadcrumb">
            <li class="item"><a href="{{route('admin.home')}}">Home</a></li>
            <li class="item"><a href="">Dashboard</a></li>
            <li class="item">Merging Employer's Job to Candidate</li>
        </ol>
    </div>
    <!-- End Breadcrumb Area -->

    <!-- Start Post a New Job Area -->
    <div class="post-a-new-job-box">
        <h3>Merging Employer's Job to Candidate</h3>


        @if(session('error'))
            <div class="notification-alert alert alert-danger alert-dismissible fade show" role="alert">
                {{session('error')}}
                <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif

        @if(session('response'))
            <div class="notification-alert alert alert-success alert-dismissible fade show" role="alert">
                {{session('response')}}
                <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif


    <div class="post-a-new-job-box">

        @if($jobs->count() == 1)
            @foreach($jobs as $row)
            <h3>JOB TITLE : {{$row->skills}}</h3>
            @endforeach
        @endif

        <form method="post" action="{{ route('admin.request.merge.save')}}"  enctype="multipart/form-data" style="color:#000000;">
            {{ csrf_field() }}
            <div class="row">

                <div class="col-lg-12 col-md-12">


                    <div class="form-group">
                        <select name="job_id" class="form-control">
                            <option>Select Employers Job</option>
                            @foreach($jobs as $row)
                                <option value="{{$row->id}}">{{$row->full_name}} ( {{$row->job_title}} )</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="form-group">
                        <select name="candidate_id" class="form-control">
                            <option>Select Candidate</option>
                            @foreach($candidate as $row)
                                <option value="{{$row->id}}">{{$row->full_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <button type="submit" class="default-btn">Submit<i class="flaticon-send"></i></button>
                </div>
            </div>
        </form>
    </div>
    </div>
    <!-- End Post a New Job Area -->


@endsection
