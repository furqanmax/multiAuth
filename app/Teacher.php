<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;

use Illuminate\Foundation\Auth\User as Authenticatable;


class Teacher extends Authenticatable
{
    use Notifiable;
    protected $table= "teachers";
    protected $guard = 'teacher';
    protected $fillable = [ 'name', 'email', 'password',];
}
