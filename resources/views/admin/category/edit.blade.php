@extends('admin.layouts.home')
@section('title', 'Edit Category')
@section('content')
    <form role="form" method="POST">
        @include('admin.errors.error')
        {{csrf_field()}}
        <div class="form-group">
            <label>Name</label>
            <input name="name" class="form-control" value="{{ $cate->name }}">
        </div>
        <div class="form-group">
            <label>Category Parent</label>
            <select name="cate" id="">
                @foreach($allcate as $c)
                    <option value="{{ $c->id }}" {{ $cate->id_cate == $c->id ? 'selected' : ''}}>{{ $c->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" name="btnAdd" class="btn btn-default">Edit</button>
        <button type="button" class="btn btn-default"><a href="{{ asset('admin/category/list') }}">Cancel</a></button>
    </form>
@endsection
