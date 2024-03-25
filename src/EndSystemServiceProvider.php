<?php

namespace Zahiruddinnorzain\Endsystem;

use DateTime;
use Illuminate\Support\ServiceProvider;

class EndSystemServiceProvider extends ServiceProvider
{
    public function __construct() 
    {
        //
    }

    public function boot()
    {
        //
    }
    
    public function register()
    {
        //
        
    }

    public function show($hari,$bulan,$tahun,$contact,$email,$name){
        return response("Your system is expired on $hari/$bulan/$tahun. <br><br>Please pay by contacting:<br><br>
        $name<br>$contact<br>$email");
    }

}
