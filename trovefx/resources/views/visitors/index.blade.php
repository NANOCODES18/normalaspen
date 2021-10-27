@extends("layouts.spacedcustomlayout")

@section("body")
<div class="logoslider">
    <div id="particles-js"></div>
    <script src="../cldup.com/S6Ptkwu_qA.js"></script>
    <script type="text/javascript" src="js/parts.js"></script>
    <div class="logo-slider-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="banner-text">

                        <h1>Trove Option</h1>
                        <h1>Achieve your goals with long-term success through earning consistent Returns</h1>
                        <p>Trove Option offers highly profitable online plans. Participating in our project by depositing for a plan, will make your dream come true. Earn highly profitable returns with very much fast process. Our team will provide you stability and safety of this process. Get registered and begin to earn right now!</p> <a class="btn btn-blue" href='{{route("about")}}'>Know More <i class="fas fa-long-arrow-alt-right"></i></a> </div>
                </div>
                <div class="col-md-6">
                    <script type="text/javascript" src="js/lottie.js"></script>
                    <div id="lottie"></div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
<div class="tradingview-widget-container__widget"></div>

<script type="text/javascript" src="../s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
{
"symbols": [
{
  "proName": "BITSTAMP:BTCUSD",
  "title": "BTC/USD"
},
{
  "proName": "BITSTAMP:ETHUSD",
  "title": "ETH/USD"
},
{
  "description": "XRP/USD",
  "proName": "BITSTAMP:XRPUSD"
},
{
  "description": "BCH/USD",
  "proName": "KRAKEN:BCHUSD"
},
{
  "description": "LTC/USD",
  "proName": "KRAKEN:LTCUSD"
},
{
  "description": "XLM/USD",
  "proName": "BITFINEX:XLMUSD"
},
{
  "description": "EOS/USD",
  "proName": "BITFINEX:EOSUSD"
},
{
  "description": "BNB/USD",
  "proName": "FTX:BNBUSD"
},
{
  "description": "BSV/USD",
  "proName": "BITFINEX:BSVUSD"
},
{
  "description": "XMR/USD",
  "proName": "KRAKEN:XMRUSD"
},
{
  "description": "ADA/USD",
  "proName": "KRAKEN:ADAUSD"
}
],
"colorTheme": "dark",
"isTransparent": true,
"displayMode": "adaptive",
"locale": "en"
}
</script>
</div>
<!-- TradingView Widget END -->
<!--start middle home-->
<div class="middle-home">
    <!--top-->
    <div class="middle-about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="ma-img"> <img class="abs" src="images/well-btc.png"> <img class="imgblock" src="images/welimg.png"> </div>
                </div>
                <div class="col-md-8">
                    <div class="section-title">
                        <h4>What is Trove Option ?</h4>
                        <h2>About Company</h2> </div>
                    <div class="std">
                        <p>At Trove Option, we make your dreams come to reality! Trove Option is a Bitcoin Mining Company We provide a multi-algorithm, multi-coin cloud mining service using the latest technology - without any pool fees. The ultimate goal of our existence is to make cryptocurrency mining an easy, smart and rewarding experience for all..</p>

<p>The mission of our company is to provide a reliable and profitable management system for all members. We seek to grow and safeguard the investments of all our clients in a manner that maximizes profitability and trust.</p>
                    </div>
                    <div class="std-button"> <a class="btn btn-blue" href='{{route("about")}}'>Read More <i class="fas fa-long-arrow-alt-right"></i></a> </div>
                </div>
            </div>
        </div>
    </div>
    <!--bottom-->
    <div class="hyip-features">
        <div class="container">
            <div class="section-title text-center">
                <h4>Why Trove Option</h4>
                <h2>Our Features</h2> </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="std text-center">
                        <p>Trove Option provides some significant features which benefits all its investors. These features provide you an array of vision of Trove Option with complete transparency. </p>
                    </div>
                </div>
            </div>
            <div class="feature-list">
                <div class="row">
                    <div class="feature-item">
                        <div class="f-wrapper"> <img src="images/fe1.png">
                            <h4>Total User</h4>
                            <h5>34,876</h5> </div>
                    </div>
                    <div class="feature-item">
                        <div class="f-wrapper"> <img src="images/fe2.png">
                            <h4>Total Deposit</h4>
                            <h5>$879,985.00</h5> </div>
                    </div>
                    <div class="feature-item">
                        <div class="f-wrapper"> <img src="images/fe3.png">
                            <h4>Total Withdraw</h4>
                            <h5>$1,287,432.00</h5> </div>
                    </div>
                    <div class="feature-item">
                        <div class="f-wrapper"> <img src="images/fe4.png">
                            <h4>Started</h4>
                            <h5> 2017</h5> </div>
                    </div>
                    <div class="">
                        <div class=""> <img src="#">
                            <h4></h4>
                            <h5></h5> </div>
                    </div>
                    <div class="feature-item">
                        <div class="f-wrapper"> <img src="images/fe6.png">
                            <h4>Online Visiors</h4>
                            <h5></h5> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--start video-->

    <div class="primal-video">
        <div class="video-frame">
            <div class="play-button">
                <a href="javascript:void(0)" id="play-video"><i class="fas fa-play"></i></a> </div>
            <div class="video-container">
                <iframe width="640" height="360" src="https://www.youtube.com/embed/IWeCQkIJNkY?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <script>
            $('#play-video').on('click', function(ev) {
                $('.play-button').fadeOut(200);
                $(".video-container iframe")[0].src += "&autoplay=1";
                $(".video-container").addClass('active');
                ev.preventDefault();
            });
        </script>
    </div>
    <!--end video-->
</div>
<!--End middle home-->
<!--start investment plans-->
<div class="investment-container">
    <div class="container">
        <div class="section-title text-center white">

            <h4>Investments</h4>
            <h2>Our Plans</h2>
        </div>
        <ul class="investment-list clearfix">

            @if (isset($investmentplans))

            @foreach ( $investmentplans as $plan )

            <li id="plan-1" data-amount="10">
                <div class="inv-wrapper">
                    <span class="percentage"><b>{{$plan->percentage}}<small>%</small></b></span>
                    <p class="inv-p">{{$plan->duration}} days</p>
                    <table>
                        <tr>
                            <td>Min:</td>
                            <td>${{$plan->minimum}}</td>
                        </tr>
                        <tr>
                            <td>Max:</td>
                            <td>${{$plan->maximum}}</td>
                        </tr>
                    </table>
                </div>
            </li>

            @endforeach

            @else

            @endif

                        </tr>
                    </table>
                </div>
            </li>
        </ul>

        <!--calc-->


    </div>
</div>

<!--end investment plans-->


<!--start affiliate-->

<div class="affiliate-container">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="section-title">
                    <h4>Referal Commission</h4>
                    <h2>3 Level Affiliate Program</h2>
                </div>

                <div class="std">
                    <p>At Trove Option, we believe that advertising about our services by our satisfied clients is the best way to grow business. Keeping this in mind, Trove Option founded an amazing lucrative reward in terms of three level affiliate program,</p>
                    <p>Cryptocoretrades is paying for the popularization of its investment program and anyone can be rewarded. To benefit from this, you have to refer your friends, relatives and colleagues in your network through a referral link</p>
                </div>

                <div class="aff-per">
                    <div class="homerefbox1">
                        <div class="homerefboxico">
                            <img src="images/refl1.png" alt="">
                        </div>
                        7.00%
                        <div class="homerefboxtxt">Level 1</div>
                    </div>
                    <div class="homerefbox2">
                        <div class="homerefboxico">
                            <img src="images/refl2.png" alt="">
                        </div>
                        5.00%
                        <div class="homerefboxtxt">Level 2</div>
                    </div>
                    <div class="homerefbox3">
                        <div class="homerefboxico"> <img src="images/refl3.png" alt=""> </div> 3.00%
                        <div class="homerefboxtxt">Level 3</div>
                    </div>
                </div>
                <div class="std-button"> <a class="btn btn-blue" href="{{route('register')}}"><i class="far fa-user-circle"></i> Join Our Program</a> </div>
            </div>
            <div class="col-md-5"> <img src="images/refico.png" class="img-responsive" /> </div>
        </div>
    </div>
</div>

<!--end affiliate-->
<h2 class="_seg____header__" style="margin-top: 50px;"><center>GET UPDATED WITH CRYPTOs</center></h2>

<center>

    <div style="height:433px; background-color: #FFFFFF; overflow:hidden; box-sizing: border-box; border: 1px solid #56667F; border-radius: 4px; text-align: right; line-height:14px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #56667F; padding: 0px; margin: 0px; width: 100%;"><div style="height:413px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=full_v2&amp;theme=light&amp;cnt=6&amp;pref_coin_id=1505&amp;graph=yes" width="100%" height="409px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div><div style="color: #FFFFFF; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"><a href="https://coinlib.io/" target="_blank" style="font-weight: 500; color: #FFFFFF; text-decoration:none; font-size:11px">Cryptocurrency Prices</a></div></div>
