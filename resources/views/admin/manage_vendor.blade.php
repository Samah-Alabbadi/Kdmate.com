@extends('layouts.adminSide')

@section('content')

    <h1 class="text-center mb-2 manage_vendor_heading">Manage vendors</h1>
    <div class="container">
        <div class="row">
@foreach($vendors as $v)
    @if($v->profile)
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-3">
                <div class="vendor-box-data">
                    <div class="left-side-vendor-box">
                      <img src="{{asset('images/vendorImage/profileUserImage/'.$v->profile->image)}}" width="100%" height="100%" alt="image_vendor">
                    </div>
                    <div class="right-side-vendor-box">
                        <h5><i class="fas fa-user"></i> {{$v->name}}</h5>
                         <span class="span_manage_vendor"><i class="fas fa-paper-plane"></i> {{$v->email}}</span>
                        <span class="span_manage_vendor"><i class="fas fa-phone"></i> {{$v->profile->number}}</span>
                        <span class="span_manage_vendor"><i class="fas fa-map-marker-alt"></i> {{$v->profile->location}}</span>
                        <a href="{{route('delete_vendor',$v->id)}}"><i class="fas fa-trash-alt fa-2x"></i></a>
                    </div>
                </div>
            </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection
