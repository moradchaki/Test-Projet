@extends('layouts.app')
   
@section('content')
  <a href="{{ route('productts.create') }}" class="btn btn-success mb-2">Add</a> 
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
              @foreach($productts as $productt)
              <tr>
                 <td>{{ $productt->id }}</td>
                 <td>{{ $productt->title }}</td>
                 <td>{{ $productt->product_code }}</td>
                 <td>{{ $productt->description }}</td>
                 <td>{{ date('Y-m-d', strtotime($productt->created_at)) }}</td>
                 <td><a href="{{ route('productts.edit',$productt->id)}}" class="btn btn-primary">Edit</a></td>
                 <td>
                 <form action="{{ route('productts.destroy', $productt->id)}}" method="post">
                  {{ csrf_field() }}
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
                </td>
              </tr>
              @endforeach
           </tbody>
          </table>
          {!! $productts->links() !!}
       </div> 
   </div>
 @endsection 