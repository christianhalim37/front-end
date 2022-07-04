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
use Illuminate\Support\Facades\Auth;

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
            session(['id' => $post->id]);
            session(['email' => $post->email]);
            session(['namauser' => $post->name]);
            var_dump(session('id'));
            return redirect('/testable');
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
        $post['viewtablepaket'] = DB::table('paket_vendor')
        ->join('vendors','paket_vendor.vendor_id','=','vendors.id_vendor')
        ->select('paket_vendor.*','vendors.nama_vendor')
        ->where('paket_vendor.vendor_id','15')
        ->get();
    
        return view('viewvendor2', $post);
        
    }

    public function viewdetail()
    {
        $post['viewtabledetail'] = DB::table('detail_paket')
        ->join('paket_vendor','detail_paket.paket_vendor_id','=','paket_vendor.id_paket_vendor')
        ->select('detail_paket.*','paket_vendor.nama_paket')
        ->where('detail_paket.paket_vendor_id','5')
        ->get();
        
        return view('viewdetailpaket',$post);
    }

    public function editvendorku(Request $request)
    {
        $id = session('id');
        echo "cek email ".$id;
        $post['datavendor']=DB::table('vendors')
        ->join('users','vendors.user_id','=','users.id')
        ->join('kategori_vendor','vendors.kat_vendor_id','=','kategori_vendor.id_kat_vendor')
        ->select('vendors.*','kategori_vendor.nama_kategori')
        ->where('vendors.user_id',$id)
        ->first();
        
        var_dump($post);
        
        return view('editvendor',$post);
    }

    public function tes()
    {
        $email = session('email');
        echo "cek id " .$email;
        $post['datauser']=DB::table('users')
        ->select('users.id')
        ->where('users.email',$email)
        ->get();
        var_dump($post);
        return view('testable',$post);
    }
}
