<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postjob extends Model
{
    use HasFactory;

 protected $table='postjobs';

 public function user()
 {
     return $this->belongsTo(User::class);
 }

 public function company()
 {
     return $this->belongsTo(Company::class);
 }
 
}