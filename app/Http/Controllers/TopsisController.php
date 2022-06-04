<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\PaketVendor;
use App\Models\DetailPernikahan;
use App\Models\Rekomendasi;
use App\Models\User;
use Illuminate\Http\Request;

class TopsisController extends Controller
{
    //=====iterasi 2
    public function get_linguistik()
    {
        
        $listPaketVendor = PaketVendor::join('detail_paket','paket_vendor.id_paket_vendor','=','detail_paket.paket_vendor_id')
        ->select('paket_vendor.harga','paket_vendor.kapasitas',
        'paket_vendor.durasi','detail_paket.jumlah',
        'paket_vendor.vendor_id', 'id_paket_vendor')->get();
        
        $dataDetailPernikahan = User::join('detail_pernikahan','users.id','=','detail_pernikahan.user_id')
        ->select('detail_pernikahan.jmlh_budget','detail_pernikahan.jmlh_undangan','detail_pernikahan.durasi_wedd',
        'detail_pernikahan.bobot_durasi',
        'detail_pernikahan.bobot_budget','detail_pernikahan.bobot_kapasitas','detail_pernikahan.bobot_fasilitas','id_dtl_pernikahan')
        ->where('users.id','5')->first();
        

        
        
        /*try{
            $validator = Validator::make($request->all(), [
                'budget' => 'required',
                'jmlh_undangan' => 'required',
                'durasi' => 'required',
                'fasilitas' => 'required',
            ]);

            if($validator->fails()){
                return $this->error(406,"Error inserting new topsis",$validator->errors()->all());
            }
            foreach($rekomendasi as $key)
            {
                if(($key->harga > $request->budget))
            }

        }catch(Exception $e)
        {
            return $this->error(400,$e,"FAILED");
        }*/


        
        //bobot kriteria harga
        foreach ($listPaketVendor as $key) {
            # code...
            $key->idpernikahan= $dataDetailPernikahan->id_dtl_pernikahan;
            if (($key->harga > (0*$dataDetailPernikahan->jmlh_budget)) and ($key->harga <= (0.2*$dataDetailPernikahan->jmlh_budget))) {
                # code...
                $key->l_harga = 1;
            }elseif (($key->harga > (0.2*$dataDetailPernikahan->jmlh_budget)) and ($key->harga <= (0.4*$dataDetailPernikahan->jmlh_budget))) {
                # code...
                $key->l_harga = 2;
            }elseif (($key->harga > (0.4*$dataDetailPernikahan->jmlh_budget)) and ($key->harga <= (0.6*$dataDetailPernikahan->jmlh_budget))) {
                # code...
                $key->l_harga = 3;
            }elseif (($key->harga > (0.6*$dataDetailPernikahan->jmlh_budget)) and ($key->harga <= (0.8*$dataDetailPernikahan->jmlh_budget))) {
                # code...
                $key->l_harga = 4;
            }elseif (($key->harga > (0.8*$dataDetailPernikahan->jmlh_budget)) and ($key->harga <= (1*$dataDetailPernikahan->jmlh_budget))) {
                # code...
                $key->l_harga = 5;
            }elseif ($key->harga > (1*$dataDetailPernikahan->jmlh_budget)) {
                # code...
                $key->l_harga = 6;
            }
        }

        
        //bobot kriteria durasi
        foreach ($listPaketVendor as $key) {
            # code...
            if ($key->durasi == "Half Day") {
                # code...
                $key->l_durasi = 1;
            }elseif ($key->durasi == "Full Day") {
                # code...
                $key->l_durasi = 2;
            }
        }
    

        //bobot kriteria kapasitas
        foreach ($listPaketVendor as $key) {
            # code...
            if (($key->kapasitas > (0*$dataDetailPernikahan->jmlh_undangan)) and ($key->kapasitas <= (0.7*$dataDetailPernikahan->jmlh_undangan))) {
                # code...
                $key->l_kapasitas = 0;
            }elseif (($key->kapasitas > (0.7*$dataDetailPernikahan->jmlh_undangan)) and ($key->kapasitas <= (0.8*$dataDetailPernikahan->jmlh_undangan))) {
                # code...
                $key->l_kapasitas = 1;
            }elseif (($key->kapasitas > (0.8*$dataDetailPernikahan->jmlh_undangan)) and ($key->kapasitas <= (1*$dataDetailPernikahan->jmlh_undangan))) {
                # code...
                $key->l_kapasitas = 2;
            }elseif (($key->kapasitas > (1*$dataDetailPernikahan->jmlh_undangan)) and ($key->kapasitas <= (1.2*$dataDetailPernikahan->jmlh_undangan))) {
                # code...
                $key->l_kapasitas = 3;
            }elseif (($key->kapasitas > (1.2*$dataDetailPernikahan->jmlh_undangan)) and ($key->kapasitas <= (1.4*$dataDetailPernikahan->jmlh_undangan))) {
                # code...
                $key->l_kapasitas = 4;
            }elseif (($key->kapasitas > (1.4*$dataDetailPernikahan->jmlh_undangan)) and ($key->kapasitas <= (1.6*$dataDetailPernikahan->jmlh_undangan))) {
                # code...
                $key->l_kapasitas = 5;
            }elseif ($key->kapasitas > (1.6*$dataDetailPernikahan->jmlh_undangan)) {
                # code...
                $key->l_kapasitas = 6;
            }
        }
        foreach ($listPaketVendor as $key){
           echo "paket vendor = " .$key->id_paket_vendor;
           echo "vendor = " .$key->vendor_id; 
           echo "<br>";
           
        }
        return $listPaketVendor->all();
    }

    //=====iterasi 3
    public function get_normalized()
    {
        $listPaketVendor = $this->get_linguistik();
        
        $temp_harga = 0;
        $temp_durasi = 0;
        $temp_kapasitas = 0;
        $temp_fasilitas = 0;

        //cari pembagi
        foreach($listPaketVendor as $key){
            $temp_harga += $key->l_harga*$key->l_harga;
            $temp_durasi += $key->l_durasi*$key->l_durasi;
            $temp_kapasitas += $key->l_kapasitas*$key->l_kapasitas;
            $temp_fasilitas += $key->jumlah*$key->jumlah;
        }

        //cari normalisasi
        foreach ($listPaketVendor as $key) {
            # code...
            if($temp_harga==0) 
            $key->r_harga = 0;
            else
            $key->r_harga = $key->l_harga/(sqrt($temp_harga));
            if( $temp_durasi == 0)
            $key->r_durasi = 0;
            else
            $key->r_durasi = $key->l_durasi/(sqrt($temp_durasi));
            if($temp_kapasitas == 0)
            $key->r_kapasitas = 0;
            else
            $key->r_kapasitas = $key->l_kapasitas/(sqrt($temp_kapasitas));
            if($temp_fasilitas == 0)
            $key->r_fasilitas = 0;
            else
            $key->r_fasilitas = $key->jumlah/(sqrt($temp_fasilitas));
        }

        return $listPaketVendor;
    
    }

    //=====iterasi 4
    public function get_terbobot()
    {
        $listPaketVendor = $this->get_normalized();
        $dataDetailPernikahan = User::join('detail_pernikahan','users.id','=','detail_pernikahan.user_id')
        ->select('detail_pernikahan.jmlh_budget','detail_pernikahan.jmlh_undangan','detail_pernikahan.durasi_wedd',
        'detail_pernikahan.bobot_durasi',
        'detail_pernikahan.bobot_budget','detail_pernikahan.bobot_kapasitas','detail_pernikahan.bobot_fasilitas')
        ->where('users.id','5')->first();

        foreach ($listPaketVendor as $key){
            $key->v_harga = $key->r_harga*$dataDetailPernikahan->bobot_budget;
            $key->v_durasi = $key->r_durasi*$dataDetailPernikahan->bobot_durasi;
            $key->v_kapasitas = $key->r_kapasitas*$dataDetailPernikahan->bobot_kapasitas;
            $key->v_fasilitas = $key->r_fasilitas*$dataDetailPernikahan->bobot_fasilitas;
        }

        return $listPaketVendor;
    }

