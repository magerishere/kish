<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;
    protected $fillable = ['from','to','message'];


   public function getCreatedAtAttribute($date)
   {
        return $this->attributes['created_at'] =  \Morilog\Jalali\Jalalian::fromCarbon(Carbon::parse($date))->format('Y-m-d H:i:s');

    }
}