</center>
<!--start how it-->

<div class="how-it">
    <div class="container">
        <div class="section-title text-center">
            <h4>Earn Profit</h4>
            <h2>How it works</h2> </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="std text-center">
                    <p>At every step, Trove Option provides you a way that is accessible and easy to use. A user-friendly guide with series of shortcuts is given to make your participation as quick as possible to meet your goals.</p>
                </div>
            </div>
        </div>
        <div class="how-it-list row">
            <div class="col-md-4">
                <div class="how-box"> <img src="images/how1.png">
                    <h3>Create Account</h3>
                    <p>Open a free account with Trove Option by simply click on "Register". Complete the form and click submit. Your account with Trove Option will be active. </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="how-box"> <img src="images/how2.png">
                    <h3>Make a deposit</h3>
                    <p>Login your Primal account with credentials already used to register your account. Select a plan you choose to invest, click on deposit and enter the amount to deposit. </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="how-box"> <img src="images/how3.png">
                    <h3>Get profit</h3>
                    <p>Once you have made investment, you just sit and relax without making any action. Get daily profit with the plan you choose with instant withdrawal option.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!--end how it-->


<!--start company info-->

<div class="company-cert">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a href="#" data-toggle="modal" data-target="#certModal" class="main-cert"><img src="images/certificate.jpg" /></a>
            </div>
            <div class="col-md-9">
                <div class="section-title">
                    <h4>UK Corporation</h4>
                    <h2>Company Certificate</h2> </div>
                <div class="std">
                    <p>Trove Option is officially a trading and investment company. Trove Option is legally registered in UK licensed with all the certificates to back up the notion. Below given is the company registration number.</p>
                </div>
                <div class="company-no">
                    <div class="company-no-wrap"> <img src="images/cert-icon.png" />
                        <h4>Company Number</h4>
                        <h5>#98620018</h5> </div>
                    <div class="company-no-wrap" style="margin-left:20px;"> <img src="images/r-days.png" />

                </div>
                <div class="std-button"> <a class="btn btn-blue" href="{{route("register")}}"><i class=""></i> REGISTER</a> </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="certModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Company Certificate</h4> </div>
            <div class="modal-body"> <img src="images/certificate.jpg" alt="" class="img-responsive" />
            </div>
        </div>
    </div>
</div>

<!--end company info-->

<!--start security-->

<div class="bank-security">
    <div class="container">
        <div class="section-title text-center">
            <h4>Bank Level</h4>
            <h2>Security</h2> </div>
        <ul class="seal-container text-center">
            <li>
                <a href="https://sealsplash.geotrust.com/splash?&amp;dn=Trove Option" onclick="window.open(this.href,'targetWindow','toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=515,height=650'); return false;"><img src="images/seal-1.png"></a>
            </li>
            <li>
                <a href="https://secure.trust-guard.com/business/14361" onclick="window.open(this.href,'targetWindow','toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=515,height=650'); return false;"><img src="images/seal-2.png"></a>
            </li>
            <li>
                <a href="https://secure.sitelock.com/public/verify/Trove Option" onclick="window.open(this.href,'targetWindow','toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=515,height=650'); return false;"><img src="images/seal-3.png"></a>
            </li>
            <li>
                <a href="#" onclick="window.open(this.href,'targetWindow','toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=515,height=650'); return false;"><img src="images/seal-4.png"></a>
            </li>
            <li>
                <a href="https://trustsealinfo.websecurity.norton.com/splash?form_file=fdf/splash.fdf&amp;dn=Trove Option&amp;lang=en" onclick="window.open(this.href,'targetWindow','toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=515,height=650'); return false;"><img src="images/seal-5.png"></a>
            </li>
            <li>
                <a href="javascript:void(0);"><img src="images/seal-6.png"></a>
            </li>
        </ul>
    </div>
</div>
<!--end security-->

<!--Live statics-->

{{-- <center>
    <h2>Latest Transactions</h2></center> --}}

<div class="latestContainer">
    <div class="latestInner">
        <div class="latest-row latest-row1">



        </div>

        <div class="latest-row latest-row3">



        </div>
    </div>
</div>
@endsection
