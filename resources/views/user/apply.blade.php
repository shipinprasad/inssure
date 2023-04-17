@extends('user.headerfooter')
@section('user-body')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-md-5 py-5">
                <div class="card card-primary bg-info">
                    @foreach($result as $value)
                    <h1 class="text-primary text-center">APPLY INSSURANCE</h1>
                    <form action="/applyaction/{{$value->id}}" id="myForm" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group py-3">
                                <label for="exampleInputCategory">Category</label>
                                <input type="text" name="category" id="category" value="{{$value->category}}" readonly class="form-control">
                            </div>
                            <div class="form-group py-3">
                                <label for="exampleInputsubcategory">Subcategory</label>
                                <input type="text" name="subcategory" id="subcategory" value="{{$value->subcategory}}" readonly class="form-control">
                            </div>
                            <div class="form-group py-3">
                                <label for="exampleInputPolicyname">Policyname</label>
                                <input type="text" name="policyname" id="Policyname" value="{{$value->policyname}}" readonly class="form-control">
                            </div>
                            <div class="form-group py-3">
                                <label for="exampleInputsumassured">Sumassured</label>
                                <input type="text" name="sumassured" id="sumassured" value="{{$value->sumassured}}" readonly class="form-control">
                            </div>
                            <div class="form-group py-3">
                                <label for="exampleInputPremium">Premium</label>
                                <input type="number" name="premium" id="Premium" value="{{$value->premium}}" readonly class="form-control">
                            </div>
                            <div class="form-group py-3">
                                <label for="exampleInputTenure">Tenure</label>
                                <input type="number" name="tenure" id="Tenure" value="{{$value->tenure}}" readonly class="form-control">
                            </div>
                            <div class="form-group py-3">
                                <label for="exampleInputTenure">UPLOAD ID PROOF</label>
                                <input type="file" name="idproof" accept="application/pdf,application/vnd.openxmlformats-officedocument.wordprocessingml.document" id="idproof" class="form-control">
                            </div>
                            <div class="form-group py-3">
                                <label for="exampleInputTenure">UPLOAD PHOTO</label>
                                <input type="file" name="photo" id="photo" accept="image/jpeg,image/png" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-primary">Apply</button>
                        </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#myForm').validate({
                rules: {
                    photo: {
                        required: true,
                        accept: "jpg,jpeg,png" // accepted file types
                    }
                },
                // messages: {
                //     myfile: {
                //         required: "Please select a file",
                //         accept: "Only images are allowed"
                //     }
                // }
            });
        });
    </script> -->

</section>
@endsection