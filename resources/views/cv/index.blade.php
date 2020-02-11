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
              <td>
            
               <form action="{{ url('cvs/'.$cv->id) }}" method="post">
                 {{ csrf_field() }}
                 {{ method_field('DELETE') }}
               <a href="{{ url('cvs/show') }}" class="btn btn-primary">Show</a>
               <a href="{{ url('cvs/'.$cv->id.'/edit') }}" class="btn btn-default">Editer</a>
               <button type="submit" class="btn btn-danger">Supprimer</button>
               </form>
              </td>
              </tr>
            @endforeach  
          </table>
          </div>
    </div>
</div>

@endsection