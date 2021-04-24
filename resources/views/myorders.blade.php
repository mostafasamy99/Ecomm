@extends('master')
@section("content")
<div class="container">
    <h2>My Orders </h2><br><br>
    @foreach ($orders as $item)
    <div class="row cartstyle ">
        
        <div class="col-md-3">
            
            <a href="detail/{{$item->id}}">
                <img  class="trending-image" src="{{$item->gallery}}" >
                </a>
        </div>
        <div class="col-md-4">
                        <h2><span class="text-primary">Name:</span>{{$item->name}}</h2> 
                        <h5><span class="text-primary"> Status: </span>{{$item->status}}</h5>
                        <h4><span class="text-primary">Address:</span>{{$item->address}}</h4>
                        <h4><span class="text-primary">Payment Status:</span>{{$item->payment_status}}</h4>
                        <h4><span class="text-primary">Payment Method:</span>{{$item->payment_method}}</h4>


        </div>    
    </div>
    @endforeach
</div>
@endsection
