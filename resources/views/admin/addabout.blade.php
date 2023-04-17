@extends('admin.header_footer')
@section('admin-body')
<section class="content ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">ADD ABOUT</h3>
                    </div>
                    <form action="/addaboutaction" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputTitle">TITLE</label>
                                <input type="text" class="form-control" name="title" id="title" placeholder="Enter title">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputDescription">DESCRIPTION</label>
                                <textarea name="description" class="form-control" id="description"></textarea>
                            </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">ADD</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection