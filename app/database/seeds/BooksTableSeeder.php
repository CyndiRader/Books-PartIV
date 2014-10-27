<?php

class BooksTableSeeder extends Seeder {
	public function run() {
		DB::table('books')->delete();
		
		DB::table('books')->insert(array(
			array('id'=>1, 'title'=>'Animal Minds', 'author'=>'Griffin', 'user_id'=>2),
			array('id'=>2, 'title'=>"Nature's Keeper", 'author'=>'Budiansky', 'user_id'=>null),
			array('id'=>3, 'title'=>'Lifting the Veil', 'author'=>'Shepherd', 'user_id'=>2)		
		));
	}
}

?>