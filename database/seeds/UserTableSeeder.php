<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Letícia Oliveira";
        $user->email = "olc.leticia@gmail.com";
        $user->password = crypt("1234","");
        $user->save();

    }
}
