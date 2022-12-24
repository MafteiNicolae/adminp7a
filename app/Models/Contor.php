<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contor extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function apart(){
        return $this->belongsTo('App\Models\apartament', 'ap_id');
    }

    protected $casts = [
        'contoare'=>'array'
    ];
}
