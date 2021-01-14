@extends('layouts.site')

@section('content')

    <section class="section-hero overlay inner-page bg-image img-show" id="home-section">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1 class="text-primary font-weight-bold">{{$job->jobtitle}}</h1>
                    <div class="custom-breadcrumbs">
                        <a class="text-primary" href="{{route('home')}}">Home</a> <span class="mx-2 slash">/</span>
                        <a class="text-primary" href="{{route('browse.jobs.jobtitle', Auth::user()->job_title)}}">Jobs</a> <span class="mx-2 slash">/</span>
                        <span class="text-white"><strong>{{$job->jobtitle}}</strong></span>
                    </div>
                </div>
            </div>

        </div>
    </section>



    <section class="site-section">
        <div class="container">
            <div class="alert alert-success" style="display:none;" role="alert" id="success_msg">
                Saved
            </div>

            <div class="alert alert-success" style="display:none;" role="alert" id="delete_msg">
                Unsaved
            </div>
            <div class="row align-items-center mb-5">
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <div class="d-flex align-items-center">


                        <div class=" d-inline-block mr-3 rounded">
                            <img src="{{url('storage/'.$job->image)}}" alt="Image" class="img-thumbnail w-70 h-70 d-block mr-2 category-img">
                        </div>
                        <div>
                            <h2>{{$job->jobtitle}}</h2>
                            <div>
                                <span class="ml-0 mr-2 mb-2"><span class="fa fa-briefcase fa-1x mr-2"></span>{{$job->companyname}}</span>
                                <span class="m-2"><span class="fa fa-map-marker  fa-1x mr-2"></span>{{$job->location}},{{$job->region}}</span>
                                <span class="m-2"><span class="fa fa-clock fa-1x mr-2"></span><span>{{$job->jobtype}}</span></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-6">
                            <form class="form-group" method="post" id="save_form" action="{{route('save.job')}}" enctype="multipart/form-data">
                                @csrf

                                <input  type="hidden" class="form-control form-control-lg" id="user_id" name="user_id" value="{{Auth::user()->id}}">


                                <input  type="hidden" class="form-control form-control-lg" id="job_id" name="job_id" value="{{$job->id}}">

                                <input  type="hidden" class="form-control form-control-lg" id="pic" name="pic" value="{{$job->image}}">
                                <input  type="hidden" class="form-control form-control-lg" id="job_title" name="job_title" value="{{$job->jobtitle}}">
                                <input  type="hidden" class="form-control form-control-lg" id="company_name" name="company_name" value="{{$job->companyname}}">
                                <input  type="hidden" class="form-control form-control-lg" id="location" name="location" value="{{$job->location}}">
                                <input  type="hidden" class="form-control form-control-lg" id="region" name="region" value="{{$job->region}}">
                                <input  type="hidden" class="form-control form-control-lg" id="job_type" name="job_type" value="{{$job->jobtype}}">

                               <div id="suck">




                               </div>

                            @if(isset($jobx->job_id))

                                    @if($jobx->job_id == $job->id)

                                        @if($jobx->user_id == Auth::user()->id AND $jobx->job_id == $job->id)
                                            <a  id="delete_btn" fuck_id="{{$job->id}}" fuck2_id="{{Auth::user()->id}}" href="{{route('delete.job', $jobx->job_id)}}" class="btn btn-block btn-primary btn-md delete_btn">saved</a>


                                        @else
                                            @if($jobx->user_id !== Auth::user()->id)
                                                <a  id="delete_btn" fuck_id="{{$job->id}}" fuck2_id="{{Auth::user()->id}}" href="{{route('delete.job', $jobx->job_id)}}" class="btn btn-block btn-primary btn-md delete_btn">saved</a>

                                            @endif



                                        @endif



                                    @endif

                                @else
                                        <button class="btn btn-success" id="save" type="submit">save</button>

                                @endif


                            </form>

                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8">
                    <div class="mb-5">
                        <figure class="mb-5"><img src="{{asset('assets/images/job_single_img_1.jpg')}}" alt="Image" class="img-fluid rounded"></figure>
                        <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="fa fa-anchor fa-2x mr-3"></span>Job Description</h3>

                        <p>{{strip_tags($job->jobdesc)}})</p>

                    </div>
                    <div class="mb-5">
                        <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="fa fa-rocket fa-2x mr-3"></span>Responsibilities</h3>
                        <ul class="list-unstyled m-0 p-0">
                            {{strip_tags($job->respon)}}

                        </ul>
                    </div>

                    <div class="mb-5">
                        <h3 class="h5 d-flex align-items-center  mb-4 text-primary"><span class="fa fa-book fa-2x mr-3"></span>Education + Experience</h3>
                        <ul class="list-unstyled m-0 p-0">
                           <li class="d-flex align-items-start mb-2"> {{strip_tags($job->edu)}} </li>

                        </ul>
                    </div>

                    <div class="mb-5">
                        <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="fa fa-bell fa-2x mr-3"></span>Other Benifits</h3>
                        <ul class="list-unstyled m-0 p-0">
                            <li class="d-flex align-items-start mb-2"> {{strip_tags($job->ben)}} </li>
                        </ul>
                    </div>

                    <div class="mb-5 form-group">
                        <div id="job_msg" class="alert alert-success" style="display:none" role="alert">
                            application sent!

                        </div>


                        <div id="job_msg_error" class="alert alert-danger"  style="display: none"role="alert">
                           one or all the fileds are missing or file extension not supported: supported ones pdf, docx, doc

                        </div>
                        @if($job->user_id == Auth::user()->id)
                            <h3>you created this job</h3>
                        @else
                            <form action="{{route('apply.job')}}" id="save_mail" class="form-group" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input id="from" type="hidden"  class="form-control form-control-lg" name="from" value="{{Auth::user()->email}}">

                                <input id="to" type="hidden" class="form-control form-control-lg" name="to" value="{{$job->email}}">
                                <input  id="id" type="hidden" class="form-control form-control-lg" name="id" value="{{$job->id}}">


                                <div class="form-group">
                                    <input id="subject" type="text" class="form-control form-control-lg" name="subject" placeholder="why are you suitable for this job">



                                </div>
                               <div class="from-group">
                                   <input id="image" value="" type="file" name="image" class="form-control form-control-lg" accept="application/pdf">



                               </div>


                                <br>
                                <br>

                                <div class="row">

                                    <div class="col-3 form-group">
                                        <button id="saveMail" class="btn btn-success" type="submit">apply</button>
                                    </div>
                                    <div class="col-3 form-group">


                                    </div>

                                </div>


                            </form>
                        @endif
                    </div>

                </div>

                <div class="col-lg-4">
                    <div class="bg-light p-3 border rounded mb-4">
                        <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Job Summary</h3>
                        <ul class="list-unstyled pl-3 mb-0">
                            <li class="mb-2"><strong class="text-black">Published on:</strong> {{$job->created_at}}</li>
                            <li class="mb-2"><strong class="text-black">vacancy:</strong> {{$job->vacancy}}</li>
                            <li class="mb-2"><strong class="text-black">Employment Status:</strong> {{$job->jobtype}}</li>
                            <li class="mb-2"><strong class="text-black">Experience:</strong> {{$job->ex}} year(s)</li>
                            <li class="mb-2"><strong class="text-black">Job Location:</strong> {{$job->location}}</li>
                            <li class="mb-2"><strong class="text-black">Salary:</strong> ${{$job->sal}}k</li>
                            <li class="mb-2"><strong class="text-black">Gender:</strong> {{$job->gender}}</li>
                        </ul>
                    </div>

                    <div class="bg-light p-3 border rounded d-block mb-4">
                        <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Job info</h3>



                            <ul class="list-unstyled pl-3 mb-0">

                                <strong class="text-black">Number of Applications:</strong> <li id="load_it" value="{{$job_counter}}" class="mb-2 d-inline-block">
                                    {{$job_counter}}

                                </li>



                            </ul>



                    </div>






                    <div class="bg-light p-3 border rounded">
                        <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Share</h3>
                        <div class="footer-social">
                            <a href="{{url('http://twitter.com/share?url='. Request::url())}}"  target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="{{url('https://www.facebook.com/sharer/sharer.php?u='. Request::url())}}"  target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="{{url('https://www.linkedin.com/shareArticle?mini=true&url='. Request::url())}}"  target="_blank" ><i class="fab fa-linkedin"></i></a>




                        </div>
                    </div>


                </div>

            </div>
        </div>

    </section>



