<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title class="pageTitle">Delivery Restaurants in </title>
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/icons/zomato_favicon.jpg">
    <link rel="stylesheet" href="{{ asset('customer/restaurant_near.css') }}">
</head>

<body>
    <!-- Header -->
    <header>
        <div class="left-header">
            <img src="./assets/icons/footer-image.avif" alt="" class="zomato-logo">
            <div class="search-locality">
                <div class="location">
                    <div class="location-container">
                        <img src="./assets/icons/current-location.png" alt="current-location" class="location-img">
                        <p class="city-name"></p>
                    </div>
                    <div class="down-arrow">
                        <img src="./assets/icons/down-filled-triangular-arrow.png" alt="down-arrow"
                            class="down-arrow-img">
                    </div>
                </div>
                <img src="./assets/icons/vertical-line.png" alt="" class="vertical-line">
                <div class="dish">
                    <div class="dish-container">
                        <img src="./assets/icons/search (2).png" alt="search-icon" class="search-icon">
                        <input type="text" placeholder="Search for restaurant, cuisine or a dish" class="search-input">
                        <div class="listening-container">
                            <p>Listening</p>
                            <img src="./assets/gifs/linear preloader.gif" alt="" class="microphone-preloader">
                        </div>
                        <div class="microphone-container">
                            <svg id="microphone" viewBox="-5 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                                <title>microphone</title>
                                <desc>Created with Sketch Beta.</desc>
                                <defs></defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"
                                    sketch:type="MSPage">
                                    <g id="Icon-Set" sketch:type="MSLayerGroup"
                                        transform="translate(-105.000000, -307.000000)" fill="#000000">
                                        <path
                                            d="M111,314 C111,311.238 113.239,309 116,309 C118.761,309 121,311.238 121,314 L121,324 C121,326.762 118.761,329 116,329 C113.239,329 111,326.762 111,324 L111,314 L111,314 Z M116,331 C119.866,331 123,327.866 123,324 L123,314 C123,310.134 119.866,307 116,307 C112.134,307 109,310.134 109,314 L109,324 C109,327.866 112.134,331 116,331 L116,331 Z M127,326 L125,326 C124.089,330.007 120.282,333 116,333 C111.718,333 107.911,330.007 107,326 L105,326 C105.883,330.799 110.063,334.51 115,334.955 L115,337 L114,337 C113.448,337 113,337.448 113,338 C113,338.553 113.448,339 114,339 L118,339 C118.552,339 119,338.553 119,338 C119,337.448 118.552,337 118,337 L117,337 L117,334.955 C121.937,334.51 126.117,330.799 127,326 L127,326 Z"
                                            id="microphone" sketch:type="MSShapeGroup"></path>
                                    </g>
                                </g>
                            </svg>

                        </div>

                    </div>
                    <div class="search-dish-container">
                        <!-- <div class="search-restaurant-container-img-details">
                            <img src="./assets/food/karchi.avif" alt="" class="search-restaurant-img">
                            <div class="search-restaurant-container-details">
                                <p class="search-restaurant-heading">Bikanervala</p>
                                <div class="search-restaurant-rating-container">
                                    <b class="search-restaurant-rating">4.3</b>
                                    <p class="search-star-icon" style="margin: 0px 0px 3px 2px;">☆</p>
                                </div>
                                <div class="search-restaurant-order-now">
                                    <p class="order-now">Order now</p>
                                    <img src="./assets/icons/red-right-arrow.png" alt="" style="width: 1.1rem;">
                                </div>
                                <p class="search-restaurant-deliverytime">Delivery in 45 mins</p>

                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="right-header">
            <p>Log in</p>
            <p>Sign up</p>
        </div>
        <div class="right-header-sm">
            <div class="sm-app">
                <p>Use App</p>
            </div>
            <img src="./assets/icons/profile.png" alt="profile-pic">
        </div>
    </header>
    <div class="extra-space-top">
        hi
    </div>
    <div class="sub-header-sm">
        <div class="search-locality-sm">
            <div class="location-sm">
                <div class="location-container">
                    <img src="./assets/icons/current-location.png" alt="current-location" class="location-img-sm">
                    <b class="city-name-sm"></b>
                </div>
            </div>
            <div class="dish">
                <div class="dish-container-sm">
                    <img src="./assets/icons/search (2).png" alt="search-icon">
                </div>
            </div>
        </div>
    </div>

    <div class="dish-sm">
        <div class="dish-container-sm">
            <img src="./assets/icons/search (2).png" alt="search-icon">
            <input type="text" placeholder="Search for restaurant, cuisine or a dish" class="search-input-sm">
            <div class="listening-container-sm">
                <p>Listening</p>
                <img src="./assets/gifs/linear preloader.gif" alt="" class="microphone-preloader-sm">
            </div>
            <div class="microphone-container-sm">
                <svg id="microphone-sm" viewBox="-5 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                    <title>microphone</title>
                    <desc>Created with Sketch Beta.</desc>
                    <defs></defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                        <g id="Icon-Set" sketch:type="MSLayerGroup" transform="translate(-105.000000, -307.000000)"
                            fill="#000000">
                            <path
                                d="M111,314 C111,311.238 113.239,309 116,309 C118.761,309 121,311.238 121,314 L121,324 C121,326.762 118.761,329 116,329 C113.239,329 111,326.762 111,324 L111,314 L111,314 Z M116,331 C119.866,331 123,327.866 123,324 L123,314 C123,310.134 119.866,307 116,307 C112.134,307 109,310.134 109,314 L109,324 C109,327.866 112.134,331 116,331 L116,331 Z M127,326 L125,326 C124.089,330.007 120.282,333 116,333 C111.718,333 107.911,330.007 107,326 L105,326 C105.883,330.799 110.063,334.51 115,334.955 L115,337 L114,337 C113.448,337 113,337.448 113,338 C113,338.553 113.448,339 114,339 L118,339 C118.552,339 119,338.553 119,338 C119,337.448 118.552,337 118,337 L117,337 L117,334.955 C121.937,334.51 126.117,330.799 127,326 L127,326 Z"
                                id="microphone" sketch:type="MSShapeGroup"></path>
                        </g>
                    </g>
                </svg>

            </div>
        </div>
        <div class="search-dish-container-sm">
            <div class="search-restaurant-container-img-details-sm">
                <img src="./assets/food/karchi.avif" alt="" class="search-restaurant-img-sm">
                <div class="search-restaurant-container-details-sm">
                    <p class="search-restaurant-heading-sm">Bikanervala</p>
                    <div class="search-restaurant-rating-container-sm">
                        <b class="search-restaurant-rating-sm">4.3</b>
                        <p class="search-star-icon-sm" style="margin: 0px 0px 3px 2px;">☆</p>
                    </div>
                    <div class="search-restaurant-order-now-sm">
                        <p class="order-now-sm">Order now</p>
                        <img src="./assets/icons/red-right-arrow.png" alt="" style="width: 1.1rem;">
                    </div>
                    <p class="search-restaurant-deliverytime-sm">Delivery in 45 mins</p>
                </div>
            </div>
        </div>
    </div>


    <div class="detect-current-location">
        <img src="./assets/icons/detect-current-location.png" alt="" class="current-location-img">
        <div class="current-location-container">
            <p class="detect-current-location-text">Detect current location</p>
            <p class="gps">Using GPS</p>
        </div>
    </div>
    <div class="bread-crumb">
        <div class="bread-cumb-container">
            <p><a href="index.html">Home </a> / <a href="index.html"> India </a> /
                <b class="city-name-in-breadcrumb" style="font-weight: 100;"></b>
                Restaurants
            </p>
        </div>
    </div>

    <div class="categories">
        <div class="categories-container">
            <div class="delivery">
                <img src="./assets/icons/delivery-image.avif" alt="delivery-image" class="delivery-image">
                <p>Delivery</p>
            </div>
            <div class="dining-out">
                <img src="./assets/icons/dinning-out.avif" alt="dining-out-image" class="dining-out-image">
                <p>Dining Out</p>
            </div>
            <div class="night-life">
                <img src="./assets/icons/nightLife.webp" alt="night-life-image" class="night-life-image">
                <p>Nightlife</p>
            </div>
        </div>
    </div>

    <div class="filters">
        <div class="filter-container">
            <div class="filter-box">
                <img src="./assets/icons/filter.png" alt="filter-image" class="filter-image">
                <p class="filter-count"
                    style="display: none; background-color:red;color: white; border-radius: 5px; padding: 0.3rem 0.5rem;">
                    0</p>
                <p>Filters</p>
            </div>
            <div class="rating-box">
                <p class="rating-box-filter"
                    style="display: flex; flex-direction: row; align-items: center;gap: 0.5rem;">
                    Rating: 4.0+</p>
                <p class="cross-1" style="display: none;">X</p>
            </div>
            <div class="pure-veg-box">
                <p class="pure-veg-filter" style="display: flex; flex-direction: row; align-items: center;gap: 0.5rem;">
                    Pure Veg </p>
                <p class="cross-2" style="display: none;">X</p>
            </div>
        </div>
    </div>

    <!-- all-filters -->
    <div class="all-filters">
        <div class="all-filter-container">
            <div class="all-filter-header">
                <p>Filters</p>
                <img src="./assets/icons/close-button.jpg" alt="close-button" class="filter-close-icon">
            </div>
            <hr>
            <div class="all-filter-hero-section">
                <div class="filter-container">
                    <div class="filter-container-left-section">
                        <div class="filter-1 filter-0">
                            <h3>Sort by</h3>
                            <p class="sort-by-type">Popularity</p>
                        </div>
                        <div class="filter-1 filter-2">
                            <h3>Cuisines</h3>
                        </div>
                        <div class="filter-1 filter-3">
                            <h3>Rating</h3>
                        </div>
                        <div class="filter-1 filter-4">
                            <h3>Cost per person</h3>
                        </div>
                        <div class="filter-1 filter-5">
                            <h3>More filters</h3>
                        </div>
                    </div>
                    <div class="filter-container-right-section">
                        <div class="filter-1-options">
                            <div class="popularity-box filter-option-box">
                                <input type="checkbox" name="popularity" id="popularity"
                                    onclick="handleCheckboxClick('popularity')">&nbsp;
                                <label for="popularity">Popularity</label>
                            </div>
                            <div class="rating-high-to-low-box filter-option-box">
                                <input type="checkbox" name="rating" id="rating"
                                    onclick="handleCheckboxClick('rating')">&nbsp;
                                <label for="rating">Rating: High to Low</label>
                            </div>
                            <div class="delivery-time-box filter-option-box">
                                <input type="checkbox" name="delivery-time" id="delivery-time"
                                    onclick="handleCheckboxClick('delivery-time')">&nbsp;
                                <label for="delivery-time">Delivery Time</label>
                            </div>
                            <div class="cost-low-to-high-box filter-option-box">
                                <input type="checkbox" name="cost-low-to-high" id="cost-low-to-high"
                                    onclick="handleCheckboxClick('cost-low-to-high')">&nbsp;
                                <label for="cost-low-to-high">Cost: Low to High</label>
                            </div>
                            <div class="cost-high-to-low-box filter-option-box">
                                <input type="checkbox" name="cost-high-to-low" id="cost-high-to-low"
                                    onclick="handleCheckboxClick('cost-high-to-low')">&nbsp;
                                <label for="cost-high-to-low">Cost: High to Low</label>
                            </div>
                        </div>
                        <div class="filter-2-options">
                            <div class="filter-2-options-container">
                                <div class="filter-2-options-search-box">
                                    <img src="./assets/icons/search (2).png" alt="cuisine-search"
                                        class="cuisine-search">
                                    <input type="text" placeholder="Search here" class="blinking-cursor">
                                    <img src="./assets/icons/close-button.jpg" alt="cuisine-close-button"
                                        class="cuisine-close-button">
                                </div>
                                <div class="filter-2-options-categories">
                                    <div class="filter-2-options-categories-containers">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-3-options">
                            <div class="filter-3-options-header">
                                <h5>Rating</h5>
                                <h3 class="rating-display">Any</h3>
                            </div>
                            <div class="filter-3-options-container">
                                <div class="any-rating">
                                    <p class="rate-circle-1"></p>
                                    <h4 class="rating-any">Any</h4>
                                </div>
                                <p class="rate-line-1"></p>
                                <div class="any-rating">
                                    <p class="rate-circle-2"></p>
                                    <h4 class="rating3_5">3.5</h4>
                                </div>
                                <p class="rate-line-2"></p>
                                <div class="any-rating">
                                    <p class="rate-circle-3"></p>
                                    <h4 class="rating4">4.0</h4>
                                </div>
                                <p class="rate-line-3"></p>
                                <div class="any-rating">
                                    <p class="rate-circle-4"></p>
                                    <h4 class="rating4_5">4.5</h4>
                                </div>
                                <p class="rate-line-4"></p>
                                <div class="any-rating">
                                    <p class="rate-circle-5"></p>
                                    <h4 class="rating5">5.0</h4>
                                </div>
                            </div>
                        </div>
                        <div class="filter-4-options">
                            <div class="filter-4-options-header">
                                <h5>Cost per person</h5>
                                <div class="cost-display-range">
                                    <h3 class="range-from">₹0</h3>
                                    <h3 class="rang-to">Any</h3>
                                </div>
                            </div>
                            <div class="filter-4-options-container">
                                <div class="cost-filter-ranges">
                                    <div class="cost-filter-container">
                                        <h4 class="cost-zero">₹0</h4>
                                        <div class="attached-box"></div>
                                    </div>
                                    <div class="any-cost">
                                        <p class="cost-circle-1"></p>
                                        <p class="cost-line-1"></p>
                                    </div>
                                </div>
                                <div class="cost-filter-ranges">
                                    <div class="cost-filter-container">
                                        <h4 class="cost-one-fity">₹150</h4>
                                        <div class="attached-box"></div>
                                    </div>
                                    <div class="any-cost">
                                        <p class="cost-circle-2"></p>
                                        <p class="cost-line-2"></p>
                                    </div>
                                </div>
                                <div class="cost-filter-ranges">
                                    <div class="cost-filter-container">
                                        <h4 class="cost-three-hundred">₹300</h4>
                                        <div class="attached-box"></div>
                                    </div>
                                    <div class="any-cost">
                                        <p class="cost-circle-3"></p>
                                        <p class="cost-line-3"></p>
                                    </div>
                                </div>
                                <div class="cost-filter-ranges">
                                    <div class="cost-filter-container">
                                        <h4 class="cost-six-hundred">₹600</h4>
                                        <div class="attached-box"></div>
                                    </div>
                                    <div class="any-cost">
                                        <p class="cost-circle-4"></p>
                                        <p class="cost-line-4"></p>
                                    </div>
                                </div>
                                <div class="cost-filter-ranges">
                                    <div class="cost-filter-container">
                                        <h4 class="cost-six-hundred">Any</h4>
                                        <div class="attached-box"></div>
                                    </div>
                                    <div class="any-cost">
                                        <p class="cost-circle-5"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-5-options">
                            <div class="filter-5-options-container">
                                <div class="filter-5-search">
                                    <div class="filter-5-search-container">
                                        <img src="./assets/icons/search (2).png" alt="search">
                                        <input type="text" name="" id="" placeholder="Search here">
                                    </div>
                                    <div class="close-filter-5">
                                        <img src="./assets/icons/close-button.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="hero-section-footer">
                    <button class="clear-all-btn">Clear all</button>
                    <button class="apply-btn">Apply</button>
                </div>
            </div>
        </div>
    </div>


    <!-- hero section -->
    <section class="deliveryRestaurants">
        <p class="deliveryRestaurants-Header">
            Delivery Restaurants in <b class="deliveryRestaurants-Header-city-name" style="font-weight: 600;">Agra</b>
        </p>
        <div class="deliveryRestaurants-container">
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-header">
            <img src="./assets/icons/footer-image.avif" alt="footer-image" class="footer-img">
            <div class="footer-header-drop-down">

                <div class="countries">
                    <div class="show-country">
                        <img src="./assets/icons/india.png" alt="indian-flag" class="country-flag">
                        <p class="country-name">India</p>
                        <img src="./assets/icons/down-arrow.png" alt="down-arrow">
                    </div>
                    <div class="countries-drop-down">
                        <div class="countries-drop-down-container">
                            <div class="triangular-box-1">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="languages">
                    <div class="show-language">
                        <img src="./assets/icons/earth-globe.png" alt="indian-flag">
                        <p class="show-language-on-language-box">English</p>
                        <img src="./assets/icons/down-arrow.png" alt="down-arrow">
                    </div>
                    <div class="languages-drop-down">
                        <div class="languages-drop-down-container">

                            <div class="triangular-box-2">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-hero-section">
            <section class="about">
                <p class="footer-heading">ABOUT ZOMATO</p>
                <p class="footer-links"><a href="https://www.zomato.com/who-we-are">Who We Are</a></p>
                <p class="footer-links"><a href="https://blog.zomato.com/">Blog</a></p>
                <p class="footer-links"><a href="https://www.zomato.com/careers">Work With Us</a></p>
                <p class="footer-links"><a href="https://www.zomato.com/investor-relations">Investor Relations</a></p>
                <p class="footer-links"><a href="https://www.zomato.com/report-fraud">Report Fraud</a></p>
                <p class="footer-links"><a href="https://blog.zomato.com/press-kit">Press Kit</a></p>
                <p class="footer-links"><a href="https://www.zomato.com/contact">Contact Us</a></p>
            </section>
            <section class="zomaverse">
                <p class="footer-heading">ZOMAVERSE</p>
                <p class="footer-links"><a href="https://www.zomato.com/">Zomato</a></p>
                <p class="footer-links"><a href="https://blinkit.com/">Blinkit</a></p>
                <p class="footer-links"><a href="https://www.feedingindia.org/">Feeding India</a></p>
                <p class="footer-links"><a href="https://www.hyperpure.com/">Hyperpure</a></p>
                <p class="footer-links"><a href="https://www.zomato.com/zomaland">Zomaland</a></p>
                <p class="footer-links"><a href="https://www.weatherunion.com/">Weather Union</a></p>
            </section>
            <section class="for-restaurants">
            
                <p class="footer-heading">FOR RESTAURANTS</p>
                <p class="footer-links"><a href="https://www.zomato.com/partner-with-us">Partner With Us</a></p>
                <p class="footer-links"><a href="https://play.google.com/store/apps/details?id=com.application.services.partner&hl=en_IN&gl=US">Apps For You</a></p>
                <p class="footer-heading">FOR ENTERPRISES</p>
                <p class="footer-links"><a href="https://nidhiupman568.github.io/NIDHI-UPMAN-PORTFOLIO-Inspired-by-TERMINAL-POWERSHELL-COMMAND-PROMPT-/">Zomato For Enterprise</a></p>
            </section>
            <section class="learn-more">
                <p class="footer-heading">LEARN MORE</h4>
                    <p class="footer-links"><a href="https://www.zomato.com/policies/privacy/">Privacy</a></p>
                    <p class="footer-links"><a href="https://www.zomato.com/policies/security/">Security</a></p>
                    <p class="footer-links"><a href="https://www.zomato.com/policies/security/">Terms</a></p>
                    <p class="footer-links"><a href="https://www.zomato.com/directory">Sitemap</a></p>
            </section>
            <section class="social-links">
                <p class="footer-heading social-heading">SOCIAL LINKS</p>
                <div class="social-links-container">
                    
                    <a href="https://www.linkedin.com/in/upmannidhi09/" target="_blank">
                        <img src="./assets/icons/social-media/linkedin.png" alt="LinkedIn">
                    </a>
            
