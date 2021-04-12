<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChildTicket extends Model
{
    use HasFactory;
    protected $fillable = ['ticket_id','from','to','body'];


}
