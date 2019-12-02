@extends('layouts.adminLayout.admin_design')
@section('content')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
        .grid {
            display: grid;
            grid-template-columns: repeat(8, 1fr);
            grid-gap: 10px;
            align-items: start;
            justify-items: center;
            margin:5px 5px;
        }
        .grid img {
            border: 1px solid rgba(0,0,0,0.3);
            box-shadow: 2px 2px 6px 0px rgba(0,0,0,0.3);
            max-width: 100%;
        }
        .grid-item {

            background-color: rgba(255, 255, 255, 0.8);
            border: 1px solid rgba(0, 0, 0, 0.8);
            padding: 20px;
            font-size: 13px;
            text-align: center;
        }
    </style>
    <div id="content-header">
        <div id="breadcrumb">
            <a href="index.html" title="Go to Home">
                <i class="icon-home"></i> Home
            </a>
            <a href="#" class="tip-bottom">
                <i class="icon icon-user"></i> Record's list
            </a>
        </div>
        <div class="container-fluid">
            <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                <h5>Plot Area Information</h5>
            </div>
            <div class="widget-box">
                <div class="widget-content nopadding">
                    <main class="grid">
                        @foreach($plots as $plot)
                            <a
                                    @if($plot->status == 'occupied')
                                    href="{{route('record.show',$plot->id)}}"
                                    @else
                                    href="{{url('/add-record',$plot->id)}}"
                                    @endif

                                    data-toggle="tooltip"
                                    @if($plot->status == 'occupied')
                                    title="Occupied by : {{ucfirst($plot->record()->first()->first_name)}}
                                    {{ucfirst($plot->record()->first()->last_name)}}
                                            "
                                    @else
                                    title="Not Occupied"
                                    @endif >
                                <div class="grid-item">Plot ID : {{$plot->id}}
                                    Area : {{$plot->area()->first()->area}}
                                    Status : {{$plot->status}}

                                </div>

                            </a>
                        @endforeach
                    </main>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
@endsection