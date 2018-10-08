@extends('client.layouts.app')
@section('title', 'Cart')
@section('content')
	<table class="table table-bordered">
	    <thead>
	      	<tr>
	        	<th>Image</th>
	        	<th>Product Name</th>
	        	<th>Quantity</th>
	        	<th>Unit Price</th>
	        	<th>Total</th>
	        	<th>Delete</th>
	      	</tr>
	    </thead>
	    <tbody>
	      	<tr>
	        	<td><img src="client/images/sl.jpg" alt=""></td>
	        	<td>Lotus tea size M</td>
	        	<td>
	        		<span class="input-group-addon bootstrap-touchspin-prefix">-</span>
	        		<input type="text" name="quantity" id="" value="1" class="quantity">
	        		<span class="input-group-addon bootstrap-touchspin-prefix">+</span>
	        	</td>
	        	<td>39000 VND</td>
				<td>39000 VND</td>
				<td>
					<form action="" method="GET">
						<button class="btn btn-danger">Delete</button>
					</form>
				</td>
	      	</tr>      
	    </tbody>
  	</table>
  	<div class="foot">
  		<button class="btn btn-default">Continue buy</button>
  		<button class="btn btn-danger">Delete All</button>
  		<button class="btn btn-success">Payment</button>
  	</div>
@endsection	
