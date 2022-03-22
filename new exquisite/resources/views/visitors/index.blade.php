@extends("layouts.spacedcustomlayout")

@section("body")

    <section class="homefront">
      <nav class="navbar navbar-expand-lg change" id="navbar" >
        <a class="navbar-brand" href="{{route('index')}}">
          <img src="./images/logo2send.png" alt="" width="220" height="122" style="object-fit: contain;">
          <!-- Exquisite Option -->
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        @include('nav')
      </nav>

      <video src="video/obvideo.mp4" muted loop autoplay></video>

      <div class="overlay"></div>

      <div class="text">
        <h1 style="text-align:center">Exquisite Option </h1><br> <br><h1> BONDS, CRYPTO, FOREX, STOCKS ETC</h1>
        <p>Explore the all new auto trading future with ease...</p>
        <a href="{{route('login')}}">JOIN US</a>
      </div>
    </section>

    <section id="second">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="images/3.png" class="img-fluid mx-auto d-block" alt="Responsive image">
          </div>
          <div class="col-md-6">
            <h2>Stake In a diverse portfolio</h2>
            <ul>
              <li>Build a diversified portfolio</li>
              <li>Top security</li>
              <li>Auto Trading</li>
            </ul>
            <a href="{{route('about')}}">Read More</a>
          </div>
        </div>
      </div>
    </section>

    <section id="third">
      <div class="container">
        <h2>the global leader of social trading</h2>
        <h6>Discover why millions trade with Exquisite Option</h6>
        <div class="row">
          <div class="col-md-4">
            <i class="fa fa-clipboard-check"></i>
            <h5>REGISTERED</h5>
            <p>Registered and regulated according to the law</p>
          </div>
          <div class="col-md-4">
            <i class="fas fa-shield-alt"></i>
            <h5>SECURITY</h5>
            <p>Secure assets and data encription</p>
          </div>
          <div class="col-md-4">
            <i class="fas fa-lock"></i>
            <h5>PRIVACY</h5>
            <p>High privacy and and data privacy</p>
          </div>
        </div>
      </div>
    </section>

    <section id="fourth">
      <div class="container">
        <h2>News And Events</h2>
        <h6>Trading Stock Market News</h6>

        <div class="row mx-auto my-auto">
          <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
              <div class="carousel-inner w-100" role="listbox">
                @if (isset($news))
                @foreach ($news as $new)
                <div class="carousel-item active">
                    <div class="col-md-3">
                        <div class="card card-body">
                            <img class="img-fluid" src="storage/news/{{$new->newsimage}}">
                            <h5 class="card-title">{{$new->newstitle}}</h5>
                            <p class="card-text">{{!! $new->newscontent !!}}</p>
                            <a href="{{$new->newslink }}" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach

                @endif
              <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
                  <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
              </a>
          </div>
      </div>

      </div>
    </section>


    <section id="fifth">
      <div class="container">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-4 align-middle">
            <h2>Trade with confidence on the world's leading friendly trading platform</h2>
            <h6>Join millions who have already discovered smarter, friendly and automated ways of managing multiple type of assets. Choose an investment product to start with.</h6>
          </div>
          <div class="col-md-4">
            <img src="images/4.png" class="img-fluid float-start" alt="Responsive image">
          </div>
        </div>
      </div>
    </section>

    <section id="second">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <img src="images/3.png" class="img-fluid mx-auto d-block" alt="Responsive image">
            </div>
            <div class="col-md-6">
              <h2>Stake In a diverse portfolio</h2>
              <ul>
                <li>Build a diversified portfolio</li>
                <li>Top security</li>
                <li>Auto Trading</li>
              </ul>
              <a href="{{route('about')}}">Read More</a>
            </div>
          </div>
          <div class="row align-items-center" style="margin-top: 70px;">
            <div class="offset-md-1 col-md-6 align-middle">
              
              
              <iframe width="100%" height="315" src="https://www.youtube.com/embed/H50cy3y0M64" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
           
            </div>
            <div class="col-md-4 align-middle">
              <a href="brochure.pdf" download>
              <div class="card card-body" id="brochure">
                <i class="fa fa-download" aria-hidden="true"></i>
                  <h5 class="card-title">View Company <br>Brochure </h5>
              </div>
              </a>
            </div>
          </div>
          </div>
        </div>
      </section>
      



<section id="fourth">
  <div class="container">
    <h2 class="fadeIn wow">Recent <span>PAYOUTS</span></h2>
    <h6>Our recent payouts to our users</h6>

    <div class="row mx-auto my-auto">
      <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
        <div class="fadeInDown wow center" style="text-align:center">
          <div class="left hvr-forward"><img src="styles\images\startedicon3.png" alt="" /></div>
          <div class="fadeInDown wow" style="background-colour:#042f66">
  <iframe src="https://www.btcwidget.info/widget/liveTx/%235dbcd2/%23ffffff/%235e2ead/%23042f66/%23042f66/800/400/10" width="800" height="400" frameBorder="0" scrolling="no"></iframe>        </iframe>
        </div>
        </div> 
  </div>

  </div>
</section>














    <section id="sixth">
      <div class="container">
        <div class="row row1">
          <div class="col-md-4">
            <div class="card card-body">
                <h5 class="card-title">Auto-Trade</h5>
                <p class="card-text">Explore the auto-trading feature</p>
                <a href="{{route('about')}}" >Read More</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-body">
                <h5 class="card-title">Top Security</h5>
                <p class="card-text">Secure and protect wallets at all time</p>
                <a href="{{route('about')}}" >Read More</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-body">
                <h5 class="card-title">Cryptocurrency</h5>
                <p class="card-text">Buy and sell cryptocurrency with 0% commission</p>
                <a href="{{route('about')}}">Read More</a>
            </div>
          </div>
        </div>
        <div class="row row2">
          <div class="col-md-1"></div>
          <div class="col-md-5">
            <img src="images/5.png" class="img-fluid float-start" alt="Responsive image">
          </div>
          <div class="col-md-4">
            <h2>Explore top performing variety of stock</h2>
            <h6>Trade and Stake in top stocks and ETFs. Trade currency pairs, indices and commodities via CFDs. Investing in the financial market has never been easier.</h6>
            <a href="{{route('invest')}}">Start Investing</a>
          </div>
          <div class="col-md-2"></div>
        </div>
        <div class="row row3">
          <div class="col-md-12">
            <h4 class="text-center">WE ACCEPT</h4>
          </div>
          <div class="col-xs-2 col-2">
            <i class="fab fa-cc-visa"></i><br>
          </div>
          <div class="col-xs-2 col-2">
            <i class="fab fa-cc-paypal"></i><br>
          </div>
          <div class="col-xs-2 col-2">
            <i class="fab fa-cc-stripe"></i><br>
          </div>
          <div class="col-xs-2 col-2">
            <i class="fab fa-cc-visa"></i><br>
          </div>
          <div class="col-xs-2 col-2">
            <i class="fab fa-cc-paypal"></i><br>
          </div>
          <div class="col-xs-2 col-2">
            <i class="fab fa-cc-stripe"></i><br>
          </div>
        </div>
      </div>
    </section>





@endsection
