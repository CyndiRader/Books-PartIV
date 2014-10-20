@extends('master')

@section('header')
  <a href="{{URL::to('/')}}">Back to overview</a>
  <h2>
    {{$book->title}}
  </h2>
    <a href="{{URL::to('books/'.$book->id.'/edit')}}">
      <span class="glyphicon glyphicon-edit"></span> Edit
    </a>
    <a href="{{URL::to('books/'.$book->id.'/delete')}}">
      <span class="glyphicon glyphicon-trash"></span> Delete
    </a>
@stop

@section('content')
  <p> Author: {{$book->author}} </p>
@stop
