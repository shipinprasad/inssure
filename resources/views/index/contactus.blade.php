@extends('index.headerfooter')
@section('index-body')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<div class="container-xxl py-5">
  <div class="container">
    <div class="row ">
      <div class="col-lg-12">

        <body class="bg-primary">
          <center>
            <form action="/contactusaction" method="post">
              <div class="row py-3">
                <label>
                  <center>
                    <h1 class="text-light">Contact US</h1>
                  </center>
                </label>

              </div>
              @csrf
              <div class="row py-3">
                <div class="col-lg-6">
                  <input type="text" name="name" id="name" class="form-control" placeholder="Enter your Name">
                </div>
                <div class="col-lg-6">
                  <input type="email" name="email" id="email" class="form-control" placeholder="Enter Your Email">
                </div>
              </div>
              <div class="row py-3">
                <div class="col-lg-6">
                  <input type="password" name="password" class="form-control" id="password" placeholder="Enter your Password">
                </div>
                <div class="col-lg-6">
                  <input type="number" name="number" class="form-control" id="number" placeholder="Enter your Phone Number">
                </div>
              </div>
              <div class="row py-3">
                <div class="col-lg-12">
                  <textarea name="message" class="form-control" id="message" placeholder="Enter your Message"></textarea>
                </div>
              </div>
              <div class="row py-3">
                <button class="btn btn-primary py-3 px-5" type="submit">
                  SEND MESSAGE
                </button>
              </div>
      </div>
      </form>
      </center>
      </body>
    </div>
  </div>
</div>
</div>
</body>

</html>
@endsection