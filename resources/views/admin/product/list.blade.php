@extends('admin.layouts.home')
@section('title', 'Product')
@section('content')
	<div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                	<a href="{{ route('addProduct') }}"><button class="btn btn-primary" style="margin-bottom: 20px;">Add</button></a>
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Size</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>Category</th>
                                <th>Is Feature Product</th>
                                <th>Action</th>
                            </tr>
                        </thead> 
                        <tbody>
                        	@foreach($product as $prod)
                            <tr>
                                <td>{{$prod->id}}</td>
                                <td>{{$prod->name}}</td>
                                <td>{{$prod->size}}</td>
                                <td>{{$prod->description}}</td>
                                <td>{{$prod->price}}</td>
                                <td style="width: 30%;">
                                    @php
                                        $imgs = $prod->getImage($prod->id);
                                    @endphp
                                    @foreach ($imgs as $img)
                                        <img src="{{ asset('admin/images/'.$img) }}" alt="" style="width: 100px;height: 90px;">
                                    @endforeach
                                </td>
                                <td>{{$prod->category->name}}</td>
                                <td>
                                    @if($prod->is_featured_product == 0)
                                        No
                                    @endif
                                    @if($prod->is_featured_product == 1)
                                        Featured Product
                                    @endif
                                </td>
                                <td>
                                	<a href="{{ asset('admin/product/edit/'. $prod->id) }}"><button class="btn btn-success">Edit</button></a>
                                	<a href="{{ asset('admin/product/delete/' . $prod->id) }}" onclick="return confirm('Ban co chac chan muon xoa {{$prod->name}}?')"><button class="btn btn-danger">Delete</button></a>
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