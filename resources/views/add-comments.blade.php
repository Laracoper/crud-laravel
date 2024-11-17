@extends('layout.main')

@section('title', 'add comments')

@section('content')
<div class="container">
    <h1>add comments</h1>
    
    <div class="row">
        <div class="col-6 offset-3">
        @include('layout.messages')
            <form action="{{route('comments.store')}}" method="post">
                @csrf
                <input type="text" name="title" placeholder="title" class="form-control mb-3">
                <input type="text" name="message" placeholder="message" class="form-control mb-3">
                <button type="submit" class="btn btn-warning">enter</button>
            </form>
        </div>
    </div>
</div>

@endsection