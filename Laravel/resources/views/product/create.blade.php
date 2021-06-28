@extends('product.layout')

@section('content')
<br><br><br>

<div class="row">

<div class="col-lg-12 margin-tb">

<div class="pull-left">
<h2> Add New Product</h2>
</div>

<div class="pull-right">
<a class="btn btn-success" href="{{ route('product.index')}}">Back</a>
</div>
</div>
</div>

<form action="{{ route('product.store')}}" method="POST" enctype="multipart/form-data">
@csrf
<div class="row">
<div class="col-xs-6 col-sm-6 col-md-6">
<div class="form-group">
<strong>Product Name:</strong>
<input type="text" name="product_name" class="form-control" placeholder="Product Name"></input>
</div>

<div class="row">
<div class="col-xs-6 col-sm-6 col-md-6">
<div class="form-group">
<strong>Product Category:</strong>
<input type="text" name="product_category" class="form-control" placeholder="Product Category"></input>
</div>

<div class="row">
<div class="col-xs-6 col-sm-6 col-md-6">
<div class="form-group">
<strong>Product Sub-Category:</strong>
<input type="text" name="product_subcategory" class="form-control" placeholder="Product Sub-Category"></input>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Product Details:</strong>
<textarea class="form-control" name="product_details" placeholder="Details" style="height:150px; width:1000px"></textarea>
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Product Image:</strong>
<input type="file" name="product_image"></input>
</div>
</div>



<div class="col-xs-12 col-sm-12 col-md-12">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>



@endsection