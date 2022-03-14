@extends('dashblayout.dashlayout')
@section('body')


<form action="{{ route("userdashb_withdrawal_post") }}" method="post">

    @csrf

<div class="card" style="width: 18rem;">
    <div class="card-body">
        
      <p class="card-text fw-extrabold text-left">Minimum Withdrawal -{{ $user_fund->withdrawal_minimum }}</p>
      <p class="card-text fw-extrabold  text-left">Maximum Withdrawal - {{ $user_fund->withdrawal_maximum }} </p>
      <input type="text" class="form-control" id="amount" name="amount" placeholder="Enter Withdraw Amount" aria-describedby="amount"><br>
      <input type="text" class="form-control" id="method" name="btcaddress" placeholder="Payment Method - BTC"><br>
      <input type="text" class="form-control" id="methodAccount" name="methodaccount" placeholder="Enter Address" aria-describedby="amount"><br>
      <br>
      {{-- <a href="#" class="btn btn-primary">Withdraw</a> --}}
      <button type="submit" class="btn btn-primary"> Withdraw </button>
    </div>
  </div>

</form>


@endsection
