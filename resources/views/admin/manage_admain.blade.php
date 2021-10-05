@extends('layouts.adminSide')

@section('content')

    <!--section stat-->
    <section class="manage_admain text-center table-responsive">
        <div class="data">
            <div class="container">
                <h1 class="mb-2">All Admain</h1>
                <div class="row">
                    <table class="table table-striped table-responsive-design ml-5 mr-5">
                        <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Delete</th>
                            <th scope="col">Update</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($admains as $admain )
                        <tr>
                            <td>{{$admain->name}}</td>
                            <td>{{$admain->email}}</td>
                            <td><a href="{{route('delete_admain',$admain->id)}}" class="btn btn-danger">Delete</a></td>
                            <td><a href="{{route('edit_admain',$admain->id)}}" class="btn btn-success">Update</a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <a href="{{route('add_admain')}}" class="btn btn-darkblue m-5 ">Add Admain</a>
                </div>
               <div class="pag"> {!! $admains->links() !!}</div>
            </div>
        </div>
    </section>
    <!--end stat-->
@endsection
