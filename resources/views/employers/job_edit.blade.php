@extends('shared.layouts.users')
@section('content')


    <!-- Breadcrumb Area -->
    <div class="breadcrumb-area">
        <h1>Edit Job</h1>
        <ol class="breadcrumb">
            <li class="item"><a href="{{route('employer.home')}}">Home</a></li>
            <li class="item"><a href="{{route('employer.job.request')}}">Dashboard</a></li>
            <li class="item">Edit Job</li>
        </ol>
    </div>
    <!-- End Breadcrumb Area -->

    <!-- Start Post a New Job Area -->
    <div class="post-a-new-job-box">


        <h3>Edit Your Job</h3>
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

        @foreach($jobs as $job)
        <form method="post" action="{{ route('employer.job.edit.save')}}"  enctype="multipart/form-data" style="color:#000000;">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="form-group">
                        <label>Job Title</label>
                        <input type="text" class="form-control" placeholder="Job Title Here" name="job_title" value="{{$job->job_title}}">
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="form-group">
                        <label>Job Description</label>
                        <textarea cols="30" rows="6" placeholder="Short description..." class="form-control" name="job_description">
                            {{$job->job_description}}
                        </textarea>
                    </div>
                </div>


                <div class="col-xl-6 col-lg-12 col-md-12">
                    <div class="form-group">
                        <label>Job Type</label>

                        <select class="selectize-filter selectized" tabindex="-1" style="display: none;" name="job_type">
                            <option value="{{$job->job_type}}" selected="selected">{{$job->job_type}}</option>
                            <option value="Full-Time" selected="selected">Full-Time</option>
                            <option value="Part-Time" selected="selected">Part-Time</option>
                            <option value="Contract" selected="selected">Contract</option>
                            <option value="Temporary" selected="selected">Temporary</option>
                        </select>

                    </div>
                </div>

                <div class="col-xl-6 col-lg-12 col-md-12">
                    <div class="form-group">
                        <label>Job category</label>
                        <select class="selectize-filter" name="job_category">
                            <option  value="{{$job->business_category_id}}">{{$job->business_category_name}}</option>
                            @foreach($category as $row)
                                <option value="{{$row->id}}">{{$row->title}}</option>
                            @endforeach
                        </select>

                    </div>
                </div>

                <div class="col-xl-6 col-lg-12 col-md-12">
                    <div class="form-group">
                        <label>Skill Level</label>

                        <select class="selectize-filter selectized" tabindex="-1" style="display: none;" name="itSkills">
                            <option value="Skilled" selected="selected">{{$row->itSkills}}</option>
                            <option value="Skilled" selected="selected">Skilled</option>
                            <option value="Semi skilled" selected="selected">Semi skilled</option>
                            <option value="Internship/Graduate Training" selected="selected">Internship/Graduate Training</option>
                            <option value="Unskilled" selected="selected">Unskilled</option>
                        </select>

                    </div>
                </div>

                <div class="col-xl-6 col-lg-12 col-md-12">
                    <div class="form-group">
                        <label>Academic Qualification</label>
                        <input type="text" class="form-control" placeholder="Career Level" name="career_level" value="{{$job->level_of_education}}">
                    </div>
                </div>

                <div class="col-xl-6 col-lg-12 col-md-12">
                    <div class="form-group">
                        <label>How many people do you want to hire for this opening?</label>
                        <input type="text" class="form-control"  name="position" value="{{$job->position}}">

                    </div>
                </div>

                <div class="col-xl-6 col-lg-12 col-md-12">
                    <div class="form-group">
                        <label>Gender</label>
                        <select class="form-control" name="gender">
                            <option value="{{$job->gender}}">{{$job->gender}}</option>
                            <option value="No Preference">No Preference</option>
                            <option value="Male" selected="selected">Male</option>
                            <option value="Female" selected="selected">Female</option>

                        </select>

                    </div>
                </div>

                <div class="col-xl-6 col-lg-12 col-md-12">
                    <div class="form-group">
                        <label>YOUR COMPANY'S NAME</label>
                        <input type="text" class="form-control" placeholder="Industry" name="company" value="{{$job->company}}">
                    </div>
                </div>

                <div class="col-xl-6 col-lg-12 col-md-12">
                    <div class="form-group">
                        <label>Compensation Type </label>

                        <select  class="form-control" id="select" name="compensation_type">
                            <option value="pay per job">Pay Per Job</option>
                            <option value="salary">Salary</option>

                        </select>

                    </div>
                </div>

                <div class="col-xl-6 col-lg-12 col-md-12" id="compensation">
                    <div class="form-group">
                        <label>Proposed Minimum Salary </label>
                        <input type="number" class="form-control"  name="min_amount">

                    </div>
                </div>

                <div class="col-xl-6 col-lg-12 col-md-12" id="compensation2">
                    <div class="form-group">
                        <label>Proposed Maximum Salary </label>
                        <input type="number" class="form-control" name="max_amount">

                    </div>
                </div>


                <div class="col-xl-6 col-lg-12 col-md-12">
                    <div class="form-group">
                        <label>Application Deadline Date</label>
                        <input type="date" class="form-control" placeholder="Application Deadline Date" name="application_deadline" value="{{$job->application_deadline}}">
                    </div>
                </div>

                <div class="col-xl-6 col-lg-12 col-md-12">
                    <div class="form-group">
                        <label>State</label>
                        <select name="state" id="state" class="form-control">
                            <option value="{{ $job->state_id }}">{{ $job->state }}</option>
                            @foreach ($states as $rw)
                                <option  value="{{ $rw->id }}">{{ $rw->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>


                <div class="col-xl-6 col-lg-12 col-md-12">
                    <div class="form-group">
                        <label>State Areas</label>
                        <select name="state_area" class="form-control">
                            <option value="{{ $job->city }}">{{ $job->city }}</option>
                        </select>

                    </div>
                </div>



                <input type="hidden"  name="id" value="{{$job->id}}">
                <div class="col-lg-12 col-md-12">
                    <button type="submit" class="default-btn">Post A Job <i class="flaticon-send"></i></button>
                </div>
            </div>
        </form>
        @endforeach
    </div>
    <!-- End Post a New Job Area -->


@endsection
