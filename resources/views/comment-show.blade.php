@extends('layout.main')

@section('title', 'one comments')

@section('content')
<div class="container">
  <h1>one comments</h1>



  <div class="alert alert-warning">

    <p>{{$el->title}}</p>
    <p>{{$el->message}}</p>
    <p class="btn btn-outline-info">{{$el->created_at}}</p>
    <p><a href="{{route('comments.edit',$el->id)}}">update</a></p>
    <p><a href="{{route('comments.destroy',$el->id)}}">delate</a></p>
     <!-- <form action="{{route('comments.destroy',$el->id)}}" method="destroy">
      <button type="submit">delete</button>
     </form> -->

  </div>





</div>

@endsection