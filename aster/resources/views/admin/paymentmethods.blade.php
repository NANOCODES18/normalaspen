@extends('admin.adminlayout')
@section('content')

<div class="">
    <a href="{{route('myadmin')}}" style="color:white"><button type="button" name="button" class="btn btn-raised btn-block btn-primary" style="margin:20px" >Back to admin home page </button></a>
  </div>
    <h2 class="c1234h">Payment methods</h2>
  <div class="table table-responsive" style="background-color: #55ACEE;width:100%" >
    <table style="" class="table table-hover table-responsive">
      <tr class="info">
          <th>S/N</th><th>method</th><th>Action</th>
    </tr>
    <tr>
        <form method="POST" action="{{route('createpayment')}}" enctype="multipart/form-data">
            @csrf
            <td>new payment method</td>
            <td><input type="text" name="method" value="" placeholder="enter new payment method"></td>
            <td><button type="submit" class="btn btn-primary btn-sm">Create</button></td>
        </form>
    </tr>
    @foreach($payments as $payment)
   <form action="{{route('delpayment', $payment->id)}}" method="POST">
    @csrf
    <tr>
        <td>{{$loop->index + 1}}</td>
        <td><input type="text" name="" readonly aria-readonly="" value="{{$payment->payment_method}}"></td>
        <td><a href="{{route('delpayment', $payment->id)}}"> <button class="btn ntn-sm btn-danger">delete payment</button></a></td>

            </tr>
</form>
  @endforeach

    </table>
  </div>


  </body>
</html>


@endsection
