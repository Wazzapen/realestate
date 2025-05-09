@extends('frontend.frontend_dashboard')
@section('main')

<!-- banner-section -->
@include('frontend.home.banner')
<!-- banner-section end -->


<!-- category-section -->
@include('frontend.home.category')
<!-- category-section end -->


<!-- feature-section -->
@include('frontend.home.feature')
<!-- feature-section end -->


<!-- video-section -->
@include('frontend.home.video')
<!-- video-section end -->


<!-- deals-section -->
<section class="deals-section sec-pad">
    <div class="auto-container">
        <div class="sec-title">
            <h5>Hot Property</h5>
            <h2>Our Best Deals</h2>
        </div>
         
<div class="row clearfix">

<div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                <div class="feature-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="  {{ asset('frontend/assets/images/feature/feature-1.jpg') }}" alt=""></figure>
                            <div class="batch"><i class="icon-11"></i></div>
                            <span class="category">Featured</span>
                        </div>
                        <div class="lower-content">
                            <div class="author-info clearfix">
                                <div class="author pull-left">
                                    <figure class="author-thumb"><img src="  {{ asset('frontend/assets/images/feature/author-1.jpg') }}" alt=""></figure>
                                    <h6>Michael Bean</h6>
                                </div>
                                <div class="buy-btn pull-right"><a href="property-details.html">For Buy</a></div>
                            </div>
                            <div class="title-text"><h4><a href="property-details.html">Villa on Grand Avenue</a></h4></div>
                            <div class="price-box clearfix">
                                <div class="price-info pull-left">
                                    <h6>Start From</h6>
                                    <h4>$30,000.00</h4>
                                </div>
                                <ul class="other-option pull-right clearfix">
                                    <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                    <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                </ul>
                            </div>
                             
                            <ul class="more-details clearfix">
                                <li><i class="icon-14"></i>3 Beds</li>
                                <li><i class="icon-15"></i>2 Baths</li>
                                <li><i class="icon-16"></i>600 Sq Ft</li>
                            </ul>
                            <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                        </div>
                    </div>
                </div>
            </div>




               <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                <div class="feature-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="  {{ asset('frontend/assets/images/feature/feature-1.jpg') }}" alt=""></figure>
                            <div class="batch"><i class="icon-11"></i></div>
                            <span class="category">Featured</span>
                        </div>
                        <div class="lower-content">
                            <div class="author-info clearfix">
                                <div class="author pull-left">
                                    <figure class="author-thumb"><img src="  {{ asset('frontend/assets/images/feature/author-1.jpg') }}" alt=""></figure>
                                    <h6>Michael Bean</h6>
                                </div>
                                <div class="buy-btn pull-right"><a href="property-details.html">For Buy</a></div>
                            </div>
                            <div class="title-text"><h4><a href="property-details.html">Villa on Grand Avenue</a></h4></div>
                            <div class="price-box clearfix">
                                <div class="price-info pull-left">
                                    <h6>Start From</h6>
                                    <h4>$30,000.00</h4>
                                </div>
                                <ul class="other-option pull-right clearfix">
                                    <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                    <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                </ul>
                            </div>
                            
                            <ul class="more-details clearfix">
                                <li><i class="icon-14"></i>3 Beds</li>
                                <li><i class="icon-15"></i>2 Baths</li>
                                <li><i class="icon-16"></i>600 Sq Ft</li>
                            </ul>
                            <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                        </div>
                    </div>
                </div>
            </div>


