<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBookowner extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	  // Must add the user id to the book
	  Schema::table('books', function($table){
        $table->integer('user_id')->nullable()->references('id')->on('users');
      });		}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
	  	Schema::table('books', function($table){
			$table->dropForeign('books_user_id_foreign');
			$table->dropColumn('user_id');
		});		}

}
