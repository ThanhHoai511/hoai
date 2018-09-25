@extends('admin.layouts.home')
@section('title', 'Slide')
@section('content')
	<div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                	<a href="{{ route('addSlide') }}"><button class="btn btn-primary" style="margin-bottom: 20px;">Add</button></a>
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Active</th>
                                <th>Order</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($slide as $slide)
                            <tr>
                                <td>{{$slide->id}}</td>
                                <td style="width: 30%;">
                                    <img src="{{ asset('admin/slides/'.$slide->link) }}" alt="" style="width: 100px;height: 90px;">
                                </td>
                                <td>
                                    @if($slide->active == 0)
                                        Unactive
                                    @endif
                                    @if($slide->active == 1)
                                        Active
                                    @endif
                                </td>
                                <td>{{$slide->order}}</td>
                                <td>
                                	<a href="{{ asset('admin/slide/edit/'. $slide->id) }}"><button class="btn btn-success">Edit</button></a>
                                	<a href="{{ asset('admin/slide/delete/' . $slide->id) }}" onclick="return confirm('Ban co chac chan muon xoa?')"><button class="btn btn-danger">Delete</button></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
@endsection