@extends('admin.header_footer')
@section('admin-body')
<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-9">
                <div class="card card-primary">
                    <div class="card-header">
                       <h3 class="card-title">VIEW SUBCATEGORY</h3>
                    </div>
                <table id="example2" class="table py-3 table-bordered table-hover dataTable ">
                    <tr>
                        <th>ID</th>
                        <th>CATEGORY</th>
                        <th>SUBCATEGORYNAME</th>
                    </tr>
                    @foreach($subcategory as $value)
                    <tr class="odd">
                        <td>{{$value->id}}</td>
                        <td>{{$value->category}}</td>
                        <td>{{$value->subcategoryname}}</td>
                        <td><a href="/editsubcategory/{{$value->id}}">Edit Subcategoryname</a></td>
                        <td><a href="/deletesubcategory/{{$value->id}}">Delete subcategoryname</a></td>
                    </tr>
                    @endforeach
                </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection