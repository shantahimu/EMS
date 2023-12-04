<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function event(){
        return $this->belongsTo(Event::class, "event->id", "id");
    }
}
