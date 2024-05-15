@extends('home.layouts.content')
@section('content')

    <br/><br/>
    @foreach($user as $row)
        <div id="apus-main-content">
            <section class="freelancer_single_layout freelancer-detail-version-v2">
                <section id="primary" class="content-area inner">
                    <div id="main" class="site-main content" role="main">
                        <div class="single-listing-wrapper freelancer" data-latitude="40.719842982477104" data-longitude="-73.96004443216296" data-img="https://demoapus1.com/freeio-new/wp-content/uploads/2022/10/8-150x150.jpg" data-logo="https://demoapus1.com/freeio-new/wp-content/uploads/2022/10/8-150x150.jpg">

                            <article id="post-4098" class="freelancer-single v2 post-4098 freelancer type-freelancer status-publish has-post-thumbnail hentry location-los-angeles freelancer_category-business freelancer_category-digital-marketing freelancer_tag-creative freelancer_tag-figma freelancer_tag-prototyping">
                                <div class="freelancer-detail-header">
                                    <div class="service-detail-breadcrumbs">
                                        <div class="container d-md-flex align-items-center">
                                            <div class="left-column">
                                                <div class="breadcrumbs-simple">
                                                    <div class="container">
                                                        <ol class="breadcrumb">
                                                            <li><a href="#">Home</a></li>
                                                            <li>
                                                                <a href="#">Freelancers</a>
                                                            </li>
                                                            <li><span class="active">{{$row->full_name}}</span></li>
                                                        </ol>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="right-column ms-auto">
                                                <div class="apus-social-share share-listing position-relative">
                                                    <div class="d-flex align-items-center">
                                                        <span class="icon-share"><i class="flaticon-share"></i></span>
                                                        <h6 class="share-title">
                                                            Share </h6>
                                                    </div>
                                                    <div class="bo-social-icons">


                                                        <a class="facebook"
                                                           href="#"
                                                           target="_blank" title="Share on facebook">
                                                            <i class="fab fa-facebook-f"></i>
                                                        </a>

                                                        <a class="twitter"
                                                           href="#"
                                                           target="_blank" title="Share on Twitter">
                                                            <i class="fab fa-twitter"></i>
                                                        </a>


                                                        <a class="linkedin"
                                                           href="#"
                                                           target="_blank" title="Share on LinkedIn">
                                                            <i class="fab fa-linkedin-in"></i>
                                                        </a>


                                                        <a class="pinterest"
                                                           href="#"
                                                           target="_blank" title="Share on Pinterest">
                                                            <i class="fab fa-pinterest-p"></i>
                                                        </a>

                                                    </div>
                                                </div>
                                                <a href="javascript:void(0)" class="btn-add-freelancer-favorite"
                                                   data-freelancer_id="4098" data-nonce="50996fdedd"
                                                   data-toggle="tooltip" title="Add Favorite">
                                                    <i class="flaticon-like"></i>
                                                    <span>Save</span>
                                                </a>
                                                <a data-toggle="tooltip" href="#freelancer-report-wrapper-4098"
                                                   class="btn-show-popup btn-view-freelancer-report"
                                                   title="Report this freelancer"><i
                                                        class="fas fa-exclamation-triangle fa-angle-right"></i></a>

                                                <div id="freelancer-report-wrapper-4098"
                                                     class="freelancer-report-wrapper mfp-hide">
                                                    <div class="inner">
                                                        <a href="javascript:void(0);"
                                                           class="close-magnific-popup ali-right"><i
                                                                class="ti-close"></i></a>

                                                        <h2 class="widget-title"><span>Report this freelancer</span>
                                                        </h2>
                                                        <div class="content">
                                                            <form method="post" action="?" class="report-form-wrapper">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control"
                                                                           name="subject" placeholder="Subject"
                                                                           required="required">
                                                                </div><!-- /.form-group -->

                                                                <div class="form-group">
                                                                    <textarea class="form-control" name="message"
                                                                              placeholder="Message"
                                                                              required="required"></textarea>
                                                                </div><!-- /.form-group -->


                                                                <input type="hidden" name="post_id" value="4098">
                                                                <button class="button btn btn-theme btn-outline w-100"
                                                                        name="submit-report">Send Report<i
                                                                        class="flaticon-right-up next"></i></button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="freelancer-content-area container">
                                    <!-- Main content -->
                                    <div class="row content-single-freelancer content-service-detail">
                                        <div class="col-12 list-content-freelancer list-content-service col-lg-8">
                                            <div class="content-main-service content-main-freelancer">

                                                <div class="freelancer-detail-header mt-0">
                                                    <div class="header-detail-freelancer v2">
                                                        <div class="d-flex align-items-center flex-grow-1">
                                                            <div
                                                                class="freelancer-thumbnail flex-shrink-0 position-relative">
                                                                <div class="freelancer-logo d-flex align-items-center">
                                                                    <div class="image-wrapper">

                                                                        @if(!empty($rw->profile_image))
                                                                            <img loading="lazy" decoding="async" width="150" height="150" src="{{asset('profile/photo/'.$rw->user_id.'/'.$rw->profile_image)}}" class="attachment-thumbnail size-thumbnail" alt="" srcset="{{asset('profile/photo/'.$rw->user_id.'/'.$rw->profile_image)}} 150w, {{asset('profile/photo/'.$rw->user_id.'/'.$rw->profile_image)}} 300w, {{asset('profile/photo/'.$rw->user_id.'/'.$rw->profile_image)}} 410w, {{asset('profile/photo/'.$rw->user_id.'/'.$rw->profile_image)}} 420w" sizes="(max-width: 150px) 100vw, 150px" />
                                                                        @else
                                                                            <img  width="100" height="100" src="{{asset('icon_02.jpeg')}}" alt="image" />
                                                                        @endif

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="freelancer-information flex-grow-1">
                                                                <div class="d-flex freelancer-detail-title-wrapper">
                                                                    <h1 class="freelancer-detail-title">
                                                                        {{$row->full_name}}
                                                                    </h1>
                                                                    <span class="flex-shrink-0"></span>
                                                                </div>
                                                                <div class="freelancer-job">
                                                                    Design &amp; Creative
                                                                </div>
                                                                <div
                                                                    class="service-metas-detail d-flex flex-wrap align-items-center">
                                                                    <div class="d-none d-sm-block">
                                                                        <div class="rating-reviews">
                                                                            <i class="fa fa-star"></i>
                                                                            <span class="rating text-link">4.0</span>
                                                                            <span class="text">(1 Review)</span></div>
                                                                    </div>
                                                                    <div class="freelancer-location with-icon">
                                                                        <i class="flaticon-place"></i>
                                                                        {{$row->street_address. ",".$row->city.",".$row->state}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="freelancer-detail-detail service-detail-detail">
                                                    <ul class="list-service-detail column-4 d-flex align-items-center flex-wrap">

                                                        <li>
                                                            <div class="icon">
                                                                <i class="flaticon-target"></i>
                                                            </div>
                                                            <div class="details">
                                                                <div class="text">Project Success</div>
                                                                <div class="value">0</div>
                                                            </div>
                                                        </li>

                                                        <li>
                                                            <div class="icon">
                                                                <i class="flaticon-goal"></i>
                                                            </div>
                                                            <div class="details">
                                                                <div class="text">Total Service</div>
                                                                <div class="value">2</div>
                                                            </div>
                                                        </li>

                                                        <li>
                                                            <div class="icon">
                                                                <i class="flaticon-target"></i>
                                                            </div>
                                                            <div class="details">
                                                                <div class="text">Completed Service</div>
                                                                <div class="value">0</div>
                                                            </div>
                                                        </li>

                                                        <li>
                                                            <div class="icon">
                                                                <i class="flaticon-file-1"></i>
                                                            </div>
                                                            <div class="details">
                                                                <div class="text">In Queue service</div>
                                                                <div class="value">6</div>
                                                            </div>
                                                        </li>


                                                    </ul>


                                                </div>
                                                <div id="job-freelancer-description"
                                                     class="job-detail-description box-detail">
                                                    <h3 class="title">About Freelancer</h3>
                                                    <div class="inner">
                                                        {{$row->service_description}}
                                                    </div>
                                                </div>


                                                <div id="job-freelancer-education"
                                                     class="freelancer-detail-education my_resume_eduarea">
                                                    <h4 class="title">Education</h4>

                                                    @foreach($education as $rw)
                                                        <div class="content">
                                                            <div class="circle">
                                                                B
                                                            </div>
                                                            <div class="top-info">
                                                                <span class="year">{{$rw->year}}</span>
                                                                <span class="edu_stats">{{$rw->title}}</span>
                                                            </div>
                                                            <div class="edu_center">
                                                                <span class="university">{{$rw->purpose}}</span>
                                                            </div>
                                                            <p class="mb0">{{$rw->desc}}</p>
                                                        </div>
                                                    @endforeach


                                                </div>

                                                <div id="job-freelancer-experience"
                                                     class="freelancer-detail-experience my_resume_eduarea">
                                                    <h4 class="title">Work &amp; Experience</h4>
                                                    @foreach($experience as $exp)
                                                        <div class="content">
                                                            <div class="circle">
                                                                D
                                                            </div>
                                                            <div class="top-info">
                                                        <span class="year">
                                                            {{$row->year}}
                                                        </span>
                                                                <span class="edu_stats">{{$row->title}}</span>
                                                            </div>
                                                            <div class="edu_center">
                                                                <span class="university">{{$row->purpose}}</span>
                                                            </div>
                                                            <p>{{$row->desc}}</p>
                                                        </div>
                                                    @endforeach


                                                </div>

                                                <div id="job-freelancer-award" class="my_resume_eduarea color-award">
                                                    <h4 class="title">Awards</h4>

                                                    @foreach($awards as $row)
                                                        <div class="content">
                                                            <div class="circle">
                                                                B
                                                            </div>
                                                            <div class="top-info">
                                                                <span class="year">{{$row->year}}</span>
                                                                <span class="edu_stats">{{$row->title}}</span>
                                                            </div>
                                                            <div class="mb0"> {{$row->desc}}</div>
                                                        </div>
                                                    @endforeach


                                                </div>

                                                \
                                                <div
                                                    class="sidebar-wrapper sidebar-service col-lg-4 col-12 d-block d-lg-none">
                                                    <aside class="sidebar sidebar-listing-detail sidebar-right">
                                                        <aside class="widget widget_apus_freelancer_info">
                                                            <div class="freelancer-info-detail ">
                                                                <div class="freelancer-salary-wrapper">
                                                                    <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span><span class="price-text">25</span></bdi></span>
                                                                    - <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span><span class="price-text">30</span></bdi></span>/ hr
                                                                </div>
                                                                <ul class="list-freelancer-info">


                                                                    <li>
                                                                        <div class="icon">
                                                                            <i class="flaticon-place"></i>
                                                                        </div>
                                                                        <div class="details">
                                                                            <div class="text">Location</div>
                                                                            <div class="value">
                                                                                <div class="freelancer-location">
                                                                                    Los Angeles
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>


                                                                    <li>
                                                                        <div class="icon">
                                                                            <i class="flaticon-document"></i>
                                                                        </div>
                                                                        <div class="details">
                                                                            <div class="text">Type</div>
                                                                            <div class="value">
                                                                                <div class="freelancer-meta with-icon">

                                                                                    <div class="freelancer-meta">

                                                                                        Agency Freelancers
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>

                                                                    <li>
                                                                        <div class="icon">
                                                                            <i class="flaticon-translator"></i>
                                                                        </div>
                                                                        <div class="details">
                                                                            <div class="text">English Level</div>
                                                                            <div class="value">
                                                                                <div class="freelancer-meta with-icon">

                                                                                    <div class="freelancer-meta">

                                                                                        Fluent
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>

                                                                    <li>
                                                                        <div class="icon">
                                                                            <i class="flaticon-mars"></i>
                                                                        </div>
                                                                        <div class="details">
                                                                            <div class="text">Gender</div>
                                                                            <div class="value">
                                                                                <div class="freelancer-meta with-icon">

                                                                                    <div class="freelancer-meta">

                                                                                        Male
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>


                                                                    <li>
                                                                        <div class="icon">
                                                                            <i class="flaticon-mail"></i>
                                                                        </div>
                                                                        <div class="details">
                                                                            <div class="text">Email</div>
                                                                            <div class="value">
                                                                                <div class="freelancer-email">
                                                                                    {{$row->email}}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>

                                                                    <li>
                                                                        <div class="icon">
                                                                            <i class="flaticon-call"></i>
                                                                        </div>
                                                                        <div class="details">
                                                                            <div class="text">Phone Number</div>
                                                                            <div class="value">
                                                                                <div class="freelancer-phone">
                                                                                    <div class="phone-wrapper ">
                                                                                        <a class="phone"
                                                                                           href="tel:(+88) 123-456-789">(+88)
                                                                                            123-456-789</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>


                                                                </ul>


                                                                <a href="#apus-contact-form-wrapper"
                                                                   class="btn btn-theme btn-inverse btn-service-contact-form btn-show-popup w-100">Contact
                                                                    Me <i class="flaticon-right-up next"></i></a>

                                                                <div id="apus-contact-form-wrapper"
                                                                     class="apus-contact-form mfp-hide"
                                                                     data-effect="fadeIn">
                                                                    <a href="javascript:void(0);"
                                                                       class="close-magnific-popup ali-right"><i
                                                                            class="ti-close"></i></a>

                                                                    <form method="post" action="?"
                                                                          class="contact-form-wrapper">
                                                                        <div class="row">
                                                                            <div class="col-12">
                                                                                <div class="form-group">
                                                                                    <input type="text"
                                                                                           class="form-control"
                                                                                           name="subject"
                                                                                           placeholder="Subject"
                                                                                           required="required">
                                                                                </div><!-- /.form-group -->
                                                                            </div>
                                                                            <div class="col-12">
                                                                                <div class="form-group">
                                                                                    <input type="email"
                                                                                           class="form-control"
                                                                                           name="email"
                                                                                           placeholder="E-mail"
                                                                                           required="required">
                                                                                </div><!-- /.form-group -->
                                                                            </div>
                                                                            <div class="col-12">
                                                                                <div class="form-group">
                                                                                    <input type="text"
                                                                                           class="form-control style2"
                                                                                           name="phone"
                                                                                           placeholder="Phone"
                                                                                           required="required">
                                                                                </div><!-- /.form-group -->
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <textarea class="form-control"
                                                                                      name="message"
                                                                                      placeholder="Message"
                                                                                      required="required"></textarea>
                                                                        </div><!-- /.form-group -->


                                                                        <input type="hidden" name="post_id"
                                                                               value="4098">
                                                                        <button class="button btn btn-theme btn-block"
                                                                                name="contact-form">Send Message
                                                                        </button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </aside>
                                                        <aside class="widget widget_apus_freelancer_tags"><h2
                                                                class="widget-title"><span>My Skills</span></h2>
                                                            <div class="freelancer-detail-tags">
                                                                <div class="freelancer-tags">
                                                                    <a class="tag-freelancer"
                                                                       href="#">Creative</a>
                                                                    <a class="tag-freelancer"
                                                                       href="#">Figma</a>
                                                                    <a class="tag-freelancer"
                                                                       href="#">Prototyping</a>
                                                                </div>
                                                            </div>
                                                        </aside>
                                                    </aside>
                                                </div>

                                                <!-- Review -->
                                                <div id="reviews">
                                                    <div class="box-info-white max-780">
                                                        <h3 class="title">1 Review</h3>

                                                        <div class="d-md-flex align-items-center">
                                                            <div
                                                                class="detail-average-rating flex-column d-flex align-items-center justify-content-center">
                                                                <div class="average-value">4.0</div>
                                                                <div class="average-star">
                                                                    <div class="review-stars-rated-wrapper">
                                                                        <div class="review-stars-rated">
                                                                            <ul class="review-stars">
                                                                                <li><span class="fa fa-star"></span>
                                                                                </li>
                                                                                <li><span class="fa fa-star"></span>
                                                                                </li>
                                                                                <li><span class="fa fa-star"></span>
                                                                                </li>
                                                                                <li><span class="fa fa-star"></span>
                                                                                </li>
                                                                                <li><span class="fa fa-star"></span>
                                                                                </li>
                                                                            </ul>

                                                                            <ul class="review-stars filled"
                                                                                style="width: 80%">
                                                                                <li><span class="fa fa-star"></span>
                                                                                </li>
                                                                                <li><span class="fa fa-star"></span>
                                                                                </li>
                                                                                <li><span class="fa fa-star"></span>
                                                                                </li>
                                                                                <li><span class="fa fa-star"></span>
                                                                                </li>
                                                                                <li><span class="fa fa-star"></span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="total-rating">
                                                                    1 rating
                                                                </div>
                                                            </div>

                                                            <div class="detail-rating">
                                                                <div class="item-rating">
                                                                    <div class="list-rating">

                                                                        <div class="value-content">
                                                                            <div class="list-number">
                                                                                5 Star
                                                                            </div>
                                                                            <div class="progress">
                                                                                <div
                                                                                    class="progress-bar progress-bar-success"
                                                                                    style="width: 0%">
                                                                                </div>
                                                                            </div>
                                                                            <div class="value">
                                                                                0%
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item-rating">
                                                                    <div class="list-rating">

                                                                        <div class="value-content">
                                                                            <div class="list-number">
                                                                                4 Star
                                                                            </div>
                                                                            <div class="progress">
                                                                                <div
                                                                                    class="progress-bar progress-bar-success"
                                                                                    style="width: 100%">
                                                                                </div>
                                                                            </div>
                                                                            <div class="value">
                                                                                100%
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item-rating">
                                                                    <div class="list-rating">

                                                                        <div class="value-content">
                                                                            <div class="list-number">
                                                                                3 Star
                                                                            </div>
                                                                            <div class="progress">
                                                                                <div
                                                                                    class="progress-bar progress-bar-success"
                                                                                    style="width: 0%">
                                                                                </div>
                                                                            </div>
                                                                            <div class="value">
                                                                                0%
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item-rating">
                                                                    <div class="list-rating">

                                                                        <div class="value-content">
                                                                            <div class="list-number">
                                                                                2 Star
                                                                            </div>
                                                                            <div class="progress">
                                                                                <div
                                                                                    class="progress-bar progress-bar-success"
                                                                                    style="width: 0%">
                                                                                </div>
                                                                            </div>
                                                                            <div class="value">
                                                                                0%
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item-rating">
                                                                    <div class="list-rating">

                                                                        <div class="value-content">
                                                                            <div class="list-number">
                                                                                1 Star
                                                                            </div>
                                                                            <div class="progress">
                                                                                <div
                                                                                    class="progress-bar progress-bar-success"
                                                                                    style="width: 0%">
                                                                                </div>
                                                                            </div>
                                                                            <div class="value">
                                                                                0%
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



                                                    @if(isset(Auth::user()->id) && (Auth::user()->is_admin == 2))
                                                    <div id="review_form_wrapper" class="commentform ">
                                                        <div id="review_form">
                                                            <div class="commentform reset-button-default">
                                                                <div class="clearfix">
                                                                    <div id="respond" class="comment-respond">
                                                                        <h4 class="title comment-reply-title">Add a
                                                                            review
                                                                            <small>
                                                                                <a rel="nofollow" id="cancel-comment-reply-link" href="/freeio-new/freelancer/thomas-powell/#respond" style="display:none;">Cancel reply</a>
                                                                            </small>
                                                                        </h4>
                                                                        <form action="{{route('index.user.review.save')}}" method="post" id="commentform" enctype="multipart/form-data" class="comment-form" novalidate="">
                                                                            {{ csrf_field() }}
                                                                            <div class="choose-rating clearfix">
                                                                                <div class="choose-rating-inner row">
                                                                                    <div class="col-sm-12 col-xs-12">
                                                                                        <div
                                                                                            class="form-group yourview">
                                                                                            <div class="your-rating">
                                                                                                Your Rating for this listing
                                                                                            </div>
                                                                                            <div class="wrapper-rating-form">
                                                                                                <div class="comment-form-rating">
                                                                                                    <ul class="review-stars">
                                                                                                        <li><span
                                                                                                                class="fa fa-star"></span>
                                                                                                        </li>
                                                                                                        <li><span
                                                                                                                class="fa fa-star"></span>
                                                                                                        </li>
                                                                                                        <li><span
                                                                                                                class="fa fa-star"></span>
                                                                                                        </li>
                                                                                                        <li><span
                                                                                                                class="fa fa-star"></span>
                                                                                                        </li>
                                                                                                        <li><span
                                                                                                                class="fa fa-star"></span>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                    <ul class="review-stars filled">
                                                                                                        <li><span
                                                                                                                class="fa fa-star"></span>
                                                                                                        </li>
                                                                                                        <li><span
                                                                                                                class="fa fa-star"></span>
                                                                                                        </li>
                                                                                                        <li><span
                                                                                                                class="fa fa-star"></span>
                                                                                                        </li>
                                                                                                        <li><span
                                                                                                                class="fa fa-star"></span>
                                                                                                        </li>
                                                                                                        <li><span
                                                                                                                class="fa fa-star"></span>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                    <input type="hidden"
                                                                                                           value="5"
                                                                                                           name="rating"
                                                                                                           id="_input_rating">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="group-upload-preview clearfix"></div>
                                                                            <div class="form-group space-30"><label>Your
                                                                                    Comment</label><textarea
                                                                                    id="comment" class="form-control"
                                                                                    placeholder="Comment" name="comment"
                                                                                    cols="45" rows="5"
                                                                                    aria-required="true"
                                                                                    required=""></textarea></div>
                                                                            <div class="row">
                                                                                <div class="col-12 col-sm-6">
                                                                                    <div class="form-group"><label>Your
                                                                                            Name</label><input
                                                                                            id="author"
                                                                                            placeholder="Name"
                                                                                            class="form-control"
                                                                                            name="author" type="text"
                                                                                            value="" size="30"
                                                                                            aria-required="true"></div>
                                                                                </div>
                                                                                <div class="col-12 col-sm-6">
                                                                                    <div class="form-group"><label>Your
                                                                                            Email</label><input
                                                                                            id="email"
                                                                                            placeholder="Email"
                                                                                            class="form-control"
                                                                                            name="email" type="text"
                                                                                            value="" size="30"
                                                                                            aria-required="true"></div>
                                                                                </div>
                                                                            </div>
                                                                            <p class="comment-form-cookies-consent">
                                                                                <input id="wp-comment-cookies-consent"
                                                                                       name="wp-comment-cookies-consent"
                                                                                       type="checkbox" value="yes">
                                                                                <label for="wp-comment-cookies-consent">Save
                                                                                    my name, email, and website in this
                                                                                    browser for the next time I
                                                                                    comment.</label></p>
                                                                            <p class="form-submit"><input name="submit"
                                                                                                          type="submit"
                                                                                                          id="submit"
                                                                                                          class="btn btn-theme btn-inverse"
                                                                                                          value="Submit Review">
                                                                                <input type="hidden"
                                                                                       name="comment_post_ID"
                                                                                       value="4098"
                                                                                       id="comment_post_ID">
                                                                                <input type="hidden"
                                                                                       name="comment_parent"
                                                                                       id="comment_parent" value="0">
                                                                            </p></form>
                                                                    </div><!-- #respond -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sidebar-wrapper sidebar-service col-lg-4 col-12 d-none d-lg-block">
                                            <aside class="sidebar sidebar-listing-detail sidebar-right sticky-top">
                                                <aside class="widget widget_apus_freelancer_info">
                                                    <div class="freelancer-info-detail ">
                                                        <div class="freelancer-salary-wrapper">
                                                            <span class="woocommerce-Price-amount amount"><bdi><span
                                                                        class="woocommerce-Price-currencySymbol">₦</span><span
                                                                        class="price-text">{{$row->min_amount}}</span></bdi></span> -
                                                            <span class="woocommerce-Price-amount amount"><bdi><span
                                                                        class="woocommerce-Price-currencySymbol">₦</span><span
                                                                        class="price-text">{{$row->max_amount}}</span></bdi></span> / hr
                                                        </div>
                                                        <ul class="list-freelancer-info">


                                                            <li>
                                                                <div class="icon">
                                                                    <i class="flaticon-place"></i>
                                                                </div>
                                                                <div class="details">
                                                                    <div class="text">Location</div>
                                                                    <div class="value">
                                                                        <div class="freelancer-location">
                                                                           {{$row->state}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>


                                                            <li>
                                                                <div class="icon">
                                                                    <i class="flaticon-document"></i>
                                                                </div>
                                                                <div class="details">
                                                                    <div class="text">Type</div>
                                                                    <div class="value">
                                                                        <div class="freelancer-meta with-icon">

                                                                            <div class="freelancer-meta">

                                                                                Agency Freelancers
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <div class="icon">
                                                                    <i class="flaticon-translator"></i>
                                                                </div>
                                                                <div class="details">
                                                                    <div class="text">English Level</div>
                                                                    <div class="value">
                                                                        <div class="freelancer-meta with-icon">

                                                                            <div class="freelancer-meta">

                                                                                Fluent
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <div class="icon">
                                                                    <i class="flaticon-mars"></i>
                                                                </div>
                                                                <div class="details">
                                                                    <div class="text">Gender</div>
                                                                    <div class="value">
                                                                        <div class="freelancer-meta with-icon">

                                                                            <div class="freelancer-meta">

                                                                                Male
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>


                                                            <li>
                                                                <div class="icon">
                                                                    <i class="flaticon-mail"></i>
                                                                </div>
                                                                <div class="details">
                                                                    <div class="text">Email</div>
                                                                    <div class="value">
                                                                        <div class="freelancer-email">
                                                                           {{$row->email}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <div class="icon">
                                                                    <i class="flaticon-call"></i>
                                                                </div>
                                                                <div class="details">
                                                                    <div class="text">Phone Number</div>
                                                                    <div class="value">
                                                                        <div class="freelancer-phone">
                                                                            <div class="phone-wrapper ">
                                                                                <a class="phone"
                                                                                   href="tel:(+88) 123-456-789">{{$row->phone}}</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>


                                                        </ul>


                                                        <a href="#apus-contact-form-wrapper"
                                                           class="btn btn-theme btn-inverse btn-service-contact-form btn-show-popup w-100">Contact
                                                            Me <i class="flaticon-right-up next"></i></a>

                                                        <div id="apus-contact-form-wrapper"
                                                             class="apus-contact-form mfp-hide" data-effect="fadeIn">
                                                            <a href="javascript:void(0);"
                                                               class="close-magnific-popup ali-right"><i
                                                                    class="ti-close"></i></a>

                                                            <form method="post" action="?" class="contact-form-wrapper">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control"
                                                                                   name="subject" placeholder="Subject"
                                                                                   required="required">
                                                                        </div><!-- /.form-group -->
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <input type="email" class="form-control"
                                                                                   name="email" placeholder="E-mail"
                                                                                   required="required">
                                                                        </div><!-- /.form-group -->
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <input type="text"
                                                                                   class="form-control style2"
                                                                                   name="phone" placeholder="Phone"
                                                                                   required="required">
                                                                        </div><!-- /.form-group -->
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <textarea class="form-control" name="message"
                                                                              placeholder="Message"
                                                                              required="required"></textarea>
                                                                </div><!-- /.form-group -->


                                                                <input type="hidden" name="post_id" value="4098">
                                                                <button class="button btn btn-theme btn-block"
                                                                        name="contact-form">Send Message
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </aside>
                                                <aside class="widget widget_apus_freelancer_tags"><h2
                                                        class="widget-title"><span>My Skills</span></h2>
                                                    <div class="freelancer-detail-tags">
                                                        <div class="freelancer-tags">
                                                            <a class="tag-freelancer"
                                                               href="#">Creative</a>
                                                            <a class="tag-freelancer"
                                                               href="#">Figma</a>
                                                            <a class="tag-freelancer"
                                                               href="#">Prototyping</a>
                                                        </div>
                                                    </div>
                                                </aside>
                                            </aside>
                                        </div>

                                    </div>

                                </div>
                            </article><!-- #post-## -->

                        </div>

                    </div><!-- .site-main -->
                </section><!-- .content-area -->
            </section>
        </div>
    @endforeach
@endsection
