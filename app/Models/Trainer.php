<?php

namespace App\Models;

use App\Models\Site;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Trainer extends Model
{
    use HasFactory;

    protected $fillable  = [
        'name','email','number','slug','site_id'
    ];

    public function site()
    {
        return $this->belongsTo(Site::class);
    }
}
