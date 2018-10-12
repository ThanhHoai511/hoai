@extends('client.layouts.app')
@section('title', 'Coffee Shop')
@section('content')
	<div class="infor">
		<form action="" method="POST">
			<h2>THONG TIN DAT HANG</h2>
			<div class="inp">
				<label for="name">Name: </label>
				<input type="text" name="name">
			</div>
			<div  class="inp">
				<label for="">Address: </label>
				<input type="text" name="address">
			</div>
			<div  class="inp">
				<label for="">Email: </label>
				<input type="email" name="email">
			</div>
			<div  class="inp">
				<label for="">Phone: </label>
				<input type="text" name="phone">
			</div>
			<div class="btn">
				<button class="btn btn-success">Order</button>
				<a href="#"><button class="btn btn-danger">Cancel</button></a>
			</div>
		</form>
	</div>
@endsection	
