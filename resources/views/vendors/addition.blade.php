@extends('layouts.vendorSide')

@section('content')

    <div class="container add_product_vendor">
        <h2 class="text-center add_product_vendor_heading">Add Product</h2>
        <div class="row">
            <div class="col-lg-4">
                <img src="images/vendorImage/addItemProductImage/addProduct.png" alt="" style="width:300px;height:400px;">
            </div>
            <div class="col-lg-8">
                <form action="{{route('add_Item')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label> Description  Product :</label>
                        <textarea name="description" class="form-control border-input @error('description') is-invalid @enderror"></textarea>
                    </div>
                    @error('description')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror

                    <div class="form-group">
                        <label>Name product :</label>
                        <input type="text" name="name"  value="{{old('name')}}" class="form-control border-input @error('name') is-invalid @enderror"/>
                    </div>
                    @error('name')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <div class="form-group">
                        <label>Price product:</label>
                        <input type="text" name="price" value="{{old('price')}}" class="form-control border-input @error('price') is-invalid @enderror"/>
                    </div>
                    @error('price')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <div class="form-group">
                        <label>Quantity of the product:</label>
                        <input type="text" name="count" value="{{old('count')}}" class="form-control border-input @error('count') is-invalid @enderror"/>
                    </div>
                    @error('count')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <div class="form-group">
                        <label> Image Product : </label>
                        <input type="file" name="image" value="{{old('image')}}" class="form-control border-input @error('image') is-invalid @enderror"/>
                    </div>
                    @error('image')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror

                    <input type="submit" value="Add Product" class="btn btn-danger mt-3 mb-1 mb-5"/>
                </form>
            </div>
        </div>
    </div>




@endsection
