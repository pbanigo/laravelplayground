@extends('base')
   
@section('main')
<h2 class="text-center">List Products</a></h2>
<br>
  <a href="{{ route('products.create') }}" class="btn btn-success mb-2">Add</a> 
  <br>
   <div class="row">
        <div class="col-12">
          
          <table class="table table-bordered" id="laravel_crud">
           <thead>
              <tr>
                 <th>Id</th>
                 <th>Title</th>
                 <th>Product Code</th>
                 <th>Description</th>
                 <th>Created at</th>
                 <td colspan="2">Action</td>
              </tr>
           </thead>
           <tbody>
              @foreach($products as $product)
              <tr>
                 <td>{{ $product->id }}</td>
                 <td>{{ $product->title }}</td>
                 <td>{{ $product->product_code }}</td>
                 <td>{{ $product->description }}</td>
                 <td>{{ date('Y-m-d', strtotime($product->created_at)) }}</td>
                 <td><a href="{{ route('products.edit',$product->id)}}" class="btn btn-primary">Edit</a></td>
                 <td>
                 <form action="{{ route('products.destroy', $product->id)}}" method="post">
                  {{ csrf_field() }}
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
                </td>
              </tr>
              @endforeach
           </tbody>
          </table>
          {!! $products->links() !!}
       </div> 
   </div>
 @endsection  