<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailPaket extends Model
{
    protected $table = "detail_paket";
    protected $primaryKey = 'id_dtl_paket';

    protected $fillable = [
        'nama_dtl_paket',
        'jumlah',
        'paket_vendor_id'
    ];  

    public function paketvendor(){
    	return $this->belongsTo(paketvendor::class);
    }
}
