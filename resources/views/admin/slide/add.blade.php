@extends('admin.layouts.home')
@section('title', 'Add Slide')
@section('content')
	<form role="form" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        @if (count($errors) > 0)
            <div class="alert alert-danger" > 
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="form-group">
            <label>Image</label>
            <input type="file" class="form-control" name="image" />
        </div>
        <div class="form-group">
            <label>Active</label>
            <select class="form-control" name="active">
                <option value="0">Unactive</option>
                <option value="1">Active</option>
            </select>
        </div>
        <div class="form-group">
            <label>Order</label>
            <input name="order" class="form-control" placeholder="Enter order" value="{{old('order')}}">
        </div>
        <button type="submit" name="btnAdd" class="btn btn-default">Add</button>
        <button type="reset" class="btn btn-default">Reset</button>
    </form>
@endsection