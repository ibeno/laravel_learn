<?php

class UserTableSeeder extends Seeder{

	public function run(){

		DB::table('users')->delete();

		User::create(array(
			'name'		=>	'Iberno Hoffmann',
			'username'		=>	'iberno',
			'email'		=>	'iberno@outlook.com',
			'password'		=>	Hash::make(1234),
		));
	}
}