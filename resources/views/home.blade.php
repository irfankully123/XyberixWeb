@extends('layouts.layout')
@section('content')
    <section class="hero--section home-hero" id="heroSec">
        <div class="home-hero__heroImg">
            <div class="img-wrapper">
                <picture>
                    <source media="(min-width:576px)" srcset="{{ asset('assets/hero-home.webp') }}">
                    <img src="{{ asset('assets/hero-home.webp') }}" alt="hero-img">
                </picture>
                <div class="video-wrapper" id="video">

                </div>
            </div>
            <div class="home-hero__hero-caption">
                <div class="home-hero__hero-caption--container container ">
                    <h1 class="head">
                        <span class="head-text-wrapper"><span class="gradient-anim ">CONNECTING
                                BRANDS</span></span><span class="head-text-wrapper"><span>WITH
                                GLOBAL</span></span><span class="head-text-wrapper"><span>AUDIENCES</span></span>
                    </h1>
                </div>
            </div>
        </div>
        <div class="home-hero__hero-banner">
            <div class="home-hero__hero-banner--container container">
                <div class="home-hero__hero-banner--wrapper">
                    <p class="home-hero__hero-banner--descrip">
                        You have an idea, we have the talent and resources to turn it into a reality. Xyberix
                        Solution is a globally recognized digital agency elevating brands through
                        ground-breaking
                        user experience and disruptive digital products. </p>
                    <div class="anchor-wrapper">
                        <a href="tel:(917) 203-8420" class="arrow-anchor">
                            <span>Let's Talk</span>
                            <div class="img-wrapper">
                                <img class="svg-convert" src="{{ asset('assets/svg-anchor-arrow.svg') }}" alt>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <div class="hero--section__social-linkWrapper">
            <a href="https://www.facebook.com/profile.php?id=100094298805051&mibextid=2JQ9oc" target="_blank"
               class="hero--section__social-link">
                <div class="img-wrapper">
                    <img class="svg-convert" src="{{ asset('assets/social-facebook.svg') }}" alt="facebook">
                </div>
            </a>
            <a href="https://twitter.com/xyberixs?s=21&t=kXmOtLnYa844an74zFzhSA" target="_blank"
               class="hero--section__social-link">
                <div class="img-wrapper">
                    <img class="svg-convert" src="{{ asset('assets/social-twitter.svg') }}" alt="twitter">
                </div>
            </a>
            <a href="https://www.instagram.com/xyberixsolutions/?igshid=MzRlODBiNWFlZA%3D%3D&__coig_restricted=1"
               target="_blank" class="hero--section__social-link">
                <div class="img-wrapper">
                    <img class="svg-convert" src="{{ asset('assets/social-instagram.svg') }}" alt="instagram">
                </div>
            </a>
            <a href="https://www.linkedin.com/company/xyberixsolutions/" target="_blank" class="hero--section__social-link">
                <div class="img-wrapper">
                    <img class="svg-convert" src="{{ asset('assets/social-linkedin.svg') }}" alt="linkedin">
                </div>
            </a>

        </div>
    </section>
    <section class="strategy-concept">
        <div class="twocol-row strategy-concept__center-align">
            <div class="col-50">
                <div class="strategy-concept__cards-wrapper">
                    <div class="strategy-concept__cards-wrapper--card p-lr-4">
                        <div class="generic--head">
                            <h3 class="generic--head__subhead gray-col fw-700">
                                Right <span class="primary-col">strategy</span>
                            </h3>
                        </div>
                        <div class="generic--head">
                            <p class="generic--head__sec-para gray-col s-font">
                                We delivered a bunch of clients' startup products that are successful. Our previous experience helps to launch new startups with less effort and investment.
                            </p>
                        </div>
                    </div>
                    <div class="strategy-concept__cards-wrapper--card gray-bg">
                        <div class="img-wrapper">
                            <img src="{{ asset('images/laptop-mobile.webp') }}" alt>
                        </div>
                    </div>
                    <div class="strategy-concept__cards-wrapper--card primary-bg">
                        <div class="img-wrapper">
                            <img src="{{ asset('images/dual-mobile.webp') }}" alt>
                        </div>
                    </div>
                    <div class="strategy-concept__cards-wrapper--card gray-bg7 p-lr-4">
                        <div class="generic--head">
                            <h3 class="generic--head__subhead gray-col fw-700">
                                <span class="primary-col">Care</span>  </h3>
                        </div>
                        <div class="generic--head">
                            <p class="generic--head__sec-para gray-col s-font">
                                We care about simplicity for our clients at any stage of a project's lifetime, from easy onboarding to smooth launch and support</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-50 strategy-concept__pilot-heading">
                <div class="generic--head">
                    <h3 class="generic--head__subhead s-font gray-col fw-700">
                        Who we are </h3>
                    <p class="generic--head__sec-para gray-col s-font">
                        We delivered a bunch of clients' startup products that are successful. Our previous experience helps to launch new startups with less effort and investment. </p>
                </div>
            </div>
        </div>
    </section>
    <section class="ourWork section translateX-parent animate" data-delay="0s" id="ourWork">
        <div class="line-heading translateX-right">
            <h3 class="outline-text ">
                OUR WORK </h3>
        </div>
        <div class="ourWork__Slider swiper">
            <div class="swiper-wrapper height-transition-parent opacity-transition-parent">
                <div class="swiper-slide">
                    <div class="ourWork__Slider--slideWrapper height-transition opacity-transition" data-delay="0">
                        <div class="ourWork__Slider--img drag--img ">
                            <img class="lazy-img" data-src="{{ asset('assets/ourwork/our-work-1.webp') }}" alt="our-work"
                                 width="369" height="404" src="{{ asset('assets/ourwork/our-work-1.webp') }}">
                        </div>
                        <div class="ourWork__Slider--logo">
                            <img class="lazy-img" data-src="{{ asset('assets/ourwork/belgravia-logo.svg') }}" alt
                                 width="258" height="61" src="{{ asset('assets/ourwork/belgravia-logo.svg') }}">
                        </div>
                        <p class="ourWork__Slider--descrip">
                            Building a magnificent platform to aid the chanting purpose of the Belgravia London.
                            Loud and proud among competitors. </p>

                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ourWork__Slider--slideWrapper height-transition opacity-transition" data-delay="0">
                        <div class="ourWork__Slider--img drag--img ">
                            <img class="lazy-img" data-src="{{ asset('assets/ourwork/our-work-2.webp') }}"
                                 alt="our-work" width="369" height="404"
                                 src="{{ asset('assets/ourwork/our-work-2.webp') }}">
                        </div>
                        <div class="ourWork__Slider--logo">
                            <img class="lazy-img" data-src="{{ asset('assets/ourwork/betterhomes-logo.svg') }}" alt
                                 width="258" height="61" src="{{ asset('assets/ourwork/betterhomes-logo.svg') }}">
                        </div>
                        <p class="ourWork__Slider--descrip">
                            Establishing a dynamic presence with incredible reach for a business with dedicated
                            efforts to the real estate industry. </p>

                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ourWork__Slider--slideWrapper height-transition opacity-transition" data-delay="0">
                        <div class="ourWork__Slider--img drag--img ">
                            <img class="lazy-img" data-src="{{ asset('assets/ourwork/our-work-3.webp') }}"
                                 alt="our-work" width="369" height="404"
                                 src="{{ asset('assets/ourwork/our-work-3.webp') }}">
                        </div>
                        <div class="ourWork__Slider--logo">
                            <img class="lazy-img" data-src="{{ asset('assets/ourwork/cryptosouk-logo.svg') }}" alt
                                 width="258" height="61" src="{{ asset('assets/ourwork/cryptosouk-logo.svg') }}">
                        </div>
                        <p class="ourWork__Slider--descrip">
                            Assisting the business to stand tall and established among the competitors alongside
                            growing with visibility, reach, and engagement. </p>

                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ourWork__Slider--slideWrapper height-transition opacity-transition" data-delay="0">
                        <div class="ourWork__Slider--img drag--img ">
                            <img class="lazy-img" data-src="{{ asset('assets/ourwork/our-work-4.webp') }}"
                                 alt="our-work" width="369" height="404"
                                 src="{{ asset('assets/ourwork/our-work-4.webp') }}">
                        </div>
                        <div class="ourWork__Slider--logo">
                            <img class="lazy-img" data-src="{{ asset('assets/ourwork/emaar-logo.svg') }}" alt
                                 width="258" height="61" src="{{ asset('assets/ourwork/emaar-logo.svg') }}">
                        </div>
                        <p class="ourWork__Slider--descrip">
                            Assisting businesses in representing and achieving their core values and objectives
                            by initiating high-performing strategies. </p>

                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ourWork__Slider--slideWrapper height-transition opacity-transition" data-delay="0">
                        <div class="ourWork__Slider--img drag--img ">
                            <img class="lazy-img" data-src="{{ asset('assets/ourwork/our-work-5.webp') }}"
                                 alt="our-work" width="369" height="404"
                                 src="{{ asset('assets/ourwork/our-work-5.webp') }}">
                        </div>
                        <div class="ourWork__Slider--logo">
                            <img class="lazy-img" data-src="{{ asset('assets/ourwork/saeed-logo.svg') }}" alt
                                 width="258" height="61" src="{{ asset('assets/ourwork/saeed-logo.svg') }}">
                        </div>
                        <p class="ourWork__Slider--descrip">
                            A Well crafted and strategy-based project with utmost importance to the business
                            objective achievement. </p>

                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ourWork__Slider--slideWrapper height-transition opacity-transition" data-delay="0">
                        <div class="ourWork__Slider--img drag--img ">
                            <img class="lazy-img" data-src="{{ asset('assets/ourwork/our-work-6.webp') }}"
                                 alt="our-work" width="369" height="404"
                                 src="{{ asset('assets/ourwork/our-work-6.webp') }}">
                        </div>
                        <div class="ourWork__Slider--logo">
                            <img class="lazy-img" data-src="{{ asset('assets/ourwork/sharjah-fdi.svg') }}" alt
                                 width="258" height="61" src="{{ asset('assets/ourwork/sharjah-fdi.svg') }}">
                        </div>
                        <p class="ourWork__Slider--descrip">
                            Developing a strong digital presence of platforms dedicated towards immense growth
                            and recognizability. </p>

                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ourWork__Slider--slideWrapper height-transition opacity-transition" data-delay="0">
                        <div class="ourWork__Slider--img drag--img ">
                            <img class="lazy-img" data-src="{{ asset('assets/ourwork/our-work-7.webp') }}"
                                 alt="our-work" width="369" height="404"
                                 src="{{ asset('assets/ourwork/our-work-7.webp') }}">
                        </div>
                        <div class="ourWork__Slider--logo">
                            <img class="lazy-img" data-src="{{ asset('assets/ourwork/shurooq-logo.svg') }}"
                                 alt="logo" width="258" height="61"
                                 src="{{ asset('assets/ourwork/shurooq-logo.svg') }}">
                        </div>
                        <p class="ourWork__Slider--descrip">
                            Assisting business to maintain their digital footprint up to the mark while
                            encouraging them to take more digital initiatives </p>

                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="ourWork__Slider--slideWrapper height-transition opacity-transition" data-delay="0">
                        <div class="ourWork__Slider--img drag--img ">
                            <img class="lazy-img" data-src="{{ asset('assets/ourwork/our-work-8.webp') }}"
                                 alt="our-work" width="369" height="404"
                                 src="{{ asset('assets/ourwork/our-work-8.webp') }}">
                        </div>
                        <div class="ourWork__Slider--logo">
                            <img class="lazy-img" data-src="{{ asset('assets/ourwork/suzuki-logo.svg') }}" alt
                                 width="258" height="61" src="{{ asset('assets/ourwork/suzuki-logo.svg') }}">
                        </div>
                        <p class="ourWork__Slider--descrip">
                            Assisting one of the most successful automobile companies to attain greater goals of
                            digital presence. </p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tab-container">
        <div class="sub-container">
            <div class="generic--head center-head">
                <h2 class="generic--head__subhead fw-700 primary-col">Technology In Use</h2>
            </div>
            <div class="tab-menu-row">
                <div class="tab">
                    <button class="tablinks" onclick="openCity(event, 'Mobile')">Mobile</button>
                    <button class="tablinks" onclick="openCity(event, 'Frontend')">Frontend</button>
                    <button class="tablinks" onclick="openCity(event, 'Database')">Database</button>
                    <button class="tablinks" onclick="openCity(event, 'Backend')">Backend</button>
                    <button class="tablinks" onclick="openCity(event, 'CMS')">CMS</button>
                    <button class="tablinks" onclick="openCity(event, 'DEVOP')">DEVOP</button>
                    <div class="dropdown">
                        <button class="dropdown-button">More</button>
                        <div class="dropdown-content">

                        </div>
                    </div>
                </div>
            </div>
            <div id="Mobile" class="tabcontent">
                <div class="tab-row">
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/apple.svg') }}"
                                 alt="apple">
                        </div>
                        <h5>iOS</h5>
                    </div>
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/android.svg') }}"
                                 alt="android">
                        </div>
                        <h5>android</h5>
                    </div>
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/react.svg') }}"
                                 alt="react">
                        </div>
                        <h5>react native</h5>
                    </div>
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/flutter.svg') }}"
                                 alt="flutter">
                        </div>
                        <h5>Flutter</h5>
                    </div>
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/ionic.svg') }}"
                                 alt="ionic">
                        </div>
                        <h5>ionic</h5>
                    </div>
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/swift.svg') }}"
                                 alt="swift">
                        </div>
                        <h5>swift</h5>
                    </div>
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/kotlin.svg') }}"
                                 alt="kotlin">
                        </div>
                        <h5>Kotlin</h5>
                    </div>
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/objectivec.svg') }}"
                                 alt="objectivec">
                        </div>
                        <h5>objectiveC</h5>
                    </div>
                </div>
            </div>
            <div id="Frontend" class="tabcontent">
                <div class="tab-row">
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/angularjs.svg') }}"
                                 alt="angularjs">
                        </div>
                        <h5>angular.js</h5>
                    </div>
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/reactjs.svg') }}"
                                 alt="reactjs">
                        </div>
                        <h5>react.js</h5>
                    </div>
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/typescript.svg') }}"
                                 alt="typescript">
                        </div>
                        <h5>typescript</h5>
                    </div>
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/vuejs.svg') }}"
                                 alt="vuejs">
                        </div>
                        <h5>vue.js</h5>
                    </div>
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/wpf.svg') }}"
                                 alt="wpf">
                        </div>
                        <h5>wpf</h5>
                    </div>
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/html.svg') }}"
                                 alt="html">
                        </div>
                        <h5>html5</h5>
                    </div>
                </div>
            </div>
            <div id="Database" class="tabcontent">
                <div class="tab-row">
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/mongodb.svg') }}"
                                 alt="mongodb">
                        </div>
                        <h5>mongo db</h5>
                    </div>
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/mysql.svg') }}"
                                 alt="mysql">
                        </div>
                        <h5>mySql</h5>
                    </div>
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/mssql.svg') }}"
                                 alt="mssql">
                        </div>
                        <h5>msSql</h5>
                    </div>
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/firebase.svg') }}"
                                 alt="firebase">
                        </div>
                        <h5>Firebase</h5>
                    </div>
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/dynamodb.svg') }}"
                                 alt="dynamodb">
                        </div>
                        <h5>dynamodb</h5>
                    </div>
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/redis.svg') }}"
                                 alt="redis">
                        </div>
                        <h5>redis</h5>
                    </div>
                </div>
            </div>
            <div id="Backend" class="tabcontent">
                <div class="tab-row">
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/php.svg') }}"
                                 alt="php">
                        </div>
                        <h5>php</h5>
                    </div>
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/java.svg') }}"
                                 alt="java">
                        </div>
                        <h5>java</h5>
                    </div>
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/nodejs.svg') }}"
                                 alt="node">
                        </div>
                        <h5>node.js</h5>
                    </div>
                </div>
            </div>
            <div id="CMS" class="tabcontent">
                <div class="tab-row">
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/wordpress.svg') }}"
                                 alt="wordpress">
                        </div>
                        <h5>wordpress</h5>
                    </div>
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/magento.svg') }}"
                                 alt="magento">
                        </div>
                        <h5>magento</h5>
                    </div>
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/shopify.svg') }}"
                                 alt="shopify">
                        </div>
                        <h5>shopify</h5>
                    </div>
                </div>
            </div>
            <div id="DEVOP" class="tabcontent">
                <div class="tab-row">
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/aws.svg') }}"
                                 alt="aws">
                        </div>
                        <h5>aws</h5>
                    </div>
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/gradle.svg') }}"
                                 alt="gradle">
                        </div>
                        <h5>gradle</h5>
                    </div>
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/jenkins.svg') }}"
                                 alt="jenkins">
                        </div>
                        <h5>jenkins</h5>
                    </div>
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/appium.svg') }}"
                                 alt="appium">
                        </div>
                        <h5>appium</h5>
                    </div>
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/selenium.svg') }}"
                                 alt="selenium">
                        </div>
                        <h5>selenium</h5>
                    </div>
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/azure.svg') }}"
                                 alt="azure">
                        </div>
                        <h5>azure</h5>
                    </div>
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/digitalocean.svg') }}"
                                 alt="digitalocean">
                        </div>
                        <h5>digital ocean</h5>
                    </div>
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/rackspace.svg') }}"
                                 alt="rackspace">
                        </div>
                        <h5>rackspace</h5>
                    </div>
                    <div class="tab-card">
                        <div class="icon-box">
                            <img style="height: 43px; width: 48px" data-src="{{ asset('tabs/linode.svg') }}"
                                 alt="linode">
                        </div>
                        <h5>linode</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="services animate" data-delay="0s">
        <section class="services__wrap">
            <div class="services__items translateX-parent">
                <div class="line-heading translateX-right">
                    <h3 class="outline-text ">SERVICES </h3>
                </div>
                <div class="services-thumb-slider-wrapper">
                    <div class="services-thumb-slider swiper">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="service-thumb__head">
                                    <h2>
                                        <a href="javascript:void(0)">Web Development</a>
                                    </h2>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="service-thumb__head">
                                    <h2>
                                        <a href="javascript:void(0)">Mobile Application
                                            Development</a>
                                    </h2>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="service-thumb__head">
                                    <h2>
                                        <a href="javascript:void(0)">Ecommerce Web Development</a>
                                    </h2>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="service-thumb__head">
                                    <h2>
                                        <a href="javascript:void(0)">Digital Marketing</a>
                                    </h2>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="service-thumb__head">
                                    <h2>
                                        <a href="javascript:void(0)">Digital Branding
                                            &amp; Communication</a>
                                    </h2>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="service-thumb__head">
                                    <h2>
                                        <a href="javascript:void(0)">UI/UX Design</a>
                                    </h2>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="service-thumb__head">
                                    <h2>
                                        <a href="javascript:void(0)">Video Animation</a>
                                    </h2>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="service-thumb__head">
                                    <h2>
                                        <a href="javascript:void(0)">IT Resource Outsourcing</a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="scroll-text">
                        <span class="mouse">
                            <span class="move"></span>
                        </span>
                        <span class="head">Scroll</span>
                    </div>
                </div>
                <div class="services-slider swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="service-item twocol-row">
                                <div class="service-item__wrapper twocol-row">
                                    <div class="service-item__img">
                                        <div class="img-wrapper">
                                            <img data-src="{{ asset('assets/services/service-img-1.webp') }}" alt
                                                 src="{{ asset('assets/services/service-img-1.webp') }}">
                                        </div>
                                        <div class="descrip-wrapper">
                                            <p>
                                                Get an edge over your competitors and boost your profitability
                                                with magnetic web experiences. Xyberix Solutions is the choice
                                                of
                                                the UAE&rsquo;s leading brands for website design and web
                                                development services in Dubai. Whether it&rsquo;s custom web
                                                development or WordPress web development, we make sure you get
                                                the best of both worlds in the form of a responsive, secure, and
                                                high-performance website. </p>
                                            <p> You can receive services in the following categories of Web
                                                Development:</p>
                                            <ul class="service-item__list-wrapper">
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Wordpress Development </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Sharepoint Development </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Enterprise Development </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Sitecore Development </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        PHP Development </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Joomla Development </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        ASP.NET Development </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        CMS Development </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Drupal Development </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Ibexa DXP </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Laravel Development </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Python Web App Development </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Angularjs Development </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Website Maintenance Services </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="anchor-wrapper services-anchor">
                                        <a href="#" class="arrow-anchor">
                                            <span>Read More</span>
                                            <div class="img-wrapper">
                                                <img class="svg-convert" src="{{ asset('assets/svg-anchor-arrow.svg') }}"
                                                     alt>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="service-item__bg" style="background-color: black">
                                        {{-- <img class="lazy-img"
                                            data-src="{{ asset('assets/services/bg/webdevelopment-bg.webp') }}" alt
                                            src="{{ asset('assets/services/bg/webdevelopment-bg.webp') }}"> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-item twocol-row">
                                <div class="service-item__wrapper twocol-row">
                                    <div class="service-item__img">
                                        <div class="img-wrapper">
                                            <img data-src="{{ asset('assets/services/service-img-2.webp') }}" alt
                                                 src="{{ asset('assets/services/service-img-2.webp') }}">
                                        </div>
                                        <div class="descrip-wrapper">
                                            <p>
                                                Leverage the power of mobile solutions and create a personalised
                                                marketing channel for your audience. Xyberix Solutions offers
                                                comprehensive mobile app development services for iOS and
                                                Android devices. In the form of native and cross-platform
                                                applications, we carve out interfaces that win hearts and
                                                accelerate your growth. </p>
                                            <p> Innovative &amp; Ingenious Mobile App Development Solutions in
                                                Dubai</p>
                                            <ul class="service-item__list-wrapper">
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Hybrid Apps </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Android App Development </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        IOS App Development </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        React Native Apps </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Flutter Apps </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Progressive Web Apps </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Ruby on Rails (ROR) Development </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="anchor-wrapper services-anchor">
                                        <a href="#" class="arrow-anchor">
                                            <span>Read More</span>
                                            <div class="img-wrapper">
                                                <img class="svg-convert" src="{{ asset('assets/svg-anchor-arrow.svg') }}"
                                                     alt>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="service-item__bg" style="background-color: rgb(54, 54, 54)">
                                        {{-- <img class="lazy-img"
                                            data-src="{{ asset('assets/services/bg/mobile-application-bg.webp') }}" alt
                                            src="{{ asset('assets/services/bg/mobile-application-bg.webp') }}"> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-item twocol-row">
                                <div class="service-item__wrapper twocol-row">
                                    <div class="service-item__img">
                                        <div class="img-wrapper">
                                            <img data-src="{{ asset('assets/services/service-img-5.webp') }}" alt
                                                 src="{{ asset('assets/services/service-img-5.webp') }}">
                                        </div>
                                        <div class="descrip-wrapper">
                                            <p>
                                                Robust, sales-driven, and intuitive eCommerce solutions for
                                                online businesses yearning to scale in a competitive digital
                                                landscape. Xyberix Solutions is recognized as the top eCommerce
                                                web development company in Dubai with a team of tech-savvy
                                                professionals, who can integrate both simple and complex
                                                features into your online store. </p>
                                            <p> You can receive services in the following categories of
                                                Ecommerce Web Development:</p>
                                            <ul class="service-item__list-wrapper">
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Woo Commerce Development </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Mirakl Development </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Magento Ecommerce Development </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Big Commerce Development </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Shopify Ecommerce Development </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Shopify Plus Ecommerce Developments </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="anchor-wrapper services-anchor">
                                        <a href="#" class="arrow-anchor">
                                            <span>Read More</span>
                                            <div class="img-wrapper">
                                                <img class="svg-convert" src="{{ asset('assets/svg-anchor-arrow.svg') }}"
                                                     alt>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="service-item__bg" style="background-color: #000">
                                        {{-- <img class="lazy-img"
                                            data-src="{{ asset('assets/services/bg/ecommerce-development-bg.webp') }}" alt
                                            src="{{ asset('assets/services/bg/ecommerce-development-bg.webp') }}"> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-item twocol-row">
                                <div class="service-item__wrapper twocol-row">
                                    <div class="service-item__img">
                                        <div class="img-wrapper">
                                            <img data-src="{{ asset('assets/services/service-img-3.webp') }}" alt
                                                 src="{{ asset('assets/services/service-img-3.webp') }}">
                                        </div>
                                        <div class="descrip-wrapper">
                                            <p>
                                                Climb the ladder of success by accumulating more leads and sales
                                                with our digital marketing services. We will help you achieve a
                                                substantial ROI in a little time with search engine
                                                optimization, social media marketing, and Google Ads with our
                                                tried and tested strategies. </p>
                                            <p> Communicable &amp; Captivating Digital Marketing Services</p>
                                            <ul class="service-item__list-wrapper">
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Social Media Marketing (SMM) </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Social Media Optimization (SMO) </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Pay Per Click (PPC) </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Search Engine Optimization (SEO) </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Conversion Rate Optimization (CRO) </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Email Marketing </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Content Marketing </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Online Reputation Management (ORM) </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        App Store Optimization (ASO) </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Public Relation (PR) </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Online Translation Services </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="anchor-wrapper services-anchor">
                                        <a href="#" class="arrow-anchor">
                                            <span>Read More</span>
                                            <div class="img-wrapper">
                                                <img class="svg-convert" src="{{ asset('assets/svg-anchor-arrow.svg') }}"
                                                     alt>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="service-item__bg" style="background-color: #000">
                                        {{-- <img class="lazy-img"
                                            data-src="{{ asset('images/analytics_servers-banner.png') }}" alt
                                            src="{{ asset('images/analytics_servers-banner.png') }}"> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-item twocol-row">
                                <div class="service-item__wrapper twocol-row">
                                    <div class="service-item__img">
                                        <div class="img-wrapper">
                                            <img data-src="{{ asset('assets/services/service-img-4.webp') }}" alt
                                                 src="{{ asset('assets/services/service-img-4.webp') }}">
                                        </div>
                                        <div class="descrip-wrapper">
                                            <p>
                                                Promote your business to the masses and build a strong
                                                reputation in the market with our branding and communication
                                                services. Now you can focus on meeting the bottom line while we
                                                get your branding message across to the target audience. We have
                                                a knack for crafting memorable brand stories that win you
                                                lifelong customers and boost engagement for your brand. </p>
                                            <p> Creative Branding &amp; Communication Agency for Curious Minds.
                                            </p>
                                            <ul class="service-item__list-wrapper">
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Company Profile &amp; Brochure Design </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Business Card Design </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Corporate Identity Design </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Packaging Designs </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Logo Design </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="anchor-wrapper services-anchor">
                                        <a href="#" class="arrow-anchor">
                                            <span>Read More</span>
                                            <div class="img-wrapper">
                                                <img class="svg-convert" src="{{ asset('assets/svg-anchor-arrow.svg') }}"
                                                     alt>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="service-item__bg" style="background-color: rgb(54, 54, 54)">
                                        {{-- <img class="lazy-img"
                                            data-src="{{ asset('assets/services/bg//digital-branding-bg.webp') }}" alt
                                            src="{{ asset('assets/services/bg//digital-branding-bg.webp') }}"> --}}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="service-item twocol-row">
                                <div class="service-item__wrapper twocol-row">
                                    <div class="service-item__img">
                                        <div class="img-wrapper">
                                            <img data-src="{{ asset('assets/services/service-img-6.webp') }}" alt
                                                 src="{{ asset('assets/services/service-img-6.webp') }}">
                                        </div>
                                        <div class="descrip-wrapper">
                                            <p>
                                                Get bespoke user experiences that meet all your design needs. We
                                                take pride in crafting stunning user interfaces that make it fun
                                                for your audience to interact with your brand and come back in
                                                the future for more. Whether it&rsquo;s a mobile app or a
                                                website, Xyberix Solutions&rsquo;s team of UX/UI designers is
                                                the
                                                best you can hire for UX/UI design services in Dubai. </p>
                                            <p> A Creative UI/UX Design Agency in Dubai with Business Centric
                                                Approach</p>
                                            <ul class="service-item__list-wrapper">
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        PSD To Responsive HTML </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        UX Design Workshop </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Responsive Web Design </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        UX Design </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Landing Page Design </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        UX Audit </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Graphic Design </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="anchor-wrapper services-anchor">
                                        <a href="#" class="arrow-anchor">
                                            <span>Read More</span>
                                            <div class="img-wrapper">
                                                <img class="svg-convert"
                                                     src="{{ asset('assets/svg-anchor-arrow.svg') }}" alt>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="service-item__bg" style="background-color: rgb(54, 54, 54)">
                                        {{-- <img class="lazy-img"
                                            data-src="{{ asset('assets/services//bg/ui-ux-design-bg.webp') }}" alt
                                            src="{{ asset('assets/services//bg/ui-ux-design-bg.webp') }}"> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-item twocol-row">
                                <div class="service-item__wrapper twocol-row">
                                    <div class="service-item__img">
                                        <div class="img-wrapper">
                                            <img data-src="{{ asset('assets/services/service-img-7.webp') }}" alt
                                                 src="{{ asset('assets/services/service-img-7.webp') }}">
                                        </div>
                                        <div class="descrip-wrapper">
                                            <p>
                                                Create bewitching videos for your brand and enthral your
                                                prospective customers. Xyberix Solutions is the best video
                                                production company in Dubai you can choose to make yourself look
                                                and sound awesome. We create everything you need from explainer
                                                videos to sales videos, product videos, branding videos, and a
                                                lot more in exactly the way you envisioned them. </p>
                                            <p> Compelling, Aesthetically Appealing &amp; Immersive Video
                                                Animation.</p>
                                            <ul class="service-item__list-wrapper">
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Explanier Video Production </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Product Demo Animation </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Video Game Trailer </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        3D Architectural Walkthroughs </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Medical Animation Studio </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Character Animation Video </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Whiteboard Animation Video </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="anchor-wrapper services-anchor">
                                        <a href="#" class="arrow-anchor">
                                            <span>Read More</span>
                                            <div class="img-wrapper">
                                                <img class="svg-convert"
                                                     src="{{ asset('assets/svg-anchor-arrow.svg') }}" alt>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="service-item__bg" style="background-color: #000">
                                        {{-- <img class="lazy-img"
                                            data-src="{{ asset('assets/services/bg/video-animation-bg.webp') }}" alt
                                            src="{{ asset('assets/services/bg/video-animation-bg.webp') }}"> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-item twocol-row">
                                <div class="service-item__wrapper twocol-row">
                                    <div class="service-item__img">
                                        <div class="img-wrapper">
                                            <img data-src="{{ asset('assets/services/service-img-8.webp') }}" alt
                                                 src="{{ asset('assets/services/service-img-8.webp') }}">
                                        </div>
                                        <div class="descrip-wrapper">
                                            <p>
                                                We are an IT outsourcing company in Dubai to offer an extended
                                                range of services including End User Support, Application
                                                Investment, Cloud &amp; Infrastructure expertise. On-demand IT
                                                staff outsourcing solution Dubai specialises exclusively for
                                                digital transformation with Custom Software Development,
                                                Software Testing &amp; QA, Cloud Computing, Mobile &amp; Web
                                                Development, Maintenance &amp; Support, Blockchain Consulting,
                                                Data Science, Internet of Things, UI/UX Design, MVP Development,
                                                Nearshore/Offshore Software Development. </p>
                                            <p> Cost-effective and Comprehensive IT Outsourcing Company</p>
                                            <ul class="service-item__list-wrapper">
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Hire Mobile App Developer </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Hire Scrum Master in Dubai </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Hire AWS Resources in Dubai </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Hire QA Resources in Dubai </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Hire Node.js Developer in Dubai </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Hire Azure Developer in Dubai </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Hire React JS Developers in Dubai </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Hire React Native Developers in Dubai </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Hire Sharepoint Developers in Dubai </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Hire Dynamics 365 Developers in Dubai </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Hire Project Managers in Dubai </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Hire Dot Net Developers in Dubai </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Hire RPA in Dubai </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        3D Google Maps Integration </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        MarTech Consulting </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        Digital Cloud Transformation Solutions </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="anchor-wrapper services-anchor">
                                        <a href="#" class="arrow-anchor">
                                            <span>Read More</span>
                                            <div class="img-wrapper">
                                                <img class="svg-convert"
                                                     src="{{ asset('assets/svg-anchor-arrow.svg') }}" alt>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="service-item__bg" style="background-color: rgb(54, 54, 54)">
                                        {{-- <img class="lazy-img"
                                            data-src="{{ asset('assets/services/bg/it-resource-bg.webp') }}" alt
                                            src="{{ asset('assets/services/bg/it-resource-bg.webp') }}"> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <section class="research-design">
        <div class="container">
            <div class="generic--head center-head">
                <h2 class="generic--head__subhead fw-700 primary-col">Payment Gateways</h2>
            </div>
            <div class="generic--head col-75 m-auto text-center">
                <p class="generic--head__sec-para black-col">
                    At Xyberix Solution's, we offer secure, seamless payment processing and custom integrations. Expand
                    globally, streamline operations, and protect your business with our expert support.
                </p>
            </div>
            <div
                class="research-design__slider swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                <div class="swiper-wrapper" id="swiper-wrapper-1017dd0a110c702238" aria-live="off">
                    <div class="swiper-slide swiper-slide-active" style="width: 314.8px;" role="group"
                         aria-label="1 / 5">
                        <div class="generic--head research-design__slider--border">
                            <img class="lazy-img img-gateways" data-src="{{ asset('assets/apiservices/1.png') }}"
                                 alt="worth" src="{{ asset('assets/apiservices/1.png') }}">
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-next" style="width: 314.8px;" role="group"
                         aria-label="2 / 5">
                        <div class="generic--head research-design__slider--border">
                            <img class="lazy-img img-gateways" data-src="{{ asset('assets/apiservices/2.png') }}"
                                 alt="worth" src="{{ asset('assets/apiservices/2.png') }}">
                        </div>
                    </div>
                    <div class="swiper-slide" style="width: 314.8px;" role="group" aria-label="3 / 5">
                        <div class="generic--head research-design__slider--border">
                            <img class="lazy-img img-gateways" data-src="{{ asset('assets/apiservices/3.png') }}"
                                 alt="worth" src="{{ asset('assets/apiservices/3.png') }}">
                        </div>
                    </div>
                    <div class="swiper-slide" style="width: 314.8px;" role="group" aria-label="4 / 5">
                        <div class="generic--head research-design__slider--border">
                            <img class="lazy-img img-gateways" data-src="{{ asset('assets/apiservices/4.png') }}"
                                 alt="worth">
                        </div>
                    </div>
                    <div class="swiper-slide" role="group" aria-label="5 / 5" style="width: 314.8px;">
                        <div class="generic--head research-design__slider--border">
                            <img class="lazy-img img-gateways" data-src="{{ asset('assets/apiservices/5.png') }}"
                                 alt="worth">
                        </div>
                    </div>
                </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>
        </div>
    </section>
    <section class="awards section animate" data-delay="0s">
        <div class="awards__bg">
            <img class="lazy-img" data-src="{{ asset('assets/services/bg/digital-marketing.webp') }}" width="1920"
                 height="1040" alt="award" src="{{ asset('assets/services/bg/digital-marketing.webp') }}">

        </div>
        <div class="line-heading translateX-right">
            <h3 class="outline-text ">
                OUR PACKAGES </h3>
        </div>

        <div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="card-content">
                            <h2 style="color: white;">Basic Package</h2>
                            <p class="strike-through" style="color: rgb(255, 255, 255)">$596 Only</p>
                            <h2 style="color: rgb(255, 255, 255)">$199</h2>
                            <p>Super-startups & brand revamps.</p>
                            <ul style="color: white;">
                                <li>
                                    <p>2 Stock Images</p>
                                </li>
                                <li>
                                    <p>3 Page Website</p>
                                </li>
                                <li>
                                    <p>1 jQuery Slider Banner</p>
                                </li>
                                <li>
                                    <p>Contact/Query Form</p>
                                </li>

                            </ul>

                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card-content">
                            <h2 style="color: white;">Startup WebPackage</h2>
                            <p class="strike-through" style="color: rgb(255, 255, 255)">$300 Only</p>
                            <h2 style="color: rgb(255, 255, 255)">$300</h2>
                            <p>Super-startups & brand revamps.</p>
                            <ul style="color: white;">
                                <li>
                                    <p>5 Stock Photos</p>
                                </li>
                                <li>
                                    <p>5 Page Website</p>
                                </li>
                                <li>
                                    <p>3 Banner Design</p>
                                </li>
                                <li>
                                    <p>1 jQuery Slider Banner</p>
                                </li>

                            </ul>

                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card-content">
                            <h2 style="color: white">Pro WebPackage</h2>
                            <p class="strike-through" style="color: rgb(255, 255, 255)">$1300 Only</p>
                            <h2 style="color: rgb(255, 255, 255)">$600</h2>
                            <p>Super-startups & brand revamps.</p>
                            <ul style="color:white">
                                <li>
                                    <p>10 Unique Pages Website</p>
                                </li>
                                <li>
                                    <p>CMS / Admin Panel Support</p>
                                </li>
                                <li>
                                    <p>8 Stock images</p>
                                </li>
                                <li>
                                    <p>5 Banner Designs</p>
                                </li>

                            </ul>

                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card-content">
                            <h2 style="color:white">Elite WebPackage</h2>
                            <p class="strike-through" style="color: rgb(243, 243, 243)">$2,598 Only</p>
                            <h2 style="color: rgb(255, 255, 255)">$1,299</h2>
                            <p>Upto 15 Unique Pages Website</p>
                            <ul style="color: #000;">
                                <li>
                                    <p>Conceptual and Dynamic Website</p>
                                </li>
                                <li>
                                    <p>Mobile Responsive</p>
                                </li>
                                <li>
                                    <p>3 Banner Design</p>
                                </li>
                                <li>
                                    <p>1 jQuery Slider Banner</p>
                                </li>

                            </ul>

                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card-content">
                            <h2 style="color: white">Corp WebPackage</h2>
                            <p class="strike-through" style="color: rgb(255, 255, 255)">$3990 Only</p>
                            <h2 style="color: rgb(255, 255, 255)">$2200</h2>
                            <p>Super-startups & brand revamps.</p>
                            <ul style="color: #000;">
                                <li>
                                    <p>25 Stock Photos</p>
                                </li>
                                <li>
                                    <p>10 Page Website</p>
                                </li>
                                <li>
                                    <p>3 Banner Design</p>
                                </li>
                                <li>
                                    <p>1 jQuery Slider Banner</p>
                                </li>

                            </ul>

                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="card-content">
                            <h2 style="color: white">Business WebPackage</h2>
                            <p class="strike-through" style="color: rgb(248, 248, 248)">$5200 Only</p>
                            <h2 style="color: rgb(255, 255, 255)">$3200</h2>
                            <p>Super-startups & brand revamps.</p>
                            <ul style="color: white">
                                <li>
                                    <p>50 Stock Photos</p>
                                </li>
                                <li>
                                    <p>25 Page Website</p>
                                </li>
                                <li>
                                    <p>10 Banner Design</p>
                                </li>
                                <li>
                                    <p>5 jQuery Slider Banner</p>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <section class="research-design">
        <div class="container">
            <div class="generic--head center-head">
                <h2 class="generic--head__subhead fw-700 primary-col">Research &amp; Design</h2>
            </div>
            <div class="generic--head col-75 m-auto text-center">
                <p class="generic--head__sec-para black-col">
                    Every new website we create amazes our clients due to its performance and aesthetics. The secret is in
                    our professional and flawless process. Here’s how we do it:
                </p>
            </div>
            <div
                class="research-design__slider swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                <div class="swiper-wrapper" id="swiper-wrapper-1017dd0a110c702238" aria-live="off">
                    <div class="swiper-slide swiper-slide-active" style="width: 314.8px;" role="group"
                         aria-label="1 / 5">
                        <div class="generic--head research-design__slider--border">
                            <h5 class="generic--head__subhead fw-700 black-col"> Research </h5>
                            <span class="generic--head research-design__slider--slide-number">01</span>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-next" style="width: 314.8px;" role="group"
                         aria-label="2 / 5">
                        <div class="generic--head research-design__slider--border">
                            <h5 class="generic--head__subhead fw-700 black-col"> Analysis</h5>
                            <span class="generic--head research-design__slider--slide-number">02</span>
                        </div>
                    </div>
                    <div class="swiper-slide" style="width: 314.8px;" role="group" aria-label="3 / 5">
                        <div class="generic--head research-design__slider--border">
                            <h5 class="generic--head__subhead fw-700 black-col"> Wireframing</h5>
                            <span class="generic--head research-design__slider--slide-number">03</span>
                        </div>
                    </div>
                    <div class="swiper-slide" style="width: 314.8px;" role="group" aria-label="4 / 5">
                        <div class="generic--head research-design__slider--border">
                            <h5 class="generic--head__subhead fw-700 black-col"> UI Designing </h5>
                            <span class="generic--head research-design__slider--slide-number">04</span>
                        </div>
                    </div>
                    <div class="swiper-slide" role="group" aria-label="5 / 5" style="width: 314.8px;">
                        <div class="generic--head research-design__slider--border">
                            <h5 class="generic--head__subhead fw-700 black-col"> Prototyping </h5>
                            <span class="generic--head research-design__slider--slide-number">05</span>
                        </div>
                    </div>
                </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>
        </div>
    </section>
    <section class="faq section animate" data-delay="0s">
        <div class="line-heading translateX-right">
            <h3 class="outline-text ">FAQ</h3>
        </div>
        <div class="faq__container">
            <div class="faq__Slider swiper drag--img--white">
                <div class="swiper-wrapper">
                    <div class="swiper-slide animate fadein-Up" data-delay="0s">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    1 </h2>
                                <h4 class="faq__Slider--head">
                                    I need web design services for my enterprise website. Can you help? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}" alt
                                             width="16" height="16" src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    1 </h2>
                                <p>
                                    Whether you are an enterprise or a start-up, we would love to contribute to
                                    your growth with our web design and development services in Dubai. We have
                                    designed several enterprise websites before. Head over to our portfolio
                                    section to see our capabilities in enterprise web development. </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide animate fadein-Up" data-delay="0s">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    2 </h2>
                                <h4 class="faq__Slider--head">
                                    How much does it cost to hire web designer in Dubai? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}" alt
                                             width="16" height="16" src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    2 </h2>
                                <p>
                                    If you are looking to hire web designer in Dubai,&nbsp;you must consider
                                    factors such as;&nbsp;website nature,&nbsp;the development platform, and
                                    hosting service provider. A stunning and highly functional website, costs
                                    somewhere around 5,000-12, 000 AED. </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide animate fadein-Up" data-delay="0s">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    3 </h2>
                                <h4 class="faq__Slider--head">
                                    How can I choose a great web design agency in Dubai? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}" alt
                                             width="16" height="16" src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    3 </h2>
                                <p>
                                    If you are looking for the best website design company for your business,
                                    you should first identify what kind of site you require, and what you aim to
                                    accomplish with your new website.<br><br>Also, think about your budget. Then
                                    search for companies in your locality on the internet, and read client
                                    reviews/testimonials to check whether your selected company has a proven
                                    performance history. </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide animate fadein-Up" data-delay="0s">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    4 </h2>
                                <h4 class="faq__Slider--head">
                                    Is responsive web design important? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}" alt
                                             width="16" height="16" src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    4 </h2>
                                <p>
                                    Almost 60% of web traffic comes from mobile devices. So if your website is
                                    not mobile-friendly or responsive, you will lose more than half of your
                                    prospects. Responsive website design is also important for SEO. If your
                                    website isn&rsquo;t responsive, you will get little to no organic traffic.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide animate fadein-Up" data-delay="0s">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    5 </h2>
                                <h4 class="faq__Slider--head">
                                    What are the average charges that a website design agency in Dubai asks for
                                    responsive web design services? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}" alt
                                             width="16" height="16" src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    5 </h2>
                                <p>
                                    When designing your website, most expert web designers in Dubai will make
                                    sure that your site is mobile-friendly anyway. Responsive web design may
                                    cost between 7346 AED to 73,460 AED, based on the designer&rsquo;s
                                    experience and your project. </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide animate fadein-Up" data-delay="0s">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    6 </h2>
                                <h4 class="faq__Slider--head">
                                    How can I compare different web design services? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}" alt
                                             width="16" height="16" src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    6 </h2>
                                <p>
                                    You should compare different web design services in areas like service
                                    charges, their old customers, online reviews, and the quality of their
                                    portfolios on the whole. You will then have a better idea of which <b>Dubai
                                        web design services</b> would be ideal for your business&rsquo;s
                                    objectives. </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide animate fadein-Up" data-delay="0s">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    7 </h2>
                                <h4 class="faq__Slider--head">
                                    What skills should a web designer in Dubai have? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}" alt
                                             width="16" height="16" src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    7 </h2>
                                <p>
                                    A website designer in Dubai should have various skills including knowledge
                                    of the principles of design, typography, composition, color theory,
                                    knowledge of design software, knowledge of content management systems (CMS),
                                    responsive design, User Experience (UX), User Interface (UI), and graphic
                                    design. </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide animate fadein-Up" data-delay="0s">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    8 </h2>
                                <h4 class="faq__Slider--head">
                                    What are the elements of web design in UAE? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}" alt
                                             width="16" height="16" src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    8 </h2>
                                <p>
                                    There are five basic elements of <b>website design in the UAE.</b> Those are
                                    content, usability, aesthetics, visibility, and interaction. </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide animate fadein-Up" data-delay="0s">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    9 </h2>
                                <h4 class="faq__Slider--head">
                                    How much will a web design agency in Dubai charge me? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}" alt
                                             width="16" height="16" src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    9 </h2>
                                <p>
                                    It depends on the complexity of the design and the reputation of the web
                                    design agency Dubai you choose. A well-reputed agency will always impress
                                    you by going the extra mile to ensure work quality and thus, it&rsquo;s
                                    likely to charge a little higher than the normal ones. On average, the cost
                                    of web design in Dubai starts from AED 10,000 and goes as high as AED
                                    50,000. </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide animate fadein-Up" data-delay="0s">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    10 </h2>
                                <h4 class="faq__Slider--head">
                                    I'm looking for a specific web development framework. Tell me a bit about
                                    your expertise. </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}" alt
                                             width="16" height="16" src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    10 </h2>
                                <p>
                                    As we have a diverse client base with varying needs in the web domain, we
                                    house a team of React JS, Angular, Vue JS, Laravel, Ruby on Rails, Flask,
                                    Node JS, Cake PHP, CodeIgniter, and Bootstrap experts at Xyberix Solutions.
                                    Just let us know which one is your preferred framework or technology for web
                                    development and we will connect you with the pertinent department. </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide animate fadein-Up" data-delay="0s">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    11 </h2>
                                <h4 class="faq__Slider--head">
                                    I need a website but I also need someone who can boost it on Google with
                                    SEO. Can I hire Xyberix Solutions for this task? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}" alt
                                             width="16" height="16" src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    11 </h2>
                                <p>
                                    Of course, we would be more than happy to assist you in this area. As we
                                    have a team of search engine optimization experts with several years of
                                    experience on the back, we know what your website needs to stand out on
                                    Google. Recognized among the best SEO agencies in Dubai, we guarantee
                                    significant organic reach with our tried and tested white-hat SEO strategy.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide animate fadein-Up" data-delay="0s">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    12 </h2>
                                <h4 class="faq__Slider--head">
                                    Do you offer ERP systems customization and integration services? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}" alt
                                             width="16" height="16" src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    12 </h2>
                                <p>
                                    Yes, our team of experienced software engineers is aware of the complexities
                                    involved in ERP integration and carries out delicate processes in a seamless
                                    manner. We can assist you with SAP, Oracle, Salesforce, Microsoft, Infor,
                                    IFS, Epicor, SYSPRO, Acumatica, Sage, and many more. </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide animate fadein-Up" data-delay="0s">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    13 </h2>
                                <h4 class="faq__Slider--head">
                                    Which Industrial projects does your agency deal with? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}" alt
                                             width="16" height="16" src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    13 </h2>
                                <p>
                                    Over the decade, our team has gained extensive cross-industry experience
                                    allowing us further to take on diverse projects. Some of the industries we
                                    have successfully delivered include Real Estate, Automobile, SMEs,
                                    Healthcare, Fashion, Manufacturing, Automotive, Technology, FMCG, Food and
                                    Beverage. </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide animate fadein-Up" data-delay="0s">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    14 </h2>
                                <h4 class="faq__Slider--head">
                                    How many years have you served in the UAE market? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}" alt
                                             width="16" height="16" src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    14 </h2>
                                <p>
                                    Xyberix Solutions has been serving as a digital marketing agency in Dubai
                                    for
                                    a decade now. We have offered the best web solutions in the UAE to different
                                    agencies and unique start-up ideas and have helped them to achieve digital
                                    growth and visibility. We are known for our state-of-the-art affordable
                                    marketing and web design and web development services in Dubai. </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide animate fadein-Up" data-delay="0s">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    15 </h2>
                                <h4 class="faq__Slider--head">
                                    Should I develop my app on iOS or Android for my new business? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}" alt
                                             width="16" height="16" src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    15 </h2>
                                <p>
                                    As suggested by mobile app developers, choosing the right platforms is
                                    subject to your market audience and business objectives. You should launch
                                    your application on the platform with the best-targeted audience engagement.
                                    On the other hand, we as a top-notch digital marketing agency offer both
                                    android app development and ios app development services. </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide animate fadein-Up" data-delay="0s">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    16 </h2>
                                <h4 class="faq__Slider--head">
                                    What are the services suggested for my startup business? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}" alt
                                             width="16" height="16" src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    16 </h2>
                                <p>
                                    Assuming that you have no website and logo for online branding now, we
                                    suggest you the following services:<br>Logo design<br>Brochure design<br>Web
                                    design and development<br>Social media marketing<br>Search engine
                                    optimization </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide animate fadein-Up" data-delay="0s">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    17 </h2>
                                <h4 class="faq__Slider--head">
                                    Which web design platform is right for me? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}" alt
                                             width="16" height="16" src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    17 </h2>
                                <p>
                                    There are a plethora of web design platforms in the market. Some of the best
                                    and trending web design platforms include WordPress with WooCommerce,
                                    Shopify, and Magento. These are our most opted services in the industry for
                                    result-driven business models. </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide animate fadein-Up" data-delay="0s">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    18 </h2>
                                <h4 class="faq__Slider--head">
                                    What will be the turnaround time for my project? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}" alt
                                             width="16" height="16" src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    18 </h2>
                                <p>
                                    Our aim is to ensure absolute transparency in our work, and therefore
                                    involve our clients every step of the way. Once you get in touch with us
                                    with your project brief, we will schedule a meeting with you to discuss the
                                    project at length. Once the client approves the proposal, we will start
                                    working our magic. The project turnaround time estimation is solely based on
                                    project requirements. </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide animate fadein-Up" data-delay="0s">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    19 </h2>
                                <h4 class="faq__Slider--head">
                                    What programming language is used for hybrid and native mobile app
                                    development? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}" alt
                                             width="16" height="16" src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    19 </h2>
                                <p>
                                    For designing Hybrid apps, mobile app development companies in Dubai use
                                    Swift, Xamarin, and Objective C. And for Native mobile applications, app
                                    design service providers prefer Java, Python, C++, Kotlin, and Rust. </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide animate fadein-Up" data-delay="0s">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    20 </h2>
                                <h4 class="faq__Slider--head">
                                    Does your digital agency offer ongoing help with our new site once it's
                                    launched? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}" alt
                                             width="16" height="16" src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    20 </h2>
                                <p>
                                    Yes, we offer ongoing help with a website that we have created, once
                                    launched. However, if your website has been up and running for some time,
                                    then we offer further services for a charge. </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide animate fadein-Up" data-delay="0s">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    21 </h2>
                                <h4 class="faq__Slider--head">
                                    What programming language is used for hybrid and native mobile apps? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}" alt
                                             width="16" height="16" src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    21 </h2>
                                <p>
                                    When creating a Hybrid app, various programming languages are used, such as
                                    Xamarin and React Native. In contrast, when developing Native mobile
                                    applications, programming languages such as Swift and Objective C are used
                                    for iOS, and Java and Kotlin are used for Android applications. </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide animate fadein-Up" data-delay="0s">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    22 </h2>
                                <h4 class="faq__Slider--head">
                                    What does a simple project cost? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}" alt
                                             width="16" height="16" src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    22 </h2>
                                <p>
                                    We are an all-encompassing digital agency that offers highly customized
                                    digital solutions to its wide global clientele. All projects we take on have
                                    different objectives and requirements; therefore, all our solutions are
                                    unique. Consequently, we do not have a standardized pricing system in place.
                                    If you are looking for a quote for your project, get in touch with us
                                    through our website or social media platforms. </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide animate fadein-Up" data-delay="0s">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    23 </h2>
                                <h4 class="faq__Slider--head">
                                    How long does it take to build a website? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}" alt
                                             width="16" height="16" src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    23 </h2>
                                <p>
                                    It depends on the size of the website. At Xyberix Solutions, we follow the
                                    agile approach to deliver small to complex websites in 1 to 3 months. This
                                    timeline may further increase or decrease depending on the hurdles involved
                                    in a particular project. </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide animate fadein-Up" data-delay="0s">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    24 </h2>
                                <h4 class="faq__Slider--head">
                                    How much does it cost to develop a mobile app? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}" alt
                                             width="16" height="16" src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    24 </h2>
                                <p>
                                    Native mobile app development is relatively more expensive than
                                    cross-platform app development. A mobile app development company Dubai will
                                    charge you between AED 50,000 to AED 200,000 for developing native,
                                    cross-platform, and hybrid mobile applications. Need a price for mobile app
                                    development Dubai? Reach out to us, we will share a custom business proposal
                                    with you according to your requirements. </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide animate fadein-Up" data-delay="0s">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    25 </h2>
                                <h4 class="faq__Slider--head">
                                    How much money does it take to maintain an app? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}" alt
                                             width="16" height="16" src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    25 </h2>
                                <p>
                                    App maintenance is very critical for the successful working of your app.
                                    Failure to do so will directly affect your user experience and will
                                    consequently impact your sales. There is no fixed rate for app maintenance
                                    since it depends upon your specific app and agency contract(if you have
                                    one). Therefore, when you partner with a mobile app development company, you
                                    should discuss the annual maintenance charges in advance. </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide animate fadein-Up" data-delay="0s">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    26 </h2>
                                <h4 class="faq__Slider--head">
                                    How much budget do I need for Google Ads PPC? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}" alt
                                             width="16" height="16" src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    26 </h2>
                                <p>
                                    It depends on the CPC of the keywords you want to target, the campaign
                                    objective, and the agency you choose for campaign management. We suggest you
                                    get a free consultation from our performance marketing team to get more
                                    clarity on this subject. WhatsApp us to schedule your meeting today. </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide animate fadein-Up" data-delay="0s">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    27 </h2>
                                <h4 class="faq__Slider--head">
                                    I need brochures for my business. Is brochure design a part of your branding
                                    service? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}" alt
                                             width="16" height="16" src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    27 </h2>
                                <p>
                                    Xyberix Solutions is a full-service design agency in Dubai, offering
                                    brochure
                                    design, logo design, packaging design, and several other services in the
                                    design domain. We can also assist you with flyers, company profiles, and
                                    pitch decks. </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide animate fadein-Up" data-delay="0s">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    28 </h2>
                                <h4 class="faq__Slider--head">
                                    My website or app depends and relies on a specific web service or cloud
                                    provider? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}" alt
                                             width="16" height="16" src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    28 </h2>
                                <p>
                                    Yes, our web design and app development team is skilled in most of the web
                                    services and work with different cloud providers including: Microsoft Azure,
                                    Amazon Web Services (AWS), Google Cloud, Alibaba Cloud, IBM Cloud, Oracle,
                                    Salesforce, SAP, Rackspace Cloud, VMWare. </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide animate fadein-Up" data-delay="0s">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    29 </h2>
                                <h4 class="faq__Slider--head">
                                    Will you offer a discount if I take multiple services from you? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}" alt
                                             width="16" height="16" src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    29 </h2>
                                <p>
                                    Yes, we do offer discounts to clients who approach us for multiple services.
                                    For example, if you hire us for both web design and search engine
                                    optimization of your website, we will quote you a discount price. </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide animate fadein-Up" data-delay="0s">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    30 </h2>
                                <h4 class="faq__Slider--head">
                                    What web design services does your web design agency Dubai offer? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}" alt
                                             width="16" height="16" src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    30 </h2>
                                <p>
                                    We offer 360 web designing Dubai. Our services cover UX/UI design from
                                    scratch, PSD to HTML conversion, UX/UI audit, and a complete user interface
                                    revamp. </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide animate fadein-Up" data-delay="0s">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    31 </h2>
                                <h4 class="faq__Slider--head">
                                    I&rsquo;m looking for an agency to design as well as code the front-end and
                                    back-end. Can you help? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}}" alt
                                             width="16" height="16" src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    31 </h2>
                                <p>
                                    From web design to web development, we do everything. Our web team consists
                                    of PHP, HTML, CSS, JavaScript, React, Laravel, and ASP.NET experts. </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide animate fadein-Up" data-delay="0s">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    32 </h2>
                                <h4 class="faq__Slider--head">
                                    How much will it cost me to hire a website designer Dubai from Digital
                                    Gravity? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}" alt
                                             width="16" height="16" src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    32 </h2>
                                <p>
                                    Our web design service charges vary from project to project, depending on
                                    the complexity involved. To get a custom quote, fill out the form and our
                                    sales team will contact you the same day. </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide animate fadein-Up" data-delay="0s">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    33 </h2>
                                <h4 class="faq__Slider--head">
                                    Why should I hire you for website design UAE? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}" alt
                                             width="16" height="16" src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    33 </h2>
                                <p>
                                    At Xyberix Solutions, we strive to set new quality benchmarks and exceed the
                                    expectations of our clients. We have more than 10 years of experience in web
                                    design and development. Our impressive portfolio reflects the quality of our
                                    work. So choosing us means working with the best web design agency in Dubai.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide animate fadein-Up" data-delay="0s">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    34 </h2>
                                <h4 class="faq__Slider--head">
                                    Can your website developers migrate my website? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}" alt
                                             width="16" height="16" src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    34 </h2>
                                <p>
                                    Yes, our website development team is equipped with all the technical
                                    knowledge required for safe and smooth website migration. We follow a
                                    risk-free method to ensure that you don't lose any traffic and online safes.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide animate fadein-Up" data-delay="0s">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    35 </h2>
                                <h4 class="faq__Slider--head">
                                    I&rsquo;m looking for a web developer in Dubai for WordPress web
                                    development. Do you have any WordPress experts in your team? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}" alt
                                             width="16" height="16" src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    35 </h2>
                                <p>
                                    Our web design Dubai services cover all popular platforms such as WordPress,
                                    Magento, Shopify, and many more. So whether you need some assistance with
                                    plugin installation or custom theme development, CMS development, or
                                    e-commerce development, we have you covered! </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide animate fadein-Up" data-delay="0s">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    36 </h2>
                                <h4 class="faq__Slider--head">
                                    Can you create a content management system for my website? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}" alt
                                             width="16" height="16" src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    36 </h2>
                                <p>
                                    Yes, we have a team of web developers Dubai who are proficient in WordPress,
                                    Drupal, Joomla, and several other content management systems. We can code
                                    one from scratch as well as make changes to your existing CMS as per your
                                    requirements. </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide animate fadein-Up" data-delay="0s">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    37 </h2>
                                <h4 class="faq__Slider--head">
                                    May I know the name of some of the UAE&rsquo;s biggest brands you have
                                    worked with? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}}" alt
                                             width="16" height="16" src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    37 </h2>
                                <p>
                                    In the last few years, our client base has grown substantially. The most
                                    notable names among all include GJ Real Estate, Al Ghurair, Masdar, Capital
                                    Health Screening Center, Jino, Emaar, Suzuki, and Coroli. </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide animate fadein-Up" data-delay="0s">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    38 </h2>
                                <h4 class="faq__Slider--head">
                                    I&rsquo;m looking for a content marketing agency. Do you have writers in
                                    your agency? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}" alt
                                             width="16" height="16" src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    38 </h2>
                                <p>
                                    Content marketing is a part of our primary services. We have an in-house
                                    team of Arabic and English copywriters, who are equally good in both sales
                                    copywriting and SEO writing. Our team can assist you with web content,
                                    articles, blog posts, video sales scripts, and a lot more. </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide animate fadein-Up" data-delay="0s">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    39 </h2>
                                <h4 class="faq__Slider--head">
                                    Why should I choose you as my web design agency in Dubai? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}" alt
                                             width="16" height="16" src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    39 </h2>
                                <p>
                                    As an experienced web design agency Dubai, we bring unique ideas to the
                                    table. By leveraging those concepts, you can set yourself apart from the
                                    rest and engage your audience. </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide animate fadein-Up" data-delay="0s">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    40 </h2>
                                <h4 class="faq__Slider--head">
                                    Can you create a theme-based WordPress website? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}" alt
                                             width="16" height="16" src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    40 </h2>
                                <p>
                                    Our WordPress design and development services Dubai cover everything you
                                    need. From custom WordPress development to WordPress theme and plugin
                                    development, WooCommerce development, and WordPress maintenance. Reach out
                                    to us to get a quote for your WordPress theme website. </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide animate fadein-Up" data-delay="0s">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    41 </h2>
                                <h4 class="faq__Slider--head">
                                    Why should I hire web developer from a&nbsp;professional web development
                                    agency? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}" alt
                                             width="16" height="16" src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    41 </h2>
                                <p>
                                    When you hire web developer from a professional agency, you not only save
                                    time and cost, but also get a professional and experienced team on-board.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide animate fadein-Up" data-delay="0s">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    42 </h2>
                                <h4 class="faq__Slider--head">
                                    Do I need to hire web designer&nbsp;to develop my business site? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}" alt
                                             width="16" height="16" src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    42 </h2>
                                <p>
                                    You must hire web designer&nbsp;if your business has a decent budget to
                                    spend on building your new site and has the patience to wait at least a few
                                    months for the final product. </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide animate fadein-Up" data-delay="0s">
                        <div class="faq__Slider--slideWrapper hover ">
                            <div class="faq__Slider--descrip-wrapper">
                                <h2 class="faq__Slider--count">
                                    43 </h2>
                                <h4 class="faq__Slider--head">
                                    Should I hire web designer from an agency or a freelance designer? </h4>
                                <div class="faq__Slider--arrowWrapper">
                                    <div class="faq__Slider--arrow">
                                        <img class="lazy-img" data-src="{{ asset('images/plus-icon.svg') }}" alt
                                             width="16" height="16" src="{{ asset('images/plus-icon.svg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="faq__Slider--descrip overlay">
                                <h2>
                                    43 </h2>
                                <p>
                                    Although hiring a freelancer might seem like a cost-effective option, but
                                    there are multiple drawbacks these include; lack of control, mis-management,
                                    and deteriorating communication. When you hire web designer from an agency
                                    you will have a dedicated project manager, web site designer, and web
                                    developer working on your website. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="collabCompanies section">
        <div class="container">
            <h2 class="collabCompanies__title">
                We are ready to uplift your <span class="primary-col">brand like many others in</span> the past!
            </h2>
            <div
                class="collabCompanies__Slider drag--img swiper swiper-grid swiper-grid-column swiper-initialized swiper-horizontal swiper-pointer-events">
                <div class="swiper-wrapper skew-transition-parent" id="swiper-wrapper-2105fde8bae1b16cc"
                     aria-live="polite" style="width: 3420px; transform: translate3d(0px, 0px, 0px);">
                    <div class="swiper-slide skew-transition swiper-slide-active" data-delay="0"
                         style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 180px;"
                         role="group" aria-label="1 / 37">
                        <div class="img-wrapper">
                            <img class="" data-src="{{ asset('assets/ourbrands/1.webp') }}" alt=""
                                 width="225" height="225" src="{{ asset('assets/ourbrands/1.webp') }}">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition swiper-slide-next" data-delay="0"
                         style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 180px; margin-top: 0px;"
                         role="group" aria-label="2 / 37">
                        <div class="img-wrapper">
                            <img class="" data-src="{{ asset('assets/ourbrands/2.webp') }}" alt=""
                                 width="225" height="225" src="{{ asset('assets/ourbrands/2.webp') }}">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                         style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 180px;"
                         role="group" aria-label="3 / 37">
                        <div class="img-wrapper">
                            <img class="" data-src="{{ asset('assets/ourbrands/3.webp') }}" alt=""
                                 width="225" height="225" src="{{ asset('assets/ourbrands/3.webp') }}">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                         style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 180px; margin-top: 0px;"
                         role="group" aria-label="4 / 37">
                        <div class="img-wrapper">
                            <img class="" data-src="{{ asset('assets/ourbrands/4.webp') }}" alt=""
                                 width="225" height="225" src="{{ asset('assets/ourbrands/4.webp') }}">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                         style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 180px;"
                         role="group" aria-label="5 / 37">
                        <div class="img-wrapper">
                            <img class="" data-src="{{ asset('assets/ourbrands/5.webp') }}" alt=""
                                 width="225" height="225" src="{{ asset('assets/ourbrands/5.webp') }}">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                         style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 180px; margin-top: 0px;"
                         role="group" aria-label="6 / 37">
                        <div class="img-wrapper">
                            <img class="" data-src="{{ asset('assets/ourbrands/6.webp') }}" alt=""
                                 width="225" height="225" src="{{ asset('assets/ourbrands/6.webp') }}">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                         style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 180px;"
                         role="group" aria-label="7 / 37">
                        <div class="img-wrapper">
                            <img class="" data-src="{{ asset('assets/ourbrands/7.webp') }}" alt=""
                                 width="225" height="225" src="{{ asset('assets/ourbrands/7.webp') }}">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                         style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 180px; margin-top: 0px;"
                         role="group" aria-label="8 / 37">
                        <div class="img-wrapper">
                            <img class="" data-src="{{ asset('assets/ourbrands/8.webp') }}" alt=""
                                 width="225" height="225">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                         style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 180px;"
                         role="group" aria-label="9 / 37">
                        <div class="img-wrapper">
                            <img class="" data-src="{{ asset('assets/ourbrands/9.webp') }}" alt=""
                                 width="225" height="225">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                         style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 180px; margin-top: 0px;"
                         role="group" aria-label="10 / 37">
                        <div class="img-wrapper">
                            <img class="" data-src="{{ asset('assets/ourbrands/10.webp') }}" alt=""
                                 width="225" height="225">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                         style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 180px;"
                         role="group" aria-label="11 / 37">
                        <div class="img-wrapper">
                            <img class="" data-src="{{ asset('assets/ourbrands/11.webp') }}" alt=""
                                 width="225" height="225">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                         style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 180px; margin-top: 0px;"
                         role="group" aria-label="12 / 37">
                        <div class="img-wrapper">
                            <img class="" data-src="{{ asset('assets/ourbrands/12.webp') }}" alt=""
                                 width="225" height="225">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                         style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 180px;"
                         role="group" aria-label="13 / 37">
                        <div class="img-wrapper">
                            <img class="" data-src="{{ asset('assets/ourbrands/13.webp') }}" alt=""
                                 width="225" height="225">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                         style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 180px; margin-top: 0px;"
                         role="group" aria-label="14 / 37">
                        <div class="img-wrapper">
                            <img class="" data-src="{{ asset('assets/ourbrands/14.webp') }}" alt=""
                                 width="225" height="225">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                         style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 180px;"
                         role="group" aria-label="15 / 37">
                        <div class="img-wrapper">
                            <img class="" data-src="{{ asset('assets/ourbrands/15.webp') }}" alt=""
                                 width="225" height="225">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                         style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 180px; margin-top: 0px;"
                         role="group" aria-label="16 / 37">
                        <div class="img-wrapper">
                            <img class="" data-src="{{ asset('assets/ourbrands/16.webp') }}" alt=""
                                 width="225" height="225">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                         style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 180px;"
                         role="group" aria-label="17 / 37">
                        <div class="img-wrapper">
                            <img class="" data-src="{{ asset('assets/ourbrands/17.webp') }}" alt=""
                                 width="225" height="225">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                         style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 180px; margin-top: 0px;"
                         role="group" aria-label="18 / 37">
                        <div class="img-wrapper">
                            <img class="" data-src="{{ asset('assets/ourbrands/18.webp') }}" alt=""
                                 width="225" height="225">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                         style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 180px;"
                         role="group" aria-label="19 / 37">
                        <div class="img-wrapper">
                            <img class="" data-src="{{ asset('assets/ourbrands/19.webp') }}" alt=""
                                 width="225" height="225">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                         style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 180px; margin-top: 0px;"
                         role="group" aria-label="20 / 37">
                        <div class="img-wrapper">
                            <img class="" data-src="{{ asset('assets/ourbrands/20.webp') }}" alt=""
                                 width="225" height="225" src="{{ asset('assets/ourbrands/20.webp') }}">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                         style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 180px;"
                         role="group" aria-label="21 / 37">
                        <div class="img-wrapper">
                            <img class="" data-src="{{ asset('assets/ourbrands/37.webp') }}" alt=""
                                 width="225" height="225" src="{{ asset('assets/ourbrands/37.webp') }}">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                         style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 180px; margin-top: 0px;"
                         role="group" aria-label="22 / 37">
                        <div class="img-wrapper">
                            <img class="" data-src="{{ asset('assets/ourbrands/22.webp') }}" alt=""
                                 width="225" height="225" src="{{ asset('assets/ourbrands/22.webp') }}">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                         style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 180px;"
                         role="group" aria-label="23 / 37">
                        <div class="img-wrapper">
                            <img class="" data-src="{{ asset('assets/ourbrands/23.webp') }}" alt=""
                                 width="225" height="225" src="{{ asset('assets/ourbrands/23.webp') }}">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                         style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 180px; margin-top: 0px;"
                         role="group" aria-label="24 / 37">
                        <div class="img-wrapper">
                            <img class="" data-src="{{ asset('assets/ourbrands/24.webp') }}" alt=""
                                 width="225" height="225" src="{{ asset('assets/ourbrands/24.webp') }}">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                         style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 180px;"
                         role="group" aria-label="25 / 37">
                        <div class="img-wrapper">
                            <img class="" data-src="{{ asset('assets/ourbrands/25.webp') }}" alt=""
                                 width="225" height="225" src="{{ asset('assets/ourbrands/25.webp') }}">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                         style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 180px; margin-top: 0px;"
                         role="group" aria-label="26 / 37">
                        <div class="img-wrapper">
                            <img class="" data-src="{{ asset('assets/ourbrands/26.webp') }}" alt=""
                                 width="225" height="225" src="{{ asset('assets/ourbrands/26.webp') }}">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                         style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 180px;"
                         role="group" aria-label="27 / 37">
                        <div class="img-wrapper">
                            <img class="" data-src="{{ asset('assets/ourbrands/27.webp') }}" alt=""
                                 width="225" height="225">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                         style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 180px; margin-top: 0px;"
                         role="group" aria-label="28 / 37">
                        <div class="img-wrapper">
                            <img class="" data-src="{{ asset('assets/ourbrands/28.webp') }}" alt=""
                                 width="225" height="225">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                         style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 180px;"
                         role="group" aria-label="29 / 37">
                        <div class="img-wrapper">
                            <img class="" data-src="{{ asset('assets/ourbrands/29.webp') }}" alt=""
                                 width="225" height="225">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                         style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 180px; margin-top: 0px;"
                         role="group" aria-label="30 / 37">
                        <div class="img-wrapper">
                            <img class="" data-src="{{ asset('assets/ourbrands/30.webp') }}" alt=""
                                 width="225" height="225">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                         style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 180px;"
                         role="group" aria-label="31 / 37">
                        <div class="img-wrapper">
                            <img class="" data-src="{{ asset('assets/ourbrands/31.webp') }}" alt=""
                                 width="225" height="225">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                         style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 180px; margin-top: 0px;"
                         role="group" aria-label="32 / 37">
                        <div class="img-wrapper">
                            <img class="" data-src="{{ asset('assets/ourbrands/32.webp') }}" alt=""
                                 width="225" height="225">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                         style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 180px;"
                         role="group" aria-label="33 / 37">
                        <div class="img-wrapper">
                            <img class="" data-src="{{ asset('assets/ourbrands/33.webp') }}" alt=""
                                 width="225" height="225">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                         style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 180px; margin-top: 0px;"
                         role="group" aria-label="34 / 37">
                        <div class="img-wrapper">
                            <img class="" data-src="{{ asset('assets/ourbrands/34.svg') }}" alt=""
                                 width="225" height="225">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                         style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 180px;"
                         role="group" aria-label="35 / 37">
                        <div class="img-wrapper">
                            <img class="" data-src="{{ asset('assets/ourbrands/35.webp') }}" alt=""
                                 width="225" height="225">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                         style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 180px; margin-top: 0px;"
                         role="group" aria-label="36 / 37">
                        <div class="img-wrapper">
                            <img class="" data-src="{{ asset('assets/ourbrands/36.webp') }}" alt=""
                                 width="225" height="225">
                        </div>
                    </div>
                    <div class="swiper-slide skew-transition" data-delay="0"
                         style="transform: translate(0px, 0px); visibility: inherit; opacity: 1; width: 180px;"
                         role="group" aria-label="37 / 37">
                        <div class="img-wrapper">
                            <img class="" data-src="{{ asset('assets/ourbrands/37.webp') }}" alt=""
                                 width="225" height="225">
                        </div>
                    </div>
                </div>
                <div class="app-slider__scrollbarWrapper">
                    <div class="app-slider__scrollbar">
                        <div class="swiper-scrollbar swiper-scrollbar-horizontal">
                            <div class="swiper-scrollbar-drag"
                                 style="transform: translate3d(0px, 0px, 0px); width: 182px;"></div>
                        </div>
                        <div class="drag-wrapper">
                            <div class="drag-img">
                                <img class="" data-src="{{ asset('assets/drag-img.svg') }}"
                                     src="{{ asset('assets/drag-img.svg') }}" alt="drag" width="21"
                                     height="21">
                            </div>
                            <h4 class="drag-head">
                                Drag to see more
                            </h4>
                        </div>
                    </div>
                </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>
        </div>
    </section>
@endsection
