@extends('master')

@section('header')
 <a href="{{URL::to('books/'.$book->id.'')}}"> &larr; Cancel </a>
	<h2>
	@if($method == 'post')
		Add a new book
	@elseif ($method == 'delete')
		Delete {{$book->title}}?
	@else
		Edit {{$book->title}}
	@endif
</h2>
@stop

@section('content')
  {{Form::model($book, array('method' => $method, 'url' =>   
                            'books/'.$book->id))}}
							
	@unless($method == 'delete')
		<div class="form-group">
		  {{Form::label('Title')}} 
		  {{Form::text('title')}}
		</div>

		<div class="form-group">
		  {{Form::label('Author')}}
		  {{Form::text('author')}}
		</div>
		
    {{Form::submit("Save", array("class"=>"btn btn-default"))}}
  @else
    {{Form::submit("Delete", array("class"=>"btn btn-default"))}}
  @endif

  {{Form::close()}}
@stop