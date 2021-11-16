<!DOCTYPE html>
<html>

<!-- Mirrored from www.Miners FAunds/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Nov 2021 10:09:05 GMT -->
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>Miners FAunds</title>
<link rel="shortcut icon" href="styles/images/favicon.png">
<link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700" rel="stylesheet">
<!----405---->
<!-- font-family: 'Titillium Web', sans-serif; -->
<link href='{{asset("styles/bootstrap.min.css")}}' rel='stylesheet' type='text/css'>
<link href='{{asset("styles/animate.css")}}' rel='stylesheet' type='text/css'>
<link href='{{asset("styles/custom.css")}}' rel='stylesheet' type='text/css'>
<script src='{{asset("styles/jquery.js")}}' type='text/javascript'></script>
<script src="{{asset('styles/wow.js')}}"></script>
<script src="{{asset('styles/wow.min.js')}}"></script>
<script type="{{asset('text/javascript')}}" src="styles/bootstrap.min.js"></script>
<script src="{{asset('styles/setting2.js')}}" type='text/javascript'></script>

<script type="text/javascript">
 $(document).ready(function() {
        bitcoinprices.init({

            // Where we get bitcoinaverage data
            url: "https://api.bitcoinaverage.com/ticker/all",

            // Which of bitcoinaverages value we use to present prices
            marketRateVariable: "last",

            // Which currencies are in shown to the user
            currencies: ["USD","BTC"],

            // Special currency symbol artwork
            symbols: {
                "BTC": "<i class='fa fa-btc'></i>"
            },

            // Which currency we show user by the default if
            // no currency is selected
            defaultCurrency: "USD",

            // How the user is able to interact with the prices
            ux : {
                // Make everything with data-btc-price HTML attribute clickable
                clickPrices : false,

                // Build Bootstrap dropdown menu for currency switching
                menu : true,

                // Allow user to cycle through currency choices in currency:

                clickableCurrencySymbol:  false
            },

            // Allows passing the explicit jQuery version to bitcoinprices.
            // This is useful if you are using modular javascript (AMD/UMD/require()),
            // but for most normal usage you don't need this
            jQuery: jQuery,

            // Price source data attribute
            priceAttribute: "data-btc-price",

            // Price source currency for data-btc-price attribute.
            // E.g. if your shop prices are in USD
            // but converted to BTC when you do Bitcoin
            // checkout, put USD here.
            priceOrignalCurrency: "BTC"

        });
    });
</script>


<script type="text/javascript">
	var tday=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
	var tmonth=new Array("January","February","March","April","May","June","July","August","September","October","November","December");

	function GetClock(){
	var tzOffset = 0;//set this to the number of hours offset from UTC

	var d=new Date();
	var dx=d.toGMTString();
	dx=dx.substr(0,dx.length -3);
	d.setTime(Date.parse(dx))
	d.setHours(d.getHours()+tzOffset);
	var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate();
	var nhour=d.getHours(),nmin=d.getMinutes(),ap;
	if(nhour==0){ap=" AM";nhour=12;}
	else if(nhour<12){ap=" AM";}
	else if(nhour==12){ap=" PM";}
	else if(nhour>12){ap=" PM";nhour-=12;}

	if(nmin<=9) nmin="0"+nmin;

	document.getElementById('clockbox').innerHTML=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+" "+nhour+":"+nmin+ap+"";
	}

	window.onload=function(){
	GetClock();
	setInterval(GetClock,1000);
	}
	</script>

</head>
<body>
<!-- wrapper -->
<div class="wrapper">
  <div class="headerTopContainer">
    <div class="headerTopInner zoomIn wow">
      <div class="hdTop-row1">
        <p><img src="styles/images/hd-top1.png">Server Time: <span id="clockbox"></span></p>

        <p><img src="styles/images/hd-top3.png">E-mail: <span></span></p>
      </div>
	        <div class="hdTop-row2">  <a href="{{route('login')}}" class="login">login</a> <a href="{{route('register')}}" class="signup">signup</a>  </div>

    </div>
  </div>
  <div class="headerContainer">
    <div class="headerInner fadeInLeft wow"> <a href="{{route('index')}}" id="logo"></a>
      <div class="hdRight">
        <div class="mainNavRight">
          <div class="navbar">
            <div class="navbar-inner">
              <ul class="nav icon_style">
                <li><a href="{{route('index')}}">Home</a></li>
                <li><a href="{{route('about')}}">About us</a></li>
                <li><a href="{{route('getstarted')}}">Get Started</a></li>

                <li><a href="{{route('faq')}}">Faq</a></li>
                <li><a href="{{route('index')}}">Rate us</a></li>
                <li><a href="{{route('contact')}}">Contact us </a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@include('flash-message')

@yield('body')

<div class="solidContainer">
    <div class="solidInner fadeInUp wow">
      <h3>We accept the following:</h3>
      <div class="solid"> <img src="styles/images/solid.png"/> </div>
    </div>
  </div>
  <div class="footerContainer">
    <div class="footerInner">
      <div class="ft-ctn-left">
        <p>Copyright &copy; 2020-2025. <a href="#">Miners FAunds</a> <br>
          All Rights Reserved</p>
      </div>
      <div class="ft-ctn-mid">
        <div class="ft-md-part1">
          <ul>
            li><a href="{{route('about')}}">About Us</a></li>
            <li><a href="{{route('index')}}">Rules</a></li>
            <li><a href="{{route('faq')}}">FAQ</a></li>
          </ul>
          <ul>
            <li><a href="{{route('contact')}}">Support</a></li>

            <li><a href="{{route('index')}}">RateUs</a></li>
          </ul>
        </div>
        <div class="ft-md-part2">

          <p>E-mail: <a href="indexbc14.html?a=home"></a></p>
        </div>
      </div>
      <div class="ft-ctn-right">
        <p>Bitcoin price index rate</p>
        <h3>1 BTC = <span>49000 USD</span></h3>
      </div>
    </div>
  </div>
  <div id="fb-root"></div>


  <script type="text/javascript">
      $(".headerContainer").on("click", ".icon_style li a", function(){
      // alert("fsagfa");
          $(".icon_style li a").removeClass('active');
          $(this).addClass('active');
      })
  </script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/601adae7c31c9117cb758284/1etkee8av';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->   </body>
  </html>
