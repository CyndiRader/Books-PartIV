@extends('master')

@section('header')
<h2>Add a new book</h2>
@stop

@section('content')
  {{Form::model($book, array('method' => $method, 'url' =>   
                            'books/'.$book->id))}}

    <div class="form-group">
      {{Form::label('Title')}} 
      {{Form::text('title')}}
    </div>

    <div class="form-group">
      {{Form::label('Author')}}
      {{Form::text('author')}}
    </div>

    {{Form::submit("Save")}}

  {{Form::close()}}
@stop