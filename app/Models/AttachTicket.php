<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttachTicket extends Model
{
    use HasFactory;
    protected $fillable = ['ticket_id','url'];

    public function getUrlAttribute($url)
    {
        return $this->attributes['url'] = "/storage/images/" . $url;
    }
}
