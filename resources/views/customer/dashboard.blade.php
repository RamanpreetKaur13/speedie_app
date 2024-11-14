<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best Restaurants In India-Zomato Clone-BY NIDHI UPMAN</title>
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/icons/zomato_favicon.jpg">
    <link rel="stylesheet" href="{{ asset('customer/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Edu+TAS+Beginner:wght@700&display=swap" rel="stylesheet">
</head>

<body>
    <!-- header -->
    <header>
        <nav class="navbar">
        
            
            <p><a href="https://www.zomato.com/partner-with-us" target="_blank" style="color: white;">Add restaurant</a></p>
            <p><a href="https://www.zomato.com/" target="_blank" style="color: white;">Log in</a></p>
            <p><a href="https://www.zomato.com/" target="_blank" style="color: white;">Sign up</a></p>


            
        </nav>
        <div class="header-center">
            <h1>zomato</h1>
            <p>Find the best restaurants, cafes</p>
            <p>and bars in India</p>
        </div>
        <div class="empty-container">
            <p>p</p>
        </div>
    </header>

    <!-- hero-section -->
    <div class="hero-section">
        <div class="hero-section-text-content">
            <div class="hero-section-text-content-heading">
                <p>Popular locations in</p>
                <!-- <img src="./assets/icons/india.png" alt="indian-flag" class="flag"> -->
                <p>&nbsp;<b>India</b></p>
            </div>
            <div class="hero-section-text-content-sub-heading">
                <p>
                    From swanky upscale restaurants to the cosiest hidden gems serving the most incredible food, Zomato
                    covers it all. Explore menus, and millions of restaurant photos and reviews from users just like
                    you, to find your next great meal.
                </p>
            </div>
            <div class="states-container">

            </div>
        </div>
    </div>

    <!-- footer -->
    <footer>
        <div class="footer-header">
            <img src="{{ asset('customer/assets/icons/footer-image.avif') }}" alt="footer-image" class="footer-img">
            <div class="footer-header-drop-down">

                <div class="countries">
                    <div class="show-country">
                        <img src="{{ asset('customer/assets/icons/india.png') }}" alt="indian-flag" class="country-flag">
                        <p class="country-name">India</p>
                        <img src="{{ asset('customer/assets/icons/down-arrow.png') }}" alt="down-arrow">
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
                        <img src="{{ asset('customer/assets/icons/earth-globe.png') }}" alt="indian-flag">
                        <p class="show-language-on-language-box">English</p>
                        <img src="{{ asset('customer/assets/icons/down-arrow.png') }}" alt="down-arrow">
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
                        <img src="{{ asset('customer/assets/icons/apple.png') }}" alt="apple">
                        <div class="download-content">
                            <p>Download on the</p>
                            <h3>App Store</h3>
                        </div>
                    </div>
                    <div class="download">
                        <img src="{{ asset('customer/assets/icons/playstore.png') }}" alt="playstore">
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
                Policies. All trademarks are properties of their respective owners. 2020-2024 © Zomato™ Ltd. All rights
                reserved.</p>
        </div>
    </footer>

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

        <p>Hang on while we fetch restaurants for you...😊</p>
    </div>
    <script src="{{ asset('customer/script.js') }}"></script>
</body>

</html>