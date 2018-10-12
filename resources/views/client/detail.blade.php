@extends('client.layouts.app')
@section('title', 'Detail Product')
@section('content')
	@include('client.layouts.navbar')	
	<div id="myCarousel" class="carousel slide detail" data-ride="carousel">
		@php 
			$imgs = $product->getImage($product->id);
		@endphp
	  	<ol class="carousel-indicators">
	  		@foreach($imgs as $key => $img)
		  		@if(count($imgs) > 1)
			  		@if($key == 0)
			    		<li data-target="#myCarousel" data-slide-to="{{ $key }}" class="active"></li>
			    	@else
			    		<li data-target="#myCarousel" data-slide-to=" {{ $key }}"></li>
			    	@endif
		    	@endif
	    	@endforeach
	  	</ol>
	  	<div class="carousel-inner detail-inner">
  			
  			@foreach($imgs as $key => $img)
				@if($key == 0)
		  			<div class="item active">
			      		<a href="{{ asset('admin/images/'.$img) }}"><img src="{{ asset('admin/images/'.$img) }}"></a>
			    	</div>
			    @else
			    	<div class="item">
			      		<a href="{{ asset('admin/images/'.$img) }}"><img src="{{ asset('admin/images/'.$img) }}"></a>
			    	</div>
		    	@endif
	    	@endforeach
	  	</div>
	  	@if(count($imgs) > 1)
		  	<a class="left carousel-control" href="#myCarousel" data-slide="prev">
		    	<span class="glyphicon glyphicon-chevron-left"></span>
		    	<span class="sr-only">Previous</span>
		  	</a>
		  	<a class="right carousel-control" href="#myCarousel" data-slide="next">
		    	<span class="glyphicon glyphicon-chevron-right"></span>
		    	<span class="sr-only">Next</span>
		  	</a>
	  	@endif
	</div>
	<div class="product">
		<div class="row button">
			<a href="{{ route('index') }}"><button class="btn btn-primary">Home</button></a>
			<a href="{{ route('addCart', ['id' => $product->id]) }}"><button class="btn btn-success">Add to Cart</button></a>
		</div>
		<div class="row detail">
			<h2>{{ $product->name }}</h2>
			<p>Price : <i>{{ $product->price }}</i> VND</p>
			<br>
			<p class="des">{{ $product->description }}</p>
		</div>
	</div>
	<div class="comments">
		<h5>COMMENTS</h5>
		@foreach($comment as $cm)
			<div class="row">
				<h6>{{ $cm->user->name }}</h6>
				<p>{{ $cm->comment }}</p>
			</div>
		@endforeach
		@if(Auth::check())
			<div class="row">
				<form method="POST">
					@csrf
					<input type="hidden" name="id_user" id="" value="{{ Auth::user()->id }}">
					<input type="hidden" name="id_product" id="" value="{{ $product->id }}">
					<input type="text" name="comment" id="" placeholder="Nhap binh luan....">
					<button class="btn btn-primary" type="submit">Send</button>
				</form>
			</div>
		@endif
	</div>
@endsection	
