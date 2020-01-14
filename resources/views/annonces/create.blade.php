@extends('layouts.app')

@section('content')
<div class="container">
  <h1>Ajouter Votre Annonce</h1>

  <form  method="post" action="{{ route('annonces.store') }}"   enctype="multipart/form-data">
    @csrf
  @include('annonces.form')
      <br>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

</div>
@endsection