    //=====iterasi 5
    public function get_ideal()
    {
        $listPaketVendor = $this->get_terbobot();
        $temp_harga = [];
        $temp_durasi = [];
        $temp_kapasitas = [];
        $temp_fasilitas = [];
        foreach ($listPaketVendor as $key){
            $temp_harga[] = $key->v_harga;
            $temp_durasi[] = $key->v_durasi;
            $temp_kapasitas[] = $key->v_kapasitas;
            $temp_fasilitas[] = $key->v_fasilitas;
        }

        $solusi = array(
            'positif_harga' => (min($temp_harga)), //ini nilai positif diambil dari nilai min karena masuk kriteria cost
            'negatif_harga' => (max($temp_harga)),
            'positif_durasi' => (max($temp_durasi)),
            'negatif_durasi' => (min($temp_durasi)),
            'positif_kapasitas' => (max($temp_kapasitas)),
            'negatif_kapasitas' => (min($temp_kapasitas)),
            'positif_fasilitas' => (max($temp_fasilitas)),
            'negatif_fasilitas' => (min($temp_fasilitas))
        );

        return $solusi;
    }

    //=====iterasi 6
    //mencari solusi ideal positif
    public function get_positif_distance()
    {
        $listPaketVendor = $this->get_terbobot();
        $solusi_ideal = $this->get_ideal();

        foreach ($listPaketVendor as $key){
            $key->p_harga = pow(($key->v_harga - $solusi_ideal['positif_harga']),2);
            $key->p_durasi = pow(($key->v_durasi - $solusi_ideal['positif_durasi']),2);
            $key->p_kapasitas = pow(($key->v_kapasitas - $solusi_ideal['positif_kapasitas']),2);
            $key->p_fasilitas = pow(($key->v_fasilitas - $solusi_ideal['positif_fasilitas']),2);
            $key->p_total = sqrt($key->p_harga+$key->p_durasi+$key->p_kapasitas+$key->p_fasilitas);
        }

        return $listPaketVendor;
    }

    //mencari solusi ideal negatif
    public function get_negatif_distance()
    {
        $listPaketVendor = $this->get_positif_distance();
        $solusi_ideal = $this->get_ideal();

        foreach ($listPaketVendor as $key){
            $key->n_harga = pow(($solusi_ideal['negatif_harga'] - $key->v_harga),2);
            $key->n_durasi = pow(($solusi_ideal['negatif_durasi'] - $key->v_durasi),2);
            $key->n_kapasitas = pow(($solusi_ideal['negatif_kapasitas'] - $key->v_kapasitas),2);
            $key->n_fasilitas = pow(($solusi_ideal['negatif_fasilitas'] - $key->v_fasilitas),2);
            $key->n_total = sqrt($key->n_harga+$key->n_durasi+$key->n_kapasitas+$key->n_fasilitas);
        }

        return $listPaketVendor;
    }

    //=====iterasi 7
    public function get_nilai_preferensi()
    {
        $listPaketVendor = $this->get_negatif_distance();
        foreach ($listPaketVendor as $key){
            $key->nilai_preferensi = $key->n_total/($key->p_total+$key->n_total);
            echo "paket vendor = " .$key->id_paket_vendor;
            echo "vendor = " .$key->vendor_id; 
            echo "id pernikahan " .$key->idpernikahan;
            echo "nilai preferensi" . $key->nilai_preferensi;
            echo "<br>";
            $post=new Rekomendasi;
            $post->dtl_pernikahan_id=$key->idpernikahan;
            $post->paket_vendor_id=$key->id_paket_vendor;
            $post->save();
        }
        
        return $listPaketVendor;
        
    }

    
}