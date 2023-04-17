@extends('index.headerfooter')
@section('index-body')
<div class="container">
  <div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
      <form action="/userloginaction" method="post">
        @csrf
        <div class="row pt-5">
          <label>
            <center>
              <h1 class="text-light">LOGIN</h1>
            </center>
          </label>

        </div>
        <div class="row py-3 ">

          <label>Email</label>
          <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email">
        </div>
        <div class="row py-3 ">

          <label>Password</label>
          <input type="password" name="pwd" class="form-control" id="pwd" placeholder="Enter Your Password">
        </div>
        <div class="row py-3 ">
          <button class="btn btn-primary w-100" type="submit">
            Login
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection