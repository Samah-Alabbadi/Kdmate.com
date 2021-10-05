@extends('layouts.vendorSide')

@section('content')

    <div class="overlay">
        <div class="content">
            <span class="close_alert_delete_profile close">+</span>
            <div class="inner-data">
                <i class="fas fa-question-circle fa-5x question_delete_icon"></i>
                <h4 class="mt-3 mb-3">you want delete acount ? </h4>
                <a href="{{route('delete_profile',$info_profile->profile->id)}}" id="delete_profile_vendor" class="btn  bg_pink  m-2">Delete Profile  <i class="fas fa-trash-alt"></i></a>
            </div>
        </div>
    </div>

    <!--vendor profile-->
    <div class="container-fluid p-3 bg-light border-top ">
        <div class=" row justify-content-end">
            <button class="btn btn-danger btn-md delete delete_profile">Delete</button>
            <a href="{{route('edit_profile',$info_profile->profile->id)}}" class="btn btn-primary text-white m-2 border-white edit">Edit Profile</a>
        </div>
    </div>
    <div class="container-fluid mb-5 ">
        <div class="main-body my-4">
            <div class="row p-3 border-right border-bottom">
                <!-- vendor card-->
                <div class="col-md-4 pr-5">
                    <div class="card bg-light">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="{{asset('images/vendorImage/profileUserImage/'.$info_profile->profile->image)}}" alt="Admin" class="rounded-lg" width="200" height="270">
                                <div class="mt-3">
                                    <!--https://qatar.library.georgetown.edu/sites/default/files/tatiana-usova.jpg-->
                                   <!-- -->
                                    <h4 class="text-capitalize text-dark-blue">{{$info_profile->name}}</h4>
                                    <p class="text-secondary mb-1 text-capitalize mt-3">indivedual</p>
                                    <div class="rating text-warning"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star-half-alt"></i> <i class="far fa-star"></i></div>
                                    <p class="text-muted font-size-sm p-2 border-right border-left mt-3">Bio</p>
                                </div>
                            </div>
                        </div>

                        <!-- favorite product -->
                        <div class="card border-0 pt-3 px-2 bg-light">
                            <h5 class="text-capitalize text-center">feedback from client </h5>
                            <div class="card-body" >
                                <img class="card-img" src="https://florafoods.in/wp-content/uploads/2019/12/florafood.jpeg" alt="project picture"/>
                            </div>
                        </div>
                        <!-- /.favorite product -->
                    </div>
                </div>
                <!-- /.vendor card -->

                <!--vendor-information-->
                <div class="vendor-information col-md-8 p-1 bg-white rounded-lg">

                    <!--project info-->
                    <div class="row my-3">
                        <div class="card p-4">
                            <h3 class="text-capitalize text-dark-blue mb-3">My project</h3>
                            <p class="">
                                {{$info_profile->profile->description}}
                            </p>

                            <div class="my-2">
                                <img class="col-3 p-1 h-100" src="{{asset('images/vendorImage/profileImage/profileShow1.jpg')}}" alt="project-pic" style="border-radius:8px">
                                <img class="col-3 p-1 h-100" src="{{asset('images/vendorImage/profileImage/profileShow2.jpg')}}" alt="project-pic" style="border-radius:8px">
                                <img class="col-3 p-1 h-100" src="{{asset('images/vendorImage/profileImage/profileShow3.jpg')}}" alt="project-pic" style="border-radius:8px">
                            </div>
                        </div>
                    </div>
                    <!-- /.project info-->


                    <div class="card ">
                        <h5 class="text-capitalize">vendor information :</h5>
                        <div class="card-body">
                            <div class="row pl-4">
                                <div class="col-sm-3 p-2 ">
                                    <h6 class="mb-1">Full Name</h6>
                                </div>
                                <div class="col-sm-8 text-secondary bg-light p-2 rounded">
                                   {{$info_profile->name}}
                                </div>
                            </div>
                            <hr>
                            <div class="row pl-4">
                                <div class="col-sm-3 p-2">
                                    <h6 class="mb-1"><i class="far fa-envelope"></i> Email</h6>
                                </div>
                                <div class="col-sm-8 text-secondary bg-light p-2 rounded">
                                    {{$info_profile->email}}
                                </div>
                            </div>
                            <hr>

                            <div class="row pl-4">
                                <div class="col-sm-3 p-2">
                                    <h6 class="mb-1"><i class="fas fa-mobile-alt"></i> Mobile</h6>
                                </div>
                                <div class="col-sm-8 text-secondary bg-light p-2 rounded">
                                    {{$info_profile->profile->number}}
                                </div>
                            </div>
                            <hr>
                            <div class="row pl-4">
                                <div class="col-sm-3 p-2">
                                    <h6 class="mb-1"><i class="fas fa-map-marker-alt"></i> Address</h6>
                                </div>
                                <div class="col-sm-8 text-secondary bg-light p-2 rounded">
                                    {{$info_profile->profile->location}}
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <!--/. vendor-information-->

                    <div class="row">
                        <!--vendor statistics-->
                        <div class="col-sm-10 ">
                            <div class="card mb-5">
                                <h5 class="text-capitalize">statistics :</h5>
                                <div class="card-body pl-4">
                                    <div class="vendor-statistics row">
                                        <div class="col-5 p-2 mb-1 shadow-sm border rounded-lg"><i class="fas fa-clipboard-check text-larg-fontawesome col-2 vendor-statistic-i"></i> <h6 class="col-10 d-inline-block m-3">#-selled</h6></div>
                                        <div class="col-5 ml-3 mb-1 p-2 ml-sm-3 shadow-sm border rounded-lg"><i class="fas fa-star text-warning text-larg-fontawesome col-2 vendor-statistic-i"></i> <h6 class="col-10 d-inline-block m-3">#-rates</h6></div>
                                        <div class="col-5 p-2 shadow-sm border rounded-lg"><i class="fas fa-calendar-day text-larg-fontawesome col-2 vendor-statistic-i"></i> <h6 class="col-10 d-inline-block m-3">#-days</h6></div>
                                        <div class="col-5 ml-3 p-2 ml-sm-3 shadow-sm border rounded-lg"><i class="fas fa-clone text-larg-fontawesome col-2 vendor-statistic-i"></i> <h6 class="col-10 d-inline-block m-3">#-posts</h6></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/. vendor statistics-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--/.vendor profile-->

@endsection


