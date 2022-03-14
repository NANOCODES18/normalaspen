@extends('dashb.dashlayout')
@section('dashbody')
<section id="main-content" class=" ">
    <div class="wrapper main-wrapper row" style=''>

        <div class='col-xs-12'>
            <div class="page-title">

                <div class="pull-left">
                    <!-- PAGE HEADING TAG - START -->
                    <h1 class="title">Dashboard</h1>
                    <!-- PAGE HEADING TAG - END -->
                </div>

            </div>
        </div>
        <div class="col-lg-12">
            <section class="box nobox marginBottom0">
                <div class="content-body">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-xs-12">
                            <div class="r4_counter db_box has-gradient-to-right-bottom">
                                <div class="stats">
                                    <h3 class="color-white mb-5">${{$funds? $funds->totalbalance : 0.01}}</h3>
                                    <span>Total Balance</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-xs-12">
                            <div class="r4_counter db_box">
                                <div class="stats">
                                    <h3 class="mb-5">${{$funds? $funds->currentinvestment : 0.01}}</h3>
                                    <span>Trading Balance</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-xs-12">
                            <div class="r4_counter db_box">
                                <div class="stats">
                                    <h3 class="mb-5">${{$funds? $funds->balance : 0.01}}</h3>
                                    <span>Available Balance</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-xs-12">
                            <div class="r4_counter db_box">
                                <div class="stats">
                                    <h3 class="mb-5">${{$funds? $funds->totalprofit : 0.01}}</h3>
                                    <span>Total Profit</span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- End .row -->
                </div>
            </section>
        </div>

        <div class="clearfix"></div>
        <!-- MAIN CONTENT AREA STARTS -->

        <div class="col-lg-8">
            <section class="box" style="border-left: 3px solid #e77512;">
                <header class="panel_header">
                    <h2 class="title pull-left">Recent trading activities</h2>
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
                                            <th>ID Number</th>
                                            <th data-priority="1">Time</th>
                                            <th data-priority="3">Amount</th>
                                            <th data-priority="1">status</th>
                                    </thead>
                                    <tbody>
                                        @if ($user_deposits->count() > 0)
                            @foreach ($user_deposits as $item)
                            <tr>
                                <td><i class="fa fa-dot-circle-o complete"></i></td>
                                <td>{{$item->created_at->diffForHumans()}}</td>
                                <td> <i class="fa fa-plus complete normal"></i> ${{$item->amount}}</td>
                                <td>
                                    @if ($item->status >0)
                                    <a href='#' class='text-green hover-success status-complete'>Completed </a>
                                    @else
                                    <a href='#' class='text-yellow hover-warning'>pending</a>
                                    @endif
                                </td>
                              </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="2"><a href="{{route('userdashb_deposit')}}" class="text-yellow hover-warning">You have no successful deposit click here to make a deposit</a></td>
                              </tr>
                            @endif
                            @if ($withdrawals->count() > 0)
                            @foreach ($withdrawals as $item)
                            <tr>
                                <td><i class="fa fa-dot-circle-o complete"></i></td>
                                <td>{{$item->created_at->diffForHumans()}}</td>
                                <td><i class="fa fa-minus complete normal"></i>{{$item->amount}}</td>
                                <td>
                                    @if ($item->status >0)
                                    <a href='#' class='text-green hover-success'>Completed</a>
                                    @else
                                    <a href='#' class='text-yellow hover-warning'>pending</a>
                                    @endif
                              </tr>

                            @endforeach
                            @else
                            <tr>
                                <td colspan="2"><a href="{{route('userdashb_withdrawal')}}" class="text-yellow hover-warning">You have not made any successful withdrawal</a></td>
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

        <div class="col-lg-4">
            <section class="box ">
                <header class="panel_header">
                    <h2 class="title pull-left">Live crypto prices</h2>
                    <div class="actions panel_actions pull-right">
                        <a class="box_toggle fa fa-chevron-down"></a>
                        <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                        <a class="box_close fa fa-times"></a>
                    </div>
                </header>
                <div class="content-body">
                    <div class="row">
                        <div class="col-xs-12 mt-5">
                            <script>
                                baseUrl = "https://widgets.cryptocompare.com/";
                                var scripts = document.getElementsByTagName("script");
                                var embedder = scripts[scripts.length - 1];
                                (function() {
                                    var appName = encodeURIComponent(window.location.hostname);
                                    if (appName == "") {
                                        appName = "local";
                                    }
                                    var s = document.createElement("script");
                                    s.type = "text/javascript";
                                    s.async = true;
                                    var theUrl = baseUrl + 'serve/v1/coin/multi?fsyms=BTC,ETH,XMR,LTC,XRP,NEO,DASH&tsyms=USD,EUR,CNY,GBP';
                                    s.src = theUrl + (theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
                                    embedder.parentNode.appendChild(s);
                                })();
                            </script>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="clearfix"></div>

        <!-- MAIN CONTENT AREA ENDS -->
    </div>
</section>


@endsection()

