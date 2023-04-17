@extends('user.headerfooter')
@section('user-body')
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto" style="max-width: 500px">
            <h1 class="display-6 mb-5">
                We Provide professional Insurance Services
            </h1>
        </div>
        <div class="row justify-content-center">
            @foreach($policy as $value)
            <div class="col-lg-4 w-30 ">
                <div class="service-item rounded h-100 p-5 bg-primary text-light ">
                    <div class="d-flex align-items-center  mb-4  w-100">
                        <div class="service-icon flex-shrink-0  bg-info rounded-end me-4">
                            <img class="img-fluid" src="img/icon/icon-10-light.png" alt="">
                        </div>
                        <center>
                            <p class="mb-0 text-uppercase">POLICY NAME : {{$value->policyname}}</p>
                        </center>
                        <!-- <h4 class="mb-0">POLICY NAMECATEGORY : {{$value->category}}</h4> -->
                    </div>
                    <p class="mb-4">CATEGORY : {{$value->category}}</p>
                    <p class="mb-4">SUB CATEGORY : {{$value->subcategory}}</p>
                    <a class="btn btn-light px-3" href="apply/{{$value->id}}">Apply</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection