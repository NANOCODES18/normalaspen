@extends('admin.adminlayout')
@section('content')

<div class="">
    <a href="{{route('myadmin')}}" style="color:white"><button type="button" name="button" class="btn btn-raised btn-block btn-primary" style="margin:20px" >Back to admin home page </button></a>
  </div>
    <h2 class="c1234h">Admin control room</h2>
  <div class="" style="background-color:#55ACEE ">
    <table style="" class="table table-hover">
      <tr class="info">

        <td><a href="{{route('createclient')}}"><button class="btn btn-primary">Create Client</button></a></td>
        <td><a href="{{route('viewclientdetails')}}"><button class="btn btn-primary">view all clients</button></a></td>
        <td colspan="3"><a href="{{route('viewcreatepayment')}}"><button class="btn btn-primary">Create Payment Method</button></a></td>
      </tr>


    </table>
  </div>


  </body>
</html>


@endsection
