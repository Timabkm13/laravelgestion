<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
class Admin extends Authenticatable
{
    use HasFactory;
    protected $fillable = [
        'username',
        'password',
    ];
    // Hide password field from JSON serialization
    protected $hidden = ['password', 'remember_token'];
}