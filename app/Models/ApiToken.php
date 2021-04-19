<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApiToken extends Model
{
    protected $table = 'personal_access_tokens';
    use HasFactory;


    public function apiable()
    {
        return $this->morphTo();
    }
}
