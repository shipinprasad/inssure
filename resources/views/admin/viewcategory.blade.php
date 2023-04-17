@extends('admin.header_footer')
@section('admin-body')
<section class="content">
  <div class="container">
    <div class="row">
      <div class="col-sm-3"></div>
      <div class="col-sm-9">
        <div class="card card-primary">
          <div class="card-header">
           <h3 class="card-title">VIEW CATEGORY</h3>
          </div>
        <table id="example2" class="table py-3  table-bordered table-hover dataTable ">
          <tr>
            <th class="sorting sorting_asc">ID</th>
            <th class="sorting sorting_asc">CATEGORY</th>
          </tr>
          @foreach($result as $value)
          <tr class="odd">
            <td>{{$value->id}}</td>
            <td>{{$value->category}}</td>
            <td><a class="btn btn-danger" href="/editcategory/{{$value->id}}">Edit</a></td>
            <td><a class="btn btn-danger" href="/deletecategory/{{$value->id}}">Delete</a></td>
          </tr>
          @endforeach
        </table>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection