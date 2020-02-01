@extends('layouts.adminLayout.admin_design')
@section('content')
    <div id="content-header">
        <div id="breadcrumb">
            <a href="index.html" title="Go to Home">
                <i class="icon-home"></i> Home
            </a>
            <a href="#" class="tip-bottom">
                <i class="icon icon-user"></i> Area Plot Report
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
                <div class="widget-title"><span class="icon"><i class="icon-th"></i></span>
                    <h5>
                        By Area Report
                    </h5>
                </div>
                <div class="widget-content nopadding">
                    <table class="table table-bordered data-table">
                        <thead>
                        <tr>
                            <th>Select Area</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                            <tbody>

                            <tr class="gradeX">
                                <td style="width:450px">
                                    <form action="{{url('area-report')}}" method="post">@csrf
                                    <select name="area_id" class="form-control">
                                        @foreach( $area as $a)
                                            <option value="{{$a->id}}"> {{$a->area}}</option>
                                        @endforeach
                                    </select>

                                </td>

                                <td style="margin-left:100px">

                                    <input type="submit" value="Print Report" class="btn btn-primary">

                        </form>

                                </td>
                            </tr>
                            </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
