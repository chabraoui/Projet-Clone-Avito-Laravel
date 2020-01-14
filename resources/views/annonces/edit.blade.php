@extends('layouts.app')

@section('content')
<div class="container">
  <h1>Ajouter Votre Annonce</h1>

  <form  method="post" action="{{ route('annonces.update',['annonce'=>$annonce->id]) }} "  enctype="multipart/form-data">
    @csrf
    @method("PATCH")
      @include('annonces.form')
      <br>
    <button type="submit" class="btn btn-primary">UPDATE ANNONCE</button>
  </form>

</div>
@endsection
