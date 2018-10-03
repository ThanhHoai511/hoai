@extends('client.layouts.app')
@section('content')
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
	  	<ol class="carousel-indicators">
	    	<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	    	<li data-target="#myCarousel" data-slide-to="1"></li>
	    	<li data-target="#myCarousel" data-slide-to="2"></li>
	  	</ol>
	  	<div class="carousel-inner">
	    	<div class="item active">
	      		<img src="client/images/sl.jpg">
	    	</div>

	    	<div class="item">
	      		<img src="client/images/sl.jpg">
	    	</div>

		    <div class="item">
		      	<img src="client/images/sl.jpg">
		    </div>
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
		<h3>San pham noi bat</h3>
		<div class="row">
		  	<div class="col-md-4">
		    	<div class="thumbnail">
		      		<a href="#">
		        		<img src="{{asset('client/images/sl.jpg')}}">
		      		</a>
		    	</div>
		  	</div>
		  	<div class="col-md-4">
		    	<div class="thumbnail">
		      		<a href="#">
		        		<img src="{{asset('client/images/sl.jpg')}}">
		      		</a>
		    	</div>
		  	</div>
		  	<div class="col-md-4">
		    	<div class="thumbnail">
		      		<a href="#">
		        		<img src="{{asset('client/images/sl.jpg')}}">
		      		</a>
		    	</div>
		  	</div>
		</div>
		<div class="row">
		  	<div class="col-md-4">
		    	<div class="thumbnail">
		      		<a href="#">
		        		<img src="{{asset('client/images/sl.jpg')}}">
		      		</a>
		    	</div>
		  	</div>
		  	<div class="col-md-4">
		    	<div class="thumbnail">
		      		<a href="#">
		        		<img src="{{asset('client/images/sl.jpg')}}">
		      		</a>
		    	</div>
		  	</div>
		  	<div class="col-md-4">
		    	<div class="thumbnail">
		      		<a href="#">
		        		<img src="{{asset('client/images/sl.jpg')}}">
		      		</a>
		    	</div>
		  	</div>
		</div>
	</div>
	<div class="sanpham">
		<h3>San pham</h3>
		<div class="row">
		  	<div class="col-md-3">
		    	<div class="thumbnail">
		      		<a href="#">
		        		<img src="{{asset('client/images/sl.jpg')}}">
		      		</a>
		    	</div>
		  	</div>
		  	<div class="col-md-3">
		    	<div class="thumbnail">
		      		<a href="#">
		        		<img src="{{asset('client/images/sl.jpg')}}">
		      		</a>
		    	</div>
		  	</div>
		  	<div class="col-md-3">
		    	<div class="thumbnail">
		      		<a href="#">
		        		<img src="{{asset('client/images/sl.jpg')}}">
		      		</a>
		    	</div>
		  	</div>
		  	<div class="col-md-3">
		    	<div class="thumbnail">
		      		<a href="#">
		        		<img src="{{asset('client/images/sl.jpg')}}">
		      		</a>
		    	</div>
		  	</div>
		</div>
		<div class="row">
		  	<div class="col-md-3">
		    	<div class="thumbnail">
		      		<a href="#">
		        		<img src="{{asset('client/images/sl.jpg')}}">
		      		</a>
		    	</div>
		  	</div>
		  	<div class="col-md-3">
		    	<div class="thumbnail">
		      		<a href="#">
		        		<img src="{{asset('client/images/sl.jpg')}}">
		      		</a>
		    	</div>
		  	</div>
		  	<div class="col-md-3">
		    	<div class="thumbnail">
		      		<a href="#">
		        		<img src="{{asset('client/images/sl.jpg')}}">
		      		</a>
		    	</div>
		  	</div>
		  	<div class="col-md-3">
		    	<div class="thumbnail">
		      		<a href="#">
		        		<img src="{{asset('client/images/sl.jpg')}}">
		      		</a>
		    	</div>
		  	</div>
		</div>
		<div class="row">
		  	<div class="col-md-3">
		    	<div class="thumbnail">
		      		<a href="#">
		        		<img src="{{asset('client/images/sl.jpg')}}">
		      		</a>
		    	</div>
		  	</div>
		  	<div class="col-md-3">
		    	<div class="thumbnail">
		      		<a href="#">
		        		<img src="{{asset('client/images/sl.jpg')}}">
		      		</a>
		    	</div>
		  	</div>
		  	<div class="col-md-3">
		    	<div class="thumbnail">
		      		<a href="#">
		        		<img src="{{asset('client/images/sl.jpg')}}">
		      		</a>
		    	</div>
		  	</div>
		  	<div class="col-md-3">
		    	<div class="thumbnail">
		      		<a href="#">
		        		<img src="{{asset('client/images/sl.jpg')}}">
		      		</a>
		    	</div>
		  	</div>
		</div>
	</div>
@endsection	
