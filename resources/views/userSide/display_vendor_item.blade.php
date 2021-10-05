@extends('layouts.app')
@section('title','Vendor Items')
@section('content')

    <h1 class="text-center mb-4 manage_items_heading mt-2">Items {{$user->name}}</h1>

    <div class="container" style="margin-bottom:53px">
         @if($items->count() == 0)
            <p class="alert-no-item-added  mb-5" style="margin-top:70px">no items added</p>
         @endif
          <div class="row">
         @foreach($items as $item)
          <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 mt-5 ">
             <div class="card">
               <img height="250px" src="{{asset('images/vendorImage/addItemProductImage/'.$item->image)}}" class="card-img-top" alt="...">
               <div class="card-body">
                    <p style="color:#012D5C;"><i class="fas fa-signature mr-2"></i>{{$item->name}}</p>
                    <p style="color:#a0a6af;"><i class="fas fa-hand-holding-usd mr-2"></i>{{$item->price}} JD</p>
               </div>
             </div>
          </div>
       @endforeach
       </div>
    </div>

@endsection



