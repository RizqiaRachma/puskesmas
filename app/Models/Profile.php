<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'address',
        'kelurahan',
        'kecamatan',
        'kotakab',
        'aboutme',
        'emergency',
        'place',
        'birthday',
        'avatar',
    ];

    public function users(){
        return $this->belongsTo(User::class);
    }
}
