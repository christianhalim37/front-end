<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaketVendor extends Model
{
    protected $table = "paket_vendor";
    protected $primaryKey = 'id_paket_vendor';

    protected $fillable = [
        'nama_paket',
        'harga',
        'kapasitas',
        'durasi',
        'vendor_id',
    ];      

    public function vendor(){
    	return $this->belongsTo(vendor::class);
    }

    public function detailpaket(){
    	return $this->belongsTo(detailpaket::class);
    }
}
