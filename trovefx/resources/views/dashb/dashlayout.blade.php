<!DOCTYPE html>
<html lang="en">

<head>
    <!--
        * @Package:  Bitcoin & Cryptocurrency trading Dashboard
        * @Version: 1.0.0
    -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Bitcoin & Cryptocurrency trading Dashboard</title>
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="dashb/assets/images/favicon.png" type="image/x-icon" />
    <!-- For iPhone -->
    <link rel="apple-touch-icon-precomposed" href="dashb/assets/images/apple-touch-icon-57-precomposed.png">
    <!-- For iPhone 4 Retina display -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="dashb/assets/images/apple-touch-icon-114-precomposed.png">
    <!-- For iPad -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="dashb/assets/images/apple-touch-icon-72-precomposed.png">
    <!-- For iPad Retina display -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="dashb/assets/images/apple-touch-icon-144-precomposed.png">

    <!-- CORE CSS FRAMEWORK - START -->
    <link href="dashb/assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="dashb/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="dashb/assets/plugins/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
    <link href="dashb/assets/fonts/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="dashb/assets/fonts/webfont/cryptocoins.css" rel="stylesheet" type="text/css" />
    <link href="dashb/assets/css/animate.min.css" rel="stylesheet" type="text/css" />
    <link href="dashb/assets/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
    <!-- CORE CSS FRAMEWORK - END -->

    <!-- HEADER SCRIPTS INCLUDED ON THIS PAGE - START -->

    <link href="dashb/assets/plugins/jvectormap/jquery-jvectormap-2.0.1.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="dashb/assets/plugins/morris-chart/css/morris.css" rel="stylesheet" type="text/css" media="screen" />

    <!-- HEADER SCRIPTS INCLUDED ON THIS PAGE - END -->

    <!-- CORE CSS TEMPLATE - START -->
    <link href="dashb/assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="dashb/assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <!-- CORE CSS TEMPLATE - END -->

</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->

