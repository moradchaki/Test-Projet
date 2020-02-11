@extends('layouts.app')

@section('content')


<div class="container">
      <div class="row">
          <div class="col-md-12">
          <h2>List mes cvs</h2>
            <div class="pull-right">
               <a href="{{ url('cvs/create') }}" class="btn btn-success">Nouvaeu Cv</a>
             </div>
             <br><br>
          </div>
          <table class="table">
          <tr>
             <th>Id</th>
             <th>Titre</th>
             <th>Presentation</th>
             <th>Date</th>
             <th>Action</th>
           </tr>
            @foreach($cvs as $cv)
              <tr>
              <td>{{ $cv->id }}</td> 
              <td>{{ $cv->titre }}</td>
              <td>{{ $cv->presentation }}</td>
              <td>{{ $cv->created_at }}</td>
              <td colspan="2">
               <a href="javascript:void(0)" class="btn btn-default" id="btn-edit">Edit</a>
               <a href="javascript:void(0)" class="btn btn-danger" id="btn-delete">Delete</a>
              </td>
              </tr>
            @endforeach  
          </table>
          </div>
    </div>
</div>

<div class="modal fade" id="modal1">
    <div class="modal-dialog">
      <div class="modal-header">
        <h4 class="modal-title" id="userCrudModal"></h4>
      </div>
      <form id="userForm" name="userForm" class="form-horizontal">
        <div class="modal-body">
            <input type="hidden" name="user_id" id="user_id">
            <div class="form-group">
               <label for="name" class="col-sm-2 control-label">Name</label>
               <div class="col-sm-12">
                <input type="text" name="titre" id="titre">
              </div>
            </div>
            
           <div class="form-group">
               <label for="name" class="col-sm-2 control-label">presentation</label>
               <div class="col-sm-12">
                <input type="text" name="titre" id="titre">
              </div>
            </div>  
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary" id="btn-save" value="create">Save</button>
          </div>
        </div>
      </form>
    </div>
</div>
<script type="text/javascript">
  




</script>

@endsection