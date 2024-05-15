@extends('admin.content')
@section('content')

    <!-- Breadcrumb Area -->
    <div class="breadcrumb-area">
        <h1>Employer's Jobs</h1>
        <ol class="breadcrumb">
            <li class="item"><a href="#">Home</a></li>
            <li class="item"><a href="#">Dashboard</a></li>
            <li class="item">Employer's Jobs</li>
        </ol>
    </div>
    <!-- End Breadcrumb Area -->

    <!-- Start Manage Jobs Area -->
    <div class="manage-jobs-box">
        <h3>Employer's Jobs</h3>


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

        <div class="manage-jobs-table table-responsive">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>FullName</th>
                    <th>Email</th>
                    <th>Job Title</th>
                    <th>Status</th>
                    <th>View</th>
                    <th>Action</th>


                </tr>
                </thead>

                <tbody>

                @foreach($jobs as $row)
                    <tr>
                        <td>
                            <h5>{{$row->firstname}} </h5>

                        </td>
                        <td>{{$row->email}}</td>
                        <td>{{$row->job_title}}</td>
                        <td>
                            @if($row->status == 1)
                                Active
                            @else
                                InActive
                                @endif</td>

                        <td><a href="{{url('job/'.$row->url)}}" target="_blank"><i class="ri-eye-line"></i></a></td>
                        <td>
                            <ul class="option-list">

                                <li> <form action="{{route('employer.job.index.updated')}}" method="post" class="login">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="id" value="{{$row->id}}"  />
                                        <input type="hidden" name="status" value="1"  />
                                        <button class="option-btn d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Approve Aplication" type="submit">
                                            <i class="ri-check-line"></i>
                                        </button>
                                    </form>
                                </li>

                                <li> <form action="{{route('employer.job.index.updated')}}" method="post" class="login">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="id" value="{{$row->id}}"  />
                                        <input type="hidden" name="status" value="0"  />
                                        <button class="option-btn d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top"title="Reject Aplication"  type="submit">
                                            <i class="ri-close-line"></i>
                                        </button>
                                    </form>
                                </li>

                            </ul>
                        </td>

                    </tr>
                @endforeach


                </tbody>
            </table>

            {{$jobs->links()}}
        </div>
    </div>
    <!-- End Manage Jobs Area -->

@endsection
