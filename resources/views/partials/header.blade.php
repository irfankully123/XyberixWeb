<header class="header">
    <div class="header__container">
        <div class="header__wrapper">
            <div class="brand-logo">
                <a href="{{route('home')}}">
                    <picture>
                        <source srcset="{{asset('assets/brand-logo.png')}}" type="image/webp">
                        <img src="{{asset('assets/brand-logo.png')}}" alt="Brand Logo">
                    </picture>
                </a>
            </div>
            <div class="navigation-wrapper">
                <nav class="navigation">
                    <ul class="menu">
                        <li class="menu__menuitem ">
                            <a href="{{route('home')}}" class="menu__menuitem--menulink w-uline">
                                Home </a>
                        </li>
                        <li class="menu__menuitem ">
                            <a href="{{route('about')}}" class="menu__menuitem--menulink w-uline">
                                About </a>
                        </li>
                        <li class="menu__menuitem ">
                            <a href="{{route('pricing')}}" class="menu__menuitem--menulink w-uline">
                                Pricing </a>
                        </li>
                        <li class="menu__menuitem">
                            <a href="{{route('service')}}" class="menu__menuitem--menulink">
                                Services </a>
                            <div class="s-column-dropdown-menu dropdown-js">
                                <div class="menu-slider-wrapper">
                                    <div class="dropdown__menu-item menu-slider-thumb-wrapper">
                                        <ul class="menu-slider-thumb">
                                            <li class="menu-slider-thumb-slide" data-menu="service-tab1">
                                                <a href="javascript:void(0)">
                                                    <div class="slide-head">
                                                        Web Development
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="menu-slider-thumb-slide" data-menu="service-tab2">
                                                <a href="javascript:void(0)">
                                                    <div class="slide-head">
                                                        Mobile Application Development
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="menu-slider-thumb-slide" data-menu="service-tab3">
                                                <a href="javascript:void(0)">
                                                    <div class="slide-head">
                                                        Digital Marketing
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="menu-slider-thumb-slide" data-menu="service-tab4">
                                                <a href="javascript:void(0)">
                                                    <div class="slide-head">
                                                        Ui/Ux Design
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="menu-slider-thumb-slide" data-menu="service-tab5">
                                                <a href="javascript:void(0)">
                                                    <div class="slide-head">
                                                        E-commerce Web development
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="menu-slider-thumb-slide" data-menu="service-tab6">
                                                <a href="javascript:void(0)">
                                                    <div class="slide-head">
                                                        Digital Branding &amp; Communication
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="menu-slider-thumb-slide" data-menu="service-tab7">
                                                <a href="javascript:void(0)">
                                                    <div class="slide-head">
                                                        Video Animation
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="menu-slider-thumb-slide" data-menu="service-tab8">
                                                <a href="javascript:void(0)">
                                                    <div class="slide-head">
                                                        It Resource
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="menu-slider-gallery-wrapper">
                                        <ul class="menu-slider-gallery">
                                            <li class="menu-slider-gallery-slide" data-menu="service-tab1">
                                                <div class="slide-head">
                                                    Web Development
                                                </div>
                                                <ul class="list-wrapper">
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=wordpress-development">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/WORDPRESS.svg')}}"
                                                                     alt="wordpress"
                                                                >
                                                            </div>
                                                            <div class="list-item__head">
                                                                Wordpress Development
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=sharepoint-development">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/SHAREPOINT.svg')}}"
                                                                     alt="sharepoint"
                                                                >
                                                            </div>
                                                            <div class="list-item__head">
                                                                SharePoint Development
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=enterprise-development">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/ENTERPRISE.svg')}}"
                                                                     alt="enterprise"
                                                                >
                                                            </div>
                                                            <div class="list-item__head">
                                                                Enterprise Development
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=sitecore-development">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/SITECORE.svg')}}"
                                                                     alt="sitecore"
                                                                >
                                                            </div>
                                                            <div class="list-item__head">
                                                                Sitecore Development
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=php-development">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/PHP.svg')}}"
                                                                     alt="php"
                                                                >
                                                            </div>
                                                            <div
                                                                class="list-item__head">
                                                                Php Development
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=joomla-development">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/JOOMLA.svg')}}"
                                                                     alt="joomla"
                                                                >
                                                            </div>
                                                            <div class="list-item__head">
                                                                Joomla Development
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=asp-net-development">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/ASPdotNET.svg')}}"
                                                                     alt="ASP"
                                                                >
                                                            </div>
                                                            <div class="list-item__head">
                                                                ASP.NET Development
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=cms-website-development">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/CMS.svg')}}"
                                                                     alt="cms"
                                                                >
                                                            </div>
                                                            <div class="list-item__head">
                                                                CMS Development
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=drupal-web-development">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/DRUPAL.svg')}}"
                                                                     alt="drupal"
                                                                >
                                                            </div>
                                                            <div class="list-item__head">
                                                                Drupal Development
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=ibexa-dxp">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/IBEXA.svg')}}"
                                                                     alt="ibexa"
                                                                >
                                                            </div>
                                                            <div class="list-item__head">
                                                                ibexa DXP Development
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=laravel-web-development">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/LARAVEL.svg')}}"
                                                                     alt="Laravel"
                                                                >
                                                            </div>
                                                            <div class="list-item__head">
                                                                Laravel Development
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=python-development">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/PYTHON.svg')}}"
                                                                     alt="phython"
                                                                >
                                                            </div>
                                                            <div class="list-item__head">
                                                                Python Development
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=angularjs-development">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/ANGULARJS.svg')}}"
                                                                     alt="angular"
                                                                >
                                                            </div>
                                                            <div class="list-item__head">
                                                                Angularjs Development
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=website-maintenance-services">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/WEBSITE-MAINTENANCE.svg')}}"
                                                                     alt="website-maintenance"
                                                                >
                                                            </div>
                                                            <div class="list-item__head">
                                                                Website Maintenance Services
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=whatsapp-business-integration">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/WEBSITE-MAINTENANCE.svg')}}"
                                                                     alt="whatsapp-business-integration"
                                                                >
                                                            </div>
                                                            <div class="list-item__head">
                                                                Whatsapp Integration
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-slider-gallery-slide" data-menu="service-tab2">
                                                <div class="slide-head">
                                                    Mobile Application Development
                                                </div>
                                                <ul class="list-wrapper">
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=hybrid-app-development">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/HYBRID.svg')}}"
                                                                     alt=""
                                                                >
                                                            </div>
                                                            <div class="list-item__head">
                                                                hybrid Apps
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=android-app-development">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/ANDROID.svg')}}"
                                                                     alt=""
                                                                >
                                                            </div>
                                                            <div class="list-item__head">
                                                                Android App development
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=ios-app-development-dubai">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/IOS.svg')}}"
                                                                     alt=""
                                                                >
                                                            </div>
                                                            <div class="list-item__head">
                                                                IOS app development
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=react-app-development">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/REACT-NATIVE.svg')}}"
                                                                     alt=""
                                                                >
                                                            </div>
                                                            <div class="list-item__head">
                                                                React Native apps
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=flutter-app-development">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/FLUTTER.svg')}}"
                                                                     alt=""
                                                                >
                                                            </div>
                                                            <div class="list-item__head">
                                                                Flutter apps
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=progressive-web-app-dubai.html">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/PROGRESSIVE-WEB.svg')}}"
                                                                     alt=""
                                                                >
                                                            </div>
                                                            <div class="list-item__head">
                                                                progressive Web apps
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=ruby-on-rails-development">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/RUBY-ON-RAILS.svg')}}"
                                                                     alt=""
                                                                >
                                                            </div>
                                                            <div class="list-item__head">
                                                                Ruby on Rails (ROR) Development
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-slider-gallery-slide" data-menu="service-tab3">
                                                <div class="slide-head">
                                                    Digital Marketing
                                                </div>
                                                <ul class="list-wrapper">
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=social-media-marketing">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/SOCIAL-MEDIA-MARKETING.svg')}}"
                                                                     alt="social"
                                                                >
                                                            </div>
                                                            <div class="list-item__head">
                                                                Social Media Marketing (SMM)
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=social-media-optimization">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/SOCIAL-MEDIA-OPTIMIZATION.svg')}}"
                                                                     alt=""
                                                                >
                                                            </div>
                                                            <div class="list-item__head">
                                                                Social Media Optimization (SMO)
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=pay-per-click">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/PAY-PER-CLICK.svg')}}"
                                                                     alt=""
                                                                     src="{{asset('assets/header-icons/PAY-PER-CLICK.svg')}}">
                                                            </div>
                                                            <div class="list-item__head">
                                                                Pay Per Click (PPC)
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=seo">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/SEARCH-ENGINE-OPTIMIZATION.svg')}}"
                                                                     alt=""
                                                                >
                                                            </div>
                                                            <div class="list-item__head">
                                                                Search Engine Optimization (SEO)
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=coversion-rate-optimization">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/CONVERSION-RATE-OPTIMIZATION.svg')}}"
                                                                     alt=""
                                                                     src="{{asset('assets/header-icons/CONVERSION-RATE-OPTIMIZATION.svg')}}">
                                                            </div>
                                                            <div class="list-item__head">
                                                                Conversion Rate Optimization (CRO)
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="#">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/EMAIL-MARKETING.svg')}}"
                                                                     alt=""
                                                                >
                                                            </div>
                                                            <div class="list-item__head">
                                                                Email Marketing
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=content-marketing">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/CONTENT-MARKETING.svg')}}"
                                                                     alt=""
                                                                     src="{{asset('assets/header-icons/CONTENT-MARKETING.svg')}}">
                                                            </div>
                                                            <div class="list-item__head">
                                                                Content Marketing
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=online-reputation-management">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/ONLINE-REPUTATION-MANAGEMENT.svg')}}"
                                                                     alt=""
                                                                >
                                                            </div>
                                                            <div class="list-item__head">
                                                                Online Reputation Management (ORM)
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=aso-app-store-optimization-services">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/APP-STORE-OPTIMIZATION.svg')}}"
                                                                     alt=""
                                                                     src="{{asset('assets/header-icons/APP-STORE-OPTIMIZATION.svg')}}">
                                                            </div>
                                                            <div class="list-item__head">
                                                                App Store Optimization (ASO)
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=pr-firm">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/PUBLIC-RELATION.svg')}}"
                                                                     alt=""
                                                                >
                                                            </div>
                                                            <div class="list-item__head">
                                                                Public Relation (PR)
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=translation-services-company">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/ONLINE-TRANSLATION-SERVICES.svg')}}"
                                                                     alt=""
                                                                >
                                                            </div>
                                                            <div class="list-item__head">
                                                                Online Translation Services
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-slider-gallery-slide" data-menu="service-tab4">
                                                <div class="slide-head">
                                                    Ui/Ux Design
                                                </div>
                                                <ul class="list-wrapper">
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=psd-to-html">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/PSD-TO-RESPONSIVE-HTML.svg')}}"
                                                                     alt=""
                                                                     src="{{asset('assets/header-icons/PSD-TO-RESPONSIVE-HTML.svg')}}">
                                                            </div>
                                                            <div class="list-item__head">
                                                                PSD To Responsive HTML
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=ux-workshops">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/UX-DESIGN-WORKSHOP.svg')}}"
                                                                     alt=""
                                                                >
                                                            </div>
                                                            <div class="list-item__head">
                                                                UX Design Workshop
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=responsive-website-design">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/RESPONSIVE-WEB.svg')}}"
                                                                     alt=""
                                                                >
                                                            </div>
                                                            <div class="list-item__head">
                                                                Responsive Web Design
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=ux-design">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/UX-DESIGN.svg')}}"
                                                                     alt=""
                                                                >
                                                            </div>
                                                            <div class="list-item__head">
                                                                UX Design
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=landing-page-design">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/LANDING-PAGE.svg')}}"
                                                                     alt=""
                                                                >
                                                            </div>
                                                            <div class="list-item__head">
                                                                Landing Page Design
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=ux-audit-dubai">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/UX-AUDIT.svg')}}"
                                                                     alt=""
                                                                >
                                                            </div>
                                                            <div class="list-item__head">
                                                                UX Audit
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=graphic-design-services">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/GRAPHIC-DESIGN.svg')}}"
                                                                     alt=""
                                                                >
                                                            </div>
                                                            <div class="list-item__head">
                                                                Graphic Design
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-slider-gallery-slide" data-menu="service-tab5">
                                                <div class="slide-head">
                                                    E-commerce Web development
                                                </div>
                                                <ul class="list-wrapper">
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=woo-commerce">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/WOO-COMMERCE.svg')}}"

                                                                     alt="">
                                                            </div>
                                                            <div class="list-item__head">
                                                                Woo Commerce Development
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=mirakl">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/MIRAKL-DEVELOPMENT.svg')}}"

                                                                     alt="">
                                                            </div>
                                                            <div class="list-item__head">
                                                                Mirakl Development
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=magento">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/MAGENTO-ECOMMERCE.svg')}}"

                                                                     alt="">
                                                            </div>
                                                            <div class="list-item__head">
                                                                Magento Ecommerce Development
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=big-commerce">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/BIG-COMMERCE.svg')}}"
                                                                     alt=""
                                                                >
                                                            </div>
                                                            <div class="list-item__head">
                                                                Big Commerce Development
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=shopify">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/SHOPIFY-ECOMMERCE.svg')}}"

                                                                     alt="">
                                                            </div>
                                                            <div class="list-item__head">
                                                                Shopify Ecommerce Development
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=shopify-plus">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/SHOPIFY-PLUS-ECOMMERCE.svg')}}"
                                                                     alt=""

                                                                >
                                                            </div>
                                                            <div class="list-item__head">
                                                                Shopify Plus Ecommerce Developments
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-slider-gallery-slide" data-menu="service-tab6">
                                                <div class="slide-head">
                                                    Digital Branding &amp; Communication
                                                </div>
                                                <ul class="list-wrapper">
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=brochure-design">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/COMPANY-PROFILE-&amp;-BROCHURE.svg')}}"

                                                                     alt="">
                                                            </div>
                                                            <div class="list-item__head">
                                                                Company Profile &amp; Brochure Design
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=business-card-design">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/BUSINESS-CARD.svg')}}"

                                                                     alt=""
                                                                >
                                                            </div>
                                                            <div class="list-item__head">
                                                                Business Card Design
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=corporate-identity-design">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/CORPORATE-IDENTITY.svg')}}"

                                                                     alt=""
                                                                >
                                                            </div>
                                                            <div class="list-item__head">
                                                                Corporate Identity Design
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=packaging-designs">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/PACKAGING.svg')}}"

                                                                     alt="">
                                                            </div>
                                                            <div class="list-item__head">
                                                                Packaging Designs
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=logo-design-dubai">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/LOGO.svg')}}"

                                                                     alt="">
                                                            </div>
                                                            <div class="list-item__head">
                                                                Logo Design
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-slider-gallery-slide" data-menu="service-tab7">
                                                <div class="slide-head">
                                                    Video Animation
                                                </div>
                                                <ul class="list-wrapper">
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=explainer-videos">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/EXPLANIER-VIDEO.svg')}}"

                                                                     alt="">
                                                            </div>
                                                            <div class="list-item__head">
                                                                Explanier Video Production
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=product-demo">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/PRODUCT-DEMO.svg')}}"

                                                                     alt="">
                                                            </div>
                                                            <div class="list-item__head">
                                                                Product Demo Animation
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=video-game-trailers">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/VIDEO-GAME.svg')}}"

                                                                     alt="">
                                                            </div>
                                                            <div class="list-item__head">
                                                                Video Game Trailer
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=3d-architectural-walkthroughs">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/3D-ARCHITECTURAL.svg')}}"

                                                                     alt=""
                                                                >
                                                            </div>
                                                            <div class="list-item__head">
                                                                3D Architectural Walkthroughs
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=medical-animation-company">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/MEDICAL-ANIMATION.svg')}}"

                                                                     alt=""
                                                                >
                                                            </div>
                                                            <div class="list-item__head">
                                                                Medical Animation Studio
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=character-animation">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/CHARACTER-ANIMATION.svg')}}"

                                                                     alt=""
                                                                >
                                                            </div>
                                                            <div class="list-item__head">
                                                                Character Animation Video
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=whiteboard-videos-animation">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/WHITEBOARD-ANIMATION.svg')}}"

                                                                     alt=""
                                                                >
                                                            </div>
                                                            <div class="list-item__head">
                                                                Whiteboard Animation Video
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-slider-gallery-slide" data-menu="service-tab8">
                                                <div class="slide-head">
                                                    It Resource
                                                </div>
                                                <ul class="list-wrapper">
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=hire-mobile-app-developer">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/HIRE-MOBILE.svg')}}"

                                                                     alt="">
                                                            </div>
                                                            <div class="list-item__head">
                                                                Hire Mobile App Developer
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=hire-scrum-master">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/HIRE-SCRUM.svg')}}"

                                                                     alt="">
                                                            </div>
                                                            <div class="list-item__head">
                                                                Hire Scrum Master in Dubai
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=hire-aws-resources">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/HIRE-AWS.svg')}}"

                                                                     alt="">
                                                            </div>
                                                            <div class="list-item__head">
                                                                Hire AWS Resources in Dubai
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=hire-qa-engineer">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/HIRE-QA.svg')}}"

                                                                     alt="">
                                                            </div>
                                                            <div class="list-item__head">
                                                                Hire QA Resources in Dubai
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=hire-nodejs-developer">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/HIRE-NODE.JS.svg')}}"

                                                                     alt="">
                                                            </div>
                                                            <div class="list-item__head">
                                                                Hire Node.js Developer in Dubai
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=hire-azure-developer">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/HIRE-AZURE.svg')}}"

                                                                     alt="">
                                                            </div>
                                                            <div class="list-item__head">
                                                                Hire Azure Developer in Dubai
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=hire-react-js-developer">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/HIRE-REACT-JS.svg')}}"

                                                                     alt=""
                                                                >
                                                            </div>
                                                            <div class="list-item__head">
                                                                Hire React JS Developers in Dubai
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=hire-react-native-developer">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/HIRE-REACT-NATIVE.svg')}}"

                                                                     alt=""
                                                                >
                                                            </div>
                                                            <div class="list-item__head">
                                                                Hire React Native Developers in Dubai
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=hire-sharepoint-developer">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/HIRE-SHAREPOINT.svg')}}"

                                                                     alt=""
                                                                >
                                                            </div>
                                                            <div class="list-item__head">
                                                                Hire Sharepoint Developers in Dubai
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=hire-dynamics-365-developer">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/HIRE-DYNAMICS-365.svg')}}"

                                                                     alt=""
                                                                >
                                                            </div>
                                                            <div class="list-item__head">
                                                                Hire Dynamics 365 Developers in Dubai
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=hire-project-manager">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/HIRE-PROJECT-MANAGERS.svg')}}"

                                                                     alt=""
                                                                >
                                                            </div>
                                                            <div class="list-item__head">
                                                                Hire Project Managers in Dubai
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=hire-dot-net-developer">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/HIRE-DOT-NET.svg')}}"

                                                                     alt="">
                                                            </div>
                                                            <div class="list-item__head">
                                                                Hire Dot Net Developers in Dubai
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=robotic-process-automation-rpa">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/HIRE-RPA.svg')}}"

                                                                     alt="">
                                                            </div>
                                                            <div class="list-item__head">
                                                                Hire RPA in Dubai
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=google-3d-map-design-development">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/3D-GOOGLE-MAPS.svg')}}"

                                                                     alt="">
                                                            </div>
                                                            <div class="list-item__head">
                                                                3D Google Maps Integration
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=martech-consulting-company">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/3D-GOOGLE-MAPS.svg')}}"

                                                                     alt="">
                                                            </div>
                                                            <div class="list-item__head">
                                                                MarTech Consulting
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-item">
                                                        <a href="{{ route('service') }}?service=digital-cloud-transformatio-solution">
                                                            <div class="list-item__img">
                                                                <img class="lazy-img"
                                                                     data-src="{{asset('assets/header-icons/3D-GOOGLE-MAPS.svg')}}"

                                                                     alt="">
                                                            </div>
                                                            <div class="list-item__head">
                                                                Digital Cloud Transformation
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="menu__menuitem ">
                            <a href="{{route('career')}}" class="menu__menuitem--menulink w-uline">
                                Careers </a>
                        </li>
                    </ul>
                    <div class="social-wrapper">
                        <div class="anchor-wrapper project-anchor">
                            <a href="javascript:void(0)" class="menu-open ">
                                <span >GET A FREE QUOTE</span>
                            </a>
                        </div>
                    </div>
                </nav>
                <div class="mobNav">
                    <ul class="mobNav__menu">
                        <li class="mobNav__menu--item ">
                            <a href="{{route('home')}}" class="menu-link">
                                Home </a>
                        </li>
                        <li class="mobNav__menu--item ">
                            <a href="{{route('about')}}" class="menu-link">
                                About </a>
                        </li>
                        <li class="mobNav__menu--item ">
                            <a href="{{route('pricing')}}" class="menu-link">
                                Pricing </a>
                        </li>
                        <li class="mobNav__menu--item ">
                            <a href="{{route('service')}}" class="menu-link">
                                Services </a>
                            <ul class="inner-menu">
                                <li class="inner-menu__item">
                                    <a class="inner-menu__item--link" href="javascript:void(0)"> Web
                                        Development</a>
                                    <ul class="sub-inner-menu">
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link"
                                               href="{{ route('service') }}?service=wordpress-development">
                                                Wordpress Development </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link"
                                               href="{{ route('service') }}?service=sharepoint-development">
                                                SharePoint Development </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link"
                                               href="{{ route('service') }}?service=enterprise-development">
                                                Enterprise Development </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link"
                                               href="{{ route('service') }}?service=sitecore-development">
                                                Sitecore Development </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link" href="{{ route('service') }}?service=php-development">
                                                Php Development </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link"
                                               href="{{ route('service') }}?service=joomla-development">
                                                Joomla Development </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link"
                                               href="{{ route('service') }}?service=asp-net-development">
                                                ASP.NET Development </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link"
                                               href="{{ route('service') }}?service=cms-website-development">
                                                CMS Development </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link"
                                               href="{{ route('service') }}?service=drupal-web-development">
                                                Drupal Development </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link" href="{{ route('service') }}?service=ibexa-dxp">
                                                ibexa DXP Development </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link"
                                               href="{{ route('service') }}?service=laravel-web-development">
                                                Laravel Development </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link"
                                               href="{{ route('service') }}?service=python-development">
                                                Python Development </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link"
                                               href="{{ route('service') }}?service=angularjs-development">
                                                Angularjs Development </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link"
                                               href="{{ route('service') }}?service=website-maintenance-services">
                                                Website Maintenance Services </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link"
                                               href="{{ route('service') }}?service=whatsapp-business-integration">
                                                Whatsapp Integration </a>
                                        </li>
                                    </ul>
                                    <div class="inner-menu-toggleBtn"></div>
                                </li>
                                <li class="inner-menu__item">
                                    <a class="inner-menu__item--link" href="javascript:void(0)">
                                        Mobile Application Development</a>
                                    <ul class="sub-inner-menu">
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link"
                                               href="{{ route('service') }}?service=hybrid-app-development">
                                                hybrid Apps </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link"
                                               href="{{ route('service') }}?service=android-app-development">
                                                Android App development </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link"
                                               href="{{ route('service') }}?service=ios-app-development-dubai">
                                                IOS app development </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link"
                                               href="{{ route('service') }}?service=react-app-development">
                                                React Native apps </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link"
                                               href="{{ route('service') }}?service=flutter-app-development">
                                                Flutter apps </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link"
                                               href="{{ route('service') }}?service=progressive-web-app-dubai.html">
                                                progressive Web apps </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link"
                                               href="{{ route('service') }}?service=ruby-on-rails-development">
                                                Ruby on Rails (ROR) Development </a>
                                        </li>
                                    </ul>
                                    <div class="inner-menu-toggleBtn"></div>
                                </li>
                                <li class="inner-menu__item">
                                    <a class="inner-menu__item--link" href="javascript:void(0)"> Digital
                                        Marketing</a>
                                    <ul class="sub-inner-menu">
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link"
                                               href="{{ route('service') }}?service=social-media-marketing">
                                                Social Media Marketing (SMM) </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link"
                                               href="{{ route('service') }}?service=social-media-optimization">
                                                Social Media Optimization (SMO) </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link" href="{{ route('service') }}?service=pay-per-click">
                                                Pay Per Click (PPC) </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link" href="{{ route('service') }}?service=seo">
                                                Search Engine Optimization (SEO) </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link"
                                               href="{{ route('service') }}?service=coversion-rate-optimization">
                                                Conversion Rate Optimization (CRO) </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link" href="#">
                                                Email Marketing </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link"
                                               href="{{ route('service') }}?service=content-marketing">
                                                Content Marketing </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link"
                                               href="{{ route('service') }}?service=online-reputation-management">
                                                Online Reputation Management (ORM) </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link"
                                               href="{{ route('service') }}?service=aso-app-store-optimization-services">
                                                App Store Optimization (ASO) </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link" href="{{ route('service') }}?service=pr-firm">
                                                Public Relation (PR) </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link"
                                               href="{{ route('service') }}?service=translation-services-company">
                                                Online Translation Services </a>
                                        </li>
                                    </ul>
                                    <div class="inner-menu-toggleBtn"></div>
                                </li>
                                <li class="inner-menu__item">
                                    <a class="inner-menu__item--link" href="javascript:void(0)"> Ui/Ux
                                        Design</a>
                                    <ul class="sub-inner-menu">
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link" href="{{ route('service') }}?service=psd-to-html">
                                                PSD To Responsive HTML </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link" href="{{ route('service') }}?service=ux-workshops">
                                                UX Design Workshop </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link"
                                               href="{{ route('service') }}?service=responsive-website-design">
                                                Responsive Web Design </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link" href="{{ route('service') }}?service=ux-design">
                                                UX Design </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link"
                                               href="{{ route('service') }}?service=landing-page-design">
                                                Landing Page Design </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link" href="{{ route('service') }}?service=ux-audit-dubai">
                                                UX Audit </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link"
                                               href="{{ route('service') }}?service=graphic-design-services">
                                                Graphic Design </a>
                                        </li>
                                    </ul>
                                    <div class="inner-menu-toggleBtn"></div>
                                </li>
                                <li class="inner-menu__item">
                                    <a class="inner-menu__item--link" href="javascript:void(0)">
                                        E-commerce Web development</a>
                                    <ul class="sub-inner-menu">
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link" href="{{ route('service') }}?service=woo-commerce">
                                                Woo Commerce Development </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link" href="{{ route('service') }}?service=mirakl">
                                                Mirakl Development </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link" href="{{ route('service') }}?service=magento">
                                                Magento Ecommerce Development </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link" href="{{ route('service') }}?service=big-commerce">
                                                Big Commerce Development </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link" href="{{ route('service') }}?service=shopify">
                                                Shopify Ecommerce Development </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link" href="{{ route('service') }}?service=shopify-plus">
                                                Shopify Plus Ecommerce Developments </a>
                                        </li>
                                    </ul>
                                    <div class="inner-menu-toggleBtn"></div>
                                </li>
                                <li class="inner-menu__item">
                                    <a class="inner-menu__item--link"
                                       href="javascript:void(0)"> Digital Branding &amp;
                                        Communication</a>
                                    <ul class="sub-inner-menu">
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link" href="{{ route('service') }}?service=brochure-design">
                                                Company Profile &amp; Brochure Design </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link"
                                               href="{{ route('service') }}?service=business-card-design">
                                                Business Card Design </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link"
                                               href="{{ route('service') }}?service=corporate-identity-design">
                                                Corporate Identity Design </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link"
                                               href="{{ route('service') }}?service=packaging-designs">
                                                Packaging Designs </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link" href="{{ route('service') }}?service=logo-design-dubai">
                                                Logo Design </a>
                                        </li>
                                    </ul>
                                    <div class="inner-menu-toggleBtn"></div>
                                </li>
                                <li class="inner-menu__item">
                                    <a class="inner-menu__item--link" href="javascript:void(0)"> Video
                                        Animation</a>
                                    <ul class="sub-inner-menu">
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link"
                                               href="{{ route('service') }}?service=explainer-videos">
                                                Explanier Video Production </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link" href="{{ route('service') }}?service=product-demo">
                                                Product Demo Animation </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link"
                                               href="{{ route('service') }}?service=video-game-trailers">
                                                Video Game Trailer </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link"
                                               href="{{ route('service') }}?service=3d-architectural-walkthroughs">
                                                3D Architectural Walkthroughs </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link"
                                               href="{{ route('service') }}?service=medical-animation-company">
                                                Medical Animation Studio </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link"
                                               href="{{ route('service') }}?service=character-animation">
                                                Character Animation Video </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link"
                                               href="{{ route('service') }}?service=whiteboard-videos-animation">
                                                Whiteboard Animation Video </a>
                                        </li>
                                    </ul>
                                    <div class="inner-menu-toggleBtn"></div>
                                </li>
                                <li class="inner-menu__item">
                                    <a class="inner-menu__item--link" href="javascript:void(0)"> It
                                        Resource</a>
                                    <ul class="sub-inner-menu">
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link"
                                               href="{{ route('service') }}?service=hire-mobile-app-developer">
                                                Hire Mobile App Developer </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link"
                                               href="{{ route('service') }}?service=hire-scrum-master">
                                                Hire Scrum Master in Dubai </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link"
                                               href="{{ route('service') }}?service=hire-aws-resources">
                                                Hire AWS Resources in Dubai </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link"
                                               href="{{ route('service') }}?service=hire-qa-engineer">
                                                Hire QA Resources in Dubai </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link"
                                               href="{{ route('service') }}?service=hire-nodejs-developer">
                                                Hire Node.js Developer in Dubai </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link"
                                               href="{{ route('service') }}?service=hire-azure-developer">
                                                Hire Azure Developer in Dubai </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link"
                                               href="{{ route('service') }}?service=hire-react-js-developer">
                                                Hire React JS Developers in Dubai </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link"
                                               href="{{ route('service') }}?service=hire-react-native-developer">
                                                Hire React Native Developers in Dubai </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link"
                                               href="{{ route('service') }}?service=hire-sharepoint-developer">
                                                Hire Sharepoint Developers in Dubai </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link"
                                               href="{{ route('service') }}?service=hire-dynamics-365-developer">
                                                Hire Dynamics 365 Developers in Dubai </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link"
                                               href="{{ route('service') }}?service=hire-project-manager">
                                                Hire Project Managers in Dubai </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link"
                                               href="{{ route('service') }}?service=hire-dot-net-developer">
                                                Hire Dot Net Developers in Dubai </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link"
                                               href="{{ route('service') }}?service=robotic-process-automation-rpa">
                                                Hire RPA in Dubai </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link"
                                               href="{{ route('service') }}?service=google-3d-map-design-development">
                                                3D Google Maps Integration </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link"
                                               href="{{ route('service') }}?service=martech-consulting-company">
                                                MarTech Consulting </a>
                                        </li>
                                        <li class="sub-inner-menu__item">
                                            <a class="sub-inner-menu__item--link"
                                               href="{{ route('service') }}?service=digital-cloud-transformatio-solution">
                                                Digital Cloud Transformation </a>
                                        </li>
                                    </ul>
                                    <div class="inner-menu-toggleBtn"></div>
                                </li>
                            </ul>
                            <div class="menu-toggleBtn"></div>
                        </li>
                        <li class="mobNav__menu--item ">
                            <a href="{{route('career')}}" class="menu-link">
                                Careers </a>
                        </li>
                    </ul>
                </div>
                <div class="social-wrapper mob-social-wrapper">
                    <div class="anchor-wrapper project-anchor">
                        <a href="#" class="menu-open">
                            <span>Speak to an Expert</span>
                        </a>
                    </div>
                    <div class="anchor-wrapper whatsapp-anchor">
                        <a target="_blank" href="https://wa.me/(917) 203-8420">
                            <img class="svg-convert" src="{{asset('images/social-whatsapp.svg')}}" alt="whatsapp">
                        </a>
                    </div>
                    <div class="anchor-wrapper">
                        <a href="tel:(917) 203-8420">
                            <img class="svg-convert" src="{{asset('images/social-phone.svg')}}" alt>
                        </a>
                    </div>
                </div>
                <div id="toggle" class="nav-button">
                </div>
            </div>
        </div>
    </div>
</header>
