@extends('layout.main')

@section('title', 'edit comments')

@section('content')
<div class="container">
    <h1>edit comments</h1>
    
    <div class="row">
        <div class="col-6 offset-3">
        @include('layout.messages')
            <form action="{{route('comments.update',$el->id)}}" method="post">
                @csrf
                <input type="text" name="title" placeholder="title" class="form-control mb-3" value="{{$el->title}}">
                <input type="text" name="message" placeholder="message" class="form-control mb-3" value="{{$el->message}}">
                <button type="submit" class="btn btn-warning">enter</button>
            </form>
        </div>
    </div>
</div>

@endsection