@extends('layouts.adminLayout.admin_design')
@section('content')

    <div id="content-header">
        <div id="breadcrumb">
            <a href="index.html" title="Go to Home"
            ><i class="icon-home"></i> Home</a>
            <a href="#" class="tip-bottom"><i class="icon icon-plus"></i> Edit User </a></div>
    </div>

    <div class="container-fluid" >

        <div class="row-fluid">
            <div class="span7">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                        <h5>Edit User Details</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <form action="{{url('user/update')}}" method="POST" class="form-horizontal">
                            @csrf
                            <div class="control-group">

                                <label class="control-label">First Name :</label>
                                <div class="controls">
                                    <input type="text"
                                           name="first_name"
                                           class="span11"
                                           value="{{$user->first_name}}"
                                           placeholder="First name" />
                                    <br/>
                                    @error('first_name')
                                    <span class="invalid-feedback" role="alert" style="color: orange">
                                            <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Middle Name :</label>
                                <div class="controls">
                                    <input type="text"
                                           name="middle_name"
                                           class="span11"
                                           value="{{$user->middle_name}}"
                                           placeholder="Middle name" />
                                    <br/>
                                    @error('middle_name')
                                    <span class="invalid-feedback" role="alert" style="color: orange">
                                            <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Last Name :</label>
                                <input type="hidden" value="{{$user->id}}" name="user_id">
                                <div class="controls">
                                    <input type="text"
                                           name="last_name"
                                           class="span11"
                                           value="{{$user->last_name}}"
                                           placeholder="Last name" />
                                    <br/>
                                    @error('last_name')
                                    <span class="invalid-feedback" role="alert" style="color: orange">
                                            <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="control-group">
                                <label class="control-label">Email :</label>
                                <div class="controls">
                                    <input type="email"
                                           name="email"
                                           class="span11"
                                           value="{{$user->email }}"
                                           placeholder="email" />
                                    <br/>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert" style="color: orange">
                                            <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Password :</label>
                                <div class="controls">
                                    <input type="password"
                                           name="password"
                                           class="span11"
                                           value="{{old('password')}}"
                                           placeholder="Password" />
                                    <br/>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert" style="color: orange">
                                            <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>





                            <div class="form-actions">
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection