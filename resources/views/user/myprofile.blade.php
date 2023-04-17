@extends('user.headerfooter')
@section('user-body')
<div class="container-xl py-5 ">
    <div class="row ">
        <div class="col-sm-3">
        </div>
        <div class="col-sm-6 ">
        @foreach($registrate as $value)
        <form action="/myprofileaction/{{$value->id}}" method="post">
            <div class="row py-3">
                    <label><center><h1 class="text-light">MY PROFILE</h1></center></label>
                    
                </div>
                @csrf
                <div class="row py-3">
                    <label>NAME</label>
                    <input type="text" name="name" class="form-control" id="name"  value="{{$value->name}}">
                </div>
                <div class="row py-3">
                    <label>EMAIL</label>
                    <input type="text" name="email" class="form-control" id="email"  value="{{$value->email}}">
                </div>
                <div class="row py-3">
                    <label>PASSWORD</label>
                    <input type="password" name="pwd" class="form-control" id="pwd"  value="{{$value->pwd}}">
                </div>

                <div class="row py-3">
                    <label>PHONE NUMBER</label>
                    <input type="number" name="phno" class="form-control" id="phno"  value="{{$value->phno}}">

                </div>
                <div class="row py-3">
                    <input type="submit" name="submit" value="Register" id="reg" class="btn btn-primary btn-block w-100">
                </div>

            </form>
            @endforeach
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.js"></script>
    <script type="text/javascript">
        $('#frm').validate({
            rules: {
                name: {
                    required: true,
                    minlength: 5
                },
                email: {
                    required: true,
                    email: true
                },
                pwd: {
                    required: true,
                    minlength: 5
                },
                phno: {
                    required: true,
                    minlength: 8
                }
            }
        })
    </script>
</div>

@endsection