@extends('layouts.app')



@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
        <div class="card">
        <div class="card-header">
        <strong>Categories</strong>
        </div>
        <div class="card-body cardcategories">
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
        <strong>Electronics</strong>
        </div>
        <div class="card-body">
            <ul class="nav nav-tabs">
            <li class="nav-item">\
            <a class="nav-link" data-toggle="tab" href="#home"> </a>
            </li>
            </ul>
        </div>
        </div>
        
        
        </div>
    </div>
    
</div>


@endsection 