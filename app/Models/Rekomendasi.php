<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rekomendasi extends Model
{
    protected $table = "rekomendasi";
    public function detailpernikahan(){
    	return $this->belongsTo(detailpernikahan::class);
    }
}
