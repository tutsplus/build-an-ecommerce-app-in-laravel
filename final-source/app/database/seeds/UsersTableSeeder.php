<?php

class UsersTableSeeder extends Seeder {

	public function run() {
		$user = new User;
		$user->firstname = 'Jon';
		$user->lastname = 'Doe';
		$user->email = 'jon@doe.com';
		$user->password = Hash::make('mypassword');
		$user->telephone = '5557771234';
		$user->admin = 1;
		$user->save();
	}
}