@extends('layouts.master')

@section('content')
    <section class="bg-half-170 d-table w-100 relative">
        <video id="bg-video" autoplay muted loop playsinline>
            <source id="video-source" src="" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        {{-- <div class="bg-overlay"></div> --}}
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-6">
                    <div class="title-heading mt-4">
                        <h1 class="display-4 fw-bold text-white title-dark text-shadow mb-3">
                        Welcome to <span class="text-green-300">Goo Safar</span> 
                        </h1>
                        <p class="para-desc text-white text-shadow">Discover amazing destinations with Goo Safar. Enjoy cheap flights and create memories that last forever.</p>
                        <h3 class="display-6 fw-bold text-shadow title-dark text-green-300 mt-4"><i data-feather="phone" class="fea icon-lg"> </i> +880-1670 22 56 11</h3>
                    </div>
                </div>
            </div>
        </div> 
    </section>
    <div class="position-relative">
        <div class="shape overflow-hidden text-color-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>

    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">Benefits for Traveller</h4>
                        <p class="text-muted para-desc mb-0 mx-auto">At Goo Safar, we make your journey easier, safer, and more meaningful. Whether you’re performing Hajj or Umrah, booking a flight, sending money home, or shipping goods abroad — we’re here to serve you with trust and care.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-4 mt-4 pt-2">
                    <div class="card features feature-primary feature-full-bg rounded p-4 bg-light text-center position-relative overflow-hidden border-0">
                        <span class="h1 icon-color">
                            <i class="uil uil-shield-check"></i>
                        </span>
                        <div class="card-body p-0 content">
                            <h3>Hajj & Umrah</h3>
                            <p class="para text-muted mb-0">From visa processing to flight booking and accommodation, we handle every step with honesty and professionalism — so you can focus on your spiritual journey.</p>
                        </div>
                        <span class="big-icon text-center">
                            <i class="uil uil-shield-check"></i>
                        </span>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-4 mt-4 pt-2">
                    <div class="card features feature-primary feature-full-bg rounded p-4 bg-light text-center position-relative overflow-hidden border-0">
                        <span class="h1 icon-color">
                            <i class="uil uil-thumbs-up"></i>
                        </span>
                        <div class="card-body p-0 content">
                            <h3>Air Ticket</h3>
                            <p class="para text-muted mb-0">Get the best deals on international and domestic flights with instant confirmation and transparent pricing — no hidden fees.</p>
                        </div>
                        <span class="big-icon text-center">
                            <i class="uil uil-thumbs-up"></i>
                        </span>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-4 mt-4 pt-2">
                    <div class="card features feature-primary feature-full-bg rounded p-4 bg-light text-center position-relative overflow-hidden border-0">
                        <span class="h1 icon-color">
                            <i class="uil uil-keyboard-show"></i>
                        </span>
                        <div class="card-body p-0 content">
                            <h3>Money Transfer</h3>
                            <p class="para text-muted mb-0">Send money to your loved ones safely and quickly through our trusted global remittance partners.</p>
                        </div>
                        <span class="big-icon text-center">
                            <i class="uil uil-keyboard-show"></i>
                        </span>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-4 mt-4 pt-2">
                    <div class="card features feature-primary feature-full-bg rounded p-4 bg-light text-center position-relative overflow-hidden border-0">
                        <span class="h1 icon-color">
                            <i class="uil uil-award"></i>
                        </span>
                        <div class="card-body p-0 content">
                            <h3>Cargo Service</h3>
                            <p class="para text-muted mb-0">We ensure your goods reach their destination on time, every time — with affordable rates and dependable delivery tracking.</p>
                        </div>
                        <span class="big-icon text-center">
                            <i class="uil uil-award"></i>
                        </span>
                    </div>
                </div>

                {{-- <div class="col-lg-12 text-center col-md-4 mt-4 pt-2">
                    <a href="javascript:void(0)" class="btn btn-primary">See more <i data-feather="arrow-right" class="fea icon-sm inline-block"></i></a>
                </div> --}}
            </div>
        </div>

        <div class="container mt-28">
            <div class="row align-items-end mb-4 pb-2">
                <div class="col-md-12">
                    <div class="section-title text-center text-md-start">
                        <h6 class="text-primary">Find Out the Most</h6>
                        <h4 class="title mb-4">Popular Destination</h4>
                        <p class="text-muted mb-0">Discover the world with <span      class="text-primary">Goo Safar </span> — from the holy cities of <span class="text-primary">Makkah</span> and <span class="text-primary">Madinah</span> to top travel destinations across the globe. Whether you’re embarking on a <span class="text-primary">spiritual journey</span>, planning a <span class="text-primary">family visit</span>, or flying for <span class="text-primary">business</span>, we make your travel smooth and stress-free. Our expert team ensures you get the <span class="text-primary">best flight deals, comfortable itineraries</span> and <span class="text-primary">reliable service</span> — every time you travel.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 mt-4 pt-2">
                    <div class="tiny-six-item">
                        <div class="tiny-slide">
                            <div class="popular-tour rounded-md position-relative overflow-hidden mx-2">
                                <img src="assets/images/travel/dubai.jpg" class="img-fluid" alt="">
                                <div class="content">
                                    <a href="javascript:void(0)" class="title text-white h4 title-dark">Dubai</a>
                                </div>
                            </div><!--end tour post-->
                        </div>
                        
                        <div class="tiny-slide">
                            <div class="popular-tour rounded-md position-relative overflow-hidden mx-2">
                                <img src="assets/images/travel/thailand.jpg" class="img-fluid" alt="">
                                <div class="content">
                                    <a href="javascript:void(0)" class="title text-white h4 title-dark">Thailand</a>
                                </div>
                            </div><!--end tour post-->
                        </div>
                        
                        <div class="tiny-slide">
                            <div class="popular-tour rounded-md position-relative overflow-hidden mx-2">
                                <img src="assets/images/travel/india.jpg" class="img-fluid" alt="">
                                <div class="content">
                                    <a href="javascript:void(0)" class="title text-white h4 title-dark">India</a>
                                </div>
                            </div><!--end tour post-->
                        </div>
                        
                        <div class="tiny-slide">
                            <div class="popular-tour rounded-md position-relative overflow-hidden mx-2">
                                <img src="assets/images/travel/london.jpg" class="img-fluid" alt="">
                                <div class="content">
                                    <a href="javascript:void(0)" class="title text-white h4 title-dark">Londan</a>
                                </div>
                            </div><!--end tour post-->
                        </div>
                        
                        <div class="tiny-slide">
                            <div class="popular-tour rounded-md position-relative overflow-hidden mx-2">
                                <img src="assets/images/travel/paris.jpg" class="img-fluid" alt="">
                                <div class="content">
                                    <a href="javascript:void(0)" class="title text-white h4 title-dark">Paris</a>
                                </div>
                            </div><!--end tour post-->
                        </div>
                        
                        <div class="tiny-slide">
                            <div class="popular-tour rounded-md position-relative overflow-hidden mx-2">
                                <img src="assets/images/travel/singapore.jpg" class="img-fluid" alt="">
                                <div class="content">
                                    <a href="javascript:void(0)" class="title text-white h4 title-dark">Singapore</a>
                                </div>
                            </div><!--end tour post-->
                        </div>
                        
                        <div class="tiny-slide">
                            <div class="popular-tour rounded-md position-relative overflow-hidden mx-2">
                                <img src="assets/images/travel/dubai.jpg" class="img-fluid" alt="">
                                <div class="content">
                                    <a href="javascript:void(0)" class="title text-white h4 title-dark">Dubai</a>
                                </div>
                            </div><!--end tour post-->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 mt-4 pt-2">
                    <div class="tiny-six-item">
                        <div class="tiny-slide">
                            <div class="popular-tour rounded-md position-relative overflow-hidden mx-2">
                                <img src="assets/images/travel/usa.jpg" class="img-fluid" alt="">
                                <div class="content">
                                    <a href="javascript:void(0)" class="title text-white h4 title-dark text-shadow">USA</a>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="popular-tour rounded-md position-relative overflow-hidden mx-2">
                                <img src="assets/images/travel/canada.jpg" class="img-fluid" alt="">
                                <div class="content">
                                    <a href="javascript:void(0)" class="title text-white h4 title-dark text-shadow">Canada</a>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="popular-tour rounded-md position-relative overflow-hidden mx-2">
                                <img src="assets/images/travel/indonesia.jpg" class="img-fluid" alt="">
                                <div class="content">
                                    <a href="javascript:void(0)" class="title text-white h4 title-dark text-shadow">Indonesia</a>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="popular-tour rounded-md position-relative overflow-hidden mx-2">
                                <img src="assets/images/travel/italy.jpg" class="img-fluid" alt="">
                                <div class="content">
                                    <a href="javascript:void(0)" class="title text-white h4 title-dark text-shadow">Italy</a>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="popular-tour rounded-md position-relative overflow-hidden mx-2">
                                <img src="assets/images/travel/ksa.jpg" class="img-fluid" alt="">
                                <div class="content">
                                    <a href="javascript:void(0)" class="title text-white h4 title-dark text-shadow">Saudi Arabia</a>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="popular-tour rounded-md position-relative overflow-hidden mx-2">
                                <img src="assets/images/travel/maldives.jpg" class="img-fluid" alt="">
                                <div class="content">
                                    <a href="javascript:void(0)" class="title text-white h4 title-dark text-shadow">Maldives</a>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="popular-tour rounded-md position-relative overflow-hidden mx-2">
                                <img src="assets/images/travel/turkey.jpg" class="img-fluid" alt="">
                                <div class="content">
                                    <a href="javascript:void(0)" class="title text-white h4 title-dark text-shadow">Turkey</a>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="popular-tour rounded-md position-relative overflow-hidden mx-2">
                                <img src="assets/images/travel/japan.jpg" class="img-fluid" alt="">
                                <div class="content">
                                    <a href="javascript:void(0)" class="title text-white h4 title-dark text-shadow">Japan</a>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="popular-tour rounded-md position-relative overflow-hidden mx-2">
                                <img src="assets/images/travel/oman.jpg" class="img-fluid" alt="">
                                <div class="content">
                                    <a href="javascript:void(0)" class="title text-white h4 title-dark text-shadow">Oman</a>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="popular-tour rounded-md position-relative overflow-hidden mx-2">
                                <img src="assets/images/travel/nepal.jpg" class="img-fluid" alt="">
                                <div class="content">
                                    <a href="javascript:void(0)" class="title text-white h4 title-dark text-shadow">Nepal</a>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="popular-tour rounded-md position-relative overflow-hidden mx-2">
                                <img src="assets/images/travel/china.jpg" class="img-fluid" alt="">
                                <div class="content">
                                    <a href="javascript:void(0)" class="title text-white h4 title-dark text-shadow">China</a>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="popular-tour rounded-md position-relative overflow-hidden mx-2">
                                <img src="assets/images/travel/malaysia.jpg" class="img-fluid" alt="">
                                <div class="content">
                                    <a href="javascript:void(0)" class="title text-white h4 title-dark text-shadow">Malaysia</a>
                                </div>
                            </div>
                        </div>
                        <div class="tiny-slide">
                            <div class="popular-tour rounded-md position-relative overflow-hidden mx-2">
                                <img src="assets/images/travel/netherlands.jpg" class="img-fluid" alt="">
                                <div class="content">
                                    <a href="javascript:void(0)" class="title text-white h4 title-dark text-shadow">Netherlands</a>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="popular-tour rounded-md position-relative overflow-hidden mx-2">
                                <img src="assets/images/travel/sri-lanka.jpg" class="img-fluid" alt="">
                                <div class="content">
                                    <a href="javascript:void(0)" class="title text-white h4 title-dark text-shadow">Sri Lanka</a>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="popular-tour rounded-md position-relative overflow-hidden mx-2">
                                <img src="assets/images/travel/switzerland.jpg" class="img-fluid" alt="">
                                <div class="content">
                                    <a href="javascript:void(0)" class="title text-white h4 title-dark text-shadow">Switzerland</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title">
                        <h4 class="title fw-bold mb-4">Everyone Needs Travel. <br> Want to Break Free for a While</h4>
                        <p class="text-muted para-desc mb-0 mx-auto">At Goo Safar, we believe every journey has a purpose — some take you closer to the world, others bring you closer to your soul. Whether it’s a sacred pilgrimage to Makkah and Madinah, a short escape to recharge, or a flight to reunite with family, we’re here to make it easy, affordable, and worry-free.</p>
                        <p class="text-muted para-desc mb-0 mx-auto">Travel isn’t just about destinations — it’s about peace of mind, meaningful experiences, and trusted service. That’s why thousands of travellers choose Goo Safar for their Hajj & Umrah, air tickets, money transfers, and cargo needs.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-28">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6">
                    <div class="card blog blog-primary rounded border-0 shadow overflow-hidden">
                        <div class="position-relative">
                            <img id="randomImage" src="/assets/images/random/1.jpg" class="card-img-top" alt="Travel Image">
                            <div class="overlay rounded-top"></div>
                            <span class="random-number"></span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="section-title ms-lg-4">
                        <h4 class="title mb-4">Experience Luxury & <br> Find Your Base</h4>
                        <p class="text-muted">Travel with confidence and care through Goo Safar — your trusted partner for spiritual journeys, flight bookings, money transfers, and cargo services. We combine reliability, affordability, and personal attention to make every trip meaningful.</p>
                        <ul class="list-unstyled text-muted mt-4 mb-4">
                            <li class="mb-1"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span><b>Hajj & Umrah Packages</b> – Complete guidance, visa support, and comfortable accommodation for a peaceful pilgrimage.</li>
                            <li class="mb-1"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span><b>Air Ticketing</b> – Affordable flight deals with transparent pricing and instant confirmation to destinations worldwide.</li>
                            <li class="mb-1"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span><b>Money Transfer & Cargo</b> – Safe, fast, and reliable global remittance and delivery services you can count on.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container mt-28">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6 order-1 order-md-2">
                    <img src="assets/images/travel/3.jpg" class="img-fluid rounded shadow-md" alt="">
                </div>

                <div class="col-lg-7 col-md-6 order-2 order-md-1 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="section-title me-lg-5">
                        <h4 class="title mb-4">100% Money back <br> Guarantee if You Cancel</h4>
                        <p class="text-muted">At Goo Safar, your peace of mind comes first. We understand that travel plans can change — that’s why we offer a simple, transparent, and worry-free refund policy. Whether it’s your Umrah package, flight ticket, or cargo booking, you’ll get your money back quickly if you cancel within the allowed time.</p>
                    </div>

                    <div class="accordion mt-4 pt-2" id="accordionExample">
                        <div class="accordion-item rounded shadow">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button border-0 bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    How can I book my Hajj or Umrah package with Goo Safar?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse border-0 collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body text-muted">
                                    Booking your pilgrimage is simple. Just visit our office or contact us online, and our dedicated team will assist you with visa processing, flight tickets, accommodation, and ground transport in Saudi Arabia. We handle every detail so you can focus on your spiritual journey with peace of mind.
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item rounded shadow mt-2">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo">
                                    Can I book international and domestic flight tickets through Goo Safar?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse border-0 collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body text-muted">
                                    Yes. We offer affordable and reliable flight booking for both domestic and international destinations. Our team finds the best available fares and provides instant confirmation — no hidden charges, no delays.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item rounded shadow mt-2">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Is my money transfer safe with Goo Safar?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse border-0 collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body text-muted">
                                    Absolutely. We work with trusted and licensed international remittance partners to ensure your money is transferred safely, quickly, and transparently. You’ll receive instant confirmation and can always contact our team for transfer updates.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item rounded shadow mt-2">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Do you provide cargo services internationally?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse border-0 collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body text-muted">
                                    Yes, we offer fast and secure cargo services to major destinations worldwide. Whether it’s personal parcels or business shipments, we ensure your goods are delivered on time and in perfect condition — at competitive rates.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item rounded shadow mt-2">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    What documents do I need for Hajj or Umrah?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse border-0 collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body text-muted">
                                    You’ll need a valid passport, passport-size photos, national ID, and vaccination certificate. Our team will assist you step by step in completing all formalities required for visa and travel approval.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item rounded shadow mt-2">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Why should I choose Goo Safar?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse border-0 collapse" aria-labelledby="headingSix"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body text-muted">
                                    <p>Because we value trust, transparency, and care. With years of experience in travel, religious tours, money transfer, and cargo handling, we provide complete support — before, during, and after your journey.</p>
                                    <p class="text-success mt-2">Goo Safar — Your Journey, Our Responsibility.</p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const videoSource = document.getElementById('video-source');
            const currentHour = new Date().getHours();
            // Define your videos
            const morningVideo = "https://www.pexels.com/download/video/3094026/";
            const eveningVideo = "https://www.pexels.com/download/video/2169880/";
            const nightVideo = "https://www.pexels.com/download/video/3015510/";

            // Set video based on time
            if (currentHour >= 5 && currentHour < 12) {
                videoSource.src = morningVideo; // Morning: 5am - 12pm
            } else if (currentHour >= 12 && currentHour < 18) {
                videoSource.src = eveningVideo; // Afternoon/Evening: 12pm - 6pm
            } else {
                videoSource.src = nightVideo; // Night: 6pm - 5am
            }

            // Reload video element
            document.getElementById('bg-video').load();


            const randomNum = Math.floor(Math.random() * 6) + 1;
            // Select the image element
            const imgElement = document.getElementById('randomImage');
            // Update the image source dynamically
            imgElement.src = `/assets/images/random/${randomNum}.jpg`;
        });
    </script>
@endsection
        