<a href="https://leetcode.com/u/upmannidhi09/" target="_blank">
<img src="./assets/icons/social-media/leetcode.png" alt="LeetCode" style="width:24px;height:24px;">
</a>
<a href="https://www.geeksforgeeks.org/user/upmannidhi09/" target="_blank">
<img src="./assets/icons/social-media/gfg.png" alt="GeeksforGeeks" style="width:24px;height:24px;">
</a>

<!--<a href="https://www.codechef.com/users/upmanyunidhi09" target="_blank">
<img src="./assets/icons/social-media/codechef.png" alt="CodeChef" style="width:24px;height:24px;">
</a>-->
<a href="https://www.codechef.com/users/upmanyunidhi09" target="_blank">
<img src="./assets/icons/social-media/codeforces.png" alt="Codeforces" style="width:24px;height:24px;">
</a>
<a href="https://github.com/nidhiupman568" target="_blank">
<img src="./assets/icons/social-media/github.png" alt="GitHub" style="width:24px;height:24px;">
</a>
                    
                    
                </div>
                <div class="download-container">
                    <div class="download">
                        <img src="./assets/icons/apple.png" alt="apple">
                        <div class="download-content">
                            <p>Download on the</p>
                            <h3>App Store</h3>
                        </div>
                    </div>
                    <div class="download">
                        <img src="./assets/icons/playstore.png" alt="playstore">
                        <div class="download-content">
                            <p>Download on the</p>
                            <h3>App Store</h3>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="footer-footer">
            <hr class="horizontal-line">
            <p class="last-content">By continuing past this page, you agree to our Terms
                of Service, Cookie
                Policy, Privacy Policy and Content
                Policies. All trademarks are properties of their respective owners. 2008-2023 © Zomato™ Ltd. All rights
                reserved.</p>
        </div>
    </footer>

    <div class="footer-disclaimer-sm">
        <div class="footer-disclaimer-sm-container">
            <div class="order-on-app-notification">
                <div class="left-notification-container">
                    <div class="white-close-image">
                        <img src="./assets/icons/white close.png" alt="close-notification" class="close-notification">
                        <div class="noti-line">I</div>
                    </div>
                    <div class="noti-zomato-icon">
                        <img src="./assets/icons/zomato_favicon.jpg" alt="">
                        <p>Order online from Zomato mobile app</p>
                    </div>
                </div>
                <div class="right-notification-container">
                    <div class="app-link">
                        <a href="https://play.google.com/store/search?q=zomato&c=apps" style="color: red;">
                            Order on App
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="delivery-dining-container-sm">
            <div class="delivery-container-sm">
                <img src="./assets/icons/delivery.avif" alt="delivery-image" class="delivery-image-sm">
                <p>Delivery</p>
            </div>
            <div class="dining-out-container-sm">
                <img src="./assets/icons/dinning-out.avif" alt="dining-out-image" class="dining-out-image-sm">
                <p>Dining Out</p>
            </div>
        </div>
    </div>
    <!-- overlay -->
    <div id="overlay">
        <?xml version="1.0" encoding="utf-8"?>
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            style="margin: auto; background: none; margin-top: 5rem; display: block; shape-rendering: auto;"
            width="148px" height="148px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
            <circle cx="50" cy="50" fill="none" stroke="#df1317" stroke-width="5" r="44"
                stroke-dasharray="207.34511513692632 71.11503837897544">
                <animateTransform attributeName="transform" type="rotate" repeatCount="indefinite"
                    dur="0.9345794392523364s" values="0 50 50;360 50 50" keyTimes="0;1"></animateTransform>
            </circle>
        </svg>

        <p>Redirecting you to next page 😊</p>
    </div>
    <script src="{{ asset('customer/restaurant_near.js') }}"></script>
</body>

</html>
