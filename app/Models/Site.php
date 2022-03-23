<?php

namespace App\Models;

use App\Models\Trainer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Site extends Model
{
    use HasFactory;

    protected $fillable  = [
        'code','slug'
    ];


    public function trainers()
    {
        return $this->hasMany(Trainer::class);
    }
}
