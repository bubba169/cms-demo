<?php

namespace App;

use Helium\Entities\Page\Page;
use Helium\Entities\User\User as HeliumUser;
use Illuminate\Notifications\Notifiable;

class User extends HeliumUser
{
    use Notifiable;

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

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Page relationship
     *
     * @return void
     */
    public function pages()
    {
        return $this->belongsToMany(Page::class);
    }
}
