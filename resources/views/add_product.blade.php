@extends('layout')
@section('content')

<style>
    .col-md-12 label{
        margin-top: 10px;
    }
    .btncls{
        margin-top: 10px;
        margin-left: 10px;
    }
</style>
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h1 class="text-center">Add Product</h1>
            </div>
            <form action="/add_product_data" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Product Name <span style="color:red">*</span></label>
                        <input type="text" class="form-control" name="product_name" placeholder="Enter Product Name" required>
                    </div>
                    <div class="col-md-12">
                        <label for="">Product Price <span style="color:red">*</span></label>
                        <input type="number" class="form-control" name="product_price" placeholder="Enter Product Price" required>
                    </div>
                    <div class="col-md-12">
                        <label for="">Product Color <span style="color:red">*</span></label>
                        <input type="color" class="form-control" name="product_color" placeholder="Enter Product Name" required>
                    </div>
                    <div class="col-md-12">
                        <label for="">Product Image <span style="color:red">*</span></label>
                        <input type="file" class="form-control" name="product_file" required>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-success mt-3 mr-2">Save Data</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop












<input type="text" name="pname" id="pname" class="input-group" placeholder="Product Name">
<input type="text" name="pprice" id="pprice" class="" placeholder="Price">
<input type="text" name="pcolor" id="pcolor" class="" placeholder="Product Color">
<input type="text" name="pimage" id="pimage" class="" placeholder="Product Image">
<button type="submit">Submit</button>