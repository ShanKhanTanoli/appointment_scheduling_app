<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = ['text_logo'];


    public static function Logo()
    {
        $settings = Setting::first();
        if($settings){
            return $settings->text_logo;
        }else return "Home";
    }
}
