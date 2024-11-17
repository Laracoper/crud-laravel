@extends('layout.main')

@section('title', 'all comments')

@section('content')
<div class="container">
    <h1>all comments</h1>
    @include('layout.messages')
    @if (count($allcomments))
    @foreach ($allcomments as $el)
    <div class="alert alert-info">
        <p>{{$el->title}}</p>
        <p>{{$el->message}}</p>
        <a href="{{route('comments.show',$el->id)}}">показать</a>
    </div>
    @endforeach
    @else
    <div class="alert alert-success">
        <p>no comments</p>
    </div>
    @endif
    <!-- @foreach ($allcomments as $el)
    <div class="alert alert-info">
        <p>{{$el->title}}</p>
        <p>{{$el->message}}</p>
        <a href="{{route('comments.show',$el->id)}}">показать</a>
    </div>
    @endforeach -->
{{$allcomments->links()}}

</div>

@endsection