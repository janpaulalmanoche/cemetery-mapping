@extends('layouts.adminLayout.admin_design')
@section('content')
    <div id="content-header">
        <div id="breadcrumb">
            <a href="index.html" title="Go to Home">
                <i class="icon-home"></i> Home
            </a>
            <a href="#" class="tip-bottom">
                <i class="icon icon-user"></i> Users list
            </a>
    </div>
        @if ($message = \Illuminate\Support\Facades\Session::get('ok'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
    <div class="container-fluid">

    <div class="widget-box">
        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>
                User's list table
                    |
                <a href="{{route('user.create')}}">
                    Add User
                    <i class="icon icon-plus"> </i>
                </a>
            </h5>
        </div>
        <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
                <thead>
                <tr>
                    <th>First name</th>
                    <th>Middle name</th>
                    <th>Last name</th>
                    <th>email</th>
                    <th>Created_at</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach( $users as $user)
                    <tr class="gradeX">
                        <td>{{$user->first_name}}</td>
                        <td>{{$user->middle_name}}</td>
                        <td>{{$user->last_name}}</td>
                        <td>{{$user->email}}</td>
                        <td> {{date_format($user->created_at , 'F d Y')}}</td>
                        <td style="font-size: 20px">
                            <a href="{{route('user.show',$user->id)}}" style="margin-left: 10px">
                                <l class="icon icon-edit"></l>
                            </a>

                            <a href="{{route('user.show',$user->id)}}" style="margin-left: 10px">
                                <l class="icon icon-remove-circle"></l>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
    @endsection