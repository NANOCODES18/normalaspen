@extends('admin.adminlayout')
@section('content')

<div class="">
    <a href="{{route('myadmin')}}" style="color:white"><button type="button" name="button" class="btn btn-raised btn-block btn-primary" style="margin:20px" >Back to admin home page </button></a>
  </div>
    <h2 class="c1234h">Admin create client</h2>
  <div class="" style="background-color:#55ACEE ">

    <form method="post" action="{{route('postcreateclient')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Name</label>
            <input type="text" name="name" class="form-control" id="inputPassword4" placeholder="full name">
          </div>
        </div>
        <div class="form-group col-md-6">
          <label for="inputAddress">Date of birth</label>
          <input type="date" name="dob" class="form-control" id="inputAddress" placeholder="DATE OF BIRTH">
        </div>
        <div class="form-group col-md-6">
          <label for="inputAddress2">phone</label>
          <input type="text" name="phone" class="form-control" id="inputAddress2" placeholder="ENTER PHONE NUMBER">
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">OCCUPATION</label>
            <input type="text" name="occupation" class="form-control" id="inputCity" placeholder="OCCUPATION">
          </div>
          <div class="form-group col-md-4" style="visibility:hidden">
            <label for="inputState">State</label>
            <select id="inputState" class="form-control">
              <option selected>Choose...</option>
              <option>...</option>
            </select>
          </div>
          <div class="form-group col-md-2">
            <label for="inputZip">CODE</label>
            <input type="text" name="code" class="form-control" required placeholder="Enter unique code" id="inputZip">
          </div>
        </div>
        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" required name="passport" type="file" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
                passport
            </label>
          </div>
        </div>
        <div class="row col-xs-12" style="text-align: center;">
            <button style="width: 80%; font-size:20px" type="submit" class="btn btn-primary btn-sm">Create</button>
        </div>
      </form>

  </div>


  </body>
</html>


@endsection
