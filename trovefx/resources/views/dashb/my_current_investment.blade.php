@extends('dashb.dashlayout')
@section('dashbody')

        <!-- START CONTENT -->
        <section id="main-content" class=" ">
            <div class="wrapper main-wrapper row" style=''>

                <div class='col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h1 class="title">MY INVESTMENTS</h1>
                            <!-- PAGE HEADING TAG - END -->
                        </div>

                    </div>
                </div>

                <div class="clearfix"></div>
                <!-- MAIN CONTENT AREA STARTS -->

                <div class="col-lg-12">
                    <section class="box ">
                        <header class="panel_header">
                            <h2 class="title pull-left">My Current Running Invesments</h2>
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
                                                    <th>Plan</th>
                                                    <th>Invested Date</th>
                                                    <th>Amount</th>
                                                    <th>Maturity Date</th>
                                                    <th>Profit</th>
                                                    <th>Status</th>
                                            </thead>
                                            <tbody>
                                                @if ($my_current_investments->count() >0)
                             @foreach ($my_current_investments as $my_investment)
                             <tr>
                                <td class="text-center">{{$loop->index + 1}}</td>
                                <td><a href="#" class="text-yellow hover-warning">{{$my_investment->investmentplan}}</a></td>
                                <td class="text-right"><span></span> {{Carbon\Carbon::parse($my_investment->investmentdate)->diffForHumans() }}</td>
                                <td class="text-right"><span>$</span> {{$my_investment->investmentamount}}</td>
                                <td class="text-right"><span></span>{{Carbon\Carbon::parse($my_investment->investmentmaturitydate)->diffForHumans() }}</td>
                                <td class="text-right"><span>$</span> {{$my_investment->investmentprofit}}</td>
                                <td class="text-right"><span class="label label-success">Still Running</span></td>
                             </tr>

                             @endforeach

                             @else
                             <tr>
                                <td class="text-center"></td>
                                <td colspan="5" class="text-center"><a href="#" class="text-yellow hover-warning">You have no current running Investment</a></td>

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
        <!-- END CONTENT -->





@endsection()
