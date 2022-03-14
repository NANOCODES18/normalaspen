@extends('dashb.dashlayout')
@section('dashbody')

        <!-- START CONTENT -->
        <section id="main-content" class=" ">
            <div class="wrapper main-wrapper row" style=''>

                <div class='col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h1 class="title">MESSAGES</h1>
                            <!-- PAGE HEADING TAG - END -->
                        </div>

                    </div>
                </div>

                <div class="clearfix"></div>
                <!-- MAIN CONTENT AREA STARTS -->

                <div class="col-lg-12">
                    <section class="box ">
                        <header class="panel_header">
                            <h2 class="title pull-left">Info</h2>
                            <div class="actions panel_actions pull-right">
                                <a class="box_toggle fa fa-chevron-down"></a>
                                <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                                <a class="box_close fa fa-times"></a>
                            </div>
                        </header>
                        <div class="content-body">
                            <div class="row">
                                <div class="col-xs-12">
                                    Messages from admin and promotions are included here
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <!-- MAIN CONTENT AREA ENDS -->

            </div>
        </section>
        <!-- END CONTENT -->


















<section class="content-header">
    <h1>
      Messages
    </h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="breadcrumb-item"><a href="#">My messages</a></li>
      <li class="breadcrumb-item active">messages</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">


      <h5 class="mb-15">Messages from admin and promotions are included here</h5>

      <div class="row">
          @if ($messages->count()>0)

          @foreach ($messages  as $message)
          <div class="col-md-12 col-lg-4">
            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title d-block text-center">{{$message->message_title}}</h3>
              </div>
              <div class="box-body">
                  <a class="d-block" href="welcome.html" target="_blank">
                    {{$message->message}}
                  </a>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          @endforeach
          <div class="col-md-12 col-lg-12">
            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title d-block text-center">No new messages</h3>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          @else

          @endif

      </div>

  </section>



@endsection()
