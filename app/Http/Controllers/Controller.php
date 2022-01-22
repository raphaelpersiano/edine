<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function tes(Request $request){

        $var = $request->x;
        $encrypt = Crypt::encryptString($var);
        return redirect(route('dashboard2', $encrypt));
    }

    public function tes2(Request $request, $varr){
        $encrypt = Crypt::encryptString('lalala');
        $encrypt2 = Crypt::decryptString($encrypt);
        
        $encrypt3 = Crypt::encryptString('lalala');
        $encrypt4 = Crypt::decryptString($encrypt3);

        $dec = Crypt::decryptString($varr);

        return view('dashboard',[
            'encrypt' => $encrypt,
            'encrypt2' => $encrypt2,
            'encrypt3' => $encrypt3,
            'encrypt4' => $encrypt4,
            'dec' => $dec
        ]);
    }
}
