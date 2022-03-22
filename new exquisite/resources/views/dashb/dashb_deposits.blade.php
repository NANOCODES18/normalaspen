@extends('dashblayout.dashlayout')
@section('body')


<div class="container">

    <div class="row">

        {{-- depositDate	amount	method	name	email	methodAccount	status	userId --}}
        
        <div class="col-md-6">
            <!-- Form -->
            <form action="{{ route('dashb_depositsubmit') }}" method="POST">
                @csrf
            <div class="mb-4">
                <label class="my-1 me-2" for="">Deposit</label>
                <input type="number" class="form-control" id="amount" name="amount" placeholder="Enter Amount" aria-describedby="amount"><br>
                <input type="hidden" class="form-control" id="email" name="email">
                <input type="hidden" class="form-control" id="name" name="name">
                <input type="hidden" class="form-control" id="methodAccount" name="methodAccount">
                <input type="hidden" class="form-control" id="userId" name="userId">
                <select class="form-select" name="method" aria-label="Default select example">
                    <option selected>Select a Payment Method</option>
                    <option value="btc_address">BTC</option>
                    <option value="eth">ETH</option>
                    <option value="usdt">USDT</option>
                    <option value="paypal">Paypal</option>
                    <option value="xrp">XRP</option>
                    {{-- <option value="usdt">USDT</option> --}}
                </select>
                <br>
                <button class="btn btn-secondary" type="submit">Deposit</button>
            </div>

        </form>

    </div>

    </div>

</div>




@endsection
