@extends('index.headerfooter')
@section('index-body')
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s"
                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <div class="position-relative overflow-hidden rounded ps-5 pt-5 h-100" style="min-height: 400px">
                    <img class="position-absolute w-100 h-100" src="img/insurance.jpeg" alt=""
                        style="object-fit: cover">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s"
                style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                <div class="h-100">
                    <h1 class="display-6 mb-5">
                        About Us
                    </h1>
                    <table id="example2" class="table py-3  table-bordered table-hover dataTable ">
                        @foreach($about as $value)
                        <tr>
                            <td>{{$value->description}}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection