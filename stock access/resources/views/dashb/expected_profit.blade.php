@extends('dashb.dashlayout')
@section('dashbody')

        <!-- START CONTENT -->
        <section id="main-content" class=" ">
            <div class="wrapper main-wrapper row" style=''>

                <div class='col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h1 class="title">EXPECTED PROFIT</h1>
                            <!-- PAGE HEADING TAG - END -->
                        </div>

                    </div>
                </div>

                <div class="clearfix"></div>
                <!-- MAIN CONTENT AREA STARTS -->

                <div class="col-lg-12">
                    <section class="box ">
                        <header class="panel_header">
                            <h2 class="title pull-left">All Expected Profit</h2>
                            <div class="actions panel_actions pull-right">
                                <a class="box_toggle fa fa-chevron-down"></a>
                                <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                                <a class="box_close fa fa-times"></a>
                            </div>
                        </header>
                        <div class="content-body">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="table-responsive" data-pattern="priority-columns">
                                        <table id="tech-companies-1" class="table table-small-font no-mb table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>S/N</th>
                                                    <th>Package Name</th>
                                                    <th>Invested Date</th>
                                                    <th>Invested Amount</th>
                                                    <th>Maturity Date</th>
                                                    <th>Profit</th>
                                                    <th>Total Profit</th>
                                            </thead>
                                            <tbody>
                                                @if ($expected_profit->count()>0)

                             @php
                                $sum_profit = 0;
                                $sum_profit_total = 0;
                             @endphp
                                 @foreach ($expected_profit as $profit)

                                 <tr>
                                    <td class="text-center">{{$loop->index + 1}}</td>
                                    <td><a href="#" class="text-yellow hover-warning">{{$profit->investmentplan}}</a></td>
                                    <td class="text-right"><span></span>{{Carbon\Carbon::parse($profit->investmentdate)->diffForHumans()}}</td>
                                    <td class="text-right"><span>$</span> {{$profit->investmentamount}}</td>
                                    <td class="text-right"><span class="label label-success">{{Carbon\Carbon::parse($profit->investmentmaturitydate)->diffForHumans()}}</span></td>
                                    <td class="text-right"><span>$</span>{{$profit->investmentprofit}}</td>
                                    <td class="text-right"><span>$</span>{{$profit->investmenttotalprofit}}</td>

                                 </tr>
                                 @php
                                   $sum_profit += $profit->investmentprofit ;
                                   $sum_profit_total +=  $profit->investmenttotalprofit;
                                 @endphp
                                 @endforeach
                                 <tr>
                                    <td class="text-center" colspan="2">Total Profit = {{$sum_profit}}</td>

                                    <td class="text-right" colspan="3"><span>$</span> Total Amount ={{$sum_profit_total}}</td>

                                 </tr>

                             @else

                             <tr>
                                <td class="text-center" colspan="7">You have no investment currently running</td>
                             </tr>
                             @endif



                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <!-- MAIN CONTENT AREA ENDS -->

            </div>
        </section>

















@endsection()
