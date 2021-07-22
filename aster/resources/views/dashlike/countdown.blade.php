@extends("dashlike.dashlayout")

@section("page")
<style>
    .centered {
  position: fixed; /* or absolute */
  top: 50%;
  left: 50%;
}
</style>

<h4 class="centered" id="count"> </h4>
<div id="formupload">

</div>
<script>
  var dis = document.getElementById('count');
  var duration = new Date("2015-03-25T00:30:00Z");
var yy = 1000;
  var interm = setInterval(
      function (){
          var duratio = Date.parse(duration) - yy;
          duratio = new Date(duratio);
          var minutesd = duratio.getMinutes();
          var secondss = duratio.getSeconds();
          var datedis = minutesd + ":" + secondss;

          dis.innerHTML= datedis;
          yy+=1000;
          if (minutesd==0 && secondss ==0) {
            clearInterval(interm);
            window.location.href ='/';
          }
      },
      1000
  );




  function getform (){
  var displaypform = document.getElementById('formupload');
  var aj = new XMLHttpRequest();
  aj.open('Get','uploadajax',true);
  aj.send();
  if (aj.onload) {
      if (aj.onreadystatechange) {
        if (aj.onreadystatechange.readyState == 4 && aj.onreadystatechange.status == 200) {
            displaypform.innerHTML =   aj.responseText;
            if (aj.responseText == 'processing') {
            }
            else{
                clearInterval(checkin);
            }
    }
      } else {
        displaypform.innerHTML =   'verification in progress..';
      }
  } else {
    displaypform.innerHTML =   'checking...';
    }

  }



var checkin = setInterval(getform(), 100000);




</script>
@endsection
