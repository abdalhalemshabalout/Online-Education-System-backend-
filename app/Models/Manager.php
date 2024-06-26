<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'name',
        'surname',
        'phone_number',
        'email',
        'password',
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
