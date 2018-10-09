@extends('admin.layouts.home')
@section('title', 'Add Category')
@section('content')
	<form role="form" method="POST">
        {{csrf_field()}}
        @include('admin.errors.error')
        <div class="form-group">
            <label>Name</label>
            <input name="name" class="form-control" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label>Category Parent</label>
            <select name="cate" id="">
                @foreach($cate as $c)
                    <option value="{{$c->id}}" {{ $c->id == old('cate') ? 'selected' : ''}}>{{ $c->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" name="btnAdd" class="btn btn-default">Add</button>
        <button type="reset" class="btn btn-default">Reset</button>
    </form>
@endsection
