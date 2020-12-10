<?php

class UserTableSeeder extends Seeder
{

public function run()
{
    DB::table('users')->delete();
    User::create(array(
        'name'     => 'Right click media',
        'username' => 'Anthony',
        'email'    => 'anthonyleshaba.al@Gmail.com',
        'password' => Hash::make('test'),
    ));
}

}
