<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMeta extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','name','gender','phone_number','address','year'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
