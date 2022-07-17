@extends('layouts.spacedcustomlayout')

@section('body')
    <div class="main-content">

        <!--header section start-->
        <section class="breadcrumb-section" style="background-image: url('assets/images/location.png')">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- breadcrumb Section Start -->
                        <div class="breadcrumb-content">
                            <h5>Meet our team</h5>
                        </div>
                        <!-- Breadcrumb section End -->
                    </div>
                </div>
            </div>
        </section>

        <!--about us page content start-->
        <section class="section-padding about-us-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>
                            Our constant goal is to recruit, retain, and develop the best talent available. However, at
                            times, even the most talented individuals need a little help finding their way. At
                            {{ $compd ? $compd->companyname : 'company name' }}, we open our doors to professionals of all
                            orientations, races, abilities, genders, and life experiences. In addition, we offer an
                            accommodating and flexible work environment so that our associates can maximize their
                            effectiveness at home, at work, and within their communities. At the same time, we encourage and
                            sponsor employee networks that build on our diversity and inclusion strategy. These networks,
                            called Business Resource Groups (BRGs), promote individual professional development, while
                            helping the company achieve its business objectives.Our diverse and talented employees are
                            committed to helping people and companies attain financial wellness through our innovative
                            products and financial solutions. Whether working with multinational corporations or individual
                            families, we are dedicated to helping create financial strength today and security for tomorrow.
                        </p>
                    </div>
                </div>


                <div class="row">

                    <div class="col-md-4">
                        <div class="card card-profile text-center">
                            <div class="card-header card-avatar">
                                <a href="#">
                                    <img class="img"
                                        style="border: 2px solid white; border-radius: 50%;width:50%; height:180px;
height:180px;"
                                        src="assets/images/hiew.jpeg">
                                </a>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Hieu Jiang</h4>
                                <h6 class="card-category text-muted">President and Founder</h6>
                                <!--buttonforreadnnore-->

                                <button class="btn btn-primary accordion">Read Bio</button>



                                <!--dropdown-->
                                {{-- <div class="panel">
  <p class="card-description"> 
          A motivating leader who embodies our firm’s culture. With nearly 48 years of leadership roles at different firms.He is the Founder,and an Experienced Senior Portfolio Manager with a demonstrated history of trading in the finance industry and primarily focuses on investment opportunities in the US Fixed Income markets, Skilled in Portfolio Management, Management, Investments.Prior to this he worked at RBC Capital Markets LLC,Wachovia Securities LLC. Mr. William leverages his firm-specific and industry knowledge to lead the firm and its people, develop the firm’s strategy, embody the “tone-at-the-top” and help protect and enhance our firm’s culture,  providing his insights to our Board and Committees and keeping directors apprised of significant developments in our business and industry <br>
           Education - Graduate of Leland Stanford Junior University.
          </p>
        </div> --}}
                            </div>
                        </div>
                    </div>

                    <!--first-->

                    <div class="col-md-4">
                        <div class="card card-profile text-center">
                            <div class="card-header card-avatar">
                                <a href="#">
                                    <img class="img" style="border: 2px solid white; border-radius: 50%;width:55%;"
                                        src="assets/images/one.jpg">
                                </a>
                            </div>
                            <div class="card-body ">
                                <h4 class="card-title">MIchael McCain</h4>
                                <h6 class="card-category text-muted">CoFounder</h6>

                                <!--buttonforreadnnore-->

                                <button class="btn btn-primary accordion">Read Bio</button>



                                <!--dropdown-->
                                {{-- <div class="panel">
  <p class="card-description"> 
Mark Luthor Siegel, Vice President, Director and a member of {{$compd? $compd->companyname :"company name"}}’s Global Executive Committee and directs the firm’s day-to-day operations and oversees its four primary business units: US Private Client, Institutional, Private Client International and 401(k) Solutions.
He is also responsible for day-to-day oversight of all {{$compd? $compd->companyname :"company name"}}’s key operating units including Investment Strategies, Client Businesses, Blockchain Technology Management, Technology & Operations, and Risk & Quantitative Analysis.
He joined Aspen financial managment in 2003 and has since held a variety of roles. From 2007 to 2012, he served as Co-President and from 2012 to 2016 as President of Client Acquisition and Service. Siegel has been an Executive Officer and member of the firm’s Board of Managers since 2005.
He speaks at client seminars nationally, where he provides insights on current market conditions and portfolio positioning. He is a member of The Wall Street Journal CEO Council and the prominent G100 Network of chief executive officers. Siegel regularly publishes articles in various industry publications, including FT Adviser, Financial Advisor, Advisor Perspectives, Financial Advisor IQ, FE Trustnet and Investment News.Education - Mark Luthor Siegel earned a BS degree in economics from the Wharton School of the University of Pennsylvania in 1979, and an MBA degree from Harvard Business School in 1983.
</p>
</div> --}}



                            </div>
                        </div>
                    </div>

                    <!--sallylinsay-->

                    <div class="col-md-4">
                        <div class="card card-profile text-center">
                            <div class="card-header card-avatar">
                                <a href="#">
                                    <img class="img"
                                        style="border: 2px solid white; border-radius: 50%;width:50%; height:180px;
height:180px;  "
                                        src="assets/images/shi.jpeg">
                                </a>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Shihad Hicklin</h4>
                                <h6 class="card-category text-muted"> cofounder</h6>
                                <button class="btn btn-primary accordion">Read Bio</button>


                                <!--dropdown-->
                                {{-- <div class="panel">
  <p class="card-description"> 
           Sally Lindsay,joined {{$compd? $compd->companyname :"company name"}} at its inception. Sally was previously a Logistician in the US Army. Sally is a strategic and experienced Managing Director and accountant specializing in profitable business growth and Magine improvement integrating marketing creativity with finance discipline achieving success across multiple industry verticals. Sally is known for identifying and implementing various strategies to promote financial security and accurate reporting with aim to capture market anomalies while maintaining a business mindset beyond portfolio management. <br>
Sally has served on the Board of Directors of numerous companies, including Barfield and Powell. Sally is a graduate of the University of Virginia where she earned a bachelor's of commerce in Human Resource management and a master of business administration at the University of Florida.
          </p>
        </div> --}}
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">



                    <div class="col-md-4">
                        <div class="card card-profile text-center">
                            <div class="card-header card-avatar">
                                <a href="#">
                                    <img class="img" style="border: 2px solid white; border-radius: 50%;width:53%;"
                                        src="assets/images/dave.jpeg">
                                </a>
                            </div>
                            <div class="card-body ">
                                <h4 class="card-title">David William Davies</h4>
                                <h6 class="card-category text-muted"> Chief executive officer</h6>
                                <!--buttonforreadnnore-->

                                <button class="btn btn-primary accordion">Read Bio</button>




                                <!--dropdown-->
                                {{-- <div class="panel">
    <p class="card-description"> 
  
  Stella Harris has over 12 years of experience in Real Estate Consultancy with a demonstrated history of working in the real estate industry. Skilled in Accounting, Investment Properties, Financial Accounting, Marketing, and Working with top Investors in business and finance. Before joining {{$compd? $compd->companyname :"company name"}},
  Stella Harris was influential in redefining the Real Estate industry and creating an execution plan that became the preeminent strategic priority. 
  Stella Harris also served as the Real Estate Consultant of Lincoln property Company ATL, following the acquisitions Stella Harris also led a successful integration to drive synergies and profitable growth.
  
  Stella Harris spent the first 5 years of her career advising clients in M&A, restructuring, liquidity optimization, and audit. She holds a Bachelors's degree in Finance from the University of California, Los Angeles, and a Masters's degree in Accountancy from Boston University.
            </p>
          </div> --}}
                            </div>
                        </div>

                    </div>



                    <!--second-->




                    <!--third-->


                    <div class="col-md-4">
                        <div class="card card-profile text-center">
                            <div class="card-header card-avatar">
                                <a href="#">
                                    <img class="img"
                                        style="border: 2px solid white; border-radius: 50%;width:50%; height:180px;
height:180px; "
                                        src="assets/images/mark1.jpg">
                                </a>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Mark Luther Siegiel</h4>
                                <h6 class="card-category text-muted">Chief Executive Officer
                                </h6>
                                <!--buttonforreadnnore-->

                                <button class="btn btn-primary accordion">Read Bio</button>







                                <!--dropdown-->
                                {{-- <div class="panel">
            <p class="card-description"> 
            Emily Marling is an 
            Experienced Portfolio Manager. In those roles, she oversees the firm's Portfolio Management Department, which includes the Research, Investment Operations, Investment Solutions and Portfolio Evaluation Groups. She is also a member of the Technology Transformation Committee. Emily speaks regularly at client seminars and meets with institutional clients globally, providing information regarding market outlook, portfolio positioning and global economic factors.
            Emily joined {{$compd? $compd->companyname :"company name"}} in 2005 and has served on the firm's five-member IPC since 2011. Prior to her current responsibilities, She held several different positions at the firm, including Capital Markets Research Team Leader, Securities Research Team Leader and Securities Research Analyst. She has a degree in Finance from the University of Arizona. She lives in the San Francisco Bay Area with her husband and two children.
                    </p>
                    </div> --}}
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card card-profile text-center">
                            <div class="card-header card-avatar">
                                <a href="#">
                                    <img class="img"
                                        style="border: 2px solid white; border-radius: 50%;width:50%; height:180px;
height:180px; "
                                        src="assets/images/stella.jpg">
                                </a>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Stella Harris </h4>
                                <h6 class="card-category text-muted">Chief Financial Officer</h6>
                                <button class="btn btn-primary accordion">Read Bio</button>


                                <!--dropdown-->
                                {{-- <div class="panel">
                <p class="card-description"> 

                Evelyn D. chow, Risk Analyst, Co-Portfolio Manager with a demonstrated history of analysis and trading in the finance market, highly skilled in Risk Management, Investment analysis, Portfolio Management, where she oversees the firm’s Portfolio Management Department, which includes the Research, Investment, Operations and Investment Solutions.
                Mrs. Evelyn started her career at {{$compd? $compd->companyname :"company name"}} in 2016 and was  previously an Analyst at Neuberger Berman Prior affiliations include Goldman Sachs where she was responsible for developing investment strategies for the taxable core and asset-liability portfolios, Contract Negotiation and Asset Management. She received her strong finance professional with a Master’s Degree focused  in Business Managerial Economics  from Baruch College.
                        </p>
                    </div> --}}
                            </div>
                        </div>
                    </div>


                </div>
                <div class="row">



                    <div class="col-md-4">


                        <div class="card card-profile text-center">
                            <div class="card-header card-avatar">
                                <a href="#">
                                    <img class="img"
                                        style="border: 2px solid white; border-radius: 50%;width:50%; height:180px;
height:180px; "
                                        src="assets/images/hen.jpeg">
                                </a>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Chenglei Hendrix</h4>
                                <h6 class="card-category text-muted">Secretary</h6>
                                <button class="btn btn-primary accordion">Read Bio</button>




                                <!--dropdown-->
                                {{-- <div class="panel">
  <p class="card-description"> 

Stella Harris has over 12 years of experience in Real Estate Consultancy with a demonstrated history of working in the real estate industry. Skilled in Accounting, Investment Properties, Financial Accounting, Marketing, and Working with top Investors in business and finance. Before joining {{$compd? $compd->companyname :"company name"}},
Stella Harris was influential in redefining the Real Estate industry and creating an execution plan that became the preeminent strategic priority. 
Stella Harris also served as the Real Estate Consultant of Lincoln property Company ATL, following the acquisitions Stella Harris also led a successful integration to drive synergies and profitable growth.

Stella Harris spent the first 5 years of her career advising clients in M&A, restructuring, liquidity optimization, and audit. She holds a Bachelors's degree in Finance from the University of California, Los Angeles, and a Masters's degree in Accountancy from Boston University.
          </p>
        </div> --}}
                            </div>
                        </div>

                    </div>



                    <!--second-->




                    <!--third-->


                    <div class="col-md-4">
                        <div class="card card-profile text-center">
                            <div class="card-header card-avatar">
                                <a href="#">
                                    <img class="img"
                                        style="border: 2px solid white; border-radius: 50%;width:50%; height:180px;
height:180px;"
                                        src="assets/images/four.jpg">
                                </a>
                            </div>
                            <div class="card-body ">
                                <h4 class="card-title">Emily Marling</h4>
                                <h6 class="card-category text-muted">Head of Portfolio Management</h6>
                                <!--buttonforreadnnore-->

                                <button class="btn btn-primary accordion">Read Bio</button>




                                <!--dropdown-->
                                {{-- <div class="panel">
          <p class="card-description"> 
          Emily Marling is an 
          Experienced Portfolio Manager. In those roles, she oversees the firm's Portfolio Management Department, which includes the Research, Investment Operations, Investment Solutions and Portfolio Evaluation Groups. She is also a member of the Technology Transformation Committee. Emily speaks regularly at client seminars and meets with institutional clients globally, providing information regarding market outlook, portfolio positioning and global economic factors.
          Emily joined {{$compd? $compd->companyname :"company name"}} in 2005 and has served on the firm's five-member IPC since 2011. Prior to her current responsibilities, She held several different positions at the firm, including Capital Markets Research Team Leader, Securities Research Team Leader and Securities Research Analyst. She has a degree in Finance from the University of Arizona. She lives in the San Francisco Bay Area with her husband and two children.
                  </p>
                  </div> --}}
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card card-profile text-center">
                            <div class="card-header card-avatar">
                                <a href="#">
                                    <img class="img"
                                        style="border: 2px solid white; border-radius: 50%;width:50%; height:180px; 
height:180px;"
                                        src="assets/images/ren.jpeg">
                                </a>
                            </div>
                            <div class="card-body ">
                                <h4 class="card-title">Ren Suen</h4>
                                <h6 class="card-category text-muted"> Managing Director</h6>

                                <!--buttonforreadnnore-->

                                <button class="btn btn-primary accordion">Read Bio</button>


                                <!--dropdown-->
                                {{-- <div class="panel">
              <p class="card-description"> 

              Evelyn D. chow, Risk Analyst, Co-Portfolio Manager with a demonstrated history of analysis and trading in the finance market, highly skilled in Risk Management, Investment analysis, Portfolio Management, where she oversees the firm’s Portfolio Management Department, which includes the Research, Investment, Operations and Investment Solutions.
              Mrs. Evelyn started her career at {{$compd? $compd->companyname :"company name"}} in 2016 and was  previously an Analyst at Neuberger Berman Prior affiliations include Goldman Sachs where she was responsible for developing investment strategies for the taxable core and asset-liability portfolios, Contract Negotiation and Asset Management. She received her strong finance professional with a Master’s Degree focused  in Business Managerial Economics  from Baruch College.
                      </p>
                  </div> --}}
                            </div>
                        </div>
                    </div>


                </div>
                <div class="row">



                    <div class="col-md-4">
                        <div class="card card-profile text-center">
                            <div class="card-header card-avatar">
                                <a href="#">
                                    <img class="img"
                                        style="border: 2px solid white; border-radius: 50%;width:50%; height:180px;
height:180px; "
                                        src="assets/images/three.jpg">
                                </a>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Evelyn D Chow</h4>
                                <h6 class="card-category text-muted">Certificates Financial analyst
                                </h6>
                                <!--buttonforreadnnore-->

                                <button class="btn btn-primary accordion">Read Bio</button>



                                <!--dropdown-->
                                {{-- <div class="panel">
  <p class="card-description"> 

Stella Harris has over 12 years of experience in Real Estate Consultancy with a demonstrated history of working in the real estate industry. Skilled in Accounting, Investment Properties, Financial Accounting, Marketing, and Working with top Investors in business and finance. Before joining {{$compd? $compd->companyname :"company name"}},
Stella Harris was influential in redefining the Real Estate industry and creating an execution plan that became the preeminent strategic priority. 
Stella Harris also served as the Real Estate Consultant of Lincoln property Company ATL, following the acquisitions Stella Harris also led a successful integration to drive synergies and profitable growth.

Stella Harris spent the first 5 years of her career advising clients in M&A, restructuring, liquidity optimization, and audit. She holds a Bachelors's degree in Finance from the University of California, Los Angeles, and a Masters's degree in Accountancy from Boston University.
          </p>
        </div> --}}
                            </div>
                        </div>

                    </div>



                    <!--second-->




                    <!--third-->


                    <div class="col-md-4">
                        <div class="card card-profile text-center">
                            <div class="card-header card-avatar">
                                <a href="#">
                                    <img class="img"
                                        style="border: 2px solid white; border-radius: 50%;width:50%; height:180px;
height:180px; "
                                        src="assets/images/MarkGeller.jpg">
                                </a>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Mark Geller </h4>
                                <h6 class="card-category text-muted">Certified Retirement Financial Advisor</h6>
                                <button class="btn btn-primary accordion">Read Bio</button>





                                <!--dropdown-->
                                {{-- <div class="panel">
          <p class="card-description"> 
          Emily Marling is an 
          Experienced Portfolio Manager. In those roles, she oversees the firm's Portfolio Management Department, which includes the Research, Investment Operations, Investment Solutions and Portfolio Evaluation Groups. She is also a member of the Technology Transformation Committee. Emily speaks regularly at client seminars and meets with institutional clients globally, providing information regarding market outlook, portfolio positioning and global economic factors.
          Emily joined {{$compd? $compd->companyname :"company name"}} in 2005 and has served on the firm's five-member IPC since 2011. Prior to her current responsibilities, She held several different positions at the firm, including Capital Markets Research Team Leader, Securities Research Team Leader and Securities Research Analyst. She has a degree in Finance from the University of Arizona. She lives in the San Francisco Bay Area with her husband and two children.
                  </p>
                  </div> --}}
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card card-profile text-center">
                            <div class="card-header card-avatar">
                                <a href="#">
                                    <img class="img"
                                        style="border: 2px solid white; border-radius: 50%;width:50%; height:180px;
height:180px; "
                                        src="assets/images/kim.jpeg">
                                </a>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Courtney Lockett</h4>
                                <h6 class="card-category text-muted"> Senior Portfolio Manager
                                </h6>
                                <!--buttonforreadnnore-->

                                <button class="btn btn-primary accordion">Read Bio</button>

                                <!--dropdown-->
                                {{-- <div class="panel">
              <p class="card-description"> 

              Evelyn D. chow, Risk Analyst, Co-Portfolio Manager with a demonstrated history of analysis and trading in the finance market, highly skilled in Risk Management, Investment analysis, Portfolio Management, where she oversees the firm’s Portfolio Management Department, which includes the Research, Investment, Operations and Investment Solutions.
              Mrs. Evelyn started her career at {{$compd? $compd->companyname :"company name"}} in 2016 and was  previously an Analyst at Neuberger Berman Prior affiliations include Goldman Sachs where she was responsible for developing investment strategies for the taxable core and asset-liability portfolios, Contract Negotiation and Asset Management. She received her strong finance professional with a Master’s Degree focused  in Business Managerial Economics  from Baruch College.
                      </p>
                  </div> --}}
                            </div>
                        </div>
                    </div>


                </div>
                <div class="row">



                    <div class="col-md-4">

                        <div class="card card-profile text-center">
                            <div class="card-header card-avatar">
                                <a href="#">
                                    <img class="img"
                                        style="border: 2px solid white; border-radius: 50%;width:50%; height:180px;
height:180px; "
                                        src="assets/images/fivenew.jpg">
                                </a>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Grillo Susan</h4>
                                <h6 class="card-category text-muted">Head of Customer and Private Client services
                                </h6>
                                <!--buttonforreadnnore-->

                                <button class="btn btn-primary accordion">Read Bio</button>


                                <!--dropdown-->
                                {{-- <div class="panel">
  <p class="card-description"> 

Stella Harris has over 12 years of experience in Real Estate Consultancy with a demonstrated history of working in the real estate industry. Skilled in Accounting, Investment Properties, Financial Accounting, Marketing, and Working with top Investors in business and finance. Before joining {{$compd? $compd->companyname :"company name"}},
Stella Harris was influential in redefining the Real Estate industry and creating an execution plan that became the preeminent strategic priority. 
Stella Harris also served as the Real Estate Consultant of Lincoln property Company ATL, following the acquisitions Stella Harris also led a successful integration to drive synergies and profitable growth.

Stella Harris spent the first 5 years of her career advising clients in M&A, restructuring, liquidity optimization, and audit. She holds a Bachelors's degree in Finance from the University of California, Los Angeles, and a Masters's degree in Accountancy from Boston University.
          </p>
        </div> --}}
                            </div>
                        </div>

                    </div>



                    <!--second-->




                    <!--third-->


                    <div class="col-md-4">

                        <div class="card card-profile text-center">
                            <div class="card-header card-avatar">
                                <a href="#">
                                    <img class="img"
                                        style="border: 2px solid white; border-radius: 50%;width:50%; height:180px;
