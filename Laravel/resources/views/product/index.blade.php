@extends('product.layout')



@section('content')

<div class="row">

<div class="col-lg-12 margin-tb">

<div class="pull-left">
<h2> Product List</h2>
</div>

<div class="pull-right">
<a class="btn btn-success" href="{{ route('product.create')}}">Create New Product</a>
</div>
</div>
</div>
@if($message = Session::get('success'))
<div class="alert alert-success">
<p> {{ $message }}</p>
</div>
@endif


<table class="table table-bordered">

<tr>
<th width="150px"> Product Image </th>
<th width="450px"> Product Name </th>
<th width="150px"> Category</th>
<th width="250px"> Sub-Category</th>
<th width="500px"> Details </th>
<th width="280px"> Action</th>
</tr>

@foreach($product as $pro)
<tr>
<td><img src="{{ URL::to($pro->product_image) }}" height="500px" width="500px"></td>
<td width="500px">{{ $pro->product_name}} </td> 
<td width="500px"> {{ $pro->product_category}} </td>
<td width="500px"> {{ $pro->product_subcategory}} </td>
<td style="display:flex" width="500px"> {{ $pro->product_details}} </td> 
<td >
    <a class="btn btn-info" href="{{ URL::to('show/product/'.$pro->id)}}">View</a>
    <a class="btn btn-primary" href="{{ URL::to('edit/product/'.$pro->id)}}">Edit</a>
    <a class="btn btn-danger" href="/delete/product/{{ $pro->id }}" onclick="return confirm('Are you sure???')">Delete</a>

</td>

</tr>

@endforeach


</table>

<span>
{{ $product->links() }}
</span>

<style>
.w-5{
    display: none;
}
</style>


@endsection