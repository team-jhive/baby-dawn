<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    protected $guarded = ['id'];

    use HasFactory;

    public function doctors()
    {
        return $this->belongsToMany(User::class, 'hospital_user', 'user_id', 'hospital_id');
    }
}
