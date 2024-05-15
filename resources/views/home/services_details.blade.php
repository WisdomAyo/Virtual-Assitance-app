@extends('home.layouts.content')
@section('content')

    <br />
    <br />


    @foreach($result as $row)
    <div id="apus-main-content"><section class="service-detail-version-v1">

            <section id="primary" class="content-area inner">
                <div id="main" class="site-main content" role="main">



                    <div class="single-listing-wrapper service" data-latitude="34.01747866833639" data-longitude="-118.25982593444947" data-img="http://swiftedgeacademy.com/hub/wp-content/uploads/2022/11/service5-495x370.jpg" data-logo="../../wp-content/uploads/2022/11/service5-150x150.jpg">


                        <article id="post-5549" class="service-single post-5549 service type-service status-publish has-post-thumbnail hentry location-los-angeles service_category-design-creative service_category-development-it">

                            <!-- heading -->


                            <div class="service-detail-header v1">
                                <div class="service-detail-breadcrumbs">
                                    <div class="container d-md-flex align-items-center">
                                        <div class="left-column">
                                            <div class="breadcrumbs-simple"><div class="container"><ol class="breadcrumb"><li><a href="http://swiftedgeacademy.com/hub">Home</a>  </li> <li><a href="../../services-2/index.html">Services</a></li>   <li><span class="active">Power management, notification and geofencing for host serve</span></li></ol></div></div>            </div>
                                        <div class="right-column ms-auto">
                                            <div class="apus-social-share share-listing position-relative">
                                                <div class="d-flex align-items-center">
                                                    <span class="icon-share"><i class="flaticon-share"></i></span>
                                                    <h6 class="share-title">
                                                        Share		</h6>
                                                </div>
                                                <div class="bo-social-icons">


                                                    <a class="facebook" href="https://www.facebook.com/sharer.php?s=100&amp;u=http://swiftedgeacademy.com/hub/service/power-management-notification-and-geofencing-for-host-serve/&amp;i=http%3A%2F%2Fswiftedgeacademy.com%2Fhub%2Fwp-content%2Fuploads%2F2022%2F11%2Fservice5.jpg" target="_blank" title="Share on facebook">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </a>

                                                    <a class="twitter" href="https://twitter.com/intent/tweet?url=http://swiftedgeacademy.com/hub/service/power-management-notification-and-geofencing-for-host-serve/" target="_blank" title="Share on Twitter">
                                                        <i class="fab fa-twitter"></i>
                                                    </a>


                                                    <a class="linkedin" href="https://linkedin.com/shareArticle?mini=true&amp;url=http://swiftedgeacademy.com/hub/service/power-management-notification-and-geofencing-for-host-serve/&amp;title=Power%20management,%20notification%20and%20geofencing%20for%20host%20serve" target="_blank" title="Share on LinkedIn">
                                                        <i class="fab fa-linkedin-in"></i>
                                                    </a>



                                                    <a class="pinterest" href="https://pinterest.com/pin/create/button/?url=http%3A%2F%2Fswiftedgeacademy.com%2Fhub%2Fservice%2Fpower-management-notification-and-geofencing-for-host-serve%2F&amp;media=http%3A%2F%2Fswiftedgeacademy.com%2Fhub%2Fwp-content%2Fuploads%2F2022%2F11%2Fservice5.jpg" target="_blank" title="Share on Pinterest">
                                                        <i class="fab fa-pinterest-p"></i>
                                                    </a>

                                                </div>
                                            </div>
                                            <a href="javascript:void(0)" class="btn-add-service-favorite" data-service_id="5549" data-nonce="3aa7ad7e72" data-bs-toggle="tooltip" title="Add Favorite"
                                            >
                                                <i class="flaticon-like"></i>
                                                <span>Save</span>
                                            </a>
                                            <a data-toggle="tooltip" href="#service-report-wrapper-5549" class="btn-show-popup btn-view-service-report" title="Report this service"><i class="fas fa-exclamation-triangle fa-angle-right"></i></a>

                                            <div id="service-report-wrapper-5549" class="service-report-wrapper mfp-hide">
                                                <div class="inner">
                                                    <a href="javascript:void(0);" class="close-magnific-popup ali-right"><i class="ti-close"></i></a>

                                                    <h2 class="widget-title"><span>Report this service</span></h2>
                                                    <div class="content">
                                                        <form method="post" action="http://swiftedgeacademy.com/hub/service/power-management-notification-and-geofencing-for-host-serve/?" class="report-form-wrapper">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="subject" placeholder="Subject" required="required">
                                                            </div><!-- /.form-group -->

                                                            <div class="form-group">
                                                                <textarea class="form-control" name="message" placeholder="Message" required="required"></textarea>
                                                            </div><!-- /.form-group -->


                                                            <input type="hidden" name="post_id" value="5549">
                                                            <button class="button btn btn-theme btn-outline w-100" name="submit-report">Send Report<i class="flaticon-right-up next"></i></button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="header-detail-service" >
                                    <div class="container">

                                        <div class="info-detail-service">
                                            <div class="title-wrapper d-flex">
                                                <h1 class="service-detail-title">{{$row->title}}</h1>
                                                <span class="flex-shrink-0"></span>
                                            </div>
                                            <div class="service-metas-detail d-flex align-items-center flex-wrap">
                                                <div class="service-author">
                                                    <a href="../../freelancer/thomas-powell/index.html">
                                                        <div class="freelancer-logo d-flex align-items-center">
                                                            <div class="image-wrapper">

                                                                @if(!empty($rw->feature_image))
                                                                    <img loading="lazy" decoding="async" width="150" height="150"  src="{{asset('artisan_services/photo/'.$rw->user_id.'/'.$rw->feature_image)}}" class="attachment-thumbnail size-thumbnail" alt="" srcset="{{asset('artisan_services/photo/'.$rw->user_id.'/'.$rw->feature_image)}} 495w, {{asset('artisan_services/photo/'.$rw->user_id.'/'.$rw->feature_image)}} 300w, {{asset('artisan_services/photo/'.$rw->user_id.'/'.$rw->feature_image)}} 768w, {{asset('artisan_services/photo/'.$rw->user_id.'/'.$rw->feature_image)}} 600w" sizes="(max-width: 495px) 100vw, 495px">
                                                                @else

                                                                    <a href="#"><img src="{{asset('icon_02.jpeg')}}" alt="image"></a>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <span class="text">
                                                            Thomas Powell
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="rating-reviews">
                                                    <i class="fa fa-star"></i>
                                                    <span class="rating">5.0</span>
                                                    <span class="text">(1 Review)</span>	    </div>
                                                <div class="views">
                                                    <i class="flaticon-website"></i>
                                                    <span class="text">10</span> Views	</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="service-content-area container">
                                <!-- Main content -->
                                <div class="row content-service-detail">
                                    <div class="list-content-service col-12 col-lg-8">
                                        <div class="content-main-service">


                                            <div class="service-detail-detail">
                                                <ul class="list-service-detail d-flex align-items-center flex-wrap">
                                                    <li>
                                                        <div class="icon">
                                                            <i class="flaticon-calendar"></i>
                                                        </div>
                                                        <div class="details">
                                                            <div class="text">Delivery Time</div>
                                                            <div class="value">
                                                                2 Days                    </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="flaticon-goal"></i>
                                                        </div>
                                                        <div class="details">
                                                            <div class="text">English level</div>
                                                            <div class="value">
                                                                Professional                    </div>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="icon">
                                                            <i class="flaticon-tracking"></i>
                                                        </div>
                                                        <div class="details">
                                                            <div class="text">Location</div>
                                                            <div class="value">
                                                                <div class="service-location">
                                                                    Los Angeles                    </div>                    </div>
                                                        </div>
                                                    </li>

                                                </ul>
                                            </div>



                                            <div class="property-detail-gallery gallery-listing">
                                                <div class="gallery-listing-main">
                                                    <div class="slick-carousel slick-carousel-gallery-main" data-carousel="slick" data-items="1" data-large="1" data-medium="1" data-small="1" data-smallest="1" data-pagination="false" data-nav="true" data-autoplay="false" data-slickparent="true">


                                                        <div class="item">
                                                            <a href="#" data-elementor-lightbox-slideshow="freeio-gallery" class="p-popup-image">
                                                                <div class="image-wrapper">

                                                                    @if(!empty($row->feature_image))
                                                                        <img fetchpriority="high"  decoding="async"width="900" height="500"  src="{{asset('artisan_services/photo/'.$row->user_id.'/'.$row->feature_image)}}" class="attachment-freeio-gallery size-freeio-gallery">
                                                                    @else

                                                                        <a href="#"><img src="{{asset('icon_02.jpeg')}}" alt="image"></a>
                                                                    @endif

                                                                </div>
                                                            </a>
                                                        </div>



                                                    </div>
                                                </div>
                                                <div class="slick-carousel slick-carousel-gallery-thumbs d-none d-md-block" data-carousel="slick" data-items="6" data-large="5" data-medium="4" data-small="3" data-smallest="2" data-pagination="false" data-nav="false" data-autoplay="false" data-asnavfor=".slick-carousel-gallery-main" data-slidestoscroll="1" data-focusonselect="true">
                                                    <div class="item">
                                                        <div class="image-wrapper">

                                                            @if(!empty($row->feature_image))
                                                                <img loading="lazy" width="150" height="150" src="{{asset('artisan_services/photo/'.$row->user_id.'/'.$row->feature_image)}}" class="attachment-thumbnail size-thumbnail">
                                                            @else

                                                                <a href="#"><img src="{{asset('icon_02.jpeg')}}" alt="image"></a>
                                                            @endif

                                                        </div>
                                                    </div>

                                                </div>


                                            </div>
                                            <!-- service description -->
                                            <div class="service-detail-description">
                                                <h3 class="title">Service Description</h3>
                                               <p>{!! $row->service_description !!}</p>
                                            </div>


                                            <div id="service-detail-faq" class="service-detail-faq">
                                                <div class="inner">
                                                    <div class="panel-group" id="service-faq-accordion" role="tablist" aria-multiselectable="true">
                                                        <div class="accordion-item accordion-item-faq">
                                                            <h4 class="accordion-header">
                                                                <a class="accordion-button " role="button" data-bs-toggle="collapse" data-bs-parent="#service-faq-accordion" href="#service-faq-collapse-0" aria-expanded="true" aria-controls="service-faq-collapse-0">
                                                                    What methods of payments are supported?                                </a>
                                                            </h4>
                                                            <div id="service-faq-collapse-0" class="accordion-collapse collapse show" role="tabpanel" aria-labelledby="heading-0">
                                                                <div class="accordion-body">
                                                                    <div class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="accordion-item accordion-item-faq">
                                                            <h4 class="accordion-header">
                                                                <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-parent="#service-faq-accordion" href="#service-faq-collapse-1" aria-expanded="true" aria-controls="service-faq-collapse-1">
                                                                    Can I cancel at anytime?                                </a>
                                                            </h4>
                                                            <div id="service-faq-collapse-1" class="accordion-collapse collapse " role="tabpanel" aria-labelledby="heading-1">
                                                                <div class="accordion-body">
                                                                    <div class="description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.</div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="accordion-item accordion-item-faq">
                                                            <h4 class="accordion-header">
                                                                <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-parent="#service-faq-accordion" href="#service-faq-collapse-2" aria-expanded="true" aria-controls="service-faq-collapse-2">
                                                                    How do I get a receipt for my purchase?                                </a>
                                                            </h4>
                                                            <div id="service-faq-collapse-2" class="accordion-collapse collapse " role="tabpanel" aria-labelledby="heading-2">
                                                                <div class="accordion-body">
                                                                    <div class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="accordion-item accordion-item-faq">
                                                            <h4 class="accordion-header">
                                                                <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-parent="#service-faq-accordion" href="#service-faq-collapse-3" aria-expanded="true" aria-controls="service-faq-collapse-3">
                                                                    How do I get access to a theme I purchased?                                </a>
                                                            </h4>
                                                            <div id="service-faq-collapse-3" class="accordion-collapse collapse " role="tabpanel" aria-labelledby="heading-3">
                                                                <div class="accordion-body">
                                                                    <div class="description">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="sidebar-wrapper sidebar-service col-lg-4 col-12 d-block d-lg-none">
                                                <aside class="sidebar sidebar-listing-detail sidebar-right">
                                                    <aside class="widget widget_apus_service_price">    <div class="service-price">

                                                            <form id="service-add-to-cart-5549_xJh51" class="service-add-to-cart" method="post">
                                                                <div class="service-price-inner">
                                                                    <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span><span class="price-text">125.00</span></bdi></span>                    </div>
                                                                <div class="service-price-addons">
                                                                    <div class="addon-item">
                                                                        <label for="addon-item-1914_xJh51">
                                                                            <input id="addon-item-1914_xJh51" type="checkbox" name="service_addons[]" value="1914">

                                                                            <div class="content">
                                                                                <h5 class="title">2000 Words (+3 days)</h5>
                                                                                <div class="inner">
                                                                                    I will professionally translate english to german                                                </div>
                                                                                <div class="price">
                                                                                    <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span><span class="price-text">45.00</span></bdi></span>                                                </div>
                                                                            </div>
                                                                        </label>
                                                                    </div>
                                                                    <div class="addon-item">
                                                                        <label for="addon-item-1913_xJh51">
                                                                            <input id="addon-item-1913_xJh51" type="checkbox" name="service_addons[]" value="1913">

                                                                            <div class="content">
                                                                                <h5 class="title">1000 Words (+2 days)</h5>
                                                                                <div class="inner">
                                                                                    I will professionally translate english to german                                                </div>
                                                                                <div class="price">
                                                                                    <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span><span class="price-text">25.00</span></bdi></span>                                                </div>
                                                                            </div>
                                                                        </label>
                                                                    </div>
                                                                </div>

                                                                <input type="hidden" name="service_id" value="5549">
                                                                <button type="submit" class="btn btn-theme btn-inverse w-100">Buy Now <span>&#36;125.00</span> <i class="flaticon-right-up next"></i></button>
                                                            </form>


                                                        </div>
                                                    </aside><aside class="widget widget_apus_service_author"><h2 class="widget-title"><span>About The Seller</span></h2>    <div class="widget-service-author">
                                                            <div class="service-author-heading d-flex align-items-center">
                                                                <div class="service-author-image flex-shrink-0">
                                                                    <a href="../../freelancer/thomas-powell/index.html">
                                                                        <div class="freelancer-logo d-flex align-items-center">
                                                                            <div class="image-wrapper"><img width="150" height="150" src="../../wp-content/uploads/2022/10/8-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" srcset="http://swiftedgeacademy.com/hub/wp-content/uploads/2022/10/8-150x150.jpg 150w, http://swiftedgeacademy.com/hub/wp-content/uploads/2022/10/8-300x300.jpg 300w, http://swiftedgeacademy.com/hub/wp-content/uploads/2022/10/8-410x410.jpg 410w, http://swiftedgeacademy.com/hub/wp-content/uploads/2022/10/8.jpg 420w" sizes="(max-width: 150px) 100vw, 150px" /></div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="service-author-right flex-grow-1">
                                                                    <h5><a href="../../freelancer/thomas-powell/index.html">
                                                                            Thomas Powell                </a></h5>
                                                                    <!-- job -->
                                                                    <div class="freelancer-job">
                                                                        Design & Creative        </div>
                                                                </div>
                                                            </div>

                                                            <div class="metas">
                                                                <div class="freelancer-location with-title"><strong>Location:</strong>
                                                                    Los Angeles
                                                                </div>            <div class="freelancer-salary with-title">
                                                                    <strong>Rate:</strong> <span><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span><span class="price-text">25.00</span></bdi></span> - <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span><span class="price-text">30.00</span></bdi></span> / hr</span>
                                                                </div>        </div>

                                                            <a href="#apus-contact-form-wrapper" class="btn btn-theme btn-outline w-100 btn-service-contact-form btn-show-popup">Contact Me <i class="flaticon-right-up next"></i></a>
                                                        </div>
                                                        <div id="apus-contact-form-wrapper" class="apus-contact-form mfp-hide apus-popup-form" data-effect="fadeIn">

                                                            <a href="javascript:void(0);" class="close-magnific-popup ali-right"><i class="ti-close"></i></a>

                                                            <form method="post" action="http://swiftedgeacademy.com/hub/service/power-management-notification-and-geofencing-for-host-serve/?" class="contact-form-wrapper">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" name="subject" placeholder="Subject" required="required">
                                                                        </div><!-- /.form-group -->
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <input type="email" class="form-control" name="email" placeholder="E-mail" required="required">
                                                                        </div><!-- /.form-group -->
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control style2" name="phone" placeholder="Phone" required="required">
                                                                        </div><!-- /.form-group -->
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <textarea class="form-control" name="message" placeholder="Message" required="required"></textarea>
                                                                </div><!-- /.form-group -->


                                                                <input type="hidden" name="post_id" value="5549">
                                                                <button class="button btn btn-theme btn-outline w-100" name="contact-form">Send Message<i class="flaticon-right-up next"></i></button>
                                                            </form>
                                                        </div>
                                                    </aside>						   	</aside>
                                            </div>

                                            <!-- Review -->
                                            <div id="reviews">

                                                <div class="box-info-white max-780">

                                                    <h3 class="title">1 Review</h3>

                                                    <div class="d-md-flex align-items-center">
                                                        <div class="detail-average-rating flex-column d-flex align-items-center justify-content-center">
                                                            <div class="average-value">5.0</div>
                                                            <div class="average-star">
                                                                <div class="review-stars-rated-wrapper">
                                                                    <div class="review-stars-rated">
                                                                        <ul class="review-stars">
                                                                            <li><span class="fa fa-star"></span></li>
                                                                            <li><span class="fa fa-star"></span></li>
                                                                            <li><span class="fa fa-star"></span></li>
                                                                            <li><span class="fa fa-star"></span></li>
                                                                            <li><span class="fa fa-star"></span></li>
                                                                        </ul>

                                                                        <ul class="review-stars filled"  style="width: 100%" >
                                                                            <li><span class="fa fa-star"></span></li>
                                                                            <li><span class="fa fa-star"></span></li>
                                                                            <li><span class="fa fa-star"></span></li>
                                                                            <li><span class="fa fa-star"></span></li>
                                                                            <li><span class="fa fa-star"></span></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="total-rating">
                                                                1 rating				</div>
                                                        </div>

                                                        <div class="detail-rating">
                                                            <div class="item-rating">
                                                                <div class="list-rating">

                                                                    <div class="value-content">
                                                                        <div class="list-number">
                                                                            5 Star								</div>
                                                                        <div class="progress">
                                                                            <div class="progress-bar progress-bar-success" style="width: 100%">
                                                                            </div>
                                                                        </div>
                                                                        <div class="value">
                                                                            100%								</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item-rating">
                                                                <div class="list-rating">

                                                                    <div class="value-content">
                                                                        <div class="list-number">
                                                                            4 Star								</div>
                                                                        <div class="progress">
                                                                            <div class="progress-bar progress-bar-success" style="width: 0%">
                                                                            </div>
                                                                        </div>
                                                                        <div class="value">
                                                                            0%								</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item-rating">
                                                                <div class="list-rating">

                                                                    <div class="value-content">
                                                                        <div class="list-number">
                                                                            3 Star								</div>
                                                                        <div class="progress">
                                                                            <div class="progress-bar progress-bar-success" style="width: 0%">
                                                                            </div>
                                                                        </div>
                                                                        <div class="value">
                                                                            0%								</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item-rating">
                                                                <div class="list-rating">

                                                                    <div class="value-content">
                                                                        <div class="list-number">
                                                                            2 Star								</div>
                                                                        <div class="progress">
                                                                            <div class="progress-bar progress-bar-success" style="width: 0%">
                                                                            </div>
                                                                        </div>
                                                                        <div class="value">
                                                                            0%								</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item-rating">
                                                                <div class="list-rating">

                                                                    <div class="value-content">
                                                                        <div class="list-number">
                                                                            1 Star								</div>
                                                                        <div class="progress">
                                                                            <div class="progress-bar progress-bar-success" style="width: 0%">
                                                                            </div>
                                                                        </div>
                                                                        <div class="value">
                                                                            0%								</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div id="comments">

                                                    <ol class="comment-list">
                                                        <li class="comment even thread-even depth-1" id="li-comment-41">

                                                            <div id="comment-41" class="the-comment ">
                                                                <div class="avatar">
                                                                    <img alt='' src='http://2.gravatar.com/avatar/?s=80&amp;d=mm&amp;r=g' srcset='http://2.gravatar.com/avatar/?s=160&#038;d=mm&#038;r=g 2x' class='avatar avatar-80 photo avatar-default' height='80' width='80' decoding='async'/>		</div>
                                                                <div class="comment-box">
                                                                    <div class="clearfix">
                                                                        <div class="name-comment">
                                                                            admin				</div>
                                                                        <div class="meta d-flex align-items-center">
                                                                            <div class="star-rating" title="Rated 5 out of 5">
                                                                                <span class="review-avg"><i class="fa fa-star"></i>5.0</span>
                                                                            </div>
                                                                            <div class="date">
                                                                                November 9, 2022						</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div itemprop="description" class="comment-text">
                                                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est.</p>
                                                                </div>
                                                            </div></li><!-- #comment-## -->
                                                    </ol>


                                                </div>


                                                <div id="review_form_wrapper" class="commentform ">
                                                    <div id="review_form">
                                                        <div class="commentform reset-button-default">
                                                            <div class="clearfix">
                                                                <div id="respond" class="comment-respond">
                                                                    <h4 class="title comment-reply-title">Add a review <small><a rel="nofollow" id="cancel-comment-reply-link" href="index.html#respond" style="display:none;">Cancel reply</a></small></h4><form action="http://swiftedgeacademy.com/hub/wp-comments-post.php" method="post" id="commentform" enctype="multipart/form-data" class="comment-form" novalidate><div class="choose-rating clearfix"><div class="choose-rating-inner row">
                                                                                <div class="col-sm-12 col-xs-12"><div class="form-group yourview"><div class="your-rating">Your Rating for this listing</div><div class="wrapper-rating-form"><div class="comment-form-rating">
                                                                                                <ul class="review-stars">
                                                                                                    <li><span class="fa fa-star"></span></li>
                                                                                                    <li><span class="fa fa-star"></span></li>
                                                                                                    <li><span class="fa fa-star"></span></li>
                                                                                                    <li><span class="fa fa-star"></span></li>
                                                                                                    <li><span class="fa fa-star"></span></li>
                                                                                                </ul>
                                                                                                <ul class="review-stars filled">
                                                                                                    <li><span class="fa fa-star"></span></li>
                                                                                                    <li><span class="fa fa-star"></span></li>
                                                                                                    <li><span class="fa fa-star"></span></li>
                                                                                                    <li><span class="fa fa-star"></span></li>
                                                                                                    <li><span class="fa fa-star"></span></li>
                                                                                                </ul>
                                                                                                <input type="hidden" value="5" name="rating" id="_input_rating"></div></div></div></div></div></div><div class="group-upload-preview clearfix"></div>
                                                                        <div class="form-group space-30"><label>Your Comment</label><textarea id="comment" class="form-control" placeholder="Comment" name="comment" cols="45" rows="5" aria-required="true" required></textarea></div><div class="row"><div class="col-12 col-sm-6"><div class="form-group"><label>Your Name</label><input id="author" placeholder="Name" class="form-control" name="author" type="text" value="" size="30" aria-required="true" /></div></div>
                                                                            <div class="col-12 col-sm-6"><div class="form-group"><label>Your Email</label><input id="email" placeholder="Email" class="form-control" name="email" type="text" value="" size="30" aria-required="true" /></div></div></div>
                                                                        <p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes" /> <label for="wp-comment-cookies-consent">Save my name, email, and website in this browser for the next time I comment.</label></p>
                                                                        <p class="form-submit"><input name="submit" type="submit" id="submit" class="btn btn-theme btn-inverse" value="Submit Review" /> <input type='hidden' name='comment_post_ID' value='5549' id='comment_post_ID' />
                                                                            <input type='hidden' name='comment_parent' id='comment_parent' value='0' />
                                                                        </p></form>	</div><!-- #respond -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sidebar-wrapper sidebar-service col-lg-4 col-12 d-none d-lg-block">
                                        <aside class="sidebar-listing-detail sidebar sidebar-right sticky-top">
                                            <aside class="widget widget_apus_service_price">    <div class="service-price">

                                                    <form id="service-add-to-cart-5549_nxlxK" class="service-add-to-cart" method="post">
                                                        <div class="service-price-inner">
                                                            <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span><span class="price-text">125.00</span></bdi></span>                    </div>
                                                        <div class="service-price-addons">
                                                            <div class="addon-item">
                                                                <label for="addon-item-1914_nxlxK">
                                                                    <input id="addon-item-1914_nxlxK" type="checkbox" name="service_addons[]" value="1914">

                                                                    <div class="content">
                                                                        <h5 class="title">2000 Words (+3 days)</h5>
                                                                        <div class="inner">
                                                                            I will professionally translate english to german                                                </div>
                                                                        <div class="price">
                                                                            <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span><span class="price-text">45.00</span></bdi></span>                                                </div>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                            <div class="addon-item">
                                                                <label for="addon-item-1913_nxlxK">
                                                                    <input id="addon-item-1913_nxlxK" type="checkbox" name="service_addons[]" value="1913">

                                                                    <div class="content">
                                                                        <h5 class="title">1000 Words (+2 days)</h5>
                                                                        <div class="inner">
                                                                            I will professionally translate english to german                                                </div>
                                                                        <div class="price">
                                                                            <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span><span class="price-text">25.00</span></bdi></span>                                                </div>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                        </div>

                                                        <input type="hidden" name="service_id" value="5549">
                                                        <button type="submit" class="btn btn-theme btn-inverse w-100">Buy Now <span>&#36;125.00</span> <i class="flaticon-right-up next"></i></button>
                                                    </form>


                                                </div>
                                            </aside><aside class="widget widget_apus_service_author"><h2 class="widget-title"><span>About The Seller</span></h2>    <div class="widget-service-author">
                                                    <div class="service-author-heading d-flex align-items-center">
                                                        <div class="service-author-image flex-shrink-0">
                                                            <a href="../../freelancer/thomas-powell/index.html">
                                                                <div class="freelancer-logo d-flex align-items-center">
                                                                    <div class="image-wrapper"><img width="150" height="150" src="../../wp-content/uploads/2022/10/8-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" srcset="http://swiftedgeacademy.com/hub/wp-content/uploads/2022/10/8-150x150.jpg 150w, http://swiftedgeacademy.com/hub/wp-content/uploads/2022/10/8-300x300.jpg 300w, http://swiftedgeacademy.com/hub/wp-content/uploads/2022/10/8-410x410.jpg 410w, http://swiftedgeacademy.com/hub/wp-content/uploads/2022/10/8.jpg 420w" sizes="(max-width: 150px) 100vw, 150px" /></div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="service-author-right flex-grow-1">
                                                            <h5><a href="../../freelancer/thomas-powell/index.html">
                                                                    Thomas Powell                </a></h5>
                                                            <!-- job -->
                                                            <div class="freelancer-job">
                                                                Design & Creative        </div>
                                                        </div>
                                                    </div>

                                                    <div class="metas">
                                                        <div class="freelancer-location with-title"><strong>Location:</strong>
                                                            Los Angeles
                                                        </div>            <div class="freelancer-salary with-title">
                                                            <strong>Rate:</strong> <span><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span><span class="price-text">25.00</span></bdi></span> - <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span><span class="price-text">30.00</span></bdi></span> / hr</span>
                                                        </div>        </div>

                                                    <a href="#apus-contact-form-wrapper" class="btn btn-theme btn-outline w-100 btn-service-contact-form btn-show-popup">Contact Me <i class="flaticon-right-up next"></i></a>
                                                </div>
                                                <div id="apus-contact-form-wrapper" class="apus-contact-form mfp-hide apus-popup-form" data-effect="fadeIn">

                                                    <a href="javascript:void(0);" class="close-magnific-popup ali-right"><i class="ti-close"></i></a>

                                                    <form method="post" action="http://swiftedgeacademy.com/hub/service/power-management-notification-and-geofencing-for-host-serve/?" class="contact-form-wrapper">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" name="subject" placeholder="Subject" required="required">
                                                                </div><!-- /.form-group -->
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <input type="email" class="form-control" name="email" placeholder="E-mail" required="required">
                                                                </div><!-- /.form-group -->
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control style2" name="phone" placeholder="Phone" required="required">
                                                                </div><!-- /.form-group -->
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <textarea class="form-control" name="message" placeholder="Message" required="required"></textarea>
                                                        </div><!-- /.form-group -->


                                                        <input type="hidden" name="post_id" value="5549">
                                                        <button class="button btn btn-theme btn-outline w-100" name="contact-form">Send Message<i class="flaticon-right-up next"></i></button>
                                                    </form>
                                                </div>
                                            </aside>				   	</aside>
                                    </div>

                                </div>

                                <!-- service related -->
                                <div class="wrapper-services-related">
                                    <div class="related-posts">
                                        <h4 class="title">
                                            Related Services        </h4>
                                        <div class="widget-content">
                                            <div class="slick-carousel" data-carousel="slick"
                                                 data-items="4"
                                                 data-large="4"
                                                 data-small="1"
                                                 data-medium="2"

                                                 data-slidestoscroll="4"
                                                 data-slidestoscroll_smallmedium="4"
                                                 data-slidestoscroll_extrasmall="1"
                                                 data-pagination="false" data-nav="true" data-rows="1" data-infinite="false" data-autoplay="false">
                                                <div class="item">


                                                    <article class="map-item service-item post-5557 service type-service status-publish has-post-thumbnail hentry location-new-york service_category-development-it service_category-programming-tech" data-latitude="40.77229478697032" data-longitude="-73.92725741145593" data-img="http://swiftedgeacademy.com/hub/wp-content/uploads/2022/11/service12-495x370.jpg" data-logo="../../wp-content/uploads/2022/11/service12-150x150.jpg">
                                                        <div class="position-relative">
                                                            <div class="service-image">
                                                                <a href="../web-development-with-html-css-javascript-and-php/index.html">
                                                                    <div class="image-wrapper"><img loading="lazy" width="495" height="370" src="../../wp-content/uploads/2022/11/service12-495x370.jpg" class="attachment-freeio-listing-grid size-freeio-listing-grid" alt="" srcset="http://swiftedgeacademy.com/hub/wp-content/uploads/2022/11/service12-495x370.jpg 495w, http://swiftedgeacademy.com/hub/wp-content/uploads/2022/11/service12-300x225.jpg 300w, http://swiftedgeacademy.com/hub/wp-content/uploads/2022/11/service12-768x576.jpg 768w, http://swiftedgeacademy.com/hub/wp-content/uploads/2022/11/service12-600x450.jpg 600w" sizes="(max-width: 495px) 100vw, 495px" /></div>	                            	</a>
                                                            </div>
                                                            <a href="javascript:void(0)" class="btn-add-service-favorite" data-service_id="5557" data-nonce="3aa7ad7e72"
                                                               data-bs-toggle="tooltip"
                                                               title="Add Favorite"
                                                            >
                                                                <i class="flaticon-like"></i>
                                                                <span>Save</span>
                                                            </a>
                                                        </div>

                                                        <div class="service-information">
                                                            <div class="category-service">
                                                                <a href="../../service-category/development-it/index.html" style="">Development &amp; IT</a>
                                                            </div>

                                                            <h2 class="service-title"><a href="../web-development-with-html-css-javascript-and-php/index.html" rel="bookmark">Web development, with HTML, CSS, JavaScript and PHP</a></h2>        		<div class="rating-reviews">
                                                                <i class="fa fa-star"></i>
                                                                <span class="rating">4.5</span>
                                                                <span class="text">(2 Reviews)</span>	    </div>
                                                            <div class="info-bottom d-flex align-items-center">
                                                                <div class="service-author">
                                                                    <a href="../../freelancer/agent-pakulla/index.html">
                                                                        <div class="freelancer-logo d-flex align-items-center">
                                                                            <div class="image-wrapper"><img loading="lazy" width="150" height="150" src="../../wp-content/uploads/2022/10/12-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" srcset="http://swiftedgeacademy.com/hub/wp-content/uploads/2022/10/12-150x150.jpg 150w, http://swiftedgeacademy.com/hub/wp-content/uploads/2022/10/12-300x300.jpg 300w, http://swiftedgeacademy.com/hub/wp-content/uploads/2022/10/12-410x410.jpg 410w, http://swiftedgeacademy.com/hub/wp-content/uploads/2022/10/12.jpg 420w" sizes="(max-width: 150px) 100vw, 150px" /></div>
                                                                        </div>
                                                                        <span class="text">
	                	Agent Pakulla	                </span>
                                                                    </a>
                                                                </div>
                                                                <div class="ms-auto">
                                                                    <div class="service-salary with-title">
                                                                        <span class="text">Starting at:</span> <span><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span><span class="price-text">29.00</span></bdi></span></span>
                                                                    </div>            </div>
                                                            </div>
                                                        </div>
                                                    </article><!-- #post-## -->

                                                </div>
                                                <div class="item">


                                                    <article class="map-item service-item post-5556 service type-service status-publish has-post-thumbnail hentry location-new-york service_category-design-creative service_category-digital-marketing is-featured" data-latitude="40.77693245895672" data-longitude="-73.9212720020022" data-img="http://swiftedgeacademy.com/hub/wp-content/uploads/2022/11/service11-495x370.jpg" data-logo="../../wp-content/uploads/2022/11/service11-150x150.jpg">
                                                        <div class="position-relative">
                                                            <span class="featured-text">Featured</span>
                                                            <div class="service-image">
                                                                <a href="../developers-drop-the-framework-folder-into-a-new-parent/index.html">
                                                                    <div class="image-wrapper"><img loading="lazy" width="495" height="370" src="../../wp-content/uploads/2022/11/service11-495x370.jpg" class="attachment-freeio-listing-grid size-freeio-listing-grid" alt="" srcset="http://swiftedgeacademy.com/hub/wp-content/uploads/2022/11/service11-495x370.jpg 495w, http://swiftedgeacademy.com/hub/wp-content/uploads/2022/11/service11-300x225.jpg 300w, http://swiftedgeacademy.com/hub/wp-content/uploads/2022/11/service11-768x576.jpg 768w, http://swiftedgeacademy.com/hub/wp-content/uploads/2022/11/service11-600x450.jpg 600w" sizes="(max-width: 495px) 100vw, 495px" /></div>	                            	</a>
                                                            </div>
                                                            <a href="javascript:void(0)" class="btn-add-service-favorite" data-service_id="5556" data-nonce="3aa7ad7e72"
                                                               data-bs-toggle="tooltip"
                                                               title="Add Favorite"
                                                            >
                                                                <i class="flaticon-like"></i>
                                                                <span>Save</span>
                                                            </a>
                                                        </div>

                                                        <div class="service-information">
                                                            <div class="category-service">
                                                                <a href="../../service-category/design-creative/index.html" style="">Design &amp; Creative</a>
                                                            </div>

                                                            <h2 class="service-title"><a href="../developers-drop-the-framework-folder-into-a-new-parent/index.html" rel="bookmark">Developers drop the framework folder into a new parent</a></h2>        		<div class="rating-reviews">
                                                                <i class="fa fa-star"></i>
                                                                <span class="rating">4.5</span>
                                                                <span class="text">(2 Reviews)</span>	    </div>
                                                            <div class="info-bottom d-flex align-items-center">
                                                                <div class="service-author">
                                                                    <a href="../../freelancer/john-powell/index.html">
                                                                        <div class="freelancer-logo d-flex align-items-center">
                                                                            <div class="image-wrapper"><img loading="lazy" width="150" height="150" src="../../wp-content/uploads/2022/10/5-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" srcset="http://swiftedgeacademy.com/hub/wp-content/uploads/2022/10/5-150x150.jpg 150w, http://swiftedgeacademy.com/hub/wp-content/uploads/2022/10/5-300x300.jpg 300w, http://swiftedgeacademy.com/hub/wp-content/uploads/2022/10/5-410x410.jpg 410w, http://swiftedgeacademy.com/hub/wp-content/uploads/2022/10/5.jpg 420w" sizes="(max-width: 150px) 100vw, 150px" /></div>
                                                                        </div>
                                                                        <span class="text">
	                	John Powell	                </span>
                                                                    </a>
                                                                </div>
                                                                <div class="ms-auto">
                                                                    <div class="service-salary with-title">
                                                                        <span class="text">Starting at:</span> <span><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span><span class="price-text">128.00</span></bdi></span></span>
                                                                    </div>            </div>
                                                            </div>
                                                        </div>
                                                    </article><!-- #post-## -->

                                                </div>
                                                <div class="item">


                                                    <article class="map-item service-item post-5555 service type-service status-publish has-post-thumbnail hentry location-new-york service_category-development-it service_category-trending" data-latitude="40.77936946417973" data-longitude="-73.91536380670227" data-img="http://swiftedgeacademy.com/hub/wp-content/uploads/2022/11/service10-495x370.jpg" data-logo="../../wp-content/uploads/2022/11/service10-150x150.jpg">
                                                        <div class="position-relative">
                                                            <div class="service-image">
                                                                <a href="../flexibility-customization-with-cms-vs-php-framework/index.html">
                                                                    <div class="image-wrapper"><img loading="lazy" width="495" height="370" src="../../wp-content/uploads/2022/11/service10-495x370.jpg" class="attachment-freeio-listing-grid size-freeio-listing-grid" alt="" srcset="http://swiftedgeacademy.com/hub/wp-content/uploads/2022/11/service10-495x370.jpg 495w, http://swiftedgeacademy.com/hub/wp-content/uploads/2022/11/service10-300x225.jpg 300w, http://swiftedgeacademy.com/hub/wp-content/uploads/2022/11/service10-768x576.jpg 768w, http://swiftedgeacademy.com/hub/wp-content/uploads/2022/11/service10-600x450.jpg 600w" sizes="(max-width: 495px) 100vw, 495px" /></div>	                            	</a>
                                                            </div>
                                                            <a href="javascript:void(0)" class="btn-add-service-favorite" data-service_id="5555" data-nonce="3aa7ad7e72"
                                                               data-bs-toggle="tooltip"
                                                               title="Add Favorite"
                                                            >
                                                                <i class="flaticon-like"></i>
                                                                <span>Save</span>
                                                            </a>
                                                        </div>

                                                        <div class="service-information">
                                                            <div class="category-service">
                                                                <a href="../../service-category/development-it/index.html" style="">Development &amp; IT</a>
                                                            </div>

                                                            <h2 class="service-title"><a href="../flexibility-customization-with-cms-vs-php-framework/index.html" rel="bookmark">Flexibility &#038; Customization with CMS vs PHP Framework</a></h2>        		<div class="rating-reviews">
                                                                <i class="fa fa-star"></i>
                                                                <span class="rating">5.0</span>
                                                                <span class="text">(1 Review)</span>	    </div>
                                                            <div class="info-bottom d-flex align-items-center">
                                                                <div class="service-author">
                                                                    <a href="../../freelancer/thomas-powell/index.html">
                                                                        <div class="freelancer-logo d-flex align-items-center">
                                                                            <div class="image-wrapper"><img width="150" height="150" src="../../wp-content/uploads/2022/10/8-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" srcset="http://swiftedgeacademy.com/hub/wp-content/uploads/2022/10/8-150x150.jpg 150w, http://swiftedgeacademy.com/hub/wp-content/uploads/2022/10/8-300x300.jpg 300w, http://swiftedgeacademy.com/hub/wp-content/uploads/2022/10/8-410x410.jpg 410w, http://swiftedgeacademy.com/hub/wp-content/uploads/2022/10/8.jpg 420w" sizes="(max-width: 150px) 100vw, 150px" /></div>
                                                                        </div>
                                                                        <span class="text">
	                	Thomas Powell	                </span>
                                                                    </a>
                                                                </div>
                                                                <div class="ms-auto">
                                                                    <div class="service-salary with-title">
                                                                        <span class="text">Starting at:</span> <span><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span><span class="price-text">99.00</span></bdi></span></span>
                                                                    </div>            </div>
                                                            </div>
                                                        </div>
                                                    </article><!-- #post-## -->

                                                </div>
                                            </div>
                                        </div>
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
