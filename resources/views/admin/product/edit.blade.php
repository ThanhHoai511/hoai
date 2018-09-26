@extends('admin.layouts.home')
@section('title', 'Edit Product')
@section('content')
    <form role="form" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        @include('admin.errors.error')
        <div class="form-group">
            <label>Name</label>
            <input name="name" class="form-control" value="{{ $product->name}}">
        </div>
        <div class="form-group">
            <label>Size</label>
            <select class="form-control" id="size" class="size" name="size">
                <option value="S" {{ $product->size == 'S' ? 'selected' : ''}}>S</option>
                <option value="M" {{ $product->size == 'M' ? 'selected' : ''}}>M</option>
                <option value="L" {{ $product->size == 'L' ? 'selected' : ''}}>L</option>
            </select>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control" rows="3" required>{{ $product->description }}</textarea>
        </div>
        <div class="form-group">
            <label>Price</label>
            <input name="price" class="form-control" value="{{ $product->price }}">
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" class="form-control" name="image[]" multiple/>
        </div>
        <div class="form-group">
            <label>Category Parent</label>
            <select name="cate" id="">
                @foreach($cate as $c)
                    <option value="{{$c->id}}" {{ $product->id_cate == $c->id ? 'selected' : ''}}>{{ $c->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Featured Product</label>
            <select class="form-control" id="featured" class="featured" name="featured">
                <option value="0" {{ $product->is_featured_product == '0' ? 'selected' : ''}}>No</option>
                <option value="1" {{ $product->is_featured_product == '1' ? 'selected' : ''}}>Yes</option>
            </select>
        </div>
        <button type="submit" name="btnAdd" class="btn btn-success">Edit</button>
        <a type="button" href="{{ asset('admin/product/list') }}"><button type="button" class="btn btn-primary">Cancel</button></a>
    </form>
@endsection