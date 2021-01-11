@extends('layouts.admin')


@section('content')

    <section class="site-section" id="next">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-12 header-margin header-margin-admin">
                  @if(!$unverifiedJobs == null)

                        <div class="bg-light p-3 border rounded d-block mb-4">

                            <ul class="list-unstyled pl-3 mb-0">

                                <li class="mb-2"><strong class="text-black">Number of Unverified Jobs:</strong> <span class="pull-right">({{$unverifiedJobs}})</span></li>

                            </ul>

                        </div>
                    @endif

                    @if(isset($jobs) && $jobs->count() > 0)
                        @foreach($jobs as $job)
                            <ul class="job-listings mb-5">
                                <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">

                                    <div class="job-listing-logo">

                                        <a href=""> <img src="{{asset('storage/'.$job->image)}}" alt="Image" class="img-thumbnail w-70 h-70 d-block mr-2 category-img-admin" ></a>
                                    </div>

                                    <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">

                                        <form class="form-update" action="{{route('update.jobs.admins', $job->id)}}" method="POST">
                                            {{ csrf_field() }}
                                        <div class="d-none job-listing-location mb-3 mb-sm-0 custom-width w-25">

                                            Status: <input type="text" class="form-control form-control-lg" value="{{$job->status}}" name="status">
                                        </div>
                                            <div class="form-group">
                                                <button class="btn btn-success" type="submit">edit</button>
                                            </div>
                                        </form>

                                        <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0 form-update">
                                            <a class="btn btn-danger" href="{{route('delete.jobs.admins', $job->id)}}">delete</a>
                                        </div>

                                    </div>

                                </li>

                            </ul>



                        @endforeach
                    @else
                        <div class="alert alert-danger">
                            you have not saved any jobs yet
                        </div>

                    @endif

                    {!!  $jobs -> links() !!}
                </div>
            </div>
        </div>
    </section>


@endsection