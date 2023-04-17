@extends('admin.header_footer')
@section('admin-body')
<section class="content">
  <div class="container">
    <div class="row">
      <div class="col-sm-3"></div>
      <div class="col-sm-9">
      @foreach($ticket as $value)
      <form action="/changeaction/{{$value->id}}" method="post">
         @csrf
         <div class="card-body">
           <div class="form-group">
              <label for="exampleInputStatus">STATUS</label>
              <textarea name="status" class="form-control" id="status" value="{{$value->status}}">{{$value->status}}</textarea>
            </div>
         <div class="card-footer">
            <button type="submit" class="btn btn-primary">UPDATE</button>
         </div>
      </form>
      @endforeach
      </div>
    </div>
  </div>
</section>
@endsection