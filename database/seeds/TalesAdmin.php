<?php

use App\AdminUser;
use Illuminate\Database\Seeder;

class TalesAdmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $adminuser = new AdminUser();
        $adminuser->name = "Tales Anselmo";
        $adminuser->email = "talesanselmo@hotmail.com";
        $adminuser->password = crypt("t@l3s","");
        $adminuser->save();
    }
}
