@extends('layouts.adminSide')

@section('content')
    <section class="contact-me  text-center">
        <div class="filed">
            <div class="container">
                <i class="fas fa-user-plus fa-5x"></i>
                <h1 class="mb-5">Add Admain</h1>
                <form role="form" action="{{route('insert_admain')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" name="name" placeholder="Name">
                            </div>
                            @error('name')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror

                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg"  name="email"  placeholder="Email">
                            </div>
                            @error('email')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="password" class="form-control form-control-lg" name="password" placeholder="Password">
                            </div>
                            @error('password')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                            <div class="form-group">
                                <input type="file" class="form-control form-control-lg" name="image" placeholder="your photo">
                            </div>
                            @error('image')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                            <input type="submit" class="btn btn-danger btn-block justify-content-center" value="Add Admain">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
