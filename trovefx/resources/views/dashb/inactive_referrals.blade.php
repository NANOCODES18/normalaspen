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
                            <h2 class="title pull-left">Inactive Referrals</h2>
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
                                                @if ($all_inactive_ref->count()>0)
                                                @foreach ($all_inactive_ref as $ref)
                                                <tr>
                                                    <td>
                                                      <a href="#" class="text-yellow hover-warning">
                                                        {{$loop->index + 1}}
                                                      </a>

                                                    </td>
                                                    <td>{{$ref->name}}</td>

                                                    <td>{{$ref->created_at->diffForHumans()}}</td>

                                                    <td>{{$ref->email}}</td>

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
        <!-- END CONTENT -->








 <!-- Content Header (Page header) -->
 <section class="content-header">
    <h1>
     Referrals
    </h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="breadcrumb-item"><a href="#">Referrals</a></li>
      <li class="breadcrumb-item active">Inactive Referrals</li>
    </ol>
  </section>
      <div class="col-12">
          <!-- Default box -->
            <div class="box box-solid bg-black">
              <div class="box-header with-border">
                <h3 class="box-title">Inactive eferrals</h3>

                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                          title="Collapse">
                    <i class="fa fa-minus"></i></button>
                  <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
                </div>
              </div>
              <div class="box-body">
                  <div class="table-responsive">
                      <table class="table table-bordered no-margin">
                        <thead>
                          <tr>
                              <th>SN</th>
                            <th>Name</th>
                            <th>Registration date</th>
                           <th>Email address</th>
                          </tr>
                        </thead>
                        <tbody>
                        @if ($all_inactive_ref->count()>0)
                                @foreach ($all_inactive_ref as $ref)
                                <tr>
                                    <td>
                                      <a href="#" class="text-yellow hover-warning">
                                        {{$loop->index + 1}}
                                      </a>

                                    </td>
                                    <td>{{$all_inactive_ref->name}}</td>

                                    <td>{{$all_inactive_ref->email}}</td>

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
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
      </div>

    </div>
  </section>
  <!-- /.content -->
@endsection()