<div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                <div class="feature-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="  {{ asset('frontend/assets/images/feature/feature-1.jpg') }}" alt=""></figure>
                            <div class="batch"><i class="icon-11"></i></div>
                            <span class="category">Featured</span>
                        </div>
                        <div class="lower-content">
                            <div class="author-info clearfix">
                                <div class="author pull-left">
                                    <figure class="author-thumb"><img src="  {{ asset('frontend/assets/images/feature/author-1.jpg') }}" alt=""></figure>
                                    <h6>Michael Bean</h6>
                                </div>
                                <div class="buy-btn pull-right"><a href="property-details.html">For Buy</a></div>
                            </div>
                            <div class="title-text"><h4><a href="property-details.html">Villa on Grand Avenue</a></h4></div>
                            <div class="price-box clearfix">
                                <div class="price-info pull-left">
                                    <h6>Start From</h6>
                                    <h4>$30,000.00</h4>
                                </div>
                                <ul class="other-option pull-right clearfix">
                                    <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                    <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                </ul>
                            </div>
                             
                            <ul class="more-details clearfix">
                                <li><i class="icon-14"></i>3 Beds</li>
                                <li><i class="icon-15"></i>2 Baths</li>
                                <li><i class="icon-16"></i>600 Sq Ft</li>
                            </ul>
                            <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                        </div>
                    </div>
                </div>
            </div>





</div>

    </div>
</section>
<!-- deals-section end -->


<!-- testimonial-section end -->
<section class="testimonial-section bg-color-1 centred">
    <div class="pattern-layer" style="background-image: url(  {{ asset('frontend/assets/images/shape/shape-1.png') }});"></div>
    <div class="auto-container">
        <div class="sec-title">
            <h5>Testimonials</h5>
            <h2>What They Say About Us</h2>
        </div>
        <div class="single-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
            <div class="testimonial-block-one">
                <div class="inner-box">
                    <figure class="thumb-box"><img src="  {{ asset('frontend/assets/images/resource/testimonial-1.jpg') }}" alt=""></figure>
                    <div class="text">
                        <p>Our goal each day is to ensure that our residents’ needs are not only met but exceeded. To make that happen we are committed to provid ing an environment in which residents can enjoy.</p>
                    </div>
                    <div class="author-info">
                        <h4>Rebeka Dawson</h4>
                        <span class="designation">Instructor</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-block-one">
                <div class="inner-box">
                    <figure class="thumb-box"><img src="  {{ asset('frontend/assets/images/resource/testimonial-2.jpg') }}" alt=""></figure>
                    <div class="text">
                        <p>Our goal each day is to ensure that our residents’ needs are not only met but exceeded. To make that happen we are committed to provid ing an environment in which residents can enjoy.</p>
                    </div>
                    <div class="author-info">
                        <h4>Marc Kenneth</h4>
                        <span class="designation">Founder CEO</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-block-one">
                <div class="inner-box">
                    <figure class="thumb-box"><img src="  {{ asset('frontend/assets/images/resource/testimonial-1.jpg') }}" alt=""></figure>
                    <div class="text">
                        <p>Our goal each day is to ensure that our residents’ needs are not only met but exceeded. To make that happen we are committed to provid ing an environment in which residents can enjoy.</p>
                    </div>
                    <div class="author-info">
                        <h4>Owen Lester</h4>
                        <span class="designation">Manager</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonial-section end -->


<!-- chooseus-section -->
<section class="chooseus-section">
    <div class="auto-container">
        <div class="inner-container bg-color-2">
            <div class="upper-box clearfix">
                <div class="sec-title light">
                    <h5>Why Choose Us?</h5>
                    <h2>Reasons To Choose Us</h2>
                </div>
                <div class="btn-box">
                    <a href="categories.html" class="theme-btn btn-one">All Categories</a>
                </div>
            </div>
            <div class="lower-box">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                        <div class="chooseus-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-19"></i></div>
                                <h4>Excellent Reputation</h4>
                                <p>Lorem ipsum dolor sit consectetur sed eiusm tempor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                        <div class="chooseus-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-26"></i></div>
                                <h4>Best Local Agents</h4>
                                <p>Lorem ipsum dolor sit consectetur sed eiusm tempor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                        <div class="chooseus-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-21"></i></div>
                                <h4>Personalized Service</h4>
                                <p>Lorem ipsum dolor sit consectetur sed eiusm tempor.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- chooseus-section end -->


