@extends('layouts.layout')
@section('styles')
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        background-color: #f4f4f4;
    }

    .pricing-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        max-width: 1200px;
        margin: 20px auto;
    }

    .pricing-card {
        flex: 0 0 calc(33.333% - 20px);
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin: 10px;
        padding: 20px;
        text-align: center;
        transition: box-shadow 0.3s ease;
        display: flex;
        flex-direction: column;
        justify-content: center; /* Center vertically */
        align-items: center; /* Center horizontally */
    }

    .pricing-card ul {
        list-style: inside; /* Set list style to inside */
        padding: 0;
        text-align: left; /* Align text within the list to the left */
    }

    .pricing-card ul li {
        margin-bottom: 8px;
        text-align: left;
        color: black/* Align text within list items to the left */
    }

    /* Rest of the styles remain the same */


    .pricing-card:hover {
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
    }

    .pricing-card h2 {
        color: #333;
    }

    .pricing-card p {
        color: #666;
    }

    @media (max-width: 768px) {
        .pricing-card {
            flex: 0 0 calc(50% - 20px);
        }
    }

    @media (max-width: 480px) {
        .pricing-card {
            flex: 0 0 calc(100% - 20px);
        }
    }
</style>
@endsection
@section('content')
    <section class="about-us inner-banner inner-hero">
        <div class="container">
            <div class="twocol-row">
                <div class="col-36">
                    <div class=" inner-hero__head generic--head">
                        <h6 class="generic--head__subhead left-element">
                            Digital Marketing Agency In Dubai
                        </h6>
                        <h1 class="generic--head__head fw-700">
                            We Activate Businesses &amp; Brands for the <span class="primary-col">Digital
                                        Change</span> </h1>
                    </div>
                </div>
                <div class="col-30">
                    <p class>At Xyberix Solution, we have leading industry professionals and state-of-the-art
                        technology to ensure your business and brands lifts up on the digital front.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="currentOpenings section">
        <div class="pricing-container">
            <!-- Row 1 -->
            <div class="pricing-card">
                <h2>Basic Plan</h2>
                <p>$9.99/month</p>
                <ul>
                    <li>Simple, static website</li>
                    <li>Essential pages: Home, About Us</li>
                    <li>Basic design and layout customization</li>
                    <li>Limited features and functionality</li>
                    <li>Simple, static website</li>
                    <li>Essential pages: Home, About Us</li>
                    <li>Basic design and layout customization</li>
                    <li>Limited features and functionality</li>
                </ul>
                <button>Subscribe</button>
            </div>

            <div class="pricing-card">
                <h2>Standard Plan</h2>
                <p>$19.99/month</p>
                <ul>
                    <li>Simple, static website</li>
                    <li>Essential pages: Home, About Us</li>
                    <li>Basic design and layout customization</li>
                    <li>Limited features and functionality</li>
                    <li>Simple, static website</li>
                    <li>Essential pages: Home, About Us</li>
                    <li>Basic design and layout customization</li>
                    <li>Limited features and functionality</li>
                </ul>
                <button>Subscribe</button>
            </div>

            <div class="pricing-card">
                <h2>Premium Plan</h2>
                <p>$29.99/month</p>
                <ul>
                    <li>Simple, static website</li>
                    <li>Essential pages: Home, About Us</li>
                    <li>Basic design and layout customization</li>
                    <li>Limited features and functionality</li>
                    <li>Simple, static website</li>
                    <li>Essential pages: Home, About Us</li>
                    <li>Basic design and layout customization</li>
                    <li>Limited features and functionality</li>
                </ul>
                <button>Subscribe</button>
            </div>

            <!-- Row 2 -->
            <div class="pricing-card">
                <h2>Enterprise Plan</h2>
                <p>$22.99/month</p>
                <ul>
                    <li>Simple, static website</li>
                    <li>Essential pages: Home, About Us</li>
                    <li>Basic design and layout customization</li>
                    <li>Limited features and functionality</li>
                    <li>Simple, static website</li>
                    <li>Essential pages: Home, About Us</li>
                    <li>Basic design and layout customization</li>
                    <li>Limited features and functionality</li>
                </ul>
                <button>Subscribe</button>
            </div>

            <div class="pricing-card">
                <h2>Special Plan</h2>
                <p>$49.99/month</p>
                <ul>
                    <li>Simple, static website</li>
                    <li>Essential pages: Home, About Us</li>
                    <li>Basic design and layout customization</li>
                    <li>Limited features and functionality</li>
                    <li>Simple, static website</li>
                    <li>Essential pages: Home, About Us</li>
                    <li>Basic design and layout customization</li>
                    <li>Limited features and functionality</li>
                </ul>
                <button>Subscribe</button>
            </div>

            <div class="pricing-card">
                <h2>Free Plan</h2>
                <p> $0/month</p>
                <ul>
                    <li>Simple, static website</li>
                    <li>Essential pages: Home, About Us</li>
                    <li>Basic design and layout customization</li>
                    <li>Limited features and functionality</li>
                    <li>Simple, static website</li>
                    <li>Essential pages: Home, About Us</li>
                    <li>Basic design and layout customization</li>
                    <li>Limited features and functionality</li>
                </ul>
                <button>Subscribe</button>
            </div>
        </div>

    </section>
@endsection
