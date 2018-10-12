@extends('client.layouts.app')
@section('title', 'Coffee Shop')
@section('content')
	@include('client.layouts.navbar')
	<div class="sanpham">
		<div class="row">
			<form action="" method="GET">
				@csrf()
				<div class="select">
					<label for="pro">Number products per page:</label>
				  	<select class="form-control page" id="pro" name="pro">
				    	<option value="8" {{ $numberprod == 8 ? 'selected' : ''}}>8</option>
				    	<option value="12" {{ $numberprod == 12 ? 'selected' : ''}}>12</option>
				    	<option value="16" {{ $numberprod == 16 ? 'selected' : ''}}>16</option>
				  	</select>
				</div>
			  	<div class="select">
			  		<label for="order">Order by price:</label>
				  	<select class="form-control page" id="order" name="order">
				    	<option value="asc" {{ $order == 'asc' ? 'selected' : ''}}>Increase</option>
				    	<option value="desc" {{ $order == 'desc' ? 'selected' : ''}}>Decrease</option>
				  	</select>
			  	</div>
			  	<div class="select">
			  		<button type="submit" name="btn" class="btn btn-success filter">Filter</button>
			  	</div>
			</form>
			
		</div>
		@if(count($product) == 0)
			<h3 style="color:red;">NO PRODUCT</h3>
		@else
			<h3>PRODUCT</h3>
		@endif
		<div class="row">
			@foreach($product as $pro)
			  	<div class="col-md-3">
			    	<div class="thumbnail">
			      		<a href="{{ url('product', [$pro->id]) }}">
			      			@php
	                            $imgs = $pro->getImage($pro->id);
	                        @endphp
	                        <img src="{{ asset('admin/images/'.$imgs[0]) }}">
	                        <div class="caption">
	                        	<p class="price">{{ $pro->price }} VND</p>
					            <p class="name">{{ $pro->name }}</p>
					            <a href="{{ route('addCart', ['id' => $pro->id]) }}"><p class="glyphicon glyphicon-shopping-cart cart_icon"></p></a>
					        </div>
			      		</a>
			    	</div>
			  	</div>
		  	@endforeach
		</div>
		<div class="paginate">
			<div class="page1">{{ $product->render() }}</div>
		</div>
	</div>
@endsection	
