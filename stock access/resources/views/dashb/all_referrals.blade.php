@extends('dashb.dashlayout')
@section('dashbody')



        <!-- START CONTENT -->
        <section id="main-content" class=" ">
            <div class="wrapper main-wrapper row" style=''>

                <div class='col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h1 class="title">REFERRALS</h1>
                            <!-- PAGE HEADING TAG - END -->
                        </div>

                    </div>
                </div>

                <div class="clearfix"></div>
                <!-- MAIN CONTENT AREA STARTS -->

                <div class="col-lg-12">
                    <section class="box ">
                        <header class="panel_header">
                            <h2 class="title pull-left">All Referrals</h2>
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
                                                    <th>Name</th>
                                                    <th>Registration Date</th>
                                                    <th>Email Address</th>
                                            </thead>
                                            <tbody>
                                                @if ($all_ref->count()>0)
                                                @foreach ($all_ref as $ref)
                                                <tr>
                                                    <td>
                                                      <a href="#" class="text-yellow hover-warning">
                                                        {{$loop->index + 1}}
                                                      </a>

                                                    </td>
                                                    <td>{{$ref->name}}</td>

                                                    <td>{{$ref->email}}</td>

                                                    <td>{{$ref->created_at->diffForHumans()}}</td>
                                                    <td>email</td>

                                                  </tr>
                                                @endforeach
                                            @else

                                            <tr>
                                                <td colspan="4">
                                                    <h5 class="text-yellow hover-warning"> You have no referral, please share yout referral link to family and friends to earn referral bonus</h5>
                                                </td>
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
