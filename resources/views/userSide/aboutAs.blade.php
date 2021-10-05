@extends('layouts.app')

@section('title','About us')

@section('content')

    <!-- about-us-page-start -->

    <div class="bg-light about-as">
        <div class="container py-5">
            <div class="row h-100 align-items-center py-5 border rounded bg-white shadow-sm">
                <div class="col-lg-6">
                    <h1 class="text-dark-blue  display-4"style="font-size:57px;font-weight:400">About us</h1>
                    <p class="m-2 about-us-paragraph">We are the "Khdmate" team because we know how difficult it is to shop in many websites. We offer you this store that brings together various sellers and those who have a service and volunteers on one side and buyers who are looking for services and volunteer work from another side (individuals and groups) in One place, to facilitate the process of publishing what you have and finding it from the person looking for it in an easy way.</p>
                    <p class="text-muted mb-5">If you have any question
                    <a href="{{route('contact')}}" class="text_pink link-about">
                            Contact us
                    .</a>
                    </p>
                </div>
                <div class="col-lg-6  "><img src="images/userSideImage/about as img/about_as.jpg" alt="" class="img-fluid rounded"></div>
            </div>
        </div>
    </div>

    <div class="bg-white py-5 border">
        <div class="container py-5">
            <div class="row align-items-center mb-5">
                <div class="col-lg-6 order-2 order-lg-1"><i class="far fa-handshake fa-2x mb-3 "></i>
                    <h2 class="about-as-heading">Give & Take</h2>
                    <p class="font-italic about-as-p mb-4">This section is for items that are either exchanged for exchange or sold for money or service.This is the main type preferred by most of the site visitors, which contains the largest number of exhibits.</p>
                    <a href="{{route('items')}}" class="btn btn-light px-5 rounded-pill shadow-sm text-capitalize bg_pink " style="color:#fff">shop now</a>
                </div>
                <div class=" col-lg-5 px-5 mx-auto order-1 order-lg-2"><img src="images/userSideImage/about as img/give_and_take.jpg" alt="" class="img-fluid mb-4 mb-lg-0 rounded"></div>
            </div>
            <div class="row align-items-center pt-5">
                <div class="col-lg-5 px-5 mx-auto"><img src="https://www.retailmenot.com/blog/wp-content/uploads/sites/2/2020/04/Virtual-Online-Volunteering-765x453.jpg" alt="" class="img-fluid mb-4 mb-lg-0 rounded"></div>
                <div class="col-lg-6"><i class="fa fa-leaf fa-2x mb-3"></i>
                    <h2 class="about-as-heading">I'm a volunteer</h2>

                    <p class="font-italic about-as-p mb-4">
                         Here we include all the things people bring to you at no charge.
                        This section will help many people to get help from the volunteers who offer their services here.
                        </p>
                    <a href="{{route('items')}}" class="btn btn-light px-5 rounded-pill shadow-sm text-capitalize bg_pink" style="color:#fff">shop now</a>
                </div>
            </div>
        </div>
    </div>


    <!-- team start -->
    <div class="bg-light py-3 our-team">
        <div class="container py-5">
            <div class="row mb-4">
                <div class="col-lg-5">
                    <h2 class="display-4 ">Our team</h2>
                    <p class="font-italic ">this team consist of three software engineering from BAU :</p>
                </div>
            </div>

            <div class="team row text-center justify-content-center bg-white">
                <!-- Team item-->
                <div class="col-xl-3 col-sm-6 mb-4 ">
                    <div class="member bg-dark-blue my-5 mx-3 px-0 pb-5"><img src="https://images.pexels.com/photos/1036623/pexels-photo-1036623.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"  alt="" width="100%" class="img-fluid mb-3 bg-white ">
                        <h5 class="mb-0 text-white">Samah Alsa'aideh</h5><span class="small text-light">From Salt</span>
                        <ul class="social mb-0 list-inline mt-3">
                            <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-facebook-f text_pink"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-twitter text_pink"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-instagram text_pink"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- End-->
                <!-- Team item-->
                <div class="col-xl-3 col-sm-6 mb-4" >
                    <div class="member bg-dark-blue my-5 mx-3 px-0 pb-5 shadow rounded-bottom">
                    <img src="https://images.pexels.com/photos/2613260/pexels-photo-2613260.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="" width="100%" height="100%"" class="img-fluid mb-3 bg-white ">
                        <h5 class="mb-0 text-white">Raghad Abu Wardeh</h5><span class="small text-light">From Amman</span>
                        <ul class="social mb-0 list-inline mt-3">
                            <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-facebook-f text_pink"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-twitter text_pink"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-instagram text_pink"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- End-->
                <!-- Team item-->
                <div class="col-xl-3 col-sm-6 mb-4 ">
                    <div class="member bg-dark-blue my-5 mx-3 px-0 pb-5 shadow rounded-bottom"><img src="{{asset('images/userSideImage/about as img/abdallah.jpg')}}" alt="" width="100%" class="img-fluid mb-3 bg-white ">
                        <h5 class="mb-0 text-white">Abdullah Abu Karaki</h5><span class="small text-light">From Ma'an</span>
                        <ul class="social mb-0 list-inline mt-3">
                            <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-facebook-f text_pink"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-twitter text_pink"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-instagram text_pink"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- End-->


            </div>
        </div>
    </div>
    <!-- team end -->
    <!-- about-us-page-end -->

@endsection
