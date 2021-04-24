@extends('master')
@section("content")
<div class=" custom-product">
      <div class="trending-wrapper">
        @foreach ($products as $item)
        <div class="searched-item">
          <a href="detail/{{$item['id']}}">
          <img  class="trending-image" src="{{$item['gallery']}}" >
              <div class="">
                <h3>{{$item['name']}}</h3> 
                <h3>{{$item['description']}}</h3>
                <h3>{{$item['price']}}</h3>
              </div>
          </a>
            </div>
           
           @endforeach
          </div>

</div>
@endsection
