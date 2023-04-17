@extends('admin.header_footer')
@section('admin-body')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit SUBCATEGORY</h3>
                    </div>
                    @foreach($subcategory as $value)
                    <form action="/editsubcategoryaction/{{$value->id}}" class="w-100" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputCategory1">Category</label>
                                <select name="category" class="form-control" id="exampleInputCategory1">
                                    <option value="{{$value->id}}">{{$value->category}}</option>
                                    @foreach($category as $value1)
                                    <option value="{{$value->id}}">{{$value1->category}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="subcategoryname">Subcategory</label>
                                <input type="text" class="form-control" name="subcategoryname" id="exampleInputsubcategoryname" value="{{$value->subcategoryname}}">
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