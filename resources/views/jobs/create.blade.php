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

                <div class="card-header" align="{{__('messages.align')}}">

                 {{__('messages.Post a job')}}

            </div>
            <div class="card-body">
                <form id="save_form_job" action="{{route('store.job')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group" align="{{__('messages.align')}}">

                        <input type="hidden" class="form-control form-control-lg" id="user_id" name="user_id" aria-describedby="emailHelp" value="{{Auth::user()->id}}">

                    </div>

                    <div class="form-group" align="{{__('messages.align')}}">
                        <label for="exampleInputEmail1" >{{__('messages.Email')}}: </label>
                        <input type="text" class="form-control form-control-lg" id="email" name="email" aria-describedby="emailHelp" placeholder="{{__('messages.Email')}}">
                        @error('email')
                        <span class="text-danger">{{$message}} </span>
                        @enderror
                    </div>
                    <div class="form-group" align="{{__('messages.align')}}">
                        <label for="exampleInputEmail1">{{__('messages.Job title')}}: </label>
                        <input type="text" class="form-control form-control-lg" id="job_title" name="jobtitle" aria-describedby="emailHelp" placeholder="{{__('messages.Job title')}}">
                        @error('jobtitle')
                        <span class="text-danger">{{$message}} </span>
                        @enderror
                    </div>

                    <div class="form-group" align="{{__('messages.align')}}">
                        <label for="exampleInputEmail1">{{__('messages.Job Location')}}: </label>
                        <input type="text" class="form-control form-control-lg" id="location" name="location" aria-describedby="emailHelp" placeholder="{{__('messages.Job Location')}}">
                        @error('location')
                        <span class="text-danger">{{$message}} </span>
                        @enderror
                    </div>
                    <div class="form-group" align="{{__('messages.align')}}">
                        <label for="exampleInputEmail1">{{__('messages.region')}}: </label>
                        <input type="text" class="form-control form-control-lg" id="region" name="region"  placeholder="{{__('messages.region')}}" value=""></textarea>
                        @error('region')
                        <span class="text-danger">{{$message}} </span>
                        @enderror
                    </div>




                    <div class="form-group" align="{{__('messages.align')}}">
                        <label for="exampleFormControlSelect1">{{__('messages.Employment Status')}}: </label>
                        <br>
                        <div class="pull-{{__('messages.align')}}">
                        <select class="form-control"  name="jobtype" id="job_type">
                            <option value="full time">{{__('messages.full time')}}</option>
                            <option value="part time">{{__('messages.part time')}}</option>

                        </select>
                        </div>
                        <br>
                        @error('jobtype')
                        <span class="text-danger">{{$message}} </span>
                        @enderror
                    </div>
                    <br>

                    <div class="form-group pull-{{__('messages.align')}}" align="{{__('messages.align')}}">
                        <label for="exampleFormControlSelect1">{{__('messages.job category')}}: </label>
                        <br>


                        <select class="form-control" name="jobcategory" align="{{__('messages.align')}}" id="job_category">

                            <optgroup label="Choose job category">
                                @foreach($getAllCats as $getAllCat)
                                <option value="{{$getAllCat->name}}" class="pull-{{__('messages.align')}}">{{$getAllCat->name}}</option>
                               @endforeach

                            </optgroup>

                        </select>
                        <br>


                        @error('jobcategory')
                        <span class="text-danger">{{$message}} </span>
                        @enderror
                    </div>

                    <br>
                    <br><br><br>


                    <div class="form-group" align="{{__('messages.align')}}">
                        <label for="exampleInputEmail1">{{__('messages.vacancy')}}: </label>
                        <input type="text" id="vacancy" class="form-control form-control-lg" name="vacancy"  placeholder="{{__('messages.vacancy')}}">
                        @error('vacancy')
                        <span class="text-danger">{{$message}} </span>
                        @enderror
                    </div>

                    <div class="form-group" align="{{__('messages.align')}}">
                        <label for="exampleInputEmail1">{{__('messages.Experience')}}: </label>
                        <input type="text" id="ex" class="form-control form-control-lg" name="ex"  placeholder="{{__('messages.Experience')}}">
                        @error('ex')
                        <span class="text-danger">{{$message}} </span>
                        @enderror
                    </div>

                    <div class="form-group" align="{{__('messages.align')}}">
                        <label for="exampleInputEmail1">{{__('messages.Salary')}}: </label>
                        <input type="text" id="sal" class="form-control form-control-lg" name="sal"  placeholder="{{__('messages.Salary')}}">
                        @error('sal')
                        <span class="text-danger">{{$message}} </span>
                        @enderror
                    </div>

                    <div class="form-group pull-{{__('messages.align')}}">
                        <label for="exampleFormControlSelect1" class="">{{__('messages.Gender')}}: </label>
                        <br>

                        <select class="form-control pull-{{__('messages.align')}}"" name="gender" id="gender">
                            <optgroup label="{{__('messages.Choose job category')}}">
                                <option value="male">{{__('messages.male')}}</option>
                                <option value="female">{{__('messages.female')}}</option>
                                <option value="all">{{__('messages.all')}}</option>

                            </optgroup>

                        </select>
                        <br>

                        @error('gender')
                        <span class="text-danger">{{$message}} </span>
                        @enderror
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>

                    <div class="form-group" align="{{__('messages.align')}}">

                        <label for="exampleInputEmail1">{{__('messages.Job Description')}}: </label>

                        <input type="hidden" class="form-control form-control-lg"  name="jobdesc" id="x" placeholder="{{__('messages.Job Description')}}" rows="6">
                        @error('jobdesc')
                        <span class="text-danger">{{$message}} </span>
                        @enderror
                        <trix-editor id="fuck_1" input="x"></trix-editor>

                    </div>

                    <div class="form-group" align="{{__('messages.align')}}">

                        <label for="exampleInputEmail1">{{__('messages.Responsibilities')}}: </label>

                        <input type="hidden" class="form-control form-control-lg" name="respon" id="y" placeholder="{{__('messages.Responsibilities')}}" rows="6"
                              >
                        @error('respon')
                        <span class="text-danger">{{$message}} </span>
                        @enderror
                        <trix-editor id="fuck_2"  input="y"></trix-editor>

                    </div>

                    <div class="form-group" align="{{__('messages.align')}}">

                        <label for="exampleInputEmail1">{{__('messages.Education + Experience')}}: </label>

                        <input type="hidden"  class="form-control form-control-lg" name="edu" id="z" placeholder="{{__('messages.Education + Experience')}}" rows="6">
                        @error('edu')
                        <span class="text-danger">{{$message}} </span>
                        @enderror
                        <trix-editor id="fuck_3"  input="z"></trix-editor>

                    </div>

                    <div class="form-group" align="{{__('messages.align')}}">

                        <label for="exampleInputEmail1">{{__('messages.Other Benifits')}}: </label>

                        <input type="hidden" class="form-control form-control-lg" name="ben" id="t" placeholder="{{__('messages.Other Benifits')}}" rows="6">
                        @error('ben')
                        <span class="text-danger">{{$message}} </span>
                        @enderror
                        <trix-editor id="fuck_4"  input="t"></trix-editor>

                    </div>





                    <h2 align="{{__('messages.align')}}">{{__('messages.Company Details')}}</h2>

                    <hr>
                    <div class="form-group text-center pull-{{__('messages.align')}}" align="">

                        <label class="pull-{{__('messages.align')}}" for="exampleInputEmail1" align="">{{__('messages.Company logo')}}: </label>
                        <br>

                        <input type="file" class="text-center center-block file-upload d-block mb-3" id="image" name="image">
                        @error('image')
                        <span class="text-danger">{{$message}} </span>
                        @enderror


                    </div>
                    <br>
                    <br>
                    <br>
                    <br>

                    <div class="form-group" align="{{__('messages.align')}}">
                        <label for="exampleInputEmail1">{{__('messages.Company name')}}: </label>
                        <input type="text" class="form-control form-control-lg" id="company_name" name="companyname" aria-describedby="emailHelp" placeholder="{{__('messages.Company name')}}">
                        @error('companyname')
                        <span class="text-danger">{{$message}} </span>
                        @enderror
                    </div>

                    <div class="form-group" align="{{__('messages.align')}}">
                        <label for="exampleInputEmail1">{{__('messages.Website')}}: </label>
                        <input type="text" class="form-control form-control-lg" id="website" name="website" aria-describedby="emailHelp" placeholder="{{__('messages.Website')}}">
                        @error('website')
                        <span class="text-danger">{{$message}} </span>
                        @enderror
                    </div>

                    <div class="form-group" align="{{__('messages.align')}}">
                        <label for="exampleInputEmail1">{{__('messages.linkedin')}}: </label>
                        <input type="text" class="form-control form-control-lg" id="linkedin" name="linkedin" aria-describedby="emailHelp" placeholder="{{__('messages.linkedin')}}">
                        @error('linkedin')
                        <span class="text-danger">{{$message}} </span>
                        @enderror
                    </div>






                    <div class="form-group" align="{{__('messages.align')}}">
                        <button class="btn btn-success" id="save_job" type="submit">{{__('messages.Add')}}</button>
                    </div>
                </form>
            </div>

        </div>

    </div>

@endsection


@section('scripts')

    <script>

    </script>


@endsection