<body class=" ">
    <!-- START TOPBAR -->
    <div class='page-topbar '>
        <div class='logo-area'>

        </div>
        <div class='quick-area'>
            <div class='pull-left'>
                <ul class="info-menu left-links list-inline list-unstyled">
                    <li class="sidebar-toggle-wrap">
                        <a href="#" data-toggle="sidebar" class="sidebar_toggle">
                            <i class="fa fa-bars"></i>
                        </a>
                    </li>
                    <li class="message-toggle-wrapper">
                        <a href="{{route('userdashb_message')}}" class="toggle">
                            <i class="fa fa-envelope"></i>
                        </a>

                    </li>
                    <li class="hidden-sm hidden-xs searchform">
                        <form action="#" method="post">
                            <div class="input-group">
                                <span class="input-group-addon">
                                <i class="fa fa-search"></i>
                            </span>
                                <input type="text" class="form-control animated fadeIn" placeholder="Search & Enter">
                            </div>
                            <input type='submit' value="">
                        </form>
                    </li>
                </ul>
            </div>
            <div class='pull-right'>
                <ul class="info-menu right-links list-inline list-unstyled">
                    <li class="profile">
                        <a href="#" data-toggle="dropdown" class="toggle">
                            <img src="dashb/data/profile/profile.jpg" alt="user-image" class="img-circle img-inline">
                            <span>{{Auth()->user()->name}} <i class="fa fa-angle-down"></i></span>
                        </a>
                        <ul class="dropdown-menu profile animated fadeIn">
                            <li>
                                <a href="{{route('userdashb_message')}}">
                                    <i class="fa fa-envelope"></i> Message
                                </a>
                            </li>
                            <li>
                                <a href="{{route('userdashb_profile')}}">
                                    <i class="fa fa-user"></i> Profile
                                </a>
                            </li>
                            <li>
                                <a href="{{route('faq')}}">
                                    <i class="fa fa-info"></i> Help
                                </a>
                            </li>
                            <li class="last">
                                <a href="{{route('logout')}}">
                                    <i class="fa fa-lock"></i> Logout
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="chat-toggle-wrapper">
                        <a href="#" data-toggle="chatbar" class="toggle_chat">
                            <i class="fa fa-comments"></i>
                            <span class="badge badge-accent">9</span>
                            <i class="fa fa-times"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
    <!-- END TOPBAR -->
    <!-- START CONTAINER -->
    <div class="page-container row-fluid container-fluid">

        <!-- SIDEBAR - START -->

        <div class="page-sidebar fixedscroll">

            <!-- MAIN MENU - START -->
            <div class="page-sidebar-wrapper" id="main-menu-wrapper">


                <ul class='wraplist'>
                    <li class='menusection'>Main</li>
                    <li class="open">
                        <a href="{{route('userdashb')}}">
                            <i class="fa fa-th-large"></i>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="javascript:;">
                            <i class="fa fa-bullseye"></i>
                            <span class="title">Investment</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a class="" href="{{route('userdashb_investment_plans')}}">Investment Plans</a>
                            </li>
                            <li>
                                <a class="" href="{{route('userdashb_current_investment')}}">My Current Investment</a>
                            </li>
                            <li>
                                <a class="" href="{{route('userdashb_expected_profit')}}">Expected Profit</a>
                            </li>
                            <li>
                                <a class="" href="{{route('userdashb_investment_history')}}">Investment History</a>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="{{route('userdashb_deposit')}}">
                            <i class="fa fa-sitemap"></i>
                            <span class="title">Deposit</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{route('userdashb_withdrawal')}}">
                            <i class="img"><img src="dashb/data/icons/wallet-o.png" style="width:16px" alt=""></i>
                            <span class="title">Withdrawal</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="javascript:;">
                            <i class="fa fa-user"></i>
                            <span class="title">Referrals</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a class="" href="{{route('userdashb_referrals')}}">All Referrals</a>
                            </li>
                            <li>
                                <a class="" href="{{route('userdashb_active_referrals')}}">Active Referrals</a>
                            </li>
                            <li>
                                <a class="" href="{{route('userdashb_inactive_referrals')}}">Inactive Referrals</a>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="javascript:;">
                            <i class="fa fa-columns"></i>
                            <span class="title">Transactions</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a class="" href="{{route('userdash_pending_deposit')}}">Pending Deposits</a>
                            </li>
                            <li>
                                <a class="" href="{{route('userdash_approved_deposit')}}">Approved Deposits</a>
                            </li>
                            <li>
                                <a class="" href="{{route('userdash_pedinging_withdrawal')}}">Pending Withdrawals</a>
                            </li>
                            <li>
                                <a class="" href="{{route('userdashb_approved_withdrawal')}}">Approved Withdrawals</a>
                            </li>
                        </ul>
                    </li>

                    <li class="">
                        <a href="javascript:;">
                            <i class="fa fa-gear"></i>
                            <span class="title">My Profile</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a class="" href="{{route('userdashb_profile')}}">View Profile</a>
                            </li>
                            <li>
                                <a class="" href="{{route('userdashb_message')}}">My Messages</a>
                            </li>
                            <li>
                                <a class="" href="{{route('faq')}}">Help</a>
                            </li>
                            <li class="last">
                                <a href="{{route('logout')}}">
                                    <i class="fa fa-lock"></i> Logout
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>

            </div>
            <!-- MAIN MENU - END -->

        </div>
    @include("flash-message")

@yield('dashbody')

<div class="chatapi-windows ">

</div>
</div>
<!-- END CONTAINER -->
<!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->

<!-- CORE JS FRAMEWORK - START -->
<script src="dashb/assets/js/jquery-1.11.2.min.js"></script>
<script src="dashb/assets/js/jquery.easing.min.js"></script>
<script src="dashb/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="dashb/assets/plugins/pace/pace.min.js"></script>
<script src="dashb/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="dashb/assets/plugins/viewport/viewportchecker.js"></script>
<script>
window.jQuery || document.write('<script src="dashb/assets/js/jquery-1.11.2.min.js"><\/script>');
</script>
<!-- CORE JS FRAMEWORK - END -->

<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->

<script src="dashb/assets/plugins/echarts/echarts-custom-for-dashboard.js"></script>

<script src="dashb/assets/plugins/flot-chart/jquery.flot.js"></script>
<script src="dashb/assets/plugins/flot-chart/jquery.flot.time.js"></script>
<script src="dashb/assets/js/chart-flot.js"></script>

<script src="dashb/assets/plugins/morris-chart/js/raphael-min.js"></script>
<script src="dashb/assets/plugins/morris-chart/js/morris.min.js"></script>
<script src="dashb/assets/js/chart-morris.js"></script>
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->

<!-- CORE TEMPLATE JS - START -->
<script src="dashb/assets/js/scripts.js"></script>
<!-- END CORE TEMPLATE JS - END -->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/61d87dc7f7cf527e84d0f9d0/1foqqmnhj';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
</body>

</html>
