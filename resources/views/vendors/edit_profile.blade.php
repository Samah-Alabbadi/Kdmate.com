@extends('layouts.vendorSide')

@section('content')

    <div class="container  create_profile">
        <h2 class="mt-3 mb-3 title_page text-center">Edit Profile</h2>
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">
                <form action="{{route('update_profile',$profile->profile->id)}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Project Description :</label>
                        <textarea name="description" class="form-control border-input @error('description') is-invalid @enderror">{{$profile->profile->description}}</textarea>
                    </div>
                    @error('description')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <div class="form-group">
                        <label>Location :</label>
                        <input type="text" name="location"  value="{{$profile->profile->location}}" class="form-control border-input @error('location') is-invalid @enderror"/>
                    </div>
                    @error('location')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <div class="form-group">
                        <label>Phone Number :</label>
                        <input type="text" name="number" value="{{$profile->profile->number}}" class="form-control border-input @error('number') is-invalid @enderror"/>
                    </div>
                    @error('number')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <input type="submit" value="Save" class="btn btn-danger mt-3 mb-5"/>
                </form>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
                <img src="{{asset('images/vendorImage/profileImage/editProfile.png')}}" alt="image1" style="width:330px; height:400px;">
            </div>
        </div>
    </div>

@endsection
