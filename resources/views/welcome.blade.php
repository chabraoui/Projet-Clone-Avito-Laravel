@extends('layouts.app')

@section('content')
<div class="container">
  @if (session()->has('success'))
  <div class="alert alert-success">
    {{ session()->get('success') }}
  </div>
  @endif
  <h1>Categories</h1>
  <div class="container-fluid">
      <div class="row">
          <div class="col-md-12">
              <div class="row" >
 @foreach ($categories as $value)
        <a class="col-md-3 p-0" style="border: 1px solid #4e575d; background-image:url('{{asset('storage/'. $value->image_categories) }}'); margin-left:5% ; height: 300px; background-size: cover; "href="/annoncesFilter/{{$value->id}}" >
          <div class="col p-0" style="background-image: url('{{asset('storage/'. $value->image_categories )}})'; height: 300px; background-size: cover;">
            </div>
              <div class="top text-center">
                <h3 class="no-margin" >{{$value->name_categorie}}</h3>
              </div>
        </a>
                  @endforeach
              </div>

          </div>
      </div>
  </div>
  </div>

</div>
@endsection
