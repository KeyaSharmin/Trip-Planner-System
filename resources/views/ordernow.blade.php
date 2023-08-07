@extends('master')
@section("content")
    <div class="custom-product">
        <div class="col-sm-10">
            <table class="table">

                <tbody>
                <tr>
                    <td>Amount</td>
                    <td>$ {{$total}}</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>$ 10</td>
                </tr>
                <tr>
                    <td>Trip Planner Charge </td>
                    <td>$ 30</td>
                </tr>
                <tr>
                    <td>Total Amount</td>
                    <td>$ {{$total+10+30}}</td>
                </tr>
                </tbody>
            </table>
            <div>
                <form action="/orderplace" method="POST" >
                    @csrf
                    <div class="form-group">
                        <label for="pwd">Address</label> <br>
                        <textarea name="address" placeholder="Enter your address" class="form-control" ></textarea> <br>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Contact Number</label> <br>
                        <textarea name="contact number" placeholder="+880" class="form-control" ></textarea><br>
                    </div>


                    <div class="form-group">
                        <label for="pwd">Payment Method</label> <br>
                        <input type="radio" value="cash" name="payment"> <span>online payment</span> <br> <br>
                        <input type="radio" value="cash" name="payment"> <span>Card payment</span> <br><br>
                        <input type="radio" value="cash" name="payment"> <span>Payment on Check-In</span> <br> <br>

                    </div>
                    <button class="btn btn-primary">Confirm Booking</button>
                </form>
            </div>
        </div>
    </div>
@endsection