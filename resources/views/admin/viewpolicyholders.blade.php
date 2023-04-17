@extends('admin.header_footer')
@section('admin-body')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-8     ml-2">
               <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">VIEW POLICY HOLDERS</h3>
                    </div>
                <table id="example2" class="table py-3 table-responsive table-bordered table-hover dataTable ">
                    <tr>
                        <th>ID</th>
                        <th>POLICYNAME</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>PHNO</th>
                        <th>CATEGORY</th>
                        <th>SUBCATEGORY</th>
                        <th>SUMASSURED</th>
                        <th>PREMIUM</th>
                        <th>TENURE</th>
                        <th>IDPROOF</th>
                        <th>PHOTO</th>
                        <th>DATE</th>
                        <th>STATUS</th>
                    </tr>
                    @foreach($result as $value)
                    <tr>
                        <td>{{$value->id}}</td>
                        <td>{{$value->policyname}}</td>
                        <td>{{$value->name}}</td>
                        <td>{{$value->email}}</td>
                        <td>{{$value->phno}}</td>
                        <td>{{$value->category}}</td>
                        <td>{{$value->subcategory}}</td>
                        <td>{{$value->sumassured}}</td>
                        <td>{{$value->premium}}</td>
                        <td>{{$value->tenure}}</td>
                        <td><a href="/idproof/{{$value->idproof}}">{{$value->idproof}}</a></td>
                        <td><img src="/photo/{{$value->photo}} " height="100px" width="100px"></td>
                        <td>{{$value->date}}</td>
                        <td>{{$value->status}}</td>
                        <td><a class="btn btn-danger" href="/approvedpolicyholders/{{$value->id}}">Approvedpolicyholders</a></td>
                        <td><a class="btn btn-danger" href="/declinedpolicyholders/{{$value->id}}">Declinedpolicyholders</a></td>
                    </tr>
                    @endforeach
                </table>
               </div>
            </div>
        </div>
    </div>
</section>
@endsection