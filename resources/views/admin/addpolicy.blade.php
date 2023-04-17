@extends('admin.header_footer')
@section('admin-body')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3>ADD POLICY</h3>
                    </div>
                    <form action="/addpolicyaction" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputCategory1">Category</label>
                                <select name="category" id="category" class="form-control" id="exampleInputCategory1">
                                    <option value="">Select Category</option>
                                    @foreach($category as $value)
                                    <option value="{{$value->id}}">{{$value->category}}</option>
                                    @endforeach
                                </select>
                                <div class="form-group">
                                    <label for="exampleInputsubcategory">Subcategory</label>
                                    <!-- <input type="text" name="subcategory" class="form-control" id="Subcategory" placeholder="enter subcategory"> -->
                                    <select name="subcategory" id="subcategory" class="form-control">
                                        <option disabled>Select subcategory</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPolicyname">Policyname</label>
                                    <input type="text" class="form-control" name="policyname" id="Policyname" placeholder="Enter Policyname">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputsumassured">SUMASSURE</label>
                                    <input type="text" class="form-control" name="sumassured" id="Sumassured" placeholder="Enter sumassured">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPremium">PREMIUMS</label>
                                    <input type="number" class="form-control" name="premium" id="Premium" placeholder="Enter Premium">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputTenure">TENURES</label>
                                    <input type="number" class="form-control" name="tenure" id="Tenure" placeholder="Enter the Tenure">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">ADD</button>
                            </div>
                    </form>
                </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('#category').change(function() {
            var categoryId = $(this).val();
            $.ajax({
                url: '{{ route("subcategories.viewsub", ":id") }}'.replace(':id', categoryId),
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    $('#subcategory').empty();
                    $('#subcategory').append($('<option>').text('Select Subcategory').attr('value', ''));
                    $.each(data, function(key, value) {
                        $('#subcategory').append($('<option>').text(value.subcategoryname).attr('value', value.subcategoryname));
                    });
                }
            });
        });
    });
</script>
@endsection