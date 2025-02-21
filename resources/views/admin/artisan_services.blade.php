@extends('admin.content')
@section('content')

    <!-- Breadcrumb Area -->
    <div class="breadcrumb-area">
        <h1>Artisan Services</h1>
        <ol class="breadcrumb">
            <li class="item"><a href="dashboard.html">Home</a></li>
            <li class="item"><a href="dashboard.html">Dashboard</a></li>
            <li class="item">Artisan Services</li>
        </ol>
    </div>
    <!-- End Breadcrumb Area -->

    <!-- Start Manage Jobs Area -->
    <div class="manage-jobs-box">
        <h3>Artisan Services</h3>

        <div class="manage-jobs-table table-responsive">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>FullName</th>
                    <th>Email</th>
                    <th>Service title</th>
                    <th>Service Category</th>
                    <th>Cost</th>
                    <th>City</th>
                    <th>State</th>

                </tr>
                </thead>

                <tbody>

                @foreach($artisan_services as $row)
                    <tr>
                        <td>
                            <h5>{{$row->full_name}} </h5>

                        </td>
                        <td>{{$row->email}}</td>
                        <td>{{$row->title}}</td>
                        <td>{{$row->business_category}}</td>
                        <td>{{$row->cost}}</td>
                        <td>{{$row->city}}</td>
                        <td>{{$row->state}}</td>

                        </td>
                    </tr>
                @endforeach


                </tbody>
            </table>
        </div>
    </div>
    <!-- End Manage Jobs Area -->

@endsection
