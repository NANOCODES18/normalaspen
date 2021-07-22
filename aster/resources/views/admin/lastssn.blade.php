@extends('admin.adminlayout')
@section('content')

<div class="">
    <a href="{{route('myadmin')}}" style="color:white"><button type="button" name="button" class="btn btn-raised btn-block btn-primary" style="margin:20px" >Back to admin home page </button></a>
  </div>
    <h2 class="c1234h">Last ssn</h2>
  <div class="table table-responsive" style="background-color: #55ACEE;width:100%" >
    <table style="" class="table table-hover table-responsive">
      <tr class="info">
          <th>S/N</th><th>LAST SSN</th>
    </tr>

    @foreach($lastssn as $ssn)

    <tr>
        <td>{{$loop->index + 1}}</td>
        <td><input type="text" name="" readonly aria-readonly="" value="{{$ssn->lastssn}}"></td>

    </tr>
  @endforeach

    </table>
  </div>


  </body>
</html>


@endsection
