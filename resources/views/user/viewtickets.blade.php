@extends('user.headerfooter')
@section('user-body')
<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-9">
                <table id="example2" class="table table-bordered table-hover dataTable ">
                    <tr>
                        <th>ID</th>
                        <th>TITLE</th>
                        <th>DESCRIPTION</th>
                        <th>STATUS</th>
                    </tr>
                    @foreach($ticket as $value)
                    <tr>
                        <td>{{$value->id}}</td>
                        <td>{{$value->title}}</td>
                        <td>{{$value->description}}</td>
                        <td>{{$value->status}}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</section>
@endsection