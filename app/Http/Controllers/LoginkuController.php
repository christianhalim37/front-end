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
        return redirect('/login');
        
        echo "SIMPAN USER nama ".$post->name." email ".$post->email." pass ".$request->password;
    }

    public function updateuser(Request $request)
    {
        $datauser = DB::table('users')->where('id',$request->id)->update();
        $post->name=$request->name;
        $post->email=$request->email;
        $post->save();
        return redirect('/profileuser');
    }

    public function savedetailpernikahan(Request $request)
    {
        $email = session('email');
        echo "cek email" .$email;
        $datauser = DB::table('users')->where('email',$email)->first();
        $userid=$datauser->id;

        $post=new DetailPernikahan;
        $post->namacpp=$request->prianamad." ". $request->prianamab;
        $post->namacpw=$request->wanitanamad." ". $request->wanitanamab;
        $post->wedd_location=$request->zona;
        $post->wedd_date=$request->tanggalnikah;
        $post->durasi_wedd=$request->durasi;
        $post->jmlh_undangan=$request->tamu;
        $post->jmlh_budget=$request->budget;
        $post->bobot_durasi=$request->bobot_durasi;
        $post->bobot_kapasitas=$request->bobot_kapasitas;
        $post->bobot_budget=$request->bobot_budget;
        $post->bobot_fasilitas=$request->bobot_fasilitas;
        $post->user_id=$userid;
        $post->save();
        $this->topsis();
        
        echo "SIMPAN  nama ".$post->namacpp." ".$post->namacpw." ".$request->wedd_location." ".$post->wedd_date." ".$post->durasi_wedd." ".$request->jmlh_undangan."".$request->jmlh_budget." ".$request->bobot_durasi." ".$request->bobot_kapasitas." ".$request->bobot_budget." ".$request->bobot_fasilitas;
    }

    public function topsis()
    {
       app('App\Http\Controllers\TopsisController')->get_linguistik();
       app('App\Http\Controllers\TopsisController')->get_normalized();
       app('App\Http\Controllers\TopsisController')->get_terbobot();
       app('App\Http\Controllers\TopsisController')->get_ideal();
       app('App\Http\Controllers\TopsisController')->get_positif_distance();
       app('App\Http\Controllers\TopsisController')->get_negatif_distance();
       app('App\Http\Controllers\TopsisController')->get_nilai_preferensi();
    }

    public function lihatprofile()
    {
        $email = session('email');
        $post['datauser']=DB::table('users')->where('email',$email)->first();
        return view('profileuser',$post);
    }

    public function editprofile()
    {
        $post['datauser']=DB::table('users')->where('id',$id)->get();
        return view('profileuseredit',$post);
    }

}
