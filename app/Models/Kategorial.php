<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategorial extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
    ];

    public function members()
    {
        return $this->hasMany(Member::class, 'kategorials_id');
    }
    
}
