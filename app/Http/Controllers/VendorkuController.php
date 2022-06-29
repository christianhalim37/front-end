<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Models\User;
use App\Models\PaketVendor;
use App\Models\DetailPernikahan;
use App\Models\DetailPaket;
use App\Http\Controllers\TopsisController;
use Illuminate\Support\Facades\DB;

class VendorkuController extends Controller
{
    //
    public function ceklogin(Request $request)
    {
//        $post=User::where("email",$request->email)->get();
//        echo "email $request->email ";
$post=DB::table('vendors')->where('email',$request->email)->first();
        if ($post!=null && Hash::check($request->password,$post->password))
        {
            session(['email' => $post->email]);
            session(['namauser' => $post->name]);
            return redirect('/');
        }else
            return redirect('/login')->with('statusku','Email atau password salah');
        
    }
    public function savevendor(Request $request)
    {
        $post=new Vendor;
        $postu = new User;
        $postu->name=$request->picfirstname." ". $request->piclastname;
        $postu->email=$request->email;
        $postu->password=Hash::make($request->password);
        $postu->role_id=2;
        $postu->save();
        $lastid= DB::table('Users')->latest('id')->first();
        $post->user_id = $lastid->id;
        $post->nama_vendor=$request->brand;
        $post->alamat=$request->address;
        $post->kota=$request->zona;
        $post->no_telp=$request->phone;
        $post->deskripsi=$request->deskripsi;
        $post->email_vendor=$request->emailbusiness;
        $post->kat_vendor_id=$request->businesscategory;
        
        $post->save();
        return redirect('/login');
        //echo "SIMPAN Vendor nama " . $lastid->id;
        //$data['datauser']=$postu;
        //$data['datavendor']=$post; 
        //return view('savevendoroke',$data);
    }

    public function savepaketvendor(Request $request)
    {
        $post = new PaketVendor;
        $idvendor= DB::table('Vendors')->latest('id_vendor')->first();
        $post->nama_paket=$request->nama_paket;
        $post->harga=$request->harga;
        $post->kapasitas=$request->kapasitas_paket;
        $post->durasi=$request->durasi_paket;
        $post->vendor_id = $idvendor->id_vendor;
        $post->save();
        
        $datap['datapaket']=$post;
        return view('savepaket',$datap);
    }
    
    public function savedetailpaketvendor(Request $request)
    {
        $post=new DetailPaket;
        $idpaket= DB::table('Paket_Vendor')->latest('id_paket_vendor')->first();
        $post->paket_vendor_id = $idpaket->id_paket_vendor;
        $post->nama_dtl_paket=$request->nama_dtl_paket;
        $post->jumlah=$request->jumlah;
        
        $post->save();
        $datap['datadetail']=$post;
        return view('savepaket',$datap);
    }

    public function hapuspaket()
    {
        DB::table('paket_vendor')->where('id_paket_vendor',$idpaket)->delete();
        return view('/vendor');
    }

    public function hapusdetail()
    {
        DB::table('detail_paket')->where('id_dtl_paket',$id_dtl_paket)->delete();
        return view('/vendor');
    }

    public function lihatkategori()
    {
        
        $post['datakategori']=DB::table('kategori_vendor')->get();
        return view('registervendor',$post);
    }

    public function hitungvendor()
    {
        
        $post['countvendor']=DB::table('vendors')->get();
        return view('dashboard',$post);
    }

    public function viewpaket()
    {
        $post['viewtablepaket'] = DB::table('paket_vendor')->get();
    
        return view('viewvendor2', $post);
        
    }

    public function viewdetail()
    {
        $post['viewtabledetail'] = DB::table('detail_paket')->get();
        return view('viewdetailpaket',$post);
    }
}
