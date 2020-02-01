@extends('layouts.adminLayout.admin_design')
@section('content')

    <div id="content-header">
        <div id="breadcrumb">
            <a href="index.html" title="Go to Home"
            ><i class="icon-home"></i> Home</a>
            <a href="#" class="tip-bottom"><i class="icon icon-plus"></i> Add User </a></div>
    </div>

    <div class="container-fluid" >

        <div class="row-fluid">
            <div class="span7">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                        <h5>User Information</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <form action="{{route('user.store')}}" method="POST" class="form-horizontal">
                            @csrf
                            <div class="control-group">


                                {{--<div class="control-group">--}}
                                    {{--<label class="control-label">Role :</label>--}}
                                    {{--<div class="controls">--}}
                                        {{--<select class="span11" name="role_id">--}}
                                            {{--<option selected>Select Role</option>--}}
                                            {{--@foreach($role as $roles)--}}
                                                {{--<option value="{{$roles->id}}">--}}
                                                  {{--{{$roles->role}}--}}
                                                {{--</option>--}}
                                            {{--@endforeach--}}
                                        {{--</select>--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                                <label class="control-label">First Name :</label>
                                <div class="controls">
                                    <input type="text"
                                           name="first_name"
                                           class="span11"
                                           value="{{old('first_name')}}"
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
                                           value="{{old('middle_name')}}"
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
                                <div class="controls">
                                    <input type="text"
                                           name="last_name"
                                           class="span11"
                                           value="{{old('last_name')}}"
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
                                           value="{{old('email')}}"
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


                            <div class="control-group">
                                <label class="control-label">Password :</label>
                                <div class="controls">
                                    <input type="password"
                                           name="password_confirmation"
                                           class="span11"
                                           placeholder="Confirm Password" />
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