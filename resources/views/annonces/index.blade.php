@extends('layouts.app')

@section('content')
@if (session()->has('success'))
<div class="alert alert-success">
  {{ session()->get('success') }}
</div>
@endif
<h2 align='center' style="color:#000066">listes des  Annonces </h2>
<br>
<br>
<div class="container">



<div class="row">
    @foreach( $annonces  as $annonce )
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail" style="margin-top:10px ; border:1px solid black !important">

      <img src="{{ asset('storage/'.$annonce->photo1) }}" alt="error" width="100%" >
      <div class="caption">
      <div class="container">  <h3><?php echo wordwrap("$annonce->title",20,"<br>\n");?></h3></div>
        <div class="container"> <p><?php echo substr("$annonce->text",0,90);?></p></div>
        <div class="container"><h4>Prix(Dh): {{$annonce->price}}</h4></div>
        <p>

<form  action="{{route('annonces.destroy',['annonce'=>$annonce->id])}}" method="post">
  {{csrf_field()}}
  {{method_field('DELETE')}}
  <a href="{{ route('annonces.show',['annonce'=>$annonce->id])}}" class="btn btn-danger" role="button" style=" position:relative ; top:16px">SHOW</a>
  @can('update',$annonce)
    <a href="{{route('annonces.edit',['annonce'=>$annonce->id])}}" class="btn btn-primary" role="button" style=" position:relative ; top:16px">EDITE</a>
    @endcan
  @can('delete',$annonce)
  <button type="submit" class="btn btn-warning" style=" position:relative ; top:16px" >SUPPRIMER</button>
  @endcan
</form>

         </p>
      </div>
    </div>
  </div>
    @endforeach

</div>
  {{$annonces->links()}}

</div>

@endsection
