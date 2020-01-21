@extends('layouts.adminLayout.admin_design')
@section('content')
    <div id="content-header">
        <div id="breadcrumb">
            <a href="index.html" title="Go to Home">
                <i class="icon-home"></i> Home
            </a>
            <a href="#" class="tip-bottom">
                <i class="icon icon-user"></i> Record's list
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
                        Record's list table
                    </h5>
                </div>
                <div class="widget-content nopadding">
                    <table class="table table-bordered data-table">
                        <thead>
                        <tr>
                            <th>Last name</th>
                            <th>Middle name</th>
                            <th>First name</th>
                            <th>Birth Date</th>
                            <th>Deceased Date</th>
                            <th>Plot location</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach( $records as $record)
                            <tr class="gradeX">
                                <td>{{$record->last_name}}</td>
                                <td>{{$record->middle_name}}</td>
                                <td>{{$record->first_name}}</td>
                                <td> {{date('F d Y',strtotime($record->birth_date))}}</td>
                                <td> {{date('F d Y',strtotime($record->deceased_date))}}</td>
                                <td>
                                    Plot ID: {{$record->plot_id}}
                                    <br/>
                                    Area : {{$record->plots()->first()->area()->first()->area}}
                                </td>
                                <td> {{date( 'F d Y',strtotime($record->created_at))}}</td>
                                <td style="font-size: 15px">
                                    <a href="{{url('/visitor-individual',$record->id)}}" style="margin-left: 10px">
                                        <button class="btn btn-primary">
                                         Visitor   Report     <l class="icon icon-edit"></l>
                                        </button>
                                    </a>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
