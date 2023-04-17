@extends('user.headerfooter')
@section('user-body')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-12 wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
          <body class="bg-success">
            <form action="/firstformaction" method="post">
              @csrf
              <div class="row g-3">
                <div class="col-12">
                  <div class="form-floating">
                    <input type="text" name="name" id="name">
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea name="permanentaddress" id="add" cols="30" rows="10"></textarea>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea name="currentaddress" id="address" cols="30" rows="10"></textarea>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <input type="email" name="email" id="email">
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <input type="date" name="dob" id="dob">
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <input type="number" name="contactno" id="contactno">
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <input type="password" name="password" id="password">
                  </div>
                </div>
                <div class="col-12">
                  <button class="btn btn-primary py-3 px-5" type="submit">
                    Add
                  </button>
                </div>
              </div>
            </form>
          </body>
          </div>
        </div>
      </div>
</div>
@endsection