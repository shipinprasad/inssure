@extends('admin.header_footer')
@section('admin-body')
<section class="content">
  <div class="container">
    <div class="row">
      <div class="col-sm-3"></div>
      <div class="col-sm-9">
        <div class="card card-primary">
          <div class="card-header">
           <h3 class="card-title">VIEW ABOUT</h3>
          </div>
        <table id="example2" class="table py-3  table-bordered table-hover dataTable py-3">
          <tr>
            <th>ID</th>
            <th>TITLE</th>
            <th>DESCRIPTION</th>
          </tr>
          @foreach($about as $value)
          <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->title}}</td>
            <td>{{$value->description}}</td>
            <td><a class="btn btn-danger" href="/editabout/{{$value->id}}">Edit About</a></td>
            <td><a class="btn btn-danger" href="/deleteabout/{{$value->id}}">Delete About</a></td>
          </tr>
          @endforeach
        </table>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection