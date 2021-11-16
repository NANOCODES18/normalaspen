@extends("layouts.spacedcustomlayout")

@section("body")
<div class="bannerContainer insider">
<div class="bannerInner">
  <div class="ctn-banner fadeInRight wow">
    <h3>Contact <span>Us</span></h3>
  </div>
</div>
 </div>
</div>
<div class="clearfix"></div>


<div class="inside_wrap about_top">
<div class="inside_inner">
<p>Do You have any questions? We strongly recommend that you start searching for the necessary information in the <a href="{{route('faq')}}">FAQ</a> section. If you need advice or technical assistance, do not hesitate to contact our specialists. Customer support is available around the clock. You just need to send a letter or a request via the feedback form to promptly receive the necessary assistance. Remember that the more detailed the description of your problem is, the sooner it will be solved. Do not forget to indicate your login, if you are a registered user of the website.</p>
</div>
</div>
<div class="inside_wrap about_mid">
<div class="inside_inner">
<div class="companyLeft">
  <div class="companyLeft-part1"> <img src="styles/images/ctn-zoom.png"> </div>
  <div class="companyLeft-part2">
    <h3>Miners Funds </h3>
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
  <h2>Miners Funds- a United Kingdom-based company is a legitimate business operating since 2018 that provides its trusted fund management services globally under SIC licence 64205. Company's   filing details are avilable on company house website.</h2>
  <div class="companyRight-part companyRight-part1">
    <h3>Phone Number:</h3>
    <p>+vip members</p>
  </div>
  <div class="companyRight-part companyRight-part2">
    <h3>E-mail Address:</h3>
    <p>{{$compd->companyEmail?$compd->companyEmail:""}} </p>

  </div>
</div>
</div>
</div>
<div class="inside_wrap supportform">
<div class="inside_inner">
<h2 class="section-header"><span>Send Us a Message</span></h2>
<div class="form-content">





<script language=javascript>

function checkform() {
if (document.mainform.name.value == '') {
alert("Please type your full name!");
document.mainform.name.focus();
return false;
}
if (document.mainform.email.value == '') {
alert("Please enter your e-mail address!");
document.mainform.email.focus();
return false;
}
if (document.mainform.message.value == '') {
alert("Please type your message!");
document.mainform.message.focus();
return false;
}
return true;
}

</script>


<form method="get" name=mainform action="{{route('postcontact')}}" onsubmit="return checkform()">
@csrf
    <table width="100%" border="0" cellpadding="5" cellspacing="5">
      <tr>
        <td width="44%"><label> Your Name:</label>
                        <input type="text" name="name" value="" size="30" class="inpts" />
           </td>
        <td width="2%">&nbsp;</td>
        <td width="44%"><label>Your Email:</label>
                        <input type="text" name="email" value="" size="30" class="inpts" />
           </td>
      </tr>
      <tr>
        <td colspan="3"><label>Your Message:</label>
          <textarea name="message" class="inpts" cols="45" rows="4"></textarea></td>
      </tr>
        <tr>
<td height="60" colspan="6" valign="bottom"><input type="submit" value="Send" class="sbmt" /></td>
</tr>
    </table>
  </form>

       </div>
</div>
</div>
<div class="inside_wrap supportmap">
<div class="inside_inner">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.9048136585925!2d-0.17821388375759167!3d51.51496227963643!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761ab2aafc93b1%3A0xaa7540cc5729baed!2s24%20Spring%20St%2C%20Paddington%2C%20London%20W2%203RF%2C%20UK!5e0!3m2!1sen!2sin!4v1580029100465!5m2!1sen!2sin" width="100%" height="350"  frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</div>
</div>

@endsection()
