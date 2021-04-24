@extends('master')
@section("content")
<div class="container">
    <table class="table table-striped">
        <tbody>
          <tr>
            <td>Price</td>
            <td>{{$total}} LE</td>
          </tr>
          <tr>
            <td>Tax</td>
            <td>0 LE</td>
          </tr>
          <tr>
            <td>Delivery</td>
            <td>50 LE</td>
          </tr>
          <tr>
            <td>Total Amount</td>
            <td> {{$total+50}}</td>
          </tr>
        </tbody>
      </table>
      <form method="POST" action="orderplace">
          @csrf
        <div class="form-group">
         <textarea class="form-control" placeholder="enter your address" name="address"></textarea>
        </div>
        <div class="form-group">
          <label for="">Payment Method</label>
         <p> <input type="radio" value="online" name="payment"><span>Online</span></p>
         <p> <input type="radio" value="cash"  name="payment"><span>Cash on Delivery</span></p>
        </div>
        <button type="submit" class="btn btn-success">Order Now</button><br><br>
      </form>
</div>
@endsection
