<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed password
 * @property mixed email
 * @property mixed name
 */
class DBUser extends Model
{
    //using ORM eloquent
    protected $table = "users";
    protected $primaryKey="id";
    protected $fillable = ['name','email','password'];
    use HasFactory;
}