<!-- place-section -->
<section class="place-section sec-pad">
    <div class="auto-container">
        <div class="sec-title centred">
            <h5>Top Places</h5>
            <h2>Most Popular Places</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing sed do eiusmod tempor incididunt <br />labore dolore magna aliqua enim.</p>
        </div>
        <div class="sortable-masonry">
            <div class="items-container row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all illustration brand marketing software">
                    <div class="place-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="  {{ asset('frontend/assets/images/resource/place-1.jpg') }}" alt=""></figure>
                            <div class="text">
                                <h4><a href="categories.html">Los Angeles</a></h4>
                                <p>10 Properties</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all brand illustration print software logo">
                    <div class="place-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="  {{ asset('frontend/assets/images/resource/place-2.jpg') }}" alt=""></figure>
                            <div class="text">
                                <h4><a href="categories.html">San Francisco</a></h4>
                                <p>08 Properties</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all illustration marketing logo">
                    <div class="place-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="  {{ asset('frontend/assets/images/resource/place-3.jpg') }}" alt=""></figure>
                            <div class="text">
                                <h4><a href="categories.html">Las Vegas</a></h4>
                                <p>29 Properties</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6 col-sm-12 masonry-item small-column all brand marketing print software">
                    <div class="place-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="  {{ asset('frontend/assets/images/resource/place-4.jpg') }}" alt=""></figure>
                            <div class="text">
                                <h4><a href="categories.html">New York City</a></h4>
                                <p>05 Properties</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- place-section end -->


<!-- team-section -->
<section class="team-section sec-pad centred bg-color-1">
    <div class="pattern-layer" style="background-image: url(  {{ asset('frontend/assets/images/shape/shape-1.png') }});"></div>
    <div class="auto-container">
        <div class="sec-title">
            <h5>Our Agents</h5>
            <h2>Meet Our Excellent Agents</h2>
        </div>
        <div class="single-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
            <div class="team-block-one">
                <div class="inner-box">
                    <figure class="image-box"><img src="  {{ asset('frontend/assets/images/team/team-1.jpg') }}" alt=""></figure>
                    <div class="lower-content">
                        <div class="inner">
                            <h4><a href="agents-details.html">Merrie Lewis</a></h4>
                            <span class="designation">Senior Agent</span>
                            <ul class="social-links clearfix">
                                <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-block-one">
                <div class="inner-box">
                    <figure class="image-box"><img src="  {{ asset('frontend/assets/images/team/team-2.jpg') }}" alt=""></figure>
                    <div class="lower-content">
                        <div class="inner">
                            <h4><a href="agents-details.html">Parks Missie</a></h4>
                            <span class="designation">Senior Agent</span>
                            <ul class="social-links clearfix">
                                <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-block-one">
                <div class="inner-box">
                    <figure class="image-box"><img src="  {{ asset('frontend/assets/images/team/team-3.jpg') }}" alt=""></figure>
                    <div class="lower-content">
                        <div class="inner">
                            <h4><a href="agents-details.html">Mariana Buenos</a></h4>
                            <span class="designation">Senior Agent</span>
                            <ul class="social-links clearfix">
                                <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-block-one">
                <div class="inner-box">
                    <figure class="image-box"><img src="  {{ asset('frontend/assets/images/team/team-4.jpg') }}" alt=""></figure>
                    <div class="lower-content">
                        <div class="inner">
                            <h4><a href="agents-details.html">Stephen Fowler</a></h4>
                            <span class="designation">Senior Agent</span>
                            <ul class="social-links clearfix">
                                <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-block-one">
                <div class="inner-box">
                    <figure class="image-box"><img src="  {{ asset('frontend/assets/images/team/team-5.jpg') }}" alt=""></figure>
                    <div class="lower-content">
                        <div class="inner">
                            <h4><a href="agents-details.html">Daisy Phillips</a></h4>
                            <span class="designation">Senior Agent</span>
                            <ul class="social-links clearfix">
                                <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- team-section end -->


<!-- cta-section -->
<section class="cta-section bg-color-2">
    <div class="pattern-layer" style="background-image: url(  {{ asset('frontend/assets/images/shape/shape-2.png') }});"></div>
    <div class="auto-container">
        <div class="inner-box clearfix">
            <div class="text pull-left">
                <h2>Looking to Buy a New Property or <br />Sell an Existing One?</h2>
            </div>
            <div class="btn-box pull-right">
                <a href="property-details.html" class="theme-btn btn-three">Rent Properties</a>
                <a href="index.html" class="theme-btn btn-one">Buy Properties</a>
            </div>
        </div>
    </div>
