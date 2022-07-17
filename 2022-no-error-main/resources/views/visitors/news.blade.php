@extends('layouts.spacedcustomlayout')
<style>
    .widget2 {
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
        height: 800px;
        width: 100%;
        margin-bottom: 40px
    }
</style>

@section('body')
    <div class="main-content">

        <!--header section start-->
        <section class="breadcrumb-section" style="background-image: url('assets/images/news.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- breadcrumb Section Start -->
                        <div class="breadcrumb-content">
                            <h5>BUSINESS AND STOCKS</h5>
                        </div>
                        <!-- Breadcrumb section End -->
                    </div>
                </div>
            </div>
        </section>

        <!--about us page content start-->
        <section class="section-padding about-us-page">
            <div class="container">
                <!--secondlayer-->

                <div class="row">

                    <div class="col-md-8">

                        <div>
                            <h1>
                                Latest
                            </h1>

                        </div>
                    </div>
                </div>
           </div>
        </section>
        <div class="widget2">
          <iframe width="100%" style="overflow: hidden;" height="1300" src="https://rss.app/embed/v1/magazine/tdnlZjbvYRo3y4Ym" frameborder="0"></iframe>
        </div>
        <div class="clearfix"></div>
        <div class="clearfix"></div>
        <div class="clearfix"></div>
        <div class="clearfix"></div>
    @endsection
