@extends('layouts.master')

@section('content')
    <section class="vh-100 d-flex align-items-center" style="background: url('/assets/images/contact-detail.jpg') center center;">
        <div class="bg-overlay bg-overlay-white"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 offset-lg-6 col-md-7 offset-md-5">
                    <div class="title-heading mt-5 pt-4">
                        <h1 class="heading">Let's talk about your portfolio</h1>
                        <p class="text-dark">We’re here to help you every step of the way — from booking your Hajj or Umrah, finding the best flight deals, sending money securely, or managing your cargo shipments.<br/>
                        Reach out to our team anytime for quick assistance, trusted advice, or personalized service.</p>
                        
                        <div class="d-flex contact-detail align-items-center mt-3">
                            <div class="icon">
                                <i data-feather="mail" class="fea icon-m-md text-dark me-3"></i>
                            </div>
                            <div class="flex-1 content">
                                <h5 class="title fw-bold mb-0">Email</h5>
                                <a href="mailto:contact@example.com" class="text-primary">info@goosafar.com</a>
                            </div>
                        </div>
                        
                        <div class="d-flex contact-detail align-items-center mt-3">
                            <div class="icon">
                                <i data-feather="phone" class="fea icon-m-md text-dark me-3"></i>
                            </div>
                            <div class="flex-1 content">
                                <h5 class="title fw-bold mb-0">Phone</h5>
                                <a href="tel:+152534-468-854" class="text-primary">+88-01670-225611</a>
                            </div>
                        </div>
                        
                        <div class="d-flex contact-detail align-items-center mt-3">
                            <div class="icon">
                                <i data-feather="map-pin" class="fea icon-m-md text-dark me-3"></i>
                            </div>
                            <div class="flex-1 content">
                                <h5 class="title fw-bold mb-0">Location</h5>
                                <a href="" data-type="iframe" class="video-play-icon text-primary lightbox">View on Google map</a>
                            </div>
                        </div>
                        <ul class="list-unstyled social-icon mb-0 mt-4">
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection