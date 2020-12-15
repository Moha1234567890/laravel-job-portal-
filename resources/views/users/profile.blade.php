@extends('layouts.site')

@section('content')
    <section class="site-section" id="next">

                <div class="container bootstrap snippet">

                    <div class="row">
                        <div class="col-md-3 header-margin"><!--left col-->


                            <form class="form" action="{{route('profile.update.image', Auth::user()->id)}}" method="post" id="registrationForm" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group text-center">

                                    <img src="{{asset('storage/'.$user->image)}}" class="w-100 h-70">
                                    <label for="first_name"><h4>Profile Picture</h4></label>

                                    <input type="file" class="text-center center-block file-upload d-block mb-3" name="image">
                                    @error('image')
                                    <span class="text-danger">{{$message}} </span>
                                    @enderror


                                </div>

                                <div class="form-group text-center">

                                    <label for="first_name"><h4>my cv</h4></label>



                                    <input type="file" class="text-center center-block file-upload d-block mb-3" name="cv">
                                    @error('cv')
                                    <span class="text-danger">{{$message}} </span>
                                    @enderror


                                </div>

                                <div class="form-group">
                                    <button class="btn btn-lg btn-success" type="submit">Save</button>
                                </div>

                            </form>



                            <ul class="list-group">
                                <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
                                <li class="list-group-item text-right"><span class="pull-left"><strong> posted jobs</strong></span> 125</li>
                                <li class="list-group-item text-right"><span class="pull-left"><strong>applyed to jobs</strong></span> 13</li>
                                <li class="list-group-item text-right"><span class="pull-left"><strong>Posts</strong></span> 37</li>
                                <li class="list-group-item text-right"><span class="pull-left"><strong>Followers</strong></span> 78</li>
                            </ul>

                            <div class="panel panel-default d-block mt-4">
                                <div class="panel-heading">Social Media</div>
                                <div class="panel-body">

                                         <div class="footer-social">
                                            @if(!$user->twitter == '')

                                              <a href="{{$user->twitter}}" target="_blank"><i class="fab fa-twitter"></i></a>
                                            @endif
                                            @if(!$user->facebook == '')

                                                    <a href="{{$user->facebook}}"  target="_blank"><i class="fab fa-facebook"></i></a>
                                            @endif
                                            @if(!$user->linkedin == '')

                                                    <a href="{{$user->linkedin}}" target="_blank"><i class="fab fa-linkedin"></i></a>
                                            @endif
                                            @if(!$user->link == '')

                                                    <a href="{{$user->link}}" target="_blank"><i class="fas fa-link"></i></a>
                                            @endif
                                        </div>

                                </div>
                            </div>

                        </div><!--/col-3-->
                        <div class="col-sm-9 header-margin">


                            <div class="tab-content ">
                                <div class="tab-pane active" id="home">
                                    @if(Session::has('success'))
                                        <div class="alert alert-success" role="alert">
                                            {{ Session::get('success') }}
                                        </div>
                                    @endif
                                    <hr>
                                    <form class="form" action="{{route('profile.update', Auth::user()->id)}}" method="post" id="registrationForm" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">





                                            <div class="col-xs-6">
                                                <label for="first_name"><h4>Name</h4></label>
                                                <input type="text" value="{{$user->name}}" class="form-control form-control-lg" name="name" id="first_name" placeholder="first name" title="enter your first name if any.">
                                                @error('name')
                                                <span class="text-danger">{{$message}} </span>
                                                @enderror
                                            </div>
                                        </div>





                                        <div class="form-group">
                                            <div class="col-xs-6">
                                                <label for="mobile"><h4>Mobile</h4></label>
                                                <input type="text" value="{{$user->mobile}}" class="form-control form-control-lg" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">
                                                @error('mobile')
                                                <span class="text-danger">{{$message}} </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-6">
                                                <label for="mobile"><h4>Job title</h4></label>
                                                <input type="text" value="{{$user->job_title}}" class="form-control form-control-lg" name="job_title" id="mobile" placeholder="enter job title" title="enter your job title if any.">
                                                @error('mobile')
                                                <span class="text-danger">{{$message}} </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">

                                            <div class="col-xs-6">
                                                <label for="email"><h4>Email</h4></label>
                                                <input type="email" value="{{$user->email}}" class="form-control form-control-lg" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                                                @error('email')
                                                <span class="text-danger">{{$message}} </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">

                                            <div class="col-xs-6">
                                                <label for="email"><h4>Location</h4></label>
                                                <input type="text" value="{{$user->location}}" name="location" class="form-control form-control-lg" id="location" placeholder="somewhere" title="enter a location">
                                                @error('location')
                                                <span class="text-danger">{{$message}} </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group">

                                            <div class="col-xs-6">
                                                <label for="email"><h4>Facebook</h4></label>
                                                <input type="text" value="{{$user->facebook}}" name="facebook" class="form-control form-control-lg" id="location" placeholder="Facebook" title="enter a location">

                                            </div>
                                        </div>
                                        <div class="form-group">

                                            <div class="col-xs-6">
                                                <label for="email"><h4>Twitter</h4></label>
                                                <input type="text" value="{{$user->twitter}}" name="twitter" class="form-control form-control-lg" id="location" placeholder="Twitter" title="enter a location">

                                            </div>
                                        </div>

                                        <div class="form-group">

                                            <div class="col-xs-6">
                                                <label for="email"><h4>Linkedin</h4></label>
                                                <input type="text" value="{{$user->linkedin}}" name="linkedin" class="form-control form-control-lg" id="location" placeholder="Linkedin" title="enter a location">

                                            </div>
                                            </div>
                                        </div>

                                        <div class="form-group">

                                            <div class="col-xs-6">
                                                <label for="email"><h4>Website</h4></label>
                                                <input type="text" value="{{$user->link}}" name="link" class="form-control form-control-lg" id="location" placeholder="Website" title="enter a location">

                                            </div>
                                        </div>
                                        <div class="form-group">

                                            @if(!$user->cv == null)

                                                <div class="col-xs-6">
                                                   <a class="btn btn-lg btn-success" href="{{asset('storage/app/public/'.$user->cv)}}" download>Download my CV</a>
                                                </div>
                                            @else
                                                <div class="col-xs-6">
                                                    <h3>if you uploaded your cv it will show up here</h3>
                                                </div>
                                            @endif

                                        </div>


                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <br>
                                                <button class="btn btn-lg btn-success" type="submit">Save</button>
                                                <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                                            </div>
                                        </div>
                                    </form>

                                    <hr>

                                </div>
                    </div><!--/col-9-->
                </div><!--/row-->
                    </div>
                </div>


    </section>

@endsection