</section>
<!-- cta-section end -->


<!-- news-section -->
<section class="news-section sec-pad">
    <div class="auto-container">
        <div class="sec-title centred">
            <h5>News & Article</h5>
            <h2>Stay Update With Realshed</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing sed do eiusmod tempor incididunt <br />labore dolore magna aliqua enim.</p>
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="blog-details.html"><img src="  {{ asset('frontend/assets/images/news/news-1.jpg') }}" alt=""></a></figure>
                            <span class="category">Featured</span>
                        </div>
                        <div class="lower-content">
                            <h4><a href="blog-details.html">Including Animation In Your Design System</a></h4>
                            <ul class="post-info clearfix">
                                <li class="author-box">
                                    <figure class="author-thumb"><img src="  {{ asset('frontend/assets/images/news/author-1.jpg') }}" alt=""></figure>
                                    <h5><a href="blog-details.html">Eva Green</a></h5>
                                </li>
                                <li>April 10, 2020</li>
                            </ul>
                            <div class="text">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                            </div>
                            <div class="btn-box">
                                <a href="blog-details.html" class="theme-btn btn-two">See Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                <div class="news-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="blog-details.html"><img src="  {{ asset('frontend/assets/images/news/news-2.jpg') }}" alt=""></a></figure>
                            <span class="category">Featured</span>
                        </div>
                        <div class="lower-content">
                            <h4><a href="blog-details.html">Taking The Pattern Library To The Next Level</a></h4>
                            <ul class="post-info clearfix">
                                <li class="author-box">
                                    <figure class="author-thumb"><img src="  {{ asset('frontend/assets/images/news/author-2.jpg') }}" alt=""></figure>
                                    <h5><a href="blog-details.html">George Clooney</a></h5>
                                </li>
                                <li>April 09, 2020</li>
                            </ul>
                            <div class="text">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                            </div>
                            <div class="btn-box">
                                <a href="blog-details.html" class="theme-btn btn-two">See Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="blog-details.html"><img src="  {{ asset('frontend/assets/images/news/news-3.jpg') }}" alt=""></a></figure>
                            <span class="category">Featured</span>
                        </div>
                        <div class="lower-content">
                            <h4><a href="blog-details.html">How New Font Technologies Will Improve The Web</a></h4>
                            <ul class="post-info clearfix">
                                <li class="author-box">
                                    <figure class="author-thumb"><img src="  {{ asset('frontend/assets/images/news/author-3.jpg') }}" alt=""></figure>
                                    <h5><a href="blog-details.html">Simon Baker</a></h5>
                                </li>
                                <li>April 28, 2020</li>
                            </ul>
                            <div class="text">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                            </div>
                            <div class="btn-box">
                                <a href="blog-details.html" class="theme-btn btn-two">See Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- news-section end -->


<!-- download-section -->
<section class="download-section bg-color-3">
    <div class="pattern-layer" style="background-image: url(  {{ asset('frontend/assets/images/shape/shape-3.png') }});"></div>
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                <div class="image-box">
                    <figure class="image image-1 wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms"><img src=" {{ asset('frontend/assets/images/resource/download-1.png') }}" alt=""></figure>
                    <figure class="image image-2 wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms"><img src=" {{ asset('frontend/assets/images/resource/download-2.png') }}" alt=""></figure>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 content-column">
                <div class="content_block_1">
                    <div class="content-box">
                        <span>Download</span>
                        <h2>Download Our Android and IOS App for Experience</h2>
                        <div class="download-btn">
                            <a href="index.html" class="app-store">
                                <i class="fab fa-apple"></i>
                                <p>Download on</p>
                                <h4>App Store</h4>
                            </a>
                            <a href="index.html" class="google-play">
                                <i class="fab fa-google-play"></i>
                                <p>Get It On</p>
                                <h4>Google Play</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- download-section end -->

@endsection