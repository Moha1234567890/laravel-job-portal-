@extends('layouts.admin')


@section('content')

    <div class="container">

        <div class="card card-default">
            @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('success') }}
                </div>
            @endif


            @if(Session::has('error'))
                <div class="alert alert-danger">
                    {{Session::get('error')}}
                </div>
            @endif

            <div class="card-header">

                Create New Admins

            </div>
            <div class="card-body">
                <form action="{{route('store.admins')}}" method="POST">
                    {{ csrf_field() }}


                    <div class="form-group">
                        <label for="exampleInputEmail1">Email: </label>
                        <input type="text" class="form-control form-control-lg" name="email" aria-describedby="emailHelp" placeholder="enter email">
                        @error('email')
                        <span class="text-danger">{{$message}} </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name: </label>
                        <input type="text" class="form-control form-control-lg" name="name" aria-describedby="emailHelp" placeholder="enter name">
                        @error('name')
                        <span class="text-danger">{{$message}} </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Password: </label>
                        <input type="password" class="form-control form-control-lg" name="password" aria-describedby="emailHelp" placeholder="enter password">
                        @error('password')
                        <span class="text-danger">{{$message}} </span>
                        @enderror
                    </div>











                    <div class="form-group">
                        <button class="btn btn-success" id="save_job" type="submit">Add</button>
                    </div>
                </form>
            </div>

        </div>

    </div>

@endsection