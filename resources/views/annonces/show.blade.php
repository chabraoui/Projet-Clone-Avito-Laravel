@extends('layouts.app')

@section('content')






<div class="container">
  <div class="row">

  <div class="col-10">

  <div class="bd-example">
    <div id="carouselExampleCaptions" class="carousel slide  mx-auto" data-ride="carousel" style=width:40%>
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="{{ asset('storage/'.$annonce->photo1) }}"alt="First slide" style=width:10%>
          <div class="carousel-caption d-none d-md-block">
            <h5>{{$annonce->title}}</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
 <div class="col-2">
   <h3>List Category:</h3>
<ul style="list-style: none;">
  @foreach($categories as $cat)
  <li>
<a href="/annoncesFilter/{{$cat->id}}">{{$cat->name_categorie}}</a>
  </li>
  @endforeach
</ul>

 </div>
</div>
<br>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Title</th>
        <th>Text</th>
        <th>Price(DH)</th>
        <th>NomCategorie</th>
      </tr>
    </thead>

<tbody>
  <tr>
    <td>{{$annonce->title}}</td>
    <td>{{$annonce->text}}</td>
    <td>{{$annonce->price}}</td>
    <td>{{$annonce->categorie->name_categorie}}</td>
  </tr>
</tbody>
</table>




</div>
@endsection
