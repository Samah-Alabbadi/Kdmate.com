@extends('layouts.app')
@section('title','Vendors')
@section('content')

    <h1 class="text-center mb-2 manage_vendor_heading">Vendors</h1>
    <div class="container" style="margin-bottom:100px">
        <div class="row">
    @if($vendors->count() > 0)
         @foreach($vendors as $v)
            @if($v->profile)
                    <div class="col-lg-6 mt-3 mb-2">
                        <div class="vendor-box-data">
                            <div class="left-side-vendor-box">
                                <img src="{{asset('images/vendorImage/profileUserImage/'.$v->profile->image)}}" width="100%" height="100%" alt="image_vendor">
                            </div>
                            <div class="right-side-vendor-box">
                            <i class="fas fa-user"></i>
                                <h5>{{$v->name}}</h5>
                                <i class="fas fa-paper-plane"></i>
                                 <span class="span_manage_vendor">{{$v->email}}</span>
                                 <i class="fas fa-phone"></i>
                                <span class="span_manage_vendor">{{$v->profile->number}}</span>
                                <i class="fas fa-map-marker-alt"></i>
                                <span class="span_manage_vendor"> {{$v->profile->location}}</span>
                                <a href="{{route('display_Item_vendor',$v->id)}}">Vendor items</a>
                            </div>
                        </div>
                    </div>
                        @endif
                    @endforeach
                </div>
            </div>
    @else
    <div class="alert alert-success">No found any vendor</div>
    @endif

@endsection
