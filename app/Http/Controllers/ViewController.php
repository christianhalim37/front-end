<?php

namespace App\Http\Controllers;

use Validator;
use App\Http\Controllers\Controller;
use App\Models\Vendor;
use Illuminate\Http\Request;
use GuzzleHttp\Client as GuzzleHttp;

class ViewController extends Controller
{
    public function homepage(){

        $client = new GuzzleHttp();
          $response = $client->get('http://127.0.0.1:8080/api/vendor');
          
          $vendor = json_decode($response->getBody())->result;
        
          $packagedeal = $client->get('http://127.0.0.1:8080/api/paket-vendor');
          
          $paketvendor = json_decode($packagedeal->getBody())->result;

        return view ('dashboard', compact('vendor','paketvendor'));
     
     
    }

    public function categorypage(){

      $client = new GuzzleHttp();
        $kategori = $client->get('http://127.0.0.1:8080/api/vendor')['nama_vendor'];
        $vendor = json_decode($kategori->getBody())->result;
        dd(json_decode($response->getBody()));
      return view ('category', compact('vendor'));
   
   
  }
}