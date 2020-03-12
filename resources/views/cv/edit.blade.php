@extends('layouts.master')

@section('content')


<div class="container">
      <div class="row">
          <div class="col-md-12">
          <form action="{{ url('cvs/'.$cv->id)}}" method="post">
              <input type="hidden" name="_method" value="PUT">

               {{ csrf_field() }}
                 <div class="form-group">
                 <label for="titre">Titre</label><br>
                 <input type="text" class="from-control" name="titre" value="{{ $cv->titre }}" style="width: 100%;">
                </div>

                <div class="form-group">
                 <label for="presentation">Presentation</label><br>
                 <input type="text" class="from-control" name="presentation" value="{{ $cv->presentation }}" style="width: 100%;">
                </div>
                 <br>
                <div class="form-group">
                 <input type="submit" class="from-control btn btn-danger" value="Modifier" style="width: 100%;">
                </div>
          </form>


       </div>
   </div>
</div>



@endsection