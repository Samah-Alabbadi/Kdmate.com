@extends('layouts.app')
@section('title','Items')
@section('content')

<div class="container">
    <div class="row">
    @foreach($items as $item)
        <div class="col-lg-3 col-sm-6 col-md-4 col-12 mb-4 parent-card">
             <div class="card" style="height:350px">
                <img src="{{asset('images/vendorImage/addItemProductImage/'.$item->image)}}" height="200px" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><i class="fas fa-signature"></i>{{$item->name}}</h5>
                  <p class="card-description"><i class="fas fa-hand-holding-usd mr-2"></i>{{$item->price}} JD</p>
                   <a href="{{route('display_item',$item->id)}}" class="btn btn-primary item_show_more">show more..</a>
                </div>
             </div>
        </div>
    @endforeach
    </div>
    <div class="mb-5 mt-5">
        {{ $items->links() }}
    </div>
</div>
@endsection
