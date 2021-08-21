@extends('layouts.app')
@section('content')
<div class="card-header">
    <h1>Your Orders</h1>
</div>
<div class="container">
<br>
@if(count($orders)>0) 
{{$orders->links()}}
<div class="row">
    <div class="col-lg-12">
    <table class="table table-bordered table-hover ">
        <tr>
            <th>
              Delivery Date
            </th>
            <th>
                Description
            </th>
            <th>
              file Name
            </th>
            <th>
              No. of Copies
            </th>
            <th>
                Both Sides
            </th>
            <th>
                Color
            </th>
            <th>
                Page Orientation
            </th>
            <th>
              Amount
            </th>
            <th>
              Status
            </th> 
        </tr>
    
        @foreach($orders as $index=>$order)    
        <tr>
            <td>
                {{$order->delivery_date}}
            </td>
            <td>
                {{$order->description}}
            </td>
            <td>
                {{$order->file_name}}
            </td>   
            <td>
                {{$order->copies}}
            </td>
            <td>
                {{$order->print_both_sides}}
            </td>
            <td>
                {{$order->color}}
            </td>
            <td>
                {{$order->orientation}}
            </td>
            <td>
                {{$order->amount}}
            </td> 
            <td>
                {{$order->status}}
            </td>
        </tr>
        @endforeach
    </table>
   
</div>
<!--/col-->
</div>
<!--/row-->
    {{$orders->links()}}
    @else
    <p><strong><h3>No Orders(s) Found!!</h3></strong></p>
    @endif   
</div>
@endsection