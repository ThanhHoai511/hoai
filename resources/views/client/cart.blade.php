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
	    	@if(Session::has('cart'))
		    	@foreach($products as $pro)
		      	<tr>
		      		@php
		      			$imgs = $pro['item']->getImage($pro['item']['id']);
		      		@endphp
		        	<td><a href="{{ route('detail', ['id' => $pro['item']['id']]) }}"><img src="{{ asset('admin/images/'.$imgs[0]) }}" alt=""></a></td>
		        	<td>{{ $pro['item']['name'] }}</td>
		        	<td>
		        		<input type="number" name="quantity" id="" value="{{ $pro['qty'] }}" class="quantity" min="1">
		        	</td>
		        	<td>{{ $pro['item']['price'] }} VND</td>
					<td>{{ $pro['item']['price']*$pro['qty'] }} VND</td>
					<td>
						<a href="{{ route('removeItem', ['id' => $pro['item']['id']]) }}"><button class="btn btn-danger">Delete</button></a>
					</td>
		      	</tr>   
		      	@endforeach
	      	@endif 
	    </tbody>
  	</table>
  	<div class="foot">
  		@if (Session::has('cart'))
  			<h3 style="color: blue; font-style: italic">Tong tien: {{ $totalPrice }} VND</h3>
  		@endif
  		<a href="{{ route('index') }}"><button class="btn btn-default">Continue buy</button></a>
  		<a href="{{ route('deleteAll') }}"><button class="btn btn-danger">Delete All</button></a>
  		<a href="{{ route('payment') }}"><button class="btn btn-success">Payment</button></a>
  	</div>
@endsection	
