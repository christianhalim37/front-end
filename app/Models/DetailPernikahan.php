<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailPernikahan extends Model
{
    protected $table = "detail_pernikahan";
    protected $primaryKey = 'id_dtl_pernikahan';

    protected $fillable = [
        'namacpp', 
        'namacpw',
        'wedd_location',
        'wedd_date',
        'durasi_wedd', 
        'jmlh_undangan', 
        'jmlh_budget', 
        'bobot_durasi', 
        'bobot_kapasitas', 
        'bobot_budget',
        'bobot_fasilitas',
        'user_id'
    ];

    public function rekomendasi(){
    	return $this->hasMany(rekomendasi::class);
    }

    public function user(){
    	return $this->belongsTo(user::class);
    }
}
