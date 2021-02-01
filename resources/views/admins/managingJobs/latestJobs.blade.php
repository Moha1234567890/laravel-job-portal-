@extends('layouts.admin')


@section('title')
    Latest Jobs
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
        </div>

        <div class="row">
            <div class="col-md-12 header-margin">
                @if(!$unverifiedJobs == null)

                    <div class="bg-light p-3 border rounded d-block mb-4">

                        <ul class="list-unstyled pl-3 mb-0">

                            <li class="mb-2"><strong class="text-black">Number of Unverified Jobs:</strong> <span class="pull-right">({{$unverifiedJobs}})</span></li>

                        </ul>

                    </div>
                @else
                    <div  class="bg-light p-3 border rounded d-block mb-4">
                        <ul class="list-unstyled pl-3 mb-0">

                            <li class="mb-2"><strong class="text-black">Number of Unverified Jobs:</strong> <span class="pull-right">({{$unverifiedJobs}})</span></li>

                        </ul>


                    </div>

                @endif

                <div id="job_msg_delete" class="alert alert-success" style="display:none">
                    job deleted successfully

                </div>

                <div class="col-md-12">
                <div class="tile">
                    <h3 class="tile-title">Responsive Table</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>

                            <tr>

                                <th>Company Pic</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if( isset($jobs) && $jobs->count() > 0)
                                @foreach($jobs as $job)
                            <tr id="jobRow{{$job->id}}">

                                <td><img src="{{asset('storage/'.$job->image)}}" alt="Image" class="img-thumbnail w-70 h-70  category-img-admin" ></td>
                                <td>
                                    <form class="form-update-job" action="{{route('update.jobs.admins', $job->id)}}" method="POST">
                                        {{ csrf_field() }}
                                        <select class="form-control margin-option-job" name="status">

                                            <optgroup label="Choose Status">
                                                @if (isset($job->status) && $job->status  == 0)

                                                    <option value="{{0}}" selected>unactivated</option>
                                                    <option value="{{1}}">activated</option>
                                                @else
                                                    <option value="{{1}}" selected>activated</option>

                                                    <option value="{{0}}">unactivated</option>
                                                @endif


                                            </optgroup>


                                        </select>

                                        <button class="btn btn-info info-margin-job" type="submit">update</button>

                                    </form>
                                </td>
                                <td>
                                    <a job_id="{{$job->id}}" id="delete_btn" class="btn btn-danger margin-form">delete</a>
                                </td>


                            </tr>
                            @endforeach
                            @else
                                <div class="alert alert-danger">
                                    no jobs yet
                                </div>

                            @endif




                            </tbody>



                        </table>

                        {!!  $jobs -> links() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>





@endsection


@section('scripts')

    <script>

        $(document).ready(function() {



            $(document).on('click', '#delete_btn', function (e) {
                e.preventDefault();

                // var something_2 = $('<button/>').attr({ type: "submit", name:"save", id:"save", value:'Save',
                //     class:"btn btn-success",
                // }).text("Save");
                //
                // $("#suck").append(something_2);

                //var status =  $(this).attr('status');
                var job_id =  $(this).attr('job_id');





                $('#jobRow'+job_id).remove();
                $('#job_msg_delete').show().fadeOut(5000);


                //var status_off =  $(this).attr('fuck2_id');


                // $('#success_msg').hide();
                // $('.delete_btn').hide();







                $.ajax({
                    type: 'post',
                    url: "{{route('delete.jobs.admins')}}",
                    data: {
                        '_token': "{{csrf_token()}}",

                        'id': job_id,


                    },

                    success: function (data) {

                        if(data.status == true){





                        }
                        $('#jobRow'+data.id).remove();

                    }, error: function (reject) {

                    }
                });
            });

        })
    </script>
@stop