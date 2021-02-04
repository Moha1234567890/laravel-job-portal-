
@extends('layouts.admin')

@section('title')
    Show All Categories
@endsection

@section('content')

    <div class="container">
        <div>
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
                @if(!$unverifiedCats == null)

                    <div class="mydiv-margin bg-light p-3 border rounded d-block mb-4">

                        <ul class="list-unstyled pl-3 mb-0">

                            <li class="mb-2"><strong class="text-black">Number of Unverified Categories:</strong> <span class="pull-right">({{$unverifiedCats}})</span></li>

                        </ul>

                    </div>
                @else
                    <div  class="mydiv-margin bg-light p-3 border rounded d-block mb-4">
                        <ul class="list-unstyled pl-3 mb-0">

                            <li class="mb-2"><strong class="text-black">Number of Unverified Categories:</strong> <span class="pull-right">({{$unverifiedCats}})</span></li>

                        </ul>


                    </div>

                @endif

                <div id="cat_msg_delete" class="alert alert-success" style="display:none">
                    category deleted successfully

                </div>

                <div class="col-md-12">
                    <div class="tile">
                        <h3 class="tile-title">Categories</h3>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>

                                <tr>

                                    <th>Font</th>
                                    <th>Name</th>
                                    <th>Edit</th>

                                    <th>Number of jobs</th>
                                    <th>Delete</th>

                                </tr>
                                </thead>
                                <tbody>
                                        @if(isset($categories) && $categories->count() > 0)
                                            @foreach($categories as $showCat)
                                                <tr id="catRow{{$showCat->id}}">

                                                    <td>
                                                        <span class="fa fa-{{$showCat->font}} fa-2x text-primary"><span class="icon-magnet d-block"></span></span>
                                                    </td>
                                                    <td>{{$showCat->name}}</td>

                                                    <td>
                                                        <form class="form-update" action="{{route('update.cats.admins', $showCat->id)}}" method="POST">
                                                            {{ csrf_field() }}

                                                            <select class="form-control margin-option" name="status">

                                                                    <optgroup label="Choose Status">
                                                                        @if (isset($showCat->status) && $showCat->status  == 0)

                                                                            <option value="{{0}}" selected>unactivated</option>
                                                                            <option value="{{1}}">activated</option>
                                                                        @else
                                                                            <option value="{{1}}">activated</option>


                                                                            <option value="{{0}}">unactivated</option>
                                                                        @endif


                                                                    </optgroup>


                                                            </select>



                                                            <button class="btn btn-info info-margin" type="submit">update</button>


                                                        </form>
                                                    </td>
                                                    <td>{{$showCat->count}}</td>
                                                    <td>
                                                        <a  cat_id="{{$showCat->id}}" id="delete_btn" class="btn btn-danger text-white">delete</a>
                                                    </td>



                                                </tr>
                                        @endforeach
                                        @else
                                        <div class="alert alert-danger">
                                        no categories yet
                                        </div>

                                        @endif




                                </tbody>



                            </table>
{{--                            {!!  $showCatspag -> links() !!}--}}
{{----}}

                        </div>
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


                var cat_id =  $(this).attr('cat_id');

                $('#catRow'+cat_id).remove();
                $('#cat_msg_delete').show().fadeOut(5000);

                    $.ajax({
                    type: 'post',
                    url: "{{route('delete.cats.admins')}}",
                    data: {
                    '_token': "{{csrf_token()}}",
                    'id': cat_id,
                    },

                    success: function (data) {

                    if(data.status == true){





                    }
                     $('#jobRow'+data.id).remove();

                    }, error: function (reject) {

                    }
                    });
                    });

            });
 </script>
@stop