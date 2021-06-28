@extends('layouts.app')



@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
        <div class="card">
        <div class="card-header">
        <strong>Categories</strong>
        </div>
        <div class="card-body">
        <ul class="userpgcategory fa-ul">
        @if(isset($categories))
            @if(count($categories)>0)
                @foreach($categories as $category)
                <li><a href='{{url('/viewAds/'. $category->maincategory.'/'.$category->id)}}'>{{$category->maincategory}}</a></li>
                @endforeach
            @else

            @endif
        @endif
          
        </ul>
        </div>
        </div>
        </div>
        <div class="col-md-9"> 
        <div class="card">
        <div class="card-header">
        <strong>Products</strong>
        </div>
        <div class="card-body">
        </div>
        </div>
        
        
        </div>
    </div>
    
</div>



@endsection