<?php

namespace App\Http\Controllers;

use Sentinel;
use Illuminate\Http\Request;

class BaseController extends Controller {
    
    public function __construct() {
        
        $this->middleware(function ($request, $next) {                   
            

            
            
            
            
            return $next($request);
            
        });
        
    }
    
}