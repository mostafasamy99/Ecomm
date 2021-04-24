@extends('master')
@section("content")
<div class="container">
    <h2>Cart List</h2><br><br>
    <a class="btn btn-success" href="/ordernow" >Order Now</a><br><br>
    @foreach ($products as $item)
    <div class="row cartstyle ">
        
        <div class="col-md-3">
            
            <a href="detail/{{$item->id}}">
                <img  class="trending-image" src="{{$item->gallery}}" >
                </a>
        </div>
        <div class="col-md-4">
                        <h2>{{$item->name}}</h2> 
                        <h5>{{$item->description}}</h5>
                        <h4>{{$item->price}}</h4>
        </div>
        <div class="col-md-3 align-self-center">
            <a href="/removecart/{{$item->cart_id}}" class="btn btn-danger">Remove</a>
        </div>       
    </div>
    @endforeach
    <a class="btn btn-success" href="/ordernow" >Order Now</a><br><br>
</div>
@endsection
