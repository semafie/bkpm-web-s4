<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Model;
use Illuminate\Notifications\Notifiable;

class userModel extends Model
{
    use HasFactory, Notifiable;

    protected $table = "users";
    protected $guarded = [];
    public $timestamps = false;
    // protected $fillable = ['username', 'password', 'email', 'role'];

}
