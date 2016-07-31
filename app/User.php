<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Authenticatable
{
    use EntrustUserTrait;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function sessions()
    {
        return $this->hasMany(Session::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function is_professor()
    {
        return $this->hasRole('Professor');
    }

    public function is_admin()
    {
        return $this->hasRole('Admin');
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function getGravatarAttribute()
    {
        $hash = md5(strtolower(trim($this->attributes['email'])));

        return "http://www.gravatar.com/avatar/$hash";
    }
}
