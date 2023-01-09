@extends('frontend.layout.app')
@section('main')
    <!-- banner area start -->
    <div class="app-banner style-2 style-3">
        <div class="animate-bubble">


            <div class="bubble a-one"></div>
            <div class="bubble a-three"></div>
            <div class="bubble a-four"></div>
            <div class="bubble a-six"></div>
            <div class="bubble a-eight">
                <img src="frontend/assets/images/banner/shape/a3.png" alt="animate">
            </div>
            <div class="bubble a-nine">
                <img src="frontend/assets/images/banner/shape/a3.png" alt="animate">
            </div>
            <div class="bubble a-ten">
                <img src="frontend/assets/images/banner/shape/a3.png" alt="animate">
            </div>
        </div>
        <div class="container">
            <div class="baner-wrapper">
                <div class="banner-text">
                    <h2>

                    </h2>
                    <p>
                        Lift your business to new heights with our digital marketing services.
                    </p>
                    <a href="#" class="custom-btn">
                        <span>Contact Us</span>
                    </a>
                </div>
                <div class="banner-thumb">

                    <form action="contact" method="post" class="form-control" style="background: transparent; border:none">
                        @csrf
                        <h2 style="color: #fff;">Contact Us</h2>
                        <h4 style="color: #fff">Enter your detail to get the best service in the industery</h1>

                            <input type="text" name="name" placeholder="Enter Your Name"
                                class="form-control mt-3 border-none" required>

                            <input type="tel" name="phone" placeholder="Enter Your Phone Number"
                                class="form-control mt-3 border-none" required>

                            <input type="email" name="email" placeholder="Enter Your Email Address" required
                                class="form-control mt-3 border-none">

                            <select data-msg-required="Please select a service." class="form-control mt-3 border-none"
                                name="service" required>
                                <option value="" selected>Select Service</option>
                                <option value="Website Design and Development">Website Design and Development</option>
                                <option value="Digital Marketing">Digital Marketing</option>
                                <option value="Graphic Design">Graphic Design</option>
                                <option value="Search Engine Optimization (SEO)">Search Engine Optimization (SEO)</option>
                                <option value="Social Media Optimization (SMO)">Social Media Optimization (SMO)</option>
                                <option value="Social Media Marketing (SMM)">Social Media Marketing (SMM)</option>
                                <option value="all of the above"> All of the above</option>
                            </select>
                            <input class="mt-4 btn btn-primary w-100" type="submit" value="Send"
                                style="background: #7560eb; box-shadow: 0 5px 5px rgba(139, 117, 255, 0.36)">
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- banner area ends -->


    <!-- Our Work start -->
    <div class="service-area style-6">
        <div class="container">
            <div class="section-heading text-center wow">
                <span>Our Work</span>
                <h3>Our Portfolio</h3>
                <p>
                    We are the top digital marketing company in Delhi NCR offering our clients 360-degree and affordable
                    digital solutions.
                </p>
            </div>
            <div class="section-wrapper">
                <div class="row justify-content-center">
                    @php
                        $work = [['himanchal_travel.webp', 'Himanchal Travels', 'https://himanchaltravels.com/', 'This is Himancla Travles'], ['stock_benifits.webp', 'Stock Benefits', 'https://stockbenifits.com', 'This is stock benifits'], ['sharvani_estate.webp', 'Sharvani Estate', 'https://sharvaniestate.com/', 'This is sharvani estate'], ['mintmudra.webp', 'Mint Mudra', 'https://mintmudra.in/', 'This is mint mudra']];
                    @endphp

                    @foreach ($work as $website)
                        <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                            <div class="post-content text-center service-content wow">
                                <div class="post-thumb">
                                    <img src="frontend/assets/images/{{ $website[0] }}" alt="service-image"
                                        style="height: 50px">
                                </div>
                                <div class="post-text">
                                    <h4><a target="_blank" href="{{ $website[2] }}">{{ $website[1] }}</a></h4>
                                    <p>
                                        {{ $website[3] }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach






                </div>
            </div>
        </div>
    </div>
    <!-- Our Work ends -->


    <!-- service area start -->
    <div class="service-area style-5">
        <div class="container">
            <div class="section-heading text-center wow">
                <span>Features</span>
                <h3>Our Core Features</h3>
                <p>
                    The #1 Digital Marketing Agency for Small Businesses, Agencies, and Enterprises.
                </p>
            </div>
            <div class="section-wrapper">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="post-content text-center service-content wow fadeInUp" data-wow-delay=".1s"
                            data-wow-duration="1s">
                            <div class="post-thumb">
                                <img src="frontend/assets/images/service/service_7.png" alt="service-image">
                            </div>
                            <div class="post-text">
                                <h4><a href="#0">Streamlined Project Management</a></h4>
                                <p>
                                    At Mind You Ads we increase the probability of success of any project by our Streamline
                                    Project Management System that tracks the speed, budget, and deadlines of the project.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="post-content text-center service-content wow fadeInUp" data-wow-delay=".3s"
                            data-wow-duration="1s">
                            <div class="post-thumb">
                                <img src="frontend/assets/images/service/service_8.png" alt="service-image">
                            </div>
                            <div class="post-text">
                                <h4><a href="#0">Dedicated Teams of Professionals</a></h4>
                                <p>
                                    Our team of experts can help your business reach your potential customers with a
                                    strategic project planning and execution solution, that improves capital and resource.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="post-content text-center service-content wow fadeInUp" data-wow-delay=".5s"
                            data-wow-duration="1s">
                            <div class="post-thumb">
                                <img src="frontend/assets/images/service/service_9.png" alt="service-image">
                            </div>
                            <div class="post-text">
                                <h4><a href="#0">Better & Affordable Services</a></h4>
                                <p>
                                    Utilize our affordable services to send more traffic to your website and increase your
                                    leads, sales and revenue with our expert digital marketing strategists.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service area ends -->

    <!-- about service two area start -->
    <div class="service-two style-1">
        <div class="container">
            <div class="row style-two align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="service-thumb">
                        <img src="frontend/assets/images/service/reserch_bg.png" class="wow" alt="service-image">
                        <div class="top-thumb">
                            <img src="frontend/assets/images/service/reserch_top.png" class="wow" alt="service-image">
                        </div>
                        <div class="bottom-thumb">
                            <img src="frontend/assets/images/service/reserch_bottom.png" class="wow"
                                alt="service-image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="post-heading">
                        <span>About Us</span>
                        <h3>We Are The Best Digital Marketing Agency</h3>
                        <p>
                            Choose Mind Your Ads as a partner for your unstoppable business growth. We provide
                            industry-specific solutions
                            to help enterprises and fast-growing organizations to succeed in today’s digital-first world.
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="post-content style-one">
                                <div class="post-thumb">
                                    <img src="frontend/assets/images/service/choose_4.png" alt="service-image">
                                </div>
                                <div class="post-text">
                                    <h5><a href="#">Reliable Service</a></h5>
                                    <p>
                                        Mind Your Ads delivers great results in making any business a successful brand
                                        through its reliable services.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="post-content style-one">
                                <div class="post-thumb">
                                    <img src="frontend/assets/images/service/choose_2.png" alt="service-image">
                                </div>
                                <div class="post-text">
                                    <h5><a href="#0">Trusted by People Like You</a></h5>
                                    <p>
                                        Mind Your Ads maintain consistency with what we say and what we do. No matter the
                                        size of your organization, we make sure that every rupee spent on advertising
                                        maximize your profit.
                                    </p>
                                </div>
                            </div>
                            <ul class="client-service">
                                <li>
                                    <div class="counter-content">
                                        <span class="counter">503</span><span>+</span>
                                        <p>Satisfied Clients</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="counter-content">
                                        <span class="counter">48</span><span>+</span>
                                        <p>Expert Member</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="counter-content">
                                        <span class="counter">620</span><span>+</span>
                                        <p>Works Done</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about service two area start -->

    <!-- service area start -->
    <div class="service-area style-6">
        <div class="container">
            <div class="section-heading text-center wow">
                <span>Services</span>
                <h3>See Our Top Notch Services</h3>
                <p>
                    We are the top digital marketing company in Delhi NCR offering our clients 360-degree and affordable
                    digital solutions.
                </p>
            </div>
            <div class="section-wrapper">
                <div class="row justify-content-center">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                        <div class="post-content text-center service-content wow">
                            <div class="post-thumb">
                                <img src="frontend/assets/images/service/service_11.png" alt="service-image">
                            </div>
                            <div class="post-text">
                                <h4><a href="#0">Website Design & Development</a></h4>
                                <p>
                                    Get a custom website designed by professional website designers. No templates, only
                                    original designs.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                        <div class="post-content text-center service-content wow">
                            <div class="post-thumb">
                                <img src="frontend/assets/images/service/service_12.png" alt="service-image">
                            </div>
                            <div class="post-text">
                                <h4><a href="#0">Social Media Marketing</a></h4>
                                <p>
                                    Promote your Business & Reach the Maximum Clients via our Smart Social Media Marketing
                                    Strategies.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                        <div class="post-content text-center service-content wow">
                            <div class="post-thumb">
                                <img src="frontend/assets/images/service/service_13.png" alt="service-image">
                            </div>
                            <div class="post-text">
                                <h4><a href="#0">Pay-Per-Click</a></h4>
                                <p>
                                    Expose your products or services to a wider audience, and only pay when people click on
                                    your ads.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                        <div class="post-content text-center service-content wow">
                            <div class="post-thumb">
                                <img src="frontend/assets/images/service/service_14.png" alt="service-image">
                            </div>
                            <div class="post-text">
                                <h4><a href="#0">Search Engine Optimization</a></h4>
                                <p>
                                    Get The Best SEO Services and enjoy business growth, without spending more on paid ads.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service area ends -->

    <!-- pricing area start -->
    <div class="pricing-area style-4">
        <div class="container">
            <div class="section-heading text-center section-heading wow">
                <span>Pricing</span>
                <h3>Our Pricing Plan</h3>
                <p>
                    Need tailored lead generation services that deliver solid results? Hire us, We are a highly qualified
                    lead generation agency to help you hit your targets and grow your business.
                </p>
            </div>
            <div class="pricing-wrapper">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="price-item text-center price-style wow">
                            <div class="price-thumb">
                                <img src="frontend/assets/images/pricing/price_shap.png" alt="pricing-image">
                                <div class="price_t">
                                    <h3>Basic</h3>
                                    <p><span>₹15000</span>Monthly</p>
                                </div>
                                <p>
                                    Ad Network Account Set-up(Tabola, Traffic Factory, ClickAdu etc.) Any 1
                                </p>
                            </div>
                            <div class="price-list">
                                <ul>
                                    <li>Landing page design</li>
                                    <li>Campaign Set-up</li>
                                    <li>Campaign Management</li>
                                    <li>Reporting and Support</li>
                                </ul>
                                <a href="#0" class="custom-btn">
                                    <span>Learn More</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="price-item text-center price-style wow">
                            <div class="price-thumb">
                                <img src="frontend/assets/images/pricing/price_shap.png" alt="pricing-image">
                                <div class="price_t">
                                    <h3>Standard</h3>
                                    <p><span>₹20000</span>Monthly</p>
                                </div>
                                <p>
                                    Network Account Set-up(Google Ads, Microsoft Ads, Facebook etc.) Any 1
                                </p>
                            </div>
                            <div class="price-list">
                                <ul>
                                    <li>Landing page design</li>
                                    <li>Campaign Set-up</li>
                                    <li>Campaign Management</li>
                                    <li>Reporting and Support</li>
                                </ul>
                                <a href="#0" class="custom-btn">
                                    <span>Learn More</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="price-item text-center price-style wow">
                            <div class="price-thumb">
                                <img src="frontend/assets/images/pricing/price_shap.png" alt="pricing-image">
                                <div class="price_t">
                                    <h3>Premium</h3>
                                    <p><span>₹30000</span>Monthly</p>
                                </div>
                                <p>
                                    Network Account Set-up(Google Ads, Microsoft Ads, Facebook etc.) Any 2
                                </p>
                            </div>
                            <div class="price-list">
                                <ul>
                                    <li>Landing page design</li>
                                    <li>Campaign Set-up</li>
                                    <li>Campaign Management</li>
                                    <li>Reporting and Support</li>
                                </ul>
                                <a href="#0" class="custom-btn">
                                    <span>Learn More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- pricing area ennds -->

    <!-- team area start -->
    <div class="our-team">
        <div class="container">
            <div class="section-heading text-center wow">
                <span>Team</span>
                <h3>Our Digital Marketing Specialist</h3>
                <p>
                    Mind Your Ads is one of the most reliable and affordable digital marketing companies in Delhi NCR. Stay
                    Ahead of Your Competitors With Our Digital Marketing Services.
                </p>
            </div>
            <div class="section-wrapper">
                <div class="row justify-content-center">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                        <div class="team-content text-center wow">
                            <div class="team-thumb">
                                <img src="frontend/assets/images/team/01.png" alt="tema-image">
                            </div>
                            <div class="team-text">
                                <a href="#">
                                    <h4>Arun Kumar</h4>
                                </a>
                                <p>Designer</p>
                                <ul class="tema-icon">
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                        <div class="team-content text-center wow">
                            <div class="team-thumb">
                                <img src="frontend/assets/images/team/02.png" alt="tema-image">
                            </div>
                            <div class="team-text">
                                <a href="#">
                                    <h4>Nikitesh Kharkwal</h4>
                                </a>
                                <p>App Designer</p>
                                <ul class="tema-icon">
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                        <div class="team-content text-center wow">
                            <div class="team-thumb">
                                <img src="frontend/assets/images/team/03.png" alt="tema-image">
                            </div>
                            <div class="team-text">
                                <a href="#">
                                    <h4>Rupali Sharma</h4>
                                </a>
                                <p>Marketer</p>
                                <ul class="tema-icon">
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                        <div class="team-content text-center wow">
                            <div class="team-thumb">
                                <img src="frontend/assets/images/team/04.png" alt="tema-image">
                            </div>
                            <div class="team-text">
                                <a href="#">
                                    <h4>Vaibhav Anand</h4>
                                </a>
                                <p>Ui Designer</p>
                                <ul class="tema-icon">
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- team area ends -->

    <!-- blog area start -->
    <div class="blog style-1">
        <div class="container">
            <div class="section-heading text-center wow">
                <span>Blog</span>
                <h3>Our Latest Blog</h3>
                <p>
                    Your No. 1 resource for digital marketing tips, trends, and strategies to help you build a successful
                    online business.
                </p>
            </div>
            <div class="section-warpper">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="blog-post wow">
                            <div class="post-thumb">
                                <a href="blog_single.html"><img src="frontend/assets/images/blog/01.png"
                                        alt="Blog-imge"></a>
                                <div class="post-date">
                                    <h6>06</h6>
                                    <span>Jan</span>
                                </div>
                            </div>
                            <div class="post-text">
                                <a href="#0"><span>Local SEO</span></a>
                                <a href="blog_single.html">
                                    <h4>How Google My Business Can Benefit Your Local Business in 2023</h4>
                                </a>
                                <p>
                                    Through the use of Google My Business, owners of local store or business can control and
                                    improve their visibility on Google Search.
                                </p>
                                <a href="blog_single.html" class="blog-btn">
                                    <span>Read More<i class="fa fa-angle-double-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="blog-post wow">
                            <div class="post-thumb">
                                <a href="blog_single.html"><img src="frontend/assets/images/blog/02.png"
                                        alt="Blog-imge"></a>
                                <div class="post-date">
                                    <h6>05</h6>
                                    <span>Jan</span>
                                </div>
                            </div>
                            <div class="post-text">
                                <a href="#0"><span>Social Media </span></a>
                                <a href="blog_single.html">
                                    <h4>How to Increase Your Brand Awareness</h4>
                                </a>
                                <p>
                                    A great way of raising brand awareness is by being present and engaging in online groups
                                    or with people who are interested in your market.
                                </p>
                                <a href="blog_single.html" class="blog-btn">
                                    <span>Read More<i class="fa fa-angle-double-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="blog-post wow">
                            <div class="post-thumb">
                                <a href="blog_single.html"><img src="frontend/assets/images/blog/03.png"
                                        alt="Blog-imge"></a>
                                <div class="post-date">
                                    <h6>04</h6>
                                    <span>Jan</span>
                                </div>
                            </div>
                            <div class="post-text">
                                <a href="#0"><span>Google Analytics</span></a>
                                <a href="blog_single.html">
                                    <h4>How to Measure Your Business' Online Performance in 2023</h4>
                                </a>
                                <p>
                                    Business performance is measured through metrics that indicate whether your business has
                                    achieved its goals in the planned time frame.
                                </p>
                                <a href="blog_single.html" class="blog-btn">
                                    <span>Read More<i class="fa fa-angle-double-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog area start -->
@endsection
