<?php

namespace App\Http\Controllers;

use Lipisha\Lipisha;

class PaymentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
        
        $this->apiKey = "4faa596d51de191598c8b5d464c86158";
        $this->apiSignature = "XFbDZ5W/XF3EIkwAu0fH4TGsNu3gw6sm4Bjeeo26qCVVLob8N4oPbh9cXPZRASVOxsjQ4HcRtccqpU10TZaZqBtqOjsPhcfLKMGHhhjWQZnCIAXRwnG8sikPg419irdE7lulqgqixXPoK+pGzn7L2ecnhkZkfq3iROWuS8ZGvoY=";

        $this->payment = new Lipisha($this->apiKey, $this->apiSignature);

    }

    //IPN listener
    public function paymentListener(Request $request){




    }

    
}
