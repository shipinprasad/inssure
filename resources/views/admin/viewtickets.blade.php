@extends('admin.header_footer')
@section('admin-body')
<section class="content">
  <div class="container">
    <div class="row">
      <div class="col-sm-3"></div>
      <div class="col-sm-9">
          <div class="card card-primary">
              <div class="card-header">
                 <h3 class="card-title">VIEW TICKETS</h3>
              </div>
          <table id="example2" class="table py-3 table-bordered table-hover dataTable ">
          <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>STATUS</th>
          </tr>
          @foreach($ticket as $value)
          <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->title}}</td>
            <td>{{$value->description}}</td>
            <td>{{$value->status}}</td>
            <td><a href="/changeact/{{$value->id}}">Changeact</a></td>
          </tr>
          @endforeach
        </table>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection