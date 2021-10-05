@extends('layouts.app')
@section('title','Display Item')
@section('content')

<div class="container">
    <div class="row bg-light rounded shadow-sm justify-content-center">
        <div class="col-lg-4 col-md-4 mt-3 mb-3">
         <img src="{{asset('images/vendorImage/addItemProductImage/'.$item->image)}}"
               class=" rounded-left img-thumbnail"
               style="height: 300px; width:300px">
        </div>
        <div class="col-lg-7 col-md-8" style="padding:40px;">
        <h2 class="row text-capitalize mb-2 text-dark-blue" id="">{{$item->name}}</h2>
           <div class="d-flex justify-content-between mr-5">
           <div  id="" class="lead font-weight-normal text-dark-blue mb-1">
             <span class="font-weight-bolder">{{$item->price}} JD</span>
           </div>
             <ul class=" list-inline mb-0 mt-2">
               <li class="list-inline-item mr-0"><i class="fa fa-star text_pink"></i></li>
               <li class="list-inline-item mr-0"><i class="fa fa-star text_pink"></i></li>
               <li class="list-inline-item mr-0"><i class="fa fa-star text_pink"></i></li>
               <li class="list-inline-item mr-0"><i class="fa fa-star text_pink"></i></li>
               <li class="list-inline-item mr-0"><i class="fa fa-star text-muted"></i></li>
             </ul>
           </div>
           <hr>
           Product Describtion :
           <p id="" class="mt-3 text-dark">
               {{$item->description}}
           </p>
        </div>
    </div>
</div>


<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-4">
            <img src="{{asset('images/vendorImage/profileUserImage/'.$user->profile->image)}}"
             class="img-thumbnail bg-light" alt="product" style="height:300px; width:300px">
        </div>
        <div class="col-lg-7 col-md-8" id="vendor-info-section" >
         <h3 class="text-capitalize text-center text-dark-blue " id="">{{$user->name}}</h3>
                    <ul class=" list-inline mb-3 mt-2 text-center">
                        <li class="list-inline-item mr-0"><i class="fa fa-star text_pink"></i></li>
                        <li class="list-inline-item mr-0"><i class="fa fa-star text_pink"></i></li>
                        <li class="list-inline-item mr-0"><i class="fa fa-star text_pink"></i></li>
                        <li class="list-inline-item mr-0"><i class="fa fa-star text_pink"></i></li>
                        <li class="list-inline-item mr-0"><i class="fa fa-star text_pink"></i></li>
                    </ul>
            <div class="row pl-4 ">
                <div class="col-sm-3 p-2">
                  <h6 class="mb-1"><i class="far fa-envelope"></i> Email: </h6>
                </div>
                <div id="" class="col-sm-8 text-secondary p-2 border-bottom">
                  {{$user->email}}
                </div>
              </div>
              <div class="row pl-4">
                <div class="col-sm-3 p-2">
                  <h6 class="mb-1"><i class="fas fa-mobile-alt"></i> Mobile: </h6>
                </div>
                <div id="" class="col-sm-8 text-secondary p-2 border-bottom">
                  {{$user->profile->number}}
                </div>
              </div>
              <div class="row pl-4">
                <div class="col-sm-3 p-2">
                  <h6 class="mb-1"><i class="fas fa-map-marker-alt"></i> Address: </h6>
                </div>
                <div id="" class="col-sm-8 text-secondary  p-2 border-bottom">
                  {{$user->profile->location}}
                </div>
              </div>
              <div class="row pl-4">
                <div class="col-sm-3 p-2">
                  <h6 class="mb-1">Describtion: </h6>
                </div>
                <div id="" class="col-sm-8 text-secondary p-2">
                  {{$user->profile->description}}
                </div>
              </div>
        </div>
      </div>
        </div>
    </div>
</div>

@endsection

