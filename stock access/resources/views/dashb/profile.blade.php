@extends('dashb.dashlayout')
@section('dashbody')
        <!-- START CONTENT -->
        <section id="main-content" class=" ">
            <div class="wrapper main-wrapper row" style=''>

                <div class='col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h1 class="title">User Profile</h1>
                            <!-- PAGE HEADING TAG - END -->
                        </div>

                        <div class="pull-right hidden-xs">
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index-dashboard-2.html"><i class="fa fa-home"></i>Home</a>
                                </li>
                                <li class="active">
                                    <strong>User Profile</strong>
                                </li>
                            </ol>
                        </div>

                    </div>
                </div>
                <div class="clearfix"></div>
                <!-- MAIN CONTENT AREA STARTS -->

                <div class="col-lg-12">

                    <div class="row">

                        <div class="col-md-4 col-sm-6 col-xs-12">

                            <section class="box has-border-left-3">
                                <div class="content-body">

                                   <div class="uprofile-image mt-30">
                                        <img alt="" src="{{asset('dashb/data/profile/user.png')}}" class="img-responsive">
                                    </div>
                                    <div class="uprofile-name">
                                        <h3>
                                            <a href="#">{{Auth::user()->name}}</a>
                                            <!-- Available statuses: online, idle, busy, away and offline -->
                                            <span class="uprofile-status online"></span>
                                        </h3>
                                        <p class="uprofile-title"> Trader</p>
                                    </div>
                                    <div class="uprofile-info">
                                        <form action="" method="post" enctype="multipart/form-data">
                                            <input type="file" name="photo" class="form-control" >
                                            <button type="button" class="btn btn-primary btn-lg mt-20 has-gradient-to-right-bottom" style="width:100%"> Change Profile Photo </button>
                                        </form>
                                    </div>

                                </div>
                            </section>
                        </div>

                        <div class="col-lg-8 col-sm-8 col-xs-12">
                            <section class="box has-border-left-3">

                                <div class="content-body ">
                                    <div class="row">

                                        <div class="form-container">
                                            <form action="{{route('userdashb_personal_detail')}}" method="POST">
                                                @csrf

                                                <div class="row">
                                                    <div class="col-xs-12">

                                                        <div class="form-group no-mb">
                                                            <!-- <label class="form-label">Name</label> -->
                                                            <span class="desc"></span>

                                                            <div class="input-group mb-10">
                                                                <span class="input-group-addon">Name</span>
                                                                <input type="text" class="form-control" name="name" type="text" value="{{Auth::user()->name}}" placeholder="{{Auth::user()->name}}">

                                                            </div>

                                                            <!-- <label class="form-label">Email Address</label> -->
                                                            <span class="desc"></span>

                                                            <div class="input-group mb-10">
                                                                <span class="input-group-addon">Email Address</span>
                                                                <input class="form-control" name='email' type="email" value="{{Auth::user()->email}}" placeholder="{{Auth::user()->email}}">

                                                            </div>

                                                            <!-- <label class="form-label">Phone Number</label> -->
                                                            <span class="desc"></span>

                                                            <div class="input-group mb-10">
                                                                <span class="input-group-addon">Phone Number</span>
                                                                <input class="form-control" name="phone" type="tel" value="{{Auth::user()->phone}}" placeholder="{{Auth::user()->phone}}">

                                                            </div>

                                                            <button type="submit" class="btn btn-primary btn-lg mt-20 has-gradient-to-right-bottom" style="width:100%"> Submit </button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="box box-solid bg-black">
                                            <div class="box-header with-border">
                                              <h3 class="box-title">Social media</h3>
                                            </div>
                                            <!-- /.box-header -->
                                            <div class="box-body">
                                              <div class="row">
                                                <div class="col-12">
                                                    <form action="{{route('userdashb_social_media')}}" method="POST">
                                                      @csrf
                                                    <div class="input-group mb-10">
                                                      <label class="input-group-addon col-form-label">Facebook</label>
                                                      <div class="col-sm-10">
                                                        <input class="form-control" name="facebook" type="text" value="{{Auth::user()->facebook}}" placeholder="{{Auth::user()->facebook}}">
                                                      </div>
                                                    </div>
                                                    <div class="input-group mb-10">
                                                      <label class="input-group-addon col-form-label">Instagram</label>
                                                      <div class="col-sm-10">
                                                        <input class="form-control" name="instagram" type="text" value="{{Auth::user()->instagram}}" placeholder="{{Auth::user()->instagram}}">
                                                      </div>
                                                    </div>
                                                    <div class="input-group mb-10">
                                                      <span class="input-group-addon col-form-label">Twitter</span>
                                                      <div class="col-sm-10">
                                                        <input class="form-control" name="twitter" type="text" value="{{Auth::user()->twitter}}" placeholder="{{Auth::user()->twitter}}">
                                                      </div>
                                                    </div>
                                                    <div class="input-group mb-10">
                                                      <label class="input-group-addon col-form">Linkedin</label>
                                                      <div class="col-sm-10">
                                                        <input class="form-control" name="linkedin" type="text" value="{{Auth::user()->linkedin}}" placeholder="{{Auth::user()->linkedin}}">
                                                      </div>
                                                    </div>
                                                    <div class="input-group mb-10">
                                                      <label class="col-sm-2 col-form-label"></label>
                                                      <div class="col-sm-10">
                                                        <button type="submit" class="btn btn-yellow">Submit</button>
                                                      </div>
                                                    </div>
                                                  </form>
                                                </div>
                                                <!-- /.col -->
                                              </div>
                                              <!-- /.row -->
                                            </div>
                                            <!-- /.box-body -->
                                          </div>
                                    </div>
                                </div>

                            </section>
                            <div class="box-content">
                                <span class="row"> Change Password</span>
                                <div class="box-body">
                                  <form action="{{route('userdashb_password_reset')}}" method="post">
                                      @csrf
                                    <div class="form-group row">
                                        <label class="col-12" for="login1-password">Password</label>
                                        <div class="col-12">
                                            <input type="password" class="form-control" id="login1-password" name="oldpassword" placeholder="Enter your password..">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12" for="lock1-password1">New Password</label>
                                        <div class="col-12">
                                            <input type="password" class="form-control" id="lock1-password1" name="newpassword" placeholder="Enter your new password..">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12" for="lock1-password1">Confirm New Password</label>
                                        <div class="col-12">
                                            <input type="password" class="form-control" id="lock1-password1" name="cnewpassword" placeholder="Renter your new password..">
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-danger">
                                                <i class="fa fa-arrow-right mr-5"></i> Change password
                                            </button>
                                        </div>
                                    </div>
                                  </form>
                                </div>
                              </div>
                        </div>

                    </div>
                </div>
{{--
                <!-- MAIN CONTENT AREA ENDS -->
            </div>
        </section>
        <!-- END CONTENT -->
        <div class="page-chatapi hideit">

            <div class="search-bar">
                <input type="text" placeholder="Search" class="form-control">
            </div>

            <div class="chat-wrapper">

                <h4 class="group-head">Favourites</h4>
                <ul class="contact-list">

                    <li class="user-row " id='chat_user_1' data-user-id='1'>
                        <div class="user-img">
                            <a href="#"><img src="../data/profile/avatar-1.png" alt=""></a>
                        </div>
                        <div class="user-info">
                            <h4><a href="#">Joge Lucky</a></h4>
                            <span class="status available" data-status="available"> Available</span>
                        </div>
                        <div class="user-status available">
                            <i class="fa fa-circle"></i>
                        </div>
                    </li>
                    <li class="user-row " id='chat_user_2' data-user-id='2'>
                        <div class="user-img">
                            <a href="#"><img src="../data/profile/avatar-2.png" alt=""></a>
                        </div>
                        <div class="user-info">
                            <h4><a href="#">Folisise Chosiel</a></h4>
                            <span class="status away" data-status="away"> Away</span>
                        </div>
                        <div class="user-status away">
                            <i class="fa fa-circle"></i>
                        </div>
                    </li>
                    <li class="user-row " id='chat_user_3' data-user-id='3'>
                        <div class="user-img">
                            <a href="#"><img src="../data/profile/avatar-3.png" alt=""></a>
                        </div>
                        <div class="user-info">
                            <h4><a href="#">Aron Gonzalez</a></h4>
                            <span class="status busy" data-status="busy"> Busy</span>
                        </div>
                        <div class="user-status busy">
                            <i class="fa fa-circle"></i>
                        </div>
                    </li>

                </ul>

                <h4 class="group-head">More Contacts</h4>
                <ul class="contact-list">

                    <li class="user-row " id='chat_user_4' data-user-id='4'>
                        <div class="user-img">
                            <a href="#"><img src="../data/profile/avatar-4.png" alt=""></a>
                        </div>
                        <div class="user-info">
                            <h4><a href="#">Chris Fox</a></h4>
                            <span class="status offline" data-status="offline"> Offline</span>
                        </div>
                        <div class="user-status offline">
                            <i class="fa fa-circle"></i>
                        </div>
                    </li>
                    <li class="user-row " id='chat_user_5' data-user-id='5'>
                        <div class="user-img">
                            <a href="#"><img src="../data/profile/avatar-5.png" alt=""></a>
                        </div>
                        <div class="user-info">
                            <h4><a href="#">Mogen Polish</a></h4>
                            <span class="status offline" data-status="offline"> Offline</span>
                        </div>
                        <div class="user-status offline">
                            <i class="fa fa-circle"></i>
                        </div>
                    </li>
                    <li class="user-row " id='chat_user_6' data-user-id='6'>
                        <div class="user-img">
                            <a href="#"><img src="../data/profile/avatar-1.png" alt=""></a>
                        </div>
                        <div class="user-info">
                            <h4><a href="#">Smith Carter</a></h4>
                            <span class="status available" data-status="available"> Available</span>
                        </div>
                        <div class="user-status available">
                            <i class="fa fa-circle"></i>
                        </div>
                    </li>
                    <li class="user-row " id='chat_user_7' data-user-id='7'>
                        <div class="user-img">
                            <a href="#"><img src="../data/profile/avatar-2.png" alt=""></a>
                        </div>
                        <div class="user-info">
                            <h4><a href="#">Amilia Gozenal</a></h4>
                            <span class="status busy" data-status="busy"> Busy</span>
                        </div>
                        <div class="user-status busy">
                            <i class="fa fa-circle"></i>
                        </div>
                    </li>
                    <li class="user-row " id='chat_user_8' data-user-id='8'>
                        <div class="user-img">
                            <a href="#"><img src="../data/profile/avatar-3.png" alt=""></a>
                        </div>
                        <div class="user-info">
                            <h4><a href="#">Tahir Jemyship</a></h4>
                            <span class="status away" data-status="away"> Away</span>
                        </div>
                        <div class="user-status away">
                            <i class="fa fa-circle"></i>
                        </div>
                    </li>
                    <li class="user-row " id='chat_user_9' data-user-id='9'>
                        <div class="user-img">
                            <a href="#"><img src="../data/profile/avatar-4.png" alt=""></a>
                        </div>
                        <div class="user-info">
                            <h4><a href="#">Johanson Wright</a></h4>
                            <span class="status busy" data-status="busy"> Busy</span>
                        </div>
                        <div class="user-status busy">
                            <i class="fa fa-circle"></i>
                        </div>
                    </li>
                    <li class="user-row " id='chat_user_10' data-user-id='10'>
                        <div class="user-img">
                            <a href="#"><img src="../data/profile/avatar-5.png" alt=""></a>
                        </div>
                        <div class="user-info">
                            <h4><a href="#">Loni Tindall</a></h4>
                            <span class="status away" data-status="away"> Away</span>
                        </div>
                        <div class="user-status away">
                            <i class="fa fa-circle"></i>
                        </div>
                    </li>
                    <li class="user-row " id='chat_user_11' data-user-id='11'>
                        <div class="user-img">
                            <a href="#"><img src="../data/profile/avatar-1.png" alt=""></a>
                        </div>
                        <div class="user-info">
                            <h4><a href="#">Natcho Herlaey</a></h4>
                            <span class="status idle" data-status="idle"> Idle</span>
                        </div>
                        <div class="user-status idle">
                            <i class="fa fa-circle"></i>
                        </div>
                    </li>
                    <li class="user-row " id='chat_user_12' data-user-id='12'>
                        <div class="user-img">
                            <a href="#"><img src="../data/profile/avatar-2.png" alt=""></a>
                        </div>
                        <div class="user-info">
                            <h4><a href="#">Shakira Swedan</a></h4>
                            <span class="status idle" data-status="idle"> Idle</span>
                        </div>
                        <div class="user-status idle">
                            <i class="fa fa-circle"></i>
                        </div>
                    </li>

                </ul>
            </div>

        </div>























<style>
    .profile_link{
        color: black !important;
    }
    .profile_link_container:hover{
        color: blue !important;
    }
    .profile_link_container{
        color: white;
    }
</style>




<section class="content-header">
    <h1>
      Members Profile
    </h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="breadcrumb-item"><a href="#">Members</a></li>
      <li class="breadcrumb-item active">My Profile</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="row">
      <div class="col-xl-4 col-lg-5">

        <!-- Profile Image -->
        <div class="box bg-yellow bg-deathstar-dark">
          <div class="box-body box-profile">
            <img class="profile-user-img rounded img-fluid mx-auto d-block" src="@if (Auth::user()->profilepic != "")
            storage/profile/{{Auth::user()->profilepic}}
            @else
            dashb/images/user2-160x160.jpg
            @endif" alt="User profile picture">
            <form action="{{route('userdashb_profile_pic')}}" id="myform" method="post" enctype="multipart/form-data">
                @csrf
             <div class="form-group">
              <input type="file" name="profilepic" id="uploadBox" onchange="fileupload()" required class="form-control" title="Change profile picture">
             </div>
             <div class="form-group">
                <button type="submit" class="btn btn-sm btn-success">Change</button>
            </div>
            </form>


            <h3 class="profile-username text-center mb-0">{{Auth::user()->name}}</h3>

            <h5 class="text-center mt-0"><i class="fa fa-envelope-o mr-10"></i>{{Auth::user()->email}}</h5>

            <div class="row social-states">
                <div class="col-6 text-right"><a href="#" class="link text-white"><i class="ion ion-ios-people-outline"></i> 0</a></div>
                <div class="col-6 text-left"><a href="#" class="link text-white"><i class="ion ion-images"></i> 4</a></div>
            </div>

            <div class="row">
              <div class="col-12">
                  <div class="media-list media-list-hover media-list-divided w-p100 mt-30">
                      <h4 class="media media-single p-15 profile_link_container">
                        <i class="fa fa-arrow-circle-o-right mr-10"></i>
                        <span class="title ">
                            <a class="profile_link " href="{{route('userdashb_profile')}}">My Profile</a>
                        </span>
                      </h4>
                      <h4 class="media media-single p-15 profile_link_container">
                        <i class="fa fa-arrow-circle-o-right mr-10"></i><span class="title"><a class="profile_link" href="{{route('userdashb_investment_plans')}}">Invests</a></span>
                      </h4>
                      <h4 class="media media-single p-15 profile_link_container">
                        <i class="fa fa-arrow-circle-o-right mr-10"></i><span class="title"><a href="{{route('userdashb_wallet_address')}}" class="profile_link"> The Wallet</a></span>
                      </h4>
                      <h4 class="media media-single p-15 profile_link_container">
                        <i class="fa fa-arrow-circle-o-right mr-10"></i><span class="title"><a href="{{route('userdashb_deposit')}}" class="profile_link">Deposit</a> </span>
                      </h4>
                      <h4 class="media media-single p-15 profile_link_container">
                        <i class="fa fa-arrow-circle-o-right mr-10"></i><span class="title"><a href="P{{route('userdash_pending_deposit')}}" class="profile_link">Pending Deposit</a> </span>
                      </h4>
                      <h4 class="media media-single p-15 profile_link_container">
                        <i class="fa fa-arrow-circle-o-right mr-10"></i><span class="title"><a href="{{route('userdash_pedinging_withdrawal')}}" class="profile_link">Pending Withdrawals</a> </span>
                      </h4>
                      <h4 class="media media-single p-15 profile_link_container">
                        <i class="fa fa-arrow-circle-o-right mr-10"></i><span class="title"> <a href="" class="profile_link">Support</a></span>
                      </h4>
                  </div>
              </div>


            </div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
      <div class="col-xl-8 col-lg-7">
        <div class="box box-solid bg-black">
          <div class="box-header with-border">
            <h3 class="box-title">Personal details</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <div class="col-12">
                  <form action="{{route('userdashb_personal_detail')}}" method="POST">
                    @csrf
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                      <input class="form-control" name="name" type="text" value="{{Auth::user()->name}}" placeholder="{{Auth::user()->name}}">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Email Adress</label>
                    <div class="col-sm-10">
                      <input class="form-control" name='email' type="email" value="{{Auth::user()->email}}" placeholder="{{Auth::user()->email}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Phone Number</label>
                    <div class="col-sm-10">
                      <input class="form-control" name="phone" type="tel" value="{{Auth::user()->phone}}" placeholder="{{Auth::user()->phone}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-yellow">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
        <div class="box box-solid bg-black">
          <div class="box-header with-border">
            <h3 class="box-title">Personal address</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <div class="col-12">
                  <form action="{{route('userdashb_personal_address')}}" method="post">
                    @csrf
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Street</label>
                    <div class="col-sm-10">
                      <input class="form-control" name="street" value="{{Auth::user()->street}}" type="text" placeholder="{{Auth::user()->street}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">City</label>
                    <div class="col-sm-10">
                      <input class="form-control" name="city" type="text" placeholder="{{Auth::user()->city}}" value="{{Auth::user()->city}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">State</label>
                    <div class="col-sm-10">
                      <input class="form-control" name="state" type="text" value="{{Auth::user()->state}}" placeholder="{{Auth::user()->state}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Post Code</label>
                    <div class="col-sm-10">
                      <input class="form-control" name="postal_code" type="number" placeholder="{{Auth::user()->post_code}}" value="{{Auth::user()->post_code}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-yellow">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
        <div class="box box-solid bg-black">
          <div class="box-header with-border">
            <h3 class="box-title">Social media</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <div class="col-12">
                  <form action="{{route('userdashb_social_media')}}" method="POST">
                    @csrf
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Facebook</label>
                    <div class="col-sm-10">
                      <input class="form-control" name="facebook" type="text" value="{{Auth::user()->facebook}}" placeholder="{{Auth::user()->facebook}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Instagram</label>
                    <div class="col-sm-10">
                      <input class="form-control" name="instagram" type="text" value="{{Auth::user()->instagram}}" placeholder="{{Auth::user()->instagram}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Twitter</label>
                    <div class="col-sm-10">
                      <input class="form-control" name="twitter" type="text" value="{{Auth::user()->twitter}}" placeholder="{{Auth::user()->twitter}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Linkedin</label>
                    <div class="col-sm-10">
                      <input class="form-control" name="linkedin" type="text" value="{{Auth::user()->linkedin}}" placeholder="{{Auth::user()->linkedin}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-yellow">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->

      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

  </section>
  <!-- /.content --> --}}

@endsection()
