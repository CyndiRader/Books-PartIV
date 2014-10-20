<?php 
class Book extends Eloquent {
	public $timestamps = false;
	protected $fillable = array('title','author');	
}

?>