@extends('dashb.dashlayout')
@section('dashbody')


        <!-- START CONTENT -->
        <section id="main-content" class=" ">
            <div class="wrapper main-wrapper row" style=''>

                <div class='col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h1 class="title">INVESTMENT PLANS</h1>
                            <!-- PAGE HEADING TAG - END -->
                        </div>

                    </div>
                </div>

                <div class="clearfix"></div>
                <!-- MAIN CONTENT AREA STARTS -->

                <div class="col-lg-12">
                    <section class="box ">
                        <header class="panel_header">
                            <h2 class="title pull-left">Packages</h2>
                            <div class="actions panel_actions pull-right">
                                <a class="box_toggle fa fa-chevron-down"></a>
                                <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                                <a class="box_close fa fa-times"></a>
                            </div>
                        </header>
                        <div class="content-body">
                            <div class="row">
                                @if (isset($plans)  && $plans->count() > 0)
                                @foreach ($plans as $plan)


                               <div class="col-lg-4">
                                <div class="card" style="padding:0px;">
                                    <img src="dashb/assets/images/investmentplan/img{{$loop->index + 1}}.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h3 class="card-title text-center">{{$plan->plan}}</h3>
                                        <div class="r4_counter db_box has-gradient-to-right-bottom">
                                            <h3 class="color-white mb-5 text-center">
                                                {{$plan->percentage}}% ROI
                                            </h3>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <h5 class="color-white text-center">${{$plan->minimum}}</h5>
                                                    <h5 class="color-white text-center">Minimum</h5>
                                                </div>
                                                <div class="col-xs-6">
                                                    <h5 class="color-white text-center">${{$plan->maximum}}</h5>
                                                    <h5 class="color-white text-center">Maximum</h5>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="transfer-wraper">
                                                        <form action="{{route('userdashb_plan')}}" method="POST">
                                                            @csrf
                                                              <input type="text" hidden name="plan" value="{{$plan->plan}}" id="">
                                                        <div class="form-group no-mb">
                                                            <label class="color-white text-center">Select Duration</label>
                                                            <span class="desc"></span>

                                                            <select class="form-control" aria-label="Duration" name="duration" placeholder="Select Duration">
                                                                <option value="1">1 Week</option>
                                                                <option value="2">2 Weeks</option>
                                                                <option value="3">3 Weeks</option>
                                                                <option value="4">4 Weeks</option>
                                                                <option value="5">5 Weeks</option>
                                                            </select>

                                                            <span class="desc"></span>

                                                            <div class="input-group mb-10">
                                                                <span class="input-group-addon">Amount</span>
                                                                <input type="text" name="amount" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="enter amount">

                                                            </div>

                                                            <button type="button" class="btn btn-primary btn-lg mt-20 has-gradient-to-right-bottom" style="width:100%"> Proceed With Investment </button>
                                                        </div>
                                                    </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                                @endforeach
                            @else

                            <div class="col-md-12 col-lg-12">
                             <div class="box box-default pull-up" style="text-align: center">
                               <h4>
                                 No investment plan set by admin
                               </h4>
                             </div>
                            </div>

                            @endif

                            </div>
                        </div>
                    </section>
                </div>

                <!-- MAIN CONTENT AREA ENDS -->

            </div>
        </section>
        <!-- END CONTENT -->




@endsection()
