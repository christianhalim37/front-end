<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\DetailPernikahan;
use App\Http\Controllers\TopsisController;
use Illuminate\Support\Facades\DB;

class LoginkuController extends Controller
{
    //
    public function ceklogin(Request $request)
    {
//        $post=User::where("email",$request->email)->get();
//        echo "email $request->email ";
$post=DB::table('users')->where('email',$request->email)->first();
        if ($post!=null && Hash::check($request->password,$post->password))
        {
            session(['email' => $post->email]);
            session(['namauser' => $post->name]);
            return redirect('/');
        }else
            return redirect('/login')->with('statusku','Email atau password salah');
        
    }
    public function saveuser(Request $request)
    {
        $post=new User;
        $post->name=$request->name;
        $post->email=$request->email;
        $post->password=Hash::make($request->password);
        $post->role_id=1;
        $post->save();
        
        echo "SIMPAN USER nama ".$post->name." email ".$post->email." pass ".$request->password;
    }

    public function savedetailpernikahan(Request $request)
    {
        $email = session('email');
        $datauser = DB::table('users')->where('email',$email)->first();
        $userid=$datauser->id;
        $post=new DetailPernikahan;
        $post->namacpp=$request->prianamad." ". $request->prianamab;
        $post->namacpw=$request->wanitanamad." ". $request->wanitanamab;
        $post->wedd_location=$request->zona;
        $post->wedd_date=$request->tanggalnikah;
        $post->durasi_wedd=$request->durasi;
        $post->jmlh_undangan=$request->budget;
        $post->jmlh_budget=$request->tamu;
        $post->bobot_durasi=1;
        $post->bobot_kapasitas=2;
        $post->bobot_budget=3;
        $post->bobot_fasilitas=4;
        $post->user_id=$userid;
        $post->save();
        app('App\Http\Controllers\TopsisController')->get_linguistik();
        
        echo "SIMPAN  nama ".$post->namacpp." ".$post->namacpw." ".$request->wedd_location." ".$post->wedd_date." ".$post->durasi_wedd." ".$request->jmlh_undangan."".$request->jmlh_budget;
    }

    public function topsis(Request $request)
    {
       //app('App\Http\Controllers\TopsisController')->get_linguistik;
       //app('App\Http\Controllers\TopsisController')->get_normalized;
       //app('App\Http\Controllers\TopsisController')->get_terbobot;
       //app('App\Http\Controllers\TopsisController')->get_ideal;
       //app('App\Http\Controllers\TopsisController')->get_positif_distance;
       //app('App\Http\Controllers\TopsisController')->get_negatif_distance;
       //app('App\Http\Controllers\TopsisController')->get_nilai_preferensi;
    }

    public function lihatprofile()
    {
        $email = session('email');
        $post['datauser']=DB::table('users')->where('email',$email)->first();
        return view('profileuser',$post);
    }

}
