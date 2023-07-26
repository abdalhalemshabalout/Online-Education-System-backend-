<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'class_room_id',
        'branch_id',
        'name',
        'surname',
        'phone_number',
        'email',
        'password',
        'identity_number',
        'gender',
        'birth_date',
        'address',
        'is_active',
    ];
    /**
     * Get admin's user.
    */
    public function user()
    {
        return $this->hasOne(User::class, 'user_id', 'id');
    }
}
