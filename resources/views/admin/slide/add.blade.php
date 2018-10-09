@extends('admin.layouts.home')
@section('title', 'Add Slide')
@section('content')
	<form role="form" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        @include('admin.errors.error')
        <div class="form-group">
            <label>Image</label>
            <input type="file" class="form-control" name="image" />
        </div>
        <div class="form-group">
            <label>Active</label>
            <select class="form-control" name="active">
                <option value="0" {{ old('active') == 0 ? 'selected' : ''}}>Unactive</option>
                <option value="1"  {{ old('active') == 1 ? 'selected' : ''}}>Active</option>
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