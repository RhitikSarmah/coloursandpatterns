<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        'name'=>'Colours And Patterns',
        'email'=>'isha@coloursandpatterns.in',
        'password'=>Hash::make('10feb2020#C&P')
        ]);
    }
}
