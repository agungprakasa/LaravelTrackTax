<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use DB;
use App\tes;

class DashboardController extends Controller
{
    public function index(request $request)
    {
    	$email=$request->session()->get('email');
    	$KTP=$request->session()->get('KTP');
    	return view('dashboards.index',['KTP' => $KTP,'email' => $email]);
        //  $tes = DB::connection('mysql_test')->select("SELECT * FROM hari where id='1'");
        // // $tes = tes::find(1);
        // dd($tes);
    }

    public function admin(request $request)
    {
    	$email=$request->session()->get('email');
    	$KTP=$request->session()->get('KTP');
    	return view('dashboards.admin',['KTP' => $KTP,'email' => $email]);
    }

    public function search(Request $request)
    {    
        $barcode = strval($request->barcode);
        // dd($barcode);

        if (!empty($barcode) || (is_null($barcode)) || $barcode=0) {
            $tes = '{"barcode": "'.$barcode.'"}';
            //dd($tes);
            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://sandbox.posindonesia.co.id:8245/AKIDEV/1.0/lacak',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $tes,
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer ac6f4743-2031-36bd-a88f-b9ae1c31222d',
                'Accept: application/json',
                'Content-Type: application/json'
                
                ),
            ));
            
            $response = curl_exec($curl);
            // dd($response);
            
            $data=json_decode($response);
            dd($data);
            

            $a = array();
            $b = array();
            
            $a = $data->response;
            $b = $a->data;
            
            foreach ($b as $key => $value) {
                    $value = $b[$key];
            }

            // $c = $value;
        
            return view('sites.search', compact('b'));
        
        }
        else
        {
            return view('sites.home');
        } 
    }
}
