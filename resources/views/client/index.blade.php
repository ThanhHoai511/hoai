@extends('client.layouts.app')
@section('title', 'Coffee Shop')
@section('content')
	@include('client.layouts.navbar')	
	<div id="myCarousel" class="carousel slide index" data-ride="carousel">
	  	<ol class="carousel-indicators">
	    	<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	    	<li data-target="#myCarousel" data-slide-to="1"></li>
	    	<li data-target="#myCarousel" data-slide-to="2"></li>
	  	</ol>
	  	<div class="carousel-inner index-inner">
			@foreach($slide as $sl)
				@if($sl->order == 1)
			    	<div class="item active">
			      		<img src="{{ asset('admin/slides/'.$sl->link) }}">
			    	</div>
			    @else
			    	<div class="item">
			      		<img src="{{ asset('admin/slides/'.$sl->link) }}">
			    	</div>
			    @endif
		    @endforeach
	  	</div>
	  	<a class="left carousel-control" href="#myCarousel" data-slide="prev">
	    	<span class="glyphicon glyphicon-chevron-left"></span>
	    	<span class="sr-only">Previous</span>
	  	</a>
	  	<a class="right carousel-control" href="#myCarousel" data-slide="next">
	    	<span class="glyphicon glyphicon-chevron-right"></span>
	    	<span class="sr-only">Next</span>
	  	</a>
	</div>
	<div class="noibat">
		<h3>FEATURED PRODUCT</h3>
		<div class="row">
			@foreach($featured as $f)
			  	<div class="col-md-4">
			    	<div class="thumbnail">
			      		<a href="{{ url('product', [$f->id]) }}">
			     			@php
                                $imgs = $f->getImage($f->id);
                            @endphp
                            <img src="{{ asset('admin/images/'.$imgs[0]) }}">
			      		</a>
			    	</div>
			  	</div>
		  	@endforeach
		</div>
	</div>
	<div class="sanpham">
		<h3>PRODUCT</h3>
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
	</div>
@endsection	
