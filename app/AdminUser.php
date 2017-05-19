<?php

namespace App;


use App\Notifications\UserAdminResetPasswordNotification;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdminUser extends User
{
    use SoftDeletes;

    protected $table = "admin_users";

    protected $fillable = ['name','email','password'];

    protected $hidden = ['password','remember_token'];




    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new UserAdminResetPasswordNotification($token));
    }
}
