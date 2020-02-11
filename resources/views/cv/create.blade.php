@extends('layouts.app')

@section('content')


<div class="container">
      <div class="row">
          <div class="col-md-12">
          <form action="{{ url('cvs')}}" method="post">

               {{ csrf_field() }}
                 <div class="form-group">
                 <label for="titre">Titre</label><br>
                 <input type="text" class="from-control" name="titre">
                </div>
                <div class="form-group">
                 <label for="presentation">Presentation</label><br>
                 <input type="text" class="from-control"  name="presentation">
                </div>
                <br>
                <div class="form-group">
                 <input type="submit" class="from-control btn btn-primary"  value="Enregistrer">
                </div>
          </form>


       </div>
   </div>
</div>



@endsection