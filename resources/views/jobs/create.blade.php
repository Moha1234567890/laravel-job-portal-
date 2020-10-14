@extends('layouts.site')


@section('content')

    <div class="container">

        <div class="card card-default header-margin">
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

                Post a job

            </div>
            <div class="card-body">
                <form action="{{route('store.job')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">

                        <input type="hidden" class="form-control form-control-lg" name="user_id" aria-describedby="emailHelp" value="{{Auth::user()->id}}">

                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email: </label>
                        <input type="text" class="form-control form-control-lg" name="email" aria-describedby="emailHelp" placeholder="enter email">
                        @error('email')
                        <span class="text-danger">{{$message}} </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Job title: </label>
                        <input type="text" class="form-control form-control-lg" name="jobtitle" aria-describedby="emailHelp" placeholder="enter job title">
                        @error('jobtitle')
                        <span class="text-danger">{{$message}} </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">location: </label>
                        <input type="text" class="form-control form-control-lg" name="location" aria-describedby="emailHelp" placeholder="enter location">
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
                        <label for="exampleInputEmail1">vacancy: </label>
                        <input type="text" class="form-control form-control-lg" name="vacancy"  placeholder="enter number of vacancies">
                        @error('vacancy')
                        <span class="text-danger">{{$message}} </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">years of experince: </label>
                        <input type="text" class="form-control form-control-lg" name="ex"  placeholder="enter number of years of experince">
                        @error('ex')
                        <span class="text-danger">{{$message}} </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">salary: </label>
                        <input type="text" class="form-control form-control-lg" name="sal"  placeholder="salary">
                        @error('sal')
                        <span class="text-danger">{{$message}} </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">gender: </label>
                        <br>


                        <select class="form-control" name="gender" id="exampleFormControlSelect1">
                            <optgroup label="Choose job category">
                                <option value="male">male</option>
                                <option value="female">female</option>
                                <option value="all">all</option>

                            </optgroup>

                        </select>
                        <br>

                        @error('gender')
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

                    <div class="form-group">

                        <label for="exampleInputEmail1">resposibialty: </label>

                        <input type="hidden" class="form-control form-control-lg" name="respon" id ="y" placeholder="enter resposibialties" rows="6"
                              >
                        @error('respon')
                        <span class="text-danger">{{$message}} </span>
                        @enderror
                        <trix-editor input="y"></trix-editor>

                    </div>

                    <div class="form-group">

                        <label for="exampleInputEmail1">Education: </label>

                        <input type="hidden" class="form-control form-control-lg" name="edu" id ="z" placeholder="enter resposibialties" rows="6">
                        @error('edu')
                        <span class="text-danger">{{$message}} </span>
                        @enderror
                        <trix-editor input="z"></trix-editor>

                    </div>

                    <div class="form-group">

                        <label for="exampleInputEmail1">Benfites: </label>

                        <input type="hidden" class="form-control form-control-lg" name="ben" id ="t" placeholder="enter benfites" rows="6">
                        @error('ben')
                        <span class="text-danger">{{$message}} </span>
                        @enderror
                        <trix-editor input="t"></trix-editor>

                    </div>





                    <h2>Company Details</h2>

                    <hr>
                    <div class="form-group text-center">

                        <label for="exampleInputEmail1" class="pull-left">Company logo: </label>
                        <br>

                        <input type="file" class="text-center center-block file-upload form-control form-control-lg" name="image">
                        @error('image')
                        <span class="text-danger">{{$message}} </span>
                        @enderror


                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Company name: </label>
                        <input type="text" class="form-control form-control-lg" name="companyname" aria-describedby="emailHelp" placeholder="enter name">
                        @error('companyname')
                        <span class="text-danger">{{$message}} </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Website: </label>
                        <input type="text" class="form-control form-control-lg" name="website" aria-describedby="emailHelp" placeholder="enter website">
                        @error('website')
                        <span class="text-danger">{{$message}} </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">linkdin: </label>
                        <input type="text" class="form-control form-control-lg" name="linkedin" aria-describedby="emailHelp" placeholder="enter linkedin">
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

