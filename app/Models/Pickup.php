<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pickup extends Model
{
    use HasFactory;
    protected $fillable = ['id','pickupLocation','pickupDateTime','userID','isDeleted'];

    public function users()
    {
        return $this->belongsTo(User::class, 'userID','id');
    }
}
