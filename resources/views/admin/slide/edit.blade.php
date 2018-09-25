@extends('admin.layouts.home')
@section('title', 'Edit Slide')
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
                <option value="0" {{ $slide->active == '0' ? 'selected' : ''}}>Unactive</option>
                <option value="1" {{ $slide->active == '1' ? 'selected' : ''}}>Active</option>
            </select>
        </div>
        <div class="form-group">
            <label>Order</label>
            <input name="order" class="form-control" placeholder="Enter order" value="{{ $slide->order }}">
        </div>
        <button type="submit" name="btnAdd" class="btn btn-default">Edit</button>
        <a href="{{ asset('admin/slide/list') }}"><button type="button" class="btn btn-default">Cancel</button></a>
    </form>
@endsection