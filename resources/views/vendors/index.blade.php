
@extends('layouts.vendorSide')

@section('content')


    <!--vendor-statistics-->
    <section class="statistics">
        <div class="container">
            <h4 class="statistics-head mb-3 text-center" style="color: #ffa600;">statistics</h4>

            <div class="row">
                <div class="offset-lg-1  col-lg-4 col-md-6 col-sm-6 col-xs-6">
                    <div class="statistics-card text-center">
                        <i class="fas fa-plus-square fa-4x"></i>
                        <h5>Added products</h5>
                        <h1>{{$number_item_add}}</h1>
                    </div>
                </div>

                <div class="offset-lg-2 col-lg-4 col-md-6 col-sm-6 col-xs-6">
                    <div class="statistics-card text-center">
                        <i class="fas fa-box-open fa-4x"></i>
                        <h5>out of stock</h5>
                        <h1>{{$number_item_out_of_stock}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--products-->

    <div class="container">
        @if($item->count() > 0)
        <h4 class="statistics-head mb-3 text-center" style="color: #ffa600;">Added products</h4>
        @endif
        <div class="row">
        @foreach($item as $i)
            <div class="col-lg-3 col-md-4 col-sm-6  col-xs-12  item">
                <div class="card main-card">
                    <img style="height: 254px;" src="{{asset('images/vendorImage/addItemProductImage/'.$i->image)}}" class="card-img-top" alt="#" />
                    <div class="card-body">
                        <h5 class="card-title pr-name">{{$i->name}}</h5>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star n-cheched"></span>
                        <span class="fa fa-star n-cheched"></span>


                                <p class="card-text car-text">
                                    {{$i->description}}
                                </p>


                        <span class="card-price">{{$i->price}} jd</span>
                        <br />
                        <button type="button" class="card-btn-update"><a href="{{route('edit_item',$i->id)}}">Update</a></button>
                        <a href="{{route('deleteItem',$i->id)}}" class="btn btn-danger card-btn-delete-item">Delete</a>
                    </div>
                </div>
            </div>


    @endforeach

    <div class="item-paginate">
      {!! $item->links() !!}
    </div>
@endsection
