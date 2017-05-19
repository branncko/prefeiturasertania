<?php

use App\AdminUser;
use Illuminate\Database\Seeder;

class AdminUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminuser = new AdminUser();
        $adminuser->name = "Dieggo Carrilho";
        $adminuser->email = "dieggopsc@gmail.com";
        $adminuser->password = crypt("1234","");
        $adminuser->save();
    }
}
