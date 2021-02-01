
@extends('layouts.admin')

@section('title')
    Create Categories
@endsection

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

        <div class="row">
            <div class="col-md-9">
                <div class="tile">
                    <h3 class="tile-title">Create Categories</h3>
                    <div class="tile-body">
                        <form method="POST" action="{{route('store.cats.admins')}}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="control-label">Name</label>
                                <input class="form-control" type="text" name="name" placeholder="Enter full name">
                                @error('name')
                                <span class="text-danger">{{$message}} </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label">Font</label>
                                <input class="form-control" type="text" name="font" placeholder="Enter font">
                                @error('font')
                                <span class="text-danger">{{$message}} </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label">Description</label>
                                <textarea class="form-control" rows="4" name="desc" placeholder="Enter description"></textarea>
                                @error('desc')
                                <span class="text-danger">{{$message}} </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Create</button>&nbsp;&nbsp;&nbsp;
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>

    </div>
    </div>
@endsection