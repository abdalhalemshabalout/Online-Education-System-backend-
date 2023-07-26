<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
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
        'name',
    ];

    /**
     * Get classroom's name.
    */
    public function classRoom()
    {
        return $this->belongsTo(ClassRoom::class, 'class_room_id', 'id');
    }
}
