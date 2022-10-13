<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'parent',
        'user_id',
    ];

    public function parent()
    {
        return $this->belongsTo($this, 'parent');
    }

    public function children()
    {
        return $this->hasMany($this,'parent');
    }
}
