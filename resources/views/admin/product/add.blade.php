@extends('admin.layouts.home')
@section('title', 'Add Product')
@section('content')
	<form role="form" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        @include('admin.errors.error')
        <div class="form-group">
            <label>Name</label>
            <input name="name" class="form-control" placeholder="Enter name" value="{{old('name')}}">
        </div>
        <div class="form-group">
            <label>Size</label>
            <select class="form-control" id="size" class="size" name="size">
                <option value="S" {{ old('size') == 'S' ? 'selected' : ''}}>S</option>
                <option value="M" {{ old('size') == 'M' ? 'selected' : ''}}>M</option>
                <option value="L" {{ old('size') == 'L' ? 'selected' : ''}}>L</option>
            </select>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control" rows="3">{{old('description')}}</textarea>
        </div>
        <div class="form-group">
            <label>Price</label>
            <input name="price" class="form-control" placeholder="Enter price" value="{{old('price')}}">
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" class="form-control" name="image[]" multiple />
        </div>
        <div class="form-group">
            <label>Category Parent</label>
            <select name="cate" id="">
                @foreach($cate as $c)
                    <option value="{{$c->id}}" {{ $c->id == old('cate') ? "selected" :  ""}}>{{ $c->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Featured Product</label>
            <select class="form-control" id="featured" class="featured" name="featured">
                <option value="0" {{ old('featured') == 0 ? 'selected' : ''}}>No</option>
                <option value="1" {{ old('featured') == 1 ? 'selected' : ''}}>Yes</option>
            </select>
        </div>
        <button type="submit" name="btnAdd" class="btn btn-default">Add</button>
        <button type="reset" class="btn btn-default">Reset</button>
    </form>
@endsection