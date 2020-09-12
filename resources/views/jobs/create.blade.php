@extends('layouts.site')


@section('content')

    <div class="container">
        <div class="card card-default" style="margin-top:205px">
            <div class="card-header">
                Post a job

            </div>
            <div class="card-body">
                <form action="{{route('store.job')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email: </label>
                        <input type="text" class="form-control form-control-lg" name="email" aria-describedby="emailHelp" placeholder="enter job" value="">
                        @error('email')
                        <span class="text-danger">{{$message}} </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Job title: </label>
                        <input type="text" class="form-control form-control-lg" name="jobtitle" aria-describedby="emailHelp" placeholder="enter job title" value="">
                        @error('jobtitle')
                        <span class="text-danger">{{$message}} </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">location: </label>
                        <input type="text" class="form-control form-control-lg" name="location" aria-describedby="emailHelp" placeholder="enter location" value="">
                        @error('location')
                        <span class="text-danger">{{$message}} </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">region: </label>
                        <input type="text" class="form-control form-control-lg" name="region"  placeholder="enter region" value=""></textarea>
                        @error('region')
                        <span class="text-danger">{{$message}} </span>
                        @enderror
                    </div>




                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Job type: </label>
                        <br>
                        <select class="form-control" name="jobtype" id="exampleFormControlSelect1">
                            <option value="full time">full time</option>
                            <option value="part time">part time</option>

                        </select>
                        <br>
                        @error('jobtype')
                        <span class="text-danger">{{$message}} </span>
                        @enderror
                    </div>
                    <br>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Job category: </label>
                        <br>


                        <select class="form-control" name="jobcategory" id="exampleFormControlSelect1">
                            <optgroup label="Choose job category">
                                <option value="developemnt">developemnt</option>
                                <option value="arts">arts</option>
                                <option value="marketing">marketing</option>
                            </optgroup>

                        </select>
                        <br>

                        @error('jobcategory')
                        <span class="text-danger">{{$message}} </span>
                        @enderror
                    </div>

                    <br>

                    <div class="form-group">

                        <label for="exampleInputEmail1">Job description: </label>

                        <input type="hidden" class="form-control form-control-lg" name="jobdesc" id ="x" placeholder="enter description" rows="6">
                        @error('jobdesc')
                        <span class="text-danger">{{$message}} </span>
                        @enderror
                        <trix-editor input="x"></trix-editor>

                    </div>

                    <h2>Company Details</h2>

                    <hr>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Company name: </label>
                        <input type="text" class="form-control form-control-lg" name="companyname" aria-describedby="emailHelp" placeholder="enter name" value="">
                        @error('companyname')
                        <span class="text-danger">{{$message}} </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Website: </label>
                        <input type="text" class="form-control form-control-lg" name="website" aria-describedby="emailHelp" placeholder="enter website" value="">
                        @error('website')
                        <span class="text-danger">{{$message}} </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">linkdin: </label>
                        <input type="text" class="form-control form-control-lg" name="linkedin" aria-describedby="emailHelp" placeholder="enter linkedin" value="">
                        @error('linkedin')
                        <span class="text-danger">{{$message}} </span>
                        @enderror
                    </div>






                    <div class="form-group">
                        <button class="btn btn-success" type="submit">Add</button>
                    </div>
                </form>
            </div>

        </div>

    </div>

@endsection

