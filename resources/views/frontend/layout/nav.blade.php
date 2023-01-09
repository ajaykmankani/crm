  <!-- mobile menu area start -->
  <div class="mobile-menu style-4">
      <nav class="mobile-header primary-menu d-lg-none">
          <div class="header-logo">
              <a href="index" class="logo">
                  <img src="frontend/assets/images/logo/logo.webp" alt="logo">
              </a>
          </div>
          <div class="header-bar">
              <span></span>
              <span></span>
              <span></span>
          </div>
      </nav>
      <nav class="menu">
          <div class="mobile-menu-area d-lg-none">
              <div class="mobile-menu-area-inner" id="scrollbar">
                  <div class="mobile-search">
                      <div class="search-inner">
                          <input type="text" placeholder="Search Here......" />
                          <button type="submit">
                              <span>
                                  <i class="fas fa-search"></i>
                              </span>
                          </button>
                      </div>
                  </div>
                  <ul class="m-menu">
                      <li>
                          <a href="#" class="active">Home</a>

                      </li>
                      <li>
                          <a href="#0">Services</a>
                          <ul class="m-submenu">
                              <li>
                                  <a href="website_design_and_development">Website Design and Development</a>
                              </li>
                              <li>
                                  <a href="digital_marketing">Digital Marketing</a>
                              </li>
                              <li>
                                  <a href="graphic_design">Graphic Design</a>
                              </li>
                              <li>
                                  <a href="search_engine_optimization">Search Engine Optimization (SEO)</a>
                              </li>
                              <li>
                                  <a href="social_media_optimization">Social Media Optimization (SMO)</a>
                              </li>
                              <li>
                                  <a href="social_media_marketing">Social Media Marketing (SMM)</a>
                              </li>
                          </ul>
                      </li>
                      <li>
                          <a href="#">Portfolio</a>
                          <ul class="m-submenu">
                              <li>
                                  <a href="portfolio-2">Portfolio One</a>
                              </li>
                              <li>
                                  <a href="portfolio-3">Portfolio Two</a>
                              </li>
                              <li>
                                  <a href="portfolio-grid">Portfolio Three</a>
                              </li>
                              <li>
                                  <a href="portfolio-4">portfolio Four</a>
                              </li>
                          </ul>
                      </li>
                      <li>
                          <a href="#0">Blog</a>
                          <ul class="m-submenu">
                              <li>
                                  <a href="blog-left-sidebar">blog Sidebar Left</a>
                              </li>
                              <li>
                                  <a href="blog-right-sidebar">blog Sidebar Right</a>
                              </li>
                              <li>
                                  <a href="blog-single">Blog Single</a>
                              </li>
                          </ul>
                      </li>
                      <li>
                          <a href="#0">Shop</a>
                          <ul class="m-submenu">
                              <li><a href="shop-page">Shope Page</a></li>
                              <li><a href="shop-single">Shope Single</a></li>
                              <li><a href="shop-cart">shope Cart</a></li>
                          </ul>
                      </li>
                      <li>
                          <a href="contact">Contact Us</a>
                      </li>
                  </ul>
              </div>
          </div>
      </nav>
  </div>
  <!-- mobile menu area end -->

  <!-- header start -->
  <header class="d-none d-lg-block">
      <div class="bg-white app-header seo-header"
          style=" background: linear-gradient(to right, #671fa7, #b43e7d) !important;">
          <div class="container-fluid">
              <div class="header-item">
                  <div class="header-logo">
                      <a href="index">
                          <img src="frontend/assets/images/logo/logo_white.webp" alt="logo-image"
                              style="max-width: 57%">
                      </a>
                  </div>
                  <div class="header-menu">
                      <nav class="primary-menu">
                          <div class="main-menu-area">
                              <ul class="main-menu">
                                  <li>
                                      <a href="#">Home</a>

                                  </li>
                                  <li>
                                      <a href="#0">Services</a>
                                      <ul class="submenu">
                                          <li>
                                              <a href="website_design_and_development">Website Design and
                                                  Development</a>
                                          </li>

                                          <li>
                                              <a href="digital_marketing">Digital Marketing</a>
                                          </li>
                                          <li>
                                              <a href="graphic_design">Graphic Design</a>
                                          </li>
                                          <li>
                                              <a href="search_engine_optimization">Search Engine Optimization (SEO)</a>
                                          </li>
                                          <li>
                                              <a href="social_media_optimization">Social Media Optimization (SMO)</a>
                                          </li>
                                          <li>
                                              <a href="social_media_marketing">Social Media Marketing (SMM)</a>
                                          </li>
                                      </ul>
                                  </li>
                                  {{-- <li>
                                      <a href="#">Portfolio</a>
                                      <ul class="submenu">
                                          <li>
                                              <a href="portfolio-2">Portfolio One</a>
                                          </li>
                                          <li>
                                              <a href="portfolio-3">Portfolio Two</a>
                                          </li>
                                          <li>
                                              <a href="portfolio-grid">Portfolio Three</a>
                                          </li>
                                          <li>
                                              <a href="portfolio-4">portfolio Four</a>
                                          </li>
                                      </ul>
                                  </li> --}}
                                  <li>
                                      <a href="{{ route('blog') }}">Blog</a>

                                  </li>
                                  {{-- <li class="menu-holder">
                                      <a href="#">Shop</a>
                                      <ul class="mega-menu">
                                          <li>
                                              <span class="submenu-title">Shop Page Layout</span>
                                              <ul>
                                                  <li><a href="shop-page">Shope Page</a></li>
                                                  <li><a href="shop-single">Shope Single</a></li>
                                                  <li><a href="shop-cart">shope Cart</a></li>
                                                  <li><a href="#">List Fullwidth</a></li>
                                                  <li><a href="#">List Left Sidebar</a></li>
                                                  <li><a href="#">List Right Sidebar</a>
                                                  </li>
                                              </ul>
                                          </li>
                                          <li>
                                              <span class="submenu-title">Single Product Style</span>
                                              <ul>
                                                  <li><a href="#">Gallery Left</a></li>
                                                  <li><a href="#">Gallery Right</a>
                                                  </li>
                                                  <li><a href="#">Tab Style Left</a>
                                                  </li>
                                                  <li><a href="#">Tab Style Right</a>
                                                  </li>
                                                  <li><a href="#">Sticky Left</a></li>
                                                  <li><a href="#">Sticky Right</a></li>
                                              </ul>
                                          </li>
                                          <li>
                                              <span class="submenu-title">Single Product Type</span>
                                              <ul>
                                                  <li><a href="#">Single Product</a></li>
                                                  <li><a href="#">Single Product Sale</a></li>
                                                  <li><a href="#">Single Product Group</a>
                                                  </li>
                                                  <li><a href="#">Single Product Variable</a>
                                                  </li>
                                                  <li><a href="#">Single Product Affiliate</a>
                                                  </li>
                                                  <li><a href="#">Single Product Slider</a>
                                                  </li>
                                              </ul>
                                          </li>
                                          <li>
                                              <span class="submenu-title">Shop Related Pages</span>
                                              <ul>
                                                  <li><a href="#">My Account</a></li>
                                                  <li><a href="#">Login | Register</a></li>
                                                  <li><a href="#">Wishlist</a></li>
                                                  <li><a href="#">Cart</a></li>
                                                  <li><a href="#">Checkout</a></li>
                                                  <li><a href="#">Compare</a></li>
                                              </ul>
                                          </li>
                                      </ul>
                                  </li> --}}
                                  <li>
                                      <a href="contact">Contact Us</a>
                                  </li>
                              </ul>
                          </div>
                      </nav>
                  </div>
                  <div class="herder-icon">

                      <a href="contact" class="custom-btn">
                          <span>Contact Us</span>
                      </a>

                  </div>
              </div>
          </div>
      </div>
  </header>
  <!-- header end -->
