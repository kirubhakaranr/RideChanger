<?php

namespace App\Traits;

use App\Models\User;
use Illuminate\Support\Facades\Http;
use Twilio\Rest\Client;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

trait UserTrait{

    public function saveOTP($mobile)
    {
        $otp = rand(100000, 999999);
        if(User::where('mobile',$mobile)->exists()){
            User::where('mobile',$mobile)->update(['otp' => $otp]);
        }
    }

    private function file_path($file,$folder_name)
    {
        $file_name = Str::random(6).time().'.'.$file->extension();
        $db_path = 'media/'.$folder_name.'/'.$file_name;
        $path = 'media/'.$folder_name;
        return ['file_name' => $file_name,'db_path' => $db_path,'path' => $path];
    }

    public function upload_file($file,$folder_name)
    {
        $file_arr = $this->file_path($file,$folder_name);
        $file->move($file_arr['path'], $file_arr['file_name']);
        return $file_arr;
    }

    public function sendSMS($number, $message)
    {
        $sid = env('TWILIO_ACCOUNT_SID');
        $token = env('TWILIO_AUTH_TOKEN');
        $client = new Client($sid, $token);

        try {
           $response = $client->messages->create(
                // the number you'd like to send the message to
                $number,
                [
                    // A Twilio phone number you purchased at twilio.com/console
                    'from' => env('TWILIO_NUMBER'),
                    // the body of the text message you'd like to send
                    'body' => $message
                ]
            );
            Log::info($response);
        } catch (\Exception $e) {
            dd($e->getCode());
        }
    }
}
