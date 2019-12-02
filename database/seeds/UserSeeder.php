<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $new = new \App\User;
        $new->first_name = 'jan';
        $new->middle_name = 'men';
        $new->last_name = 'admin';
        $new->role_id = 1;
        $new->email = 'admin@gmail.com';
        $new->password = \Illuminate\Support\Facades\Hash::make(12345);
        $new->save();
    }
}
