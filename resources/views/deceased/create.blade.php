@extends('layouts.adminLayout.admin_design')
@section('content')

    <div id="content-header">
        <div id="breadcrumb">
            <a href="index.html" title="Go to Home"
            ><i class="icon-home"></i> Home</a>
            <a href="#" class="tip-bottom"><i class="icon icon-plus"></i> Add Record </a></div>
    </div>

    @if ($message = \Illuminate\Support\Facades\Session::get('error'))
        <div class="alert alert-warning alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

    <div class="container-fluid" >

        <div class="row-fluid">
            <div class="span7">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                        <h5>Deceased Person Information's</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <form action="{{route('record.store')}}" method="POST" class="form-horizontal">
                            @csrf
                            <div class="control-group">
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
                                <label class="control-label">Birth Date :</label>
                                <div class="controls">
                                    <input type="date"
                                           name="birthday"
                                           class="span11"
                                           value="{{old('birthday')}}"
                                    >
                                    <br/>
                                    @error('birthday')
                                    <span class="invalid-feedback" role="alert" style="color: orange">
                                            <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="control-group">
                                <label class="control-label">Deceased Date :</label>
                                <div class="controls">
                                    <input type="date"
                                           name="deceased"
                                           class="span11"
                                           value="{{old('deceased')}}"
                                    >
                                    <br/>
                                    @error('deceased')
                                    <span class="invalid-feedback" role="alert" style="color: orange">
                                            <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Plot Location :</label>
                                <div class="controls">
                                    <select class="span11" name="plot_id">
                                        <option selected>Select Plot</option>
                                    @foreach($plot as $plots)
                                            <option selected value="{{$plots->id}}">
                                                Plot ID: {{$plots->id}} |
                                                Area : {{$plots->area()->first()->area}}
                                            </option>

                                        @endforeach
                                    </select>
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