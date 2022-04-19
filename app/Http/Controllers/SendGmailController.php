<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Mail;
 
class SendGmailController extends Controller
{
    //
    public function sendgmail58(Request $request)
    {
        dd($request->email);
        $data = array('name'=>"Hardik Parsania", "body" => "Gmail from Laravel");
        $email=$request->input('email');
        $request->session()->put('email',$email);
        Mail::send('gmailview', $data, function($message) {
            $message->to('$email')
            ->subject('PT.Pos User Activation');
            $message->from('agungprakasa49@gmail.com',' PT.POS INDONESIA');
 
        });
 
          if (Mail::failures()) {
            return response()->Fail('Sorry! Please try again latter');
          }else{
             return redirect('/register')->with('sukses','Data telah tersimpan');
              //response()->json('Yes, You have sent email to GMAIL from LARAVEL 5.8 !!');
          }
   }
}