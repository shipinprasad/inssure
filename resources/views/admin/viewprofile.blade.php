@extends('admin.header_footer')
@section('admin-body')
<section class="content ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title bg-info">View Profile</h3>
                    </div>
                    @foreach($admin as $value)
                    <form action="/viewprofileaction" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputusername">Username</label>
                                <input type="text" class="form-control" name="username" id="username" value="{{$value->username}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputpassword">Password</label>
                                <input type="password" class="form-control" name="password" id="password" value="{{$value->password}}">
                            </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- /.card -->
    </div>
</section>
@endsection