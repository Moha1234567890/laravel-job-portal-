@extends('layouts.admin')


@section('content')



    <div class="container">
        <div class="row">
            <div class="col-md-12 header-margin header-margin-admin">
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
                                    <form class="form-update" action="{{route('update.jobs.admins', $job->id)}}" method="POST">
                                        {{ csrf_field() }}
                                        <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">

                                            <input type="text" class="form-control form-control-lg d-block mb-3 mt-5" value="{{$job->status}}" name="status">
                                        </div>
                                        <div class="form-group">

                                        </div>
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