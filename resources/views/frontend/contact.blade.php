@extends('frontend.layout.app')
@section('main')
<!-- banner area start -->
<div class="page-header style-1">
    <div class="banner-position">
        <div class="container">
            <div class="banner-content">
                <h3>Contact Us</h3>
                <ul class="banner-link">
                    <li><a href="index">Home</a></li>
                    <li><span>/</span></li>
                    <li><a class="active">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- banner area ends -->

<!-- contact location link area -->
<div class="contact-link">
    <div class="container">
        <div class="section-wrapper">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-6 col-12">
                    <div class="contact-item">
                        <div class="left-item">
                            <a href="#">
                                <i class="fas fa-map-marker-alt"></i>
                            </a>
                        </div>
                        <div class="right-item">
                            <p>Dwarka, New Delhi, India</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-12">
                    <div class="contact-item">
                        <div class="left-item">
                            <a href="#">
                                <i class="fas fa-phone"></i>
                            </a>
                        </div>
                        <div class="right-item">
                            <p>+91 9650650212</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-12">
                    <div class="contact-item">
                        <div class="left-item">
                            <a href="#">
                                <i class="fas fa-envelope"></i>
                            </a>
                        </div>
                        <div class="right-item">
                            <p>info@mindyourads.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contact-location">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="location-map">
                    <div id="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56062.07197923745!2d77.01007585242525!3d28.573380982915808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1a9c31eec4e1%3A0x39493976cba4c89a!2sDwarka%2C%20New%20Delhi%2C%20Delhi!5e0!3m2!1sen!2sin!4v1673065087726!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="contact-form">
                    <form action="contact" method="POST" id="commentform" class="comment-form">
                        @csrf
                        <input type="text" name="name" class="col-12" placeholder="Name*">
                        <input type="text" name="phone" class="col-6" placeholder="Phone*">
                        <input type="email" name="email" class="col-6" placeholder="Email*">
                        <select data-msg-required="Please select a service." class="form-control mt-3 mb-3 border-none" name="service" required>
                            <option value="" selected>Select Service</option>
                            <option value="Website Design and Development">Website Design and Development</option>
                            <option value="Digital Marketing">Digital Marketing</option>
                            <option value="Graphic Design">Graphic Design</option>
                            <option value="Search Engine Optimization (SEO)">Search Engine Optimization (SEO)</option>
                            <option value="Social Media Optimization (SMO)">Social Media Optimization (SMO)</option>
                            <option value="Social Media Marketing (SMM)">Social Media Marketing (SMM)</option>
                        </select>
                        <textarea name="message" id="role" cols="30" rows="10" placeholder="Message*"></textarea>
                        <button type="submit" name="submit" class="contact-btn">
                            <span>Submit Now</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  contact location link ends -->
@endsection