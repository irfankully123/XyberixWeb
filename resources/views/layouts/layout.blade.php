<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <link rel="icon" type="image/x-icon" href="{{ asset('logo.svg') }}">
    <meta name="format-detection" content="telephone=no">
    <link href="{{ asset('css/css-custom.min.css') }}" rel="stylesheet" type="text/css">
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-D2TKPS3JSE"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-D2TKPS3JSE');
    </script>
    @yield('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" >
    <title>Xyberix Solutions</title>
</head>
<body>
@include('partials.warning')
@include('partials.header')
@include('partials.floating_icon')
<div id="butter">
    <main>
        @yield('content')
    </main>
    @include('partials.footer')
</div>
@include('partials.user_form')
@include('partials.social_wrapper')
@yield('scripts')
<script src="{{ asset('js/3.6.0-jquery.min.js') }}"></script>
<script src="{{asset('js/swiper@8-swiper-bundle.min.js')}}"></script>
<script src="{{ asset('js/vendors-svgConvert.min.js') }}"></script>
<script src="{{ asset('js/3.10.4-gsap.min.js') }}"></script>
<script src="{{ asset('js/3.10.4-ScrollTrigger.min.js') }}"></script>
<script src="{{ asset('js/vendors-direction-hover.js') }}"></script>
<script src="{{ asset('js/vendors-project-form.js') }}"></script>
<script src="{{ asset('js/js-form_custom.js') }}"></script>
<script src="{{ asset('js/js-custom.js') }}"></script>
<script src="{{ asset('js/vendors-intersection-observer.js') }}"></script>
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/64ff79870f2b18434fd7f274/1ha2v5ehe';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script type="text/javascript">
    const form = document.getElementById("contact-form");
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
            if (response.status === 200) {
                window.location.href = '/';
            }
        } catch (error) {
            Swal.fire(
                'The Internet?',
                'That thing is still around?',
                'question'
            )
        }
    });
</script>
</body>
</html>
