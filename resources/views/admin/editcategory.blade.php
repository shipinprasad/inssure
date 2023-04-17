@extends('admin.header_footer')
@section('admin-body')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">EDIT CATEGORY</h3>
                    </div>
                    @foreach($result as $value)
                    <form action="/editcategoryaction/{{$value->id}}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputCategory1">Category</label>
                                <input type="text" class="form-control" name="category" id="exampleInputCategory1" value="{{$value->category}}">
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">ADD</button>
                            </div>
                        </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection