@extends('admin.header_footer')
@section('admin-body')
<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-9">
                <div class="card card-primary">
                   <div class="card-header">
                      <h3 class="card-title">VIEW POLICY</h3>
                    </div>
                <table id="example2" class="table py-3  table-bordered table-hover dataTable ">
                    <tr>
                        <th>ID</th>
                        <th>CATEGORY</th>
                        <th>SUBCATEGORY</th>
                        <th>POLICYNAME</th>
                        <th>SUMASSURED</th>
                        <th>PREMIUM</th>
                        <th>TENURE</th>
                    </tr>
                    @foreach($policy as $value)
                    <tr>
                        <td>{{$value->id}}</td>
                        <td>{{$value->category}}</td>
                        <td>{{$value->subcategory}}</td>
                        <td>{{$value->policyname}}</td>
                        <td>{{$value->sumassured}}</td>
                        <td>{{$value->premium}}</td>
                        <td>{{$value->tenure}}</td>
                        <td><a class="btn btn-danger" href="/editpolicy/{{$value->id}}">Edit Policy</a></td>
                        <td><a class="btn btn-danger" href="/deletepolicy/{{$value->id}}">Delete Policy</a></td>
                    </tr>
                    @endforeach
                </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection