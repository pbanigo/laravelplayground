@extends('base')
 
@section('main')
<h2 style="margin-top: 12px;" class="text-center">Edit Product</a></h2>
<br>
 
<form action="{{ route('products.update', $product_info->id) }}" method="POST" name="update_product">
{{ csrf_field() }}
@method('PATCH')
 
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <strong>Title</strong>
            <input type="text" name="title" class="form-control" placeholder="Enter Title" value="{{ $product_info->title }}">
            <span class="text-danger">{{ $errors->first('title') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Product Code</strong>
            <input type="text" name="product_code" class="form-control" placeholder="Enter Product Code" value="{{ $product_info->product_code }}">
            <span class="text-danger">{{ $errors->first('product_code') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Description</strong>
            <textarea class="form-control" col="4" name="description" placeholder="Enter Description" >{{ $product_info->description }}</textarea>
            <span class="text-danger">{{ $errors->first('description') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
 
</form>
@endsection