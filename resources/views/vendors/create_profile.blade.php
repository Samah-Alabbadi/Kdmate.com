
@extends('layouts.vendorSide')

@section('content')



    <div class="container  create_profile">
        <h2 class="mt-3 mb-3 title_page text-center">Create Profile</h2>
        <div class="row">
            <div class="col-lg-7">
                <form action="/create_profile_vendor" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Project Description :</label>
                        <textarea name="description" class="form-control border-input @error('description') is-invalid @enderror"></textarea>
                    </div>
                    @error('description')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <div class="form-group">
                        <label>Location :</label>
                        <input type="text" name="location" class="form-control border-input @error('location') is-invalid @enderror"/>
                    </div>
                    @error('location')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <div class="form-group">
                        <label>Phone Number :</label>
                        <input type="text" name="number" class="form-control border-input @error('number') is-invalid @enderror"/>
                    </div>
                    @error('number')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <div class="form-group">
                        <label>Your Image : </label>
                        <input type="file" name="image" class="form-control border-input @error('image') is-invalid @enderror"/>
                    </div>
                    @error('image')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <input type="submit" value="Save" class="btn btn-danger mt-3 mb-5 "/>
                </form>
            </div>
            <div class="col-lg-5">
                <img src="{{asset('images/vendorImage/profileImage/createProfileImage.png')}}" alt="image1" style="width:400px; height:400px;">
            </div>
        </div>
    </div>

@endsection
