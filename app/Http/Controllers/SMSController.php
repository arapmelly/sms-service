<?php

namespace App\Http\Controllers;

use AfricasTalking\SDK\AfricasTalking;

class SMSController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
        $this->username = "cvmama";
        $this->apiKey = "c553c7b2fbda95d5038ced0109671de4b4fac21021b729d943c68be0130dcd93";

        $this->sms = new AfricasTalking($this->username, $this->apiKey);
    }

    
}
