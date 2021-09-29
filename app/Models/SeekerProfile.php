<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeekerProfile extends Model
{
    use HasFactory;
    protected $table='seeker_profiles';
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}