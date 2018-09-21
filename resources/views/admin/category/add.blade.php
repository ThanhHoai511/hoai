@extends('admin.layouts.home')
@section('title', 'Add Category')
@section('content')
	<form role="form" method="POST">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="form-group">
            <label>Name</label>
            <input name="name" class="form-control" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label>Category Parent</label>
            <select name="cate" id="">
                @foreach($cate as $c)
                    <option value="{{$c->id}}">{{ $c->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" name="btnAdd" class="btn btn-default">Add</button>
        <button type="reset" class="btn btn-default">Reset</button>
        {{csrf_field()}}
    </form>
@endsection
