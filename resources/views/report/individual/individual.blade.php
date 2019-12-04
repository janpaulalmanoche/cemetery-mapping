



<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<style>
    @media print {
        button {display: none;}
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="invoice-title" style="text-align: center">


                <h3>MONTE CIELO ETERNAL GARDEN</h3>
                <h5> </h5>


                {{--<strong>Date Print :  {{date('F d Y',strtotime(\Carbon\Carbon::now()))}}</strong>--}}
            </div>
            <br/>
            <div class="invoice-title" style="text-align:left">

                <strong><h5></h5></strong>

                <h5 style="float: right;margin-right: -1px;margin-top: -28px;">Date Print :  {{date('F d Y',strtotime(\Carbon\Carbon::now()))}}</h5>


            </div>

            <hr>

            {{--<div class="row">--}}
            {{--<div class="col-xs-6">--}}
            {{--<address>--}}


            {{--</address>--}}

            {{--</div>--}}
            {{--<div class="col-xs-6 text-right">--}}
            {{--<address>--}}

            {{--</address>--}}
            {{--</div>--}}
            {{--</div>--}}
            <div class="row">
                <div class="col-xs-6">

                    <address>

                        {{--<strong>Selected Date : <br/></strong>--}}
                        {{--<strong>Type :</strong>--}}
                    </address>
                    <address>
                </div>

                <div class="col-xs-6 text-right">



                </div>
            </div>
        </div>
    </div>
    <button type="button" class="btn-primary" onClick="window.print()" style="margin-bottom: 20px; ">
        PRINT REPORT
    </button>
    <a href="{{url('/report-individual')}}">
        <button type="button" class="btn-primary">
            Back
        </button>
    </a>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong></strong></h3>
                    <h3 class="panel-title"><strong></strong></h3>
                </div>
                <div >
                    <div >
                        <table class="table " style>

                            <thead>
                            <tr>
                                <td class="text-center"><strong>First Name</strong></td>
                                <td class="text-center"><strong>Middle Name</strong></td>
                                <td class="text-center"><strong>Last Name</strong></td>
                                <td class="text-center"><strong>BIRTH DATE</strong></td>
                                <td class="text-center"><strong>DECEASED DATE</strong></td>
                                <td class="text-center"><strong>PLOT ID</strong></td>
                                <td class="text-center"><strong>SECTION</strong></td>
                            </tr>
                            </thead>
                            <tbody>
                            <!-- foreach ($order->lineItems as $line) or some such thing here -->

                            <tr>


                                <td class="text-center">{{ucfirst($record->first_name)}}</td>
                                <td class="text-center">{{ucfirst($record->middle_name)}}</td>
                                <td class="text-center">{{ucfirst($record->first_name)}}</td>
                                <td class="text-center">{{date('F d Y',strtotime($record->birth_date))}}</td>

                                <td class="text-center">{{date('F d Y',strtotime($record->deceased_date))}}</td>
                                <td class="text-center">{{$record->plot_id}}</td>
                                <td class="text-center">{{$record->plots()->first()->area()->first()->area}}</td>

                            </tr>


                            <tr>


                            <tr>


                            </tr>


                            </tbody>


                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>