height:180px; "
                                        src="assets/images/guy.jpeg">
                                </a>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Guy C. Sheeran</h4>
                                <h6 class="card-category text-muted">Senior Tech Lead</h6>
                                <button class="btn btn-primary accordion">Read Bio</button>



                                <!--dropdown-->
                                {{-- <div class="panel">
          <p class="card-description"> 
          Emily Marling is an 
          Experienced Portfolio Manager. In those roles, she oversees the firm's Portfolio Management Department, which includes the Research, Investment Operations, Investment Solutions and Portfolio Evaluation Groups. She is also a member of the Technology Transformation Committee. Emily speaks regularly at client seminars and meets with institutional clients globally, providing information regarding market outlook, portfolio positioning and global economic factors.
          Emily joined {{$compd? $compd->companyname :"company name"}} in 2005 and has served on the firm's five-member IPC since 2011. Prior to her current responsibilities, She held several different positions at the firm, including Capital Markets Research Team Leader, Securities Research Team Leader and Securities Research Analyst. She has a degree in Finance from the University of Arizona. She lives in the San Francisco Bay Area with her husband and two children.
                  </p>
                  </div> --}}
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card card-profile text-center">
                            <div class="card-header card-avatar">
                                <a href="#">
                                    <img class="img"
                                        style="border: 2px solid white; border-radius: 50%;width:50%; height:180px;
height:180px;"
                                        src="assets/images/mat.jpeg">
                                </a>
                            </div>
                            <div class="card-body ">
                                <h4 class="card-title">Matthew T. McChanahan </h4>
                                <h6 class="card-category text-muted">Digital specialist</h6>
                                <!--buttonforreadnnore-->

                                <button class="btn btn-primary accordion">Read Bio</button>
                                <!--dropdown-->
                                {{-- <div class="panel">
              <p class="card-description"> 

              Evelyn D. chow, Risk Analyst, Co-Portfolio Manager with a demonstrated history of analysis and trading in the finance market, highly skilled in Risk Management, Investment analysis, Portfolio Management, where she oversees the firm’s Portfolio Management Department, which includes the Research, Investment, Operations and Investment Solutions.
              Mrs. Evelyn started her career at {{$compd? $compd->companyname :"company name"}} in 2016 and was  previously an Analyst at Neuberger Berman Prior affiliations include Goldman Sachs where she was responsible for developing investment strategies for the taxable core and asset-liability portfolios, Contract Negotiation and Asset Management. She received her strong finance professional with a Master’s Degree focused  in Business Managerial Economics  from Baruch College.
                      </p>
                  </div> --}}
                            </div>
                        </div>
                    </div>


                </div>

            </div>
    </div>









    <!--dropdown-->
    {{-- <div class="panel">
  <p class="card-description"> 

Michelle Klaudi Clinton brings 10 years of extensive commercial real estate finance expertise to {{$compd? $compd->companyname :"company name"}}. Most recently, Michelle Klaudi Clinton was the National Originations Manager for Westwood Capital Real Estate Finance, for which she also shared senior management responsibility. She managed a team that originated loans across the United North America, Europe and Asia.

Education - She holds a B.A. from the University of Kentucky.
          </p>
        </div> --}}
    </div>
    </div>
    </div>







    <!--buttonforreadnnore-->





    <!--dropdown-->
    {{-- <div class="panel">
  <p class="card-description"> 
Grilo Susan is the Executive Vice President of the American and International Private Client Services Group. In that role, Susan is responsible for all service and support, personalized financial services and products offered to the high-net-worth individual clients. Susan initially joined {{$compd? $compd->companyname :"company name"}} in 2015(ON CONTRACT) and has held a variety of roles at the firm
<br>

She spent the early part of her career as an Accountant, working directly with private clients, and in a variety of support roles. She then held managerial roles in Client Programs and thereafter served as a Group Vice President in charge of Investment Counselors and Client Programs. Susan regularly meets with private clients nationwide, sharing the firm’s market outlook, presenting current portfolio positioning and answering questions. She received her bachelors degree from the University of California, Los Angeles and a master’s of business administration from Grand Canyon University.<br><br>


</p>
</div> --}}



    </div>
    </div>
    </div>
    </div>




    <!--buttonforreadnnore-->




    </div>
    <!--</div>-->

    <!--</div>-->
    </section>





    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                    panel.style.display = "none";
                } else {
                    panel.style.display = "block";
                }
            });
        }
    </script>



    </div>

    <!-- Online Section End -->

    <div class="clearfix"></div>
@endsection
