<?php 

namespace App\Helpers;

use Illuminate\Support\Facades\Auth;

class Helper {
    
    /**
     * Check Register Pac for Invoices
     * 
     * @var bool
     */
    public static function CheckRegisterPac()
    {
        if(Auth::user()->bussine->name_pac && Auth::user()->bussine->password_pac){
            return true;
        }

        return false;
    }
}