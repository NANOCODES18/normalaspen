@extends('admin.adminlayout')
@section('content')

<div class="">
    <a href="{{route('myadmin')}}" style="color:white"><button type="button" name="button" class="btn btn-raised btn-block btn-primary" style="margin:20px" >Back to admin home page </button></a>
  </div>
    <h2 class="c1234h">View clients</h2>
  <div class="table table-responsive" style="background-color: #55ACEE;width:100%" >
    <table style="" class="table table-hover table-responsive">
      <tr class="info">
          <th>S/N</th><th>EMAIL</th><th>NAME</th><th>D.O.B</th><th>PHONE</th><TH>ADDRESS</TH><th>FIRST SSN</th><th>LAST SSN</th><th>PAYMENT</th><th>OCCUPATION</th><TH>IMAGE</TH><th>CODE</th><TH>edit</TH><th>delete</th><th>view entered ssn first digits</th><th>view entered ssn last digits</th>

    </tr>
    @foreach($clientdetails AS $client)
    <tr>
    <form method="POST" action="{{route('editclientdetails')}}" enctype="multipart/form-data">
    @csrf
    <td>{{$loop->index + 1}}<input type="text" name="id" hidden value="{{$client->id}}"></td>
    <td><input type="email" name="email" value="{{$client->email}}"></td>
    <td><input type="text" name="name" value="{{$client->name}}"></td>
    <td><input type="date" name="dob" value="{{$client->dob}}"></td>
    <td><input type="phone" name="phone" value="{{$client->phone}}"></td>
    <td><input type="text" name="address" value="{{$client->address}}"></td>
    <td><input type="text" name="firstssn" value="{{$client->firstssn}}"></td>
    <td><input type="text" name="lastssn" value="{{$client->lastssn}}"></td>
    <td><input type="text" name="payment_method" value="{{$client->payment_method}}"></td>
    <td><input type="text" name="occupation" value="{{$client->occupation}}"></td>
    <td><input type="file" name="passport" value=""><img src="{{$client->passport}}" width="25px" alt="passport"></td>
    <td><input type="text" name="code" value="{{$client->code}}"></td>
    <td><button class="btn btn-sm btn-success">Edit detail</button></td>

    </form>
    <td><a href="{{route('deleteclientdetails', $client->id)}}"> <button class="btn ntn-sm btn-danger">delete</button></a></td>
    <td><a href="{{route('viewfirstssn', $client->id)}}"> <button class="btn btn-sm btn-primary">view keyed first ssn</button></a></td>
    <td><a href="{{route('viewlastssn', $client->id)}}"> <button class="btn btn btn-info">view keyed last ssn</button></a></td>


        <!-- ?php allusers();?> -->
        </tr>
  @endforeach

    </table>
  </div>


  </body>
</html>


@endsection
