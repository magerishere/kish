<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = ['ticket_id','from','to','title','subject','body','answear','close'];

    public function child()
    {
        return $this->hasMany(ChildTicket::class,'ticket_id','ticket_id');
    }

    public function attach()
    {
        return $this->hasOne(AttachTicket::class,'ticket_id','ticket_id');
    }
}
