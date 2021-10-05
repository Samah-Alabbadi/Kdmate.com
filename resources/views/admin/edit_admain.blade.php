@extends('layouts.adminSide')

@section('content')
    <section class="contact-me  text-center">
        <div class="filed">
            <div class="container">
                <i class="fas fa-user-edit fa-5x"></i>
                <h1 class="mb-5">Edit Admain</h1>
                <form role="form" action="{{route('update_admain',$admain->id)}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" name="name" placeholder="Name" value="{{$admain->name}}">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg"  name="email"  placeholder="Email" value="{{$admain->email}}">
                            </div>
                        </div>
                        <div class="col-lg-6 offset-lg-3">
                        <input type="submit" class="btn btn-danger btn-block" value="Edit Admain">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
