@extends('admin.content')
@section('content')

    <!-- Breadcrumb Area -->
    <div class="breadcrumb-area">
        <h1>Subscription</h1>
        <ol class="breadcrumb">
            <li class="item"><a href="dashboard.html">Home</a></li>
            <li class="item"><a href="dashboard.html">Dashboard</a></li>
            <li class="item">Subscription</li>
        </ol>
    </div>
    <!-- End Breadcrumb Area -->

    <!-- Start Manage Jobs Area -->
    <div class="manage-jobs-box">
        <h3>Subscription</h3>

        <div class="manage-jobs-table table-responsive">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Service Purchase</th>
                    <th>Package</th>
                    <th>Cost</th>
                    <th>Subscription Type</th>
                    <th>Purchase Date</th>
                    <th>Action</th>
                </tr>
                </thead>

                <tbody>

                @foreach($subscriptions as $row)
                    <tr>
                        <td>
                            <h5>Product Designer</h5>
                            <span><i class="ri-map-pin-line"></i> 32, Wales Street, New York, USA</span>
                        </td>
                        <td><a href="#">5+ Applied</a></td>
                        <td>November 27, 2020, to December 25, 2021</td>
                        <td>November 27, 2020, to December 25, 2021</td>
                        <td>November 27, 2020, to December 25, 2021</td>
                        <td>November 27, 2020, to December 25, 2021</td>
                        <td>November 27, 2020, to December 25, 2021</td>

                        <td class="status">Active</td>
                        <td>
                            <ul class="option-list">
                                <li><button class="option-btn d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="View Aplication" type="button"><i class="ri-eye-line"></i></button></li>
                                <li><button class="option-btn d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Approve Aplication" type="button"><i class="ri-check-line"></i></button></li>
                                <li><button class="option-btn d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Reject Aplication" type="button"><i class="ri-close-line"></i></button></li>
                                <li><button class="option-btn d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Aplication" type="button"><i class="ri-delete-bin-line"></i></button></li>
                            </ul>
                        </td>
                    </tr>
                @endforeach


                </tbody>
            </table>
        </div>
    </div>
    <!-- End Manage Jobs Area -->

@endsection
