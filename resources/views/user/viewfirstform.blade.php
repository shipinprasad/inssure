@extends('user.headerfooter')
@section('user-body')
<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-9">
                <div class="card card-primary">
                    <div class="card-header">
                       <h3 class="card-title">VIEW FIRST FORM</h3>
                    </div>
                <table id="example2" class="table table-bordered table-hover dataTable ">
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>PERMANENT ADDRESS</th>
                        <th>CURRENT ADDRESS</th>
                        <th>EMAIL</th>
                        <th>DOB</th>
                        <th>CONTACT NO</th>
                        <th>PASSWORD</th>
                        <th>STATUS</th>
                    </tr>
                    @foreach($first as $value)
                    <tr>
                        <td>{{$value->id}}</td>
                        <td>{{$value->name}}</td>
                        <td>{{$value->permanentaddress}}</td>
                        <td>{{$value->currentaddress}}</td>
                        <td>{{$value->email}}</td>
                        <td>{{$value->dob}}</td>
                        <td>{{$value->contactno}}</td>
                        <td>{{$value->password}}</td>
                        <td>{{$value->status}}</td>
                    </tr>
                    @endforeach
                </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection