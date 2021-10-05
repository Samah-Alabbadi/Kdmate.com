@extends('layouts.app')
@section('title' , 'Contact')
@section('content')

    <section class="formcontact mb-5">
        <div class="container">
            <div class="row">

                <div class="col-lg-6">
                    <div class="item">
                        <span>Do not hesitate to <br>contact us</span><br><p>if you face any problem or If you are looking<br> for additional information .</p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <form action="{{route('send')}}" method="POST" class="contact-form">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 form-group">
                                <input type="text" class="form-control-bg" name="name" id="c-name" autocomplete="off" placeholder="Your Name">
                            </div>
                        </div>

                    @error('name')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror


                        <div class="row">
                            <div class="col-lg-12 form-group">
                                <input type="email" class="form-control-bg" name="email" id="c-email" autocomplete="off" placeholder="Your Email">
                            </div>
                        </div>

                    @error('email')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror

                        <div class="row">
                            <div class="col-lg-12 form-group">
                                <input type="tel"  class="form-control-bg" name="phone" id="c-phone" autocomplete="off" placeholder="Your Phone">
                            </div>
                        </div>

                    @error('phone')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror

                        <div class="row">
                            <div class="col-lg-12 form-group">
                                <textarea id="c.message" class="form-control-bg" name="message" autocomplete="off" placeholder="Write something.." style="height:200px"></textarea>
                            </div>
                        </div>

                    @error('message')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror

                        <div class="row">
                            <div class="col-lg-12">
                                <input type="submit" value="Submit">
                            </div>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </section>
@endsection
