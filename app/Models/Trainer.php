<?php

namespace App\Models;

use App\Models\Site;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Trainer extends Model
{
    use HasFactory,Notifiable;

    protected $fillable  = [
        'name','email','number','slug','site_id','training_type_id'
    ];

    public function site()
    {
        return $this->belongsTo(Site::class);
    }

    public static function Info($trainer)
    {
        if($trainer = Trainer::find($trainer)){
            return $trainer;
        }return false;
    }
}
