@extends('layouts.layout')
@section('content')
    <section class="services-hero inner-hero">
        <div class="services-hero__mainWrapper">
            <div class="services-hero__container container">
                <div class="services-hero__wrapper">
                    <div class="services-hero__head inner-hero__head generic--head">
                        <h1 class="generic--head__head fw-600">
                            Our Digital Services Create Lovely Projects &amp; Deliver Memorable Experiences
                        </h1>
                    </div>
                    <div class="services-hero__form">
                        <div class="generic--form col-100">
                            <div class="form-head generic--head">
                                <h3 class="generic--head__subhead black-col">
                                    Speak to an Expert
                                </h3>
                                <p class="generic--head__secpara black-col s-font ">
                                    if you have any RFP requirement please share with us at
                                    <a href="javascript:void(0)"
                                       class="primary-col w-uline"><span class="__cf_email__"></span></a>
                                    and if you
                                    are looking for a career related
                                    enquiry please check our <a href="javascript:void(0)"
                                                                class="primary-col w-uline">Career</a> section.
                                </p>
                            </div>
                            <form id="servicesHeroForm">
                                <input type="hidden" name="source" value="https://www.xyberixsolutions.com">
                                <div class="generic--form__wrapper twocol-row">
                                    <div class="col-50">
                                        <div class="input-container">
                                            <input id="name" class="input" name="fullname" type="text"
                                                   placeholder=" " required>
                                            <div class="cut"></div>
                                            <label for="name" class="placeholder">Your Name*</label>
                                        </div>
                                    </div>
                                    <div class="col-50">
                                        <div class="input-container">
                                            <input id="email" class="input" name="email" type="email"
                                                   placeholder=" " required>
                                            <div class="cut"></div>
                                            <label for="email" class="placeholder">Your Email*</label>
                                        </div>
                                    </div>
                                    <div class="col-50">
                                        <div class="input-container">
                                            <input class="input" name="company" type="text" required placeholder=" "
                                                   id="company">
                                            <div class="cut"></div>
                                            <label for="company" class="placeholder">Company*</label>
                                        </div>
                                    </div>
                                    <div class="col-50">
                                        <div class="input-container">
                                            <select name="interest" class="input" id="services" required>
                                                <option value="empty" selected disabled>select any interest</option>
                                                <option value="wordpress-development">Wordpress Development</option>
                                                <option value="sharepoint-development">Sharepoint Development</option>
                                                <option value="enterprise-development">Enterprise Development</option>
                                                <option value="sitecore-development">Sitecore Development</option>
                                                <option value="php-development">Php Development</option>
                                                <option value="joomla-development">Joomla Development</option>
                                                <option value="asp-net-development">Asp .Net Development</option>
                                                <option value="cms-website-development">Cms Website Development</option>
                                                <option value="drupal-web-development">Drupal Web Development</option>
                                                <option value="laravel-web-development">Laravel Web Development</option>
                                                <option value="python-development">Python Development</option>
                                                <option value="angularjs-development">Angularjs Development</option>
                                                <option value="website-maintenance-services">Website Maintenance Services</option>
                                                <option value="whatsapp-business-integration">Whatsapp Business Integration</option>
                                                <option value="hybrid-app-development">Hybrid App Development</option>
                                                <option value="android-app-development">Android App Development</option>
                                                <option value="ios-app-development">Ios App Development</option>
                                                <option value="flutter-app-development">flutter-app-development</option>
                                                <option value="progressive-web-app">progressive-web-app-dubai</option>
                                                <option value="react-app-development">React App Development</option>
                                                <option value="web-development">Web Development</option>
                                                <option value="ui/ux-design">UI/UX Design</option>
                                                <option value="digital-marketing-service">Digital Marketing Service</option>
                                                <option value="branding-comunication">Branding Comunication</option>
                                                <option value="ecommerce-web-development">Ecommerce Web Developement</option>
                                                <option value="mobile-app-developement">Mobile App Development</option>
                                                <option value="IT-resource-outsouring">IT Resource Outsouring</option>
                                                <option value="ppc">PPC</option>
                                                <option value="seo">SEO</option>
                                                <option value="cro">CRO</option>
                                                <option value="content-marketing">Content Marketing</option>
                                                <option value="social-media-marketing">Social Media Marketing</option>
                                                <option value="social-media-optimizatio">Social Media Optimization</option>
                                                <option value="email-marketing">Email Marketing</option>
                                            </select>
                                            <div class="cut"></div>
                                            <label for="services" class="placeholder">Select Your Interest*</label>
                                        </div>
                                    </div>
                                    <div class="col-100">
                                        <div class="input-container">
                                            <input id="phone" class="input" name="phone" type="tel"
                                                   placeholder=" " required>
                                            <div class="cut"></div>
                                            <label for="phone" class="placeholder">Phone Number*</label>
                                        </div>
                                    </div>
                                    <div class="col-100">
                                        <div class="input-container">
                                            <label for="budget"></label><select class="input-select" id="budget" name="budget" required>
                                                <option value="empty" selected disabled>Budget</option>
                                                <option value="0 - $100">0 - $100</option>
                                                <option value="$100 - $200">$100 - $200</option>
                                                <option value="$200 - $300">$200 - $300</option>
                                                <option value="$300 - $400">$300 - $400</option>
                                                <option value="$400 - $500">$400 - $500</option>
                                                <option value="$500+">$500+</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-100">
                                        <div class="input-container textArea " style="z-index: 0;">
                                                    <textarea id="text-area" class="input" name="message"
                                                              placeholder=" " required></textarea>
                                            <div class="cut"></div>
                                            <label for="text-area" class="placeholder">Your Message</label>
                                        </div>
                                    </div>
                                    <div class="anchor-wrapper" id="submit-button-service">
                                        <button class="arrow-anchor black-col service-form">
                                            <span>Send</span>
                                            <div class="img-wrapper">
                                                <img class="svg-convert" src="{{asset('assets/service/anchor-arrow2.svg')}}" alt>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="services-hero__bgImg">
            <picture>
                <source media="(min-width:576px)" srcset="{{asset('images/analytics_servers-banner.png')}}">
                <img src="{{asset('images/analytics_servers-banner.png')}}" alt>

            </picture>
        </div>

        <div class="services-hero__social-linkWrapper">
            <p class="head">socialize</p>
            <div class="services-hero__social-links">
                <a href="https://www.linkedin.com/company/xyberixsolutions/" target="_blank"
                   class="services-hero__social-link">
                    <div class="img-wrapper">
                        <img class="svg-convert" width="20" height="20" src="images/social-linkedin.svg"
                             alt="facebook">
                    </div>
                </a>
                <a href="https://twitter.com/xyberixs?s=21&t=kXmOtLnYa844an74zFzhSA" target="_blank"
                   class="services-hero__social-link">
                    <div class="img-wrapper">
                        <img class="svg-convert" width="20" height="20" src="images/social-twitter.svg"
                             alt="twitter">
                    </div>
                </a>
                <a href="https://www.instagram.com/xyberixsolutions/?igshid=MzRlODBiNWFlZA%3D%3D&__coig_restricted=1" target="_blank"
                   class="services-hero__social-link">
                    <div class="img-wrapper">
                        <img class="svg-convert" width="20" height="20" src="images/social-instagram.svg"
                             alt="instagram">
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section class="serviceHelp section">
        <div class="container">
            <div class="serviceHelp__wrapper twocol-row serviceHelp__slider swiper">
                <div class="serviceHelp__headWrapper">
                    <h2 class="head animate fadein-Up" data-delay="0s">
                        A Full-Service <span class="text-gradient">Creative Digital Agency</span> </h2>
                </div>
                <div class="serviceHelp__cardsWrapper twocol-row swiper-wrapper">
                    <a href="javascript:void(0)" class="serviceHelp__card swiper-slide">
                        <div class="card-service--wrap">
                            <div class="card-icon animate fadein-Up" data-delay="0s">
                                <img class="lazy-img" data-src="{{asset('assets/service/web-development.svg')}}"
                                     alt="icon" src="">
                            </div>
                            <h3 class="head animate fadein-Up" data-delay="0.1s">
                                Web Development </h3>
                            <p class="descrip animate fadein-Up" data-delay="0.2s">
                                Desktop &amp; Mobile websites done right by professional web development
                                experts. </p>
                            <div class="anchor-wrapper">
                                <div class="arrow-anchor transparent-bg">
                                    <div class="img-wrapper">
                                        <img class="svg-convert" src="{{asset('assets/service/anchor-arrow2.svg')}}" alt>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="serviceHelp__card swiper-slide">
                        <div class="card-service--wrap">
                            <div class="card-icon animate fadein-Up" data-delay="0s">
                                <img class="lazy-img" data-src="{{asset('assets/service/mobile-application.svg')}}"
                                     alt="icon" src="">
                            </div>
                            <h3 class="head animate fadein-Up" data-delay="0.1s">
                                Mobile Application </h3>
                            <p class="descrip animate fadein-Up" data-delay="0.2s">
                                High performance mobile apps for your business. </p>
                            <div class="anchor-wrapper">
                                <div class="arrow-anchor transparent-bg">
                                    <div class="img-wrapper">
                                        <img class="svg-convert" src="{{asset('assets/service/anchor-arrow2.svg')}}" alt>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="serviceHelp__card swiper-slide">
                        <div class="card-service--wrap">
                            <div class="card-icon animate fadein-Up" data-delay="0s">
                                <img class="lazy-img" data-src="{{asset('assets/service/digital-marketing.svg')}}"
                                     alt="icon" src="">
                            </div>
                            <h3 class="head animate fadein-Up" data-delay="0.1s">
                                Digital Marketing </h3>
                            <p class="descrip animate fadein-Up" data-delay="0.2s">
                                Strategies to boost your conversions &amp; ROI done by gurus. </p>
                            <div class="anchor-wrapper">
                                <div class="arrow-anchor transparent-bg">
                                    <div class="img-wrapper">
                                        <img class="svg-convert" src="{{asset('assets/service/anchor-arrow2.svg')}}" alt>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="serviceHelp__card swiper-slide">
                        <div class="card-service--wrap">
                            <div class="card-icon animate fadein-Up" data-delay="0s">
                                <img class="lazy-img" data-src="{{asset('assets/service/ui-ux-design.svg')}}"
                                     alt="icon" src="">
                            </div>
                            <h3 class="head animate fadein-Up" data-delay="0.1s">
                                UI/UX Design </h3>
                            <p class="descrip animate fadein-Up" data-delay="0.2s">
                                Great user experience, with responsive web design. </p>
                            <div class="anchor-wrapper">
                                <div class="arrow-anchor transparent-bg">
                                    <div class="img-wrapper">
                                        <img class="svg-convert" src="{{asset('assets/service/anchor-arrow2.svg')}}" alt>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="serviceHelp__card swiper-slide">
                        <div class="card-service--wrap">
                            <div class="card-icon animate fadein-Up" data-delay="0s">
                                <img class="lazy-img" data-src="{{asset('assets/service/ecommerce-solution.svg')}}"
                                     alt="icon" src="">
                            </div>
                            <h3 class="head animate fadein-Up" data-delay="0.1s">
                                E-Commerce Solution </h3>
                            <p class="descrip animate fadein-Up" data-delay="0.2s">
                                Ecommerce: We create awesome online stores for simple, better and convenient
                                shopping. Greater ecommerce experience, every time! </p>
                            <div class="anchor-wrapper">
                                <div class="arrow-anchor transparent-bg">
                                    <div class="img-wrapper">
                                        <img class="svg-convert" src="{{asset('assets/service/anchor-arrow2.svg')}}" alt>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="serviceHelp__card swiper-slide">
                        <div class="card-service--wrap">
                            <div class="card-icon animate fadein-Up" data-delay="0s">
                                <img class="lazy-img" data-src="{{asset('assets/service/branding-comm.svg')}}"
                                     alt="icon" src="">
                            </div>
                            <h3 class="head animate fadein-Up" data-delay="0.1s">
                                Branding &amp; Communication </h3>
                            <p class="descrip animate fadein-Up" data-delay="0.2s">
                                We cover the entire spectrum of digital marketing, including, designing your
                                company logo. </p>
                            <div class="anchor-wrapper">
                                <div class="arrow-anchor transparent-bg">
                                    <div class="img-wrapper">
                                        <img class="svg-convert" src="{{asset('assets/service/anchor-arrow2.svg')}}" alt>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="serviceHelp__card swiper-slide">
                        <div class="card-service--wrap">
                            <div class="card-icon animate fadein-Up" data-delay="0s">
                                <img class="lazy-img" data-src="{{asset('assets/service/video-animation.svg')}}"
                                     alt="icon" src="">
                            </div>
                            <h3 class="head animate fadein-Up" data-delay="0.1s">
                                Video Animation </h3>
                            <p class="descrip animate fadein-Up" data-delay="0.2s">
                                Video Animation: Giving Your World a Better, More Inspirational Look. Tell
                                Amazing Stories with Our Video Animation. </p>
                            <div class="anchor-wrapper">
                                <div class="arrow-anchor transparent-bg">
                                    <div class="img-wrapper">
                                        <img class="svg-convert" src="{{asset('assets/service/anchor-arrow2.svg')}}" alt>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="serviceHelp__card swiper-slide">
                        <div class="card-service--wrap">
                            <div class="card-icon animate fadein-Up" data-delay="0s">
                                <img class="lazy-img"
                                     data-src="{{asset('assets/service/resource-outsourcing.svg')}}" alt="icon"
                                     src="">
                            </div>
                            <h3 class="head animate fadein-Up" data-delay="0.1s">
                                IT Resource Outsourcing </h3>
                            <p class="descrip animate fadein-Up" data-delay="0.2s">
                                Resource Outsourcing: We Empower Your Business &amp; Boost Competitiveness with
                                Valuable Skillset &amp; the Right Talent. </p>
                            <div class="anchor-wrapper">
                                <div class="arrow-anchor transparent-bg">
                                    <div class="img-wrapper">
                                        <img class="svg-convert" src="{{asset('assets/service/anchor-arrow2.svg')}}" alt>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            const urlParams = new URLSearchParams(window.location.search);
            const serviceParam = urlParams.get('service');
            const selectElement = document.getElementById('services');
            const options = selectElement.getElementsByTagName('option');
            for (let i = 0; i < options.length; i++) {
                if (options[i].value === serviceParam) {
                    options[i].setAttribute('selected', 'selected');
                }
            }
        });
        const form = document.getElementById("servicesHeroForm");
        const url = "https://dashboard.xyberixsolutions.com/api/v1/send/mail";
        form.addEventListener("submit", async function (e) {
            e.preventDefault();
            const formData = new FormData(this);
            let timerInterval
            Swal.fire({
                title: 'Thank You',
                html: 'Please Wait <b></b> for a while.',
                timer: 20000,
                timerProgressBar: true,
                didOpen: () => {
                    Swal.showLoading()
                    const b = Swal.getHtmlContainer().querySelector('b')
                    timerInterval = setInterval(() => {
                        b.textContent = Swal.getTimerLeft()
                    }, 100)
                },
                willClose: () => {
                    clearInterval(timerInterval)
                }
            }).then((result) => {
                if (result.dismiss === Swal.DismissReason.timer) {
                    console.log('I was closed by the timer')
                }
            })
            try {
                const response = await axios.post(url, formData);
                console.log(response.data);
                form.reset();
                Swal.fire({
                    icon: 'success',
                    title: "Message Send",
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                });
            } catch (error) {
                Swal.fire(
                    'The Internet?',
                    'That thing is still around?',
                    'question'
                )
            }
        });
    </script>
@endsection
