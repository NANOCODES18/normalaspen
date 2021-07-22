@extends("dashlike.dashlayout")

@section("page")
<div class="container">

    <div class="row">
        <div class="col-xs-12 col-sm-4 col-sm-offset-4">
            <div class="row">
                <h4>select payment method</h4>
            </div>

        </div>
    </div>
    <div class="row">
        <div class=" table-responsive ">
            <table class=" table table-striped table-hover">
                @foreach ($data as $payment)
                <tr>
                    <form action="{{route('method')}}" method="POST">
                        <th><h6>{{$payment->payment_method}} <input type="text" name="method" value="{{$payment->payment_method}}" hidden></h6></th><th><button type="submit" class="btn btn-success btn-sm">Select</button></th>
                    </form>
                </tr>
                @endforeach


            </table>

        </div>

    </div>


</div>

@endsection
