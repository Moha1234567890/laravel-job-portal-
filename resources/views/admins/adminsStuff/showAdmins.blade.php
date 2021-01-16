
@extends('layouts.admin')


@section('content')

 <div class="container">
<div class="">
            <table class="table">
                <thead>
                <tr>

                    <th scope="col">#</th>
                    <th scope="col">image</th>
                    <th scope="col">name</th>
                    <th scope="col">email</th>

                </tr>
                </thead>
                <tbody>
                @if(isset($admins) && $admins->count() > 0)
                    @foreach($admins as $admin)
                <tr>

                            <th scope="row">{{$admin->id}}</th>
                    <th scope="row"><img style="height: 35px;" src="https://www.monteirolobato.edu.br/public/assets/admin/images/avatars/avatar1_big.png" alt="admin"></th>
                            <td>{{$admin->name}}</td>
                            <td>{{$admin->email}}</td>

                </tr>
                    @endforeach
                @endif


                </tbody>
            </table>

        </div>
    </div>


@endsection