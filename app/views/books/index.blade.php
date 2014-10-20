@extends('master')

@section('header')
  <h2>
    All Books
    <a href="{{URL::to('books/create')}}" 
       class="btn btn-primary pull-right">
      Add a new book
    </a>
  </h2>
@stop

@section('content')
  @foreach($books as $book)
    <div class="book">
      <a href="{{URL::to('books/'.$book->id)}}">
        <strong> {{$book->title}} </strong> - {{$book->author}}
      </a>
    </div>
  @endforeach
@stop

