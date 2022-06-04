<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Models\User;
use App\Models\DetailPernikahan;
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
        
        echo "SIMPAN Vendor nama " . $lastid->id;
        $data['datauser']=$postu;
        $data['datavendor']=$post;
        return view('savevendoroke',$data);
    }
    
    public function lihatkategori()
    {
        
        $post['datakategori']=DB::table('kategori_vendor')->get();
        return view('registervendor',$post);
    }

}
