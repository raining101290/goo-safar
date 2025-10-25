@extends('layouts.master')

@section('content')  
<section class="bg-half-170 bg-gradient-to-br from-purple-600 to-indigo-600 d-table w-100">
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="pages-heading">
                    <h4 class="title mb-0 text-white"> About us </h4>
                </div>
            </div>  
        </div>
        
        <div class="position-breadcrumb">
            <nav aria-label="breadcrumb" class="d-inline-block">
                <ul class="breadcrumb rounded shadow mb-0 px-4 py-2">
                    <li class="breadcrumb-item"><a href="index.html">Goo Safar</a></li>
                    <li class="breadcrumb-item"><a href="#">Page</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ul>
            </nav>
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
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-5 mt-4 pt-2 mt-sm-0 pt-sm-0">
                <div class="position-relative">
                    <img src="/assets/images/company/about.jpg" class="rounded img-fluid mx-auto d-block" alt="">
                    <div class="play-icon">
                        <a href="#!" data-type="youtube" data-id="yba7hPeTSjk" class="play-btn lightbox border-0">
                            <i class="mdi mdi-play text-primary rounded-circle shadow"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 col-md-7 mt-4 pt-2 mt-sm-0 pt-sm-0">
                <div class="section-title ms-lg-4">
                    <h4 class="title mb-4">Our Story</h4>
                    <p class="text-muted">Goo Safar was founded with a simple vision — to make every journey meaningful, easy, and trustworthy.
                    From spiritual pilgrimages to everyday travel, we believe that every trip deserves honesty, care, and comfort.</p>
                    <br/>
                    <p class="text-muted">What started as a small initiative to help pilgrims perform Hajj and Umrah with peace of mind has grown into a complete travel and service brand trusted by thousands. Today, we proudly assist our customers with air ticketing, secure money transfers, and fast cargo solutions — all under one roof.</p>
                    <br/>
                    <p class="text-muted">At Goo Safar, we go beyond just travel. We build trust, deliver value, and ensure that each journey — big or small — begins and ends with satisfaction.</p>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <section class="section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h4 class="title mb-4">Our Greatest Minds</h4>
                    <p class="text-muted para-desc mx-auto mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6 mt-4 pt-2">
                <div class="card team team-primary text-center bg-transparent border-0">
                    <div class="card-body p-0">
                        <div class="position-relative">
                            <img src="/assets/images/client/01.jpg" class="img-fluid avatar avatar-ex-large rounded-circle" alt="">
                            <ul class="list-unstyled mb-0 team-icon">
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="facebook" class="icons"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="instagram" class="icons"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="twitter" class="icons"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="linkedin" class="icons"></i></a></li>
                            </ul>
                        </div>
                        <div class="content pt-3 pb-3">
                            <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Ronny Jofra</a></h5>
                            <small class="designation text-muted">C.E.O</small>
                        </div>                                
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-4 pt-2">
                <div class="card team team-primary text-center bg-transparent border-0">
                    <div class="card-body p-0">
                        <div class="position-relative">
                            <img src="/assets/images/client/04.jpg" class="img-fluid avatar avatar-ex-large rounded-circle" alt="">
                            <ul class="list-unstyled mb-0 team-icon">
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="facebook" class="icons"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="instagram" class="icons"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="twitter" class="icons"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="linkedin" class="icons"></i></a></li>
                            </ul>
                        </div>
                        <div class="content pt-3 pb-3">
                            <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Micheal Carlo</a></h5>
                            <small class="designation text-muted">Director</small>
                        </div>                                
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mt-4 pt-2">
                <div class="card team team-primary text-center bg-transparent border-0">
                    <div class="card-body p-0">
                        <div class="position-relative">
                            <img src="/assets/images/client/02.jpg" class="img-fluid avatar avatar-ex-large rounded-circle" alt="">
                            <ul class="list-unstyled mb-0 team-icon">
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="facebook" class="icons"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="instagram" class="icons"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="twitter" class="icons"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="linkedin" class="icons"></i></a></li>
                            </ul>
                        </div>
                        <div class="content pt-3 pb-3">
                            <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Aliana Rosy</a></h5>
                            <small class="designation text-muted">Manager</small>
                        </div>                                
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mt-4 pt-2">
                <div class="card team team-primary text-center bg-transparent border-0">
                    <div class="card-body p-0">
                        <div class="position-relative">
                            <img src="/assets/images/client/03.jpg" class="img-fluid avatar avatar-ex-large rounded-circle" alt="">
                            <ul class="list-unstyled mb-0 team-icon">
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="facebook" class="icons"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="instagram" class="icons"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="twitter" class="icons"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="linkedin" class="icons"></i></a></li>
                            </ul>
                        </div>
                        <div class="content pt-3 pb-3">
                            <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">Sofia Razaq</a></h5>
                            <small class="designation text-muted">Developer</small>
                        </div>                                
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
@endsection