@extends('product.layout')

@section('content')
<br><br><br>
<div class="row">

<div class="col-lg-12 margin-tb">

<div class="pull-left">
<h2> Update Product</h2>
</div>

<div class="pull-right">
<a class="btn btn-success" href="{{ route('product.index')}}">Back</a>
</div>
</div>
</div>

<form action="{{url('update/product/'.$product->id)}}" method="POST" enctype="multipart/form-data">
@csrf
<div class="row">
<div class="col-xs-6 col-sm-6 col-md-6">
<div class="form-group">
<strong>Product Name:</strong>
<input type="text" name="product_name" class="form-control" value="{{$product->product_name}}"></input>
</div>


<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Product Details:</strong>
<textarea class="form-control" name="product_details" style="height:150px; width:1000px">{{$product->product_details}}</textarea>
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Product Image:</strong>
<input type="file" name="product_image"></input>
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Previous Image:</strong>
<img src="{{ URL::to($product->product_image) }}" height="500px" width="500px">
<input type="hidden" name="old_image" value="{{ $product->product_image}}">
</div>
</div>


<div class="col-xs-12 col-sm-12 col-md-12">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>



@endsection