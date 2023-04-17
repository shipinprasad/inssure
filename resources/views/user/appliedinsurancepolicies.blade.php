@extends('user.headerfooter')
@section('user-body')
<section class="content">
    <div class="container">
        <div class="row">
            <div class="card-header bg-primary my-5">
                <center>
                    <h3 class="card-title ">APPLIED INSURANCE POLICIES</h3>
                </center>
            </div>

            @foreach($result as $value)
            <div class="col-sm-4 h-100">
                <div class="card card-primary">
                    

                    <table id="example2" class="table table-bordered table-hover dataTable ">
                        <tr>
                            <th>Policy Name</th>
                            <td>{{$value->policyname}}</td>
                        </tr>
                        <tr>
                            <th>Category</th>
                            <td>{{$value->category}}</td>
                        </tr>
                        <tr>
                            <th>Subcategory</th>
                            <td>{{$value->subcategory}}</td>
                        </tr>
                        <tr>
                            <th>Sumassured</th>
                            <td>{{$value->sumassured}}</td>
                        </tr>
                        <tr>
                            <th>Premium</th>
                            <td>{{$value->premium}}</td>
                        </tr>
                        <tr>
                            <th>Tenure</th>
                            <td>{{$value->tenure}}</td>
                        </tr>
                        <tr>
                            <th>ID Proof</th>
                            <td><a href="/idproof/{{$value->idproof}}">{{$value->idproof}}</a></td>
                        </tr>
                        <tr>
                            <th>Photo</th>
                            <td><img src="/photo/{{$value->photo}} " height="100px" width="100px"></td>
                        </tr>
                        <tr>
                            <th>Date</th>
                            <td>{{$value->date}}</td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>{{$value->status}}</td>
                        </tr>
                    </table>

                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection