@extends('layouts.adminSide')

@section('content')

    <h1 class="text-center mb-4 manage_items_heading">Manage items</h1>
    <div class="container">
        <div class="row">
    <div class="col-lg-12">
            <table class="table table-dark text-center table-responsive-design">
                <thead>
                <tr>
                    <th scope="col">image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Show Items</th>
                </tr>
                </thead>
                <tbody>
                @foreach($items as $item)
                <tr class="row_data_vendor_and_item">
                   <td style="width:200px; height:175px;"><img src="{{asset('images/vendorImage/profileUserImage/'.$item->image)}}" width="150px" style="150px"/></td>
                    <td>{{$item->user->name}}</td>
                    <td>{{$item->user->email}}</td>
                    <td><a href="{{route('show_item_vendor',$item->user->id)}}" class="show-item"><i class="fas fa-eye"></i>show items</a></td>
                </tr>
                @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
@endsection