@endsection

@section('scripts')
    <script>




        $(document).ready(function() {




            function myFunction() {
                setInterval(function(){

                    $("#load_it").load("{{url('job/loadcounter/'. $job->id)}}");




                }, 3000);

            }

            myFunction();


            $(document).on('click', '#save', function (e) {
                e.preventDefault();




                $('#user_id').text('');
                $('#job_id').text('');
                $('#pic').text('');
                $('#job_title').text('');
                $('#company_name').text('');
                $('#location').text('');
                $('#region').text('');
                $('#job_type').text('');
                $('#success_msg').show().fadeOut(5000);
                $('#delete_msg').hide();
                $('#save').toggle();
                $('button#save').remove();




                var something = $('<a/>').attr({ type: "button", name:"saved", id:"delete_btn", value:'Saved', href:"{{url('job/delete', $job->id)}}",
                    class:"btn btn-block btn-primary btn-md delete_btn", fuck_id:"{{$job->id}}", fuck2_id: "{{Auth::user()->id}}"
                }).text("Saved");

                $("#suck").append(something);



              ///  $('#show').show();



                var formData = new FormData($('#save_form')[0]);

                $.ajax({
                    type: 'post',
                    enctype: 'multipart/form-data',
                    url: "{{route('save.job')}}",
                    data: formData,
                    processData: false,
                    contentType: false,
                    cache: false,
                    success: function (data) {

                        if (data.status == true) {


                        }


                    }, error: function (reject) {
                        var response = $.parseJSON(reject.responseText);
                        $.each(response.errors, function (key, val) {
                            $("#" + key + "_error").text(val[0]);
                        });
                    }
                });
            });



            $(document).on('click', '#saveMail', function (e) {
                e.preventDefault();


                $('#to').text('');
                $('#from').text('');
                $('#id').text('');





                if($('#image').val() == '' || $('#subject').val() == '') {

                   // $('#image').val('');

                    var fileExtension = ['doc', 'pdf', 'txt'];

                    if($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
                        $('#image').val('');
                        $('#job_msg_error').show().fadeOut(5000);
                        //alert('no');
                    }

                  // $('#job_msg_error').show().fadeOut(5000);
                } else {
                   // $('#job_msg').toggle().fadeOut(4000);
                }


                var formData = new FormData($('#save_mail')[0]);



                $.ajax({
                    type: 'post',
                    enctype: 'multipart/form-data',
                    url: "{{route('apply.job')}}",
                    data: formData,
                    processData: false,
                    contentType: false,
                    cache: false,
                    success: function (data) {

                        if (data.status == true) {

                            console.log('fuck');


                        }


                    }, error: function (jqXhr, json, errorThrown) {
                        var errors = jqXhr.responseJSON;
                        var errorsHtml = '';
                        $.each(errors['errors'], function (index, value) {
                            errorsHtml += '<ul class="list-group"><li class="list-group-item alert alert-danger">' + value + '</li></ul>';
                        });
                    }




                });







            });


            $(document).on('click', '.delete_btn', function (e) {
                e.preventDefault();

                var something_2 = $('<button/>').attr({ type: "submit", name:"save", id:"save", value:'Save',
                    class:"btn btn-success",
                }).text("Save");

                $("#suck").append(something_2);

                var fuck_id =  $(this).attr('fuck_id');
                var fuck2_id =  $(this).attr('fuck2_id');

                $('#delete_msg').show();
                $('#success_msg').hide();
                $('.delete_btn').hide();

                $('a#delete_btn').remove();



                $.ajax({
                    type: 'get',
                    url: "{{url('job/delete/'. $job->id)}}",
                    data: {
                        '_token': "{{csrf_token()}}",
                        'id' :fuck_id,
                        'user_id' :fuck2_id,

                    },
                    success: function (data) {

                        if(data.status == true){

                        }

                    }, error: function (reject) {

                    }
                });
            });
















        });














    </script>
@stop



