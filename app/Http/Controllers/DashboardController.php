<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Description of DashboardController
 *
 * @author Enzo
 */
class DashboardController extends Controller{
    //put your code here
    
    public function initView(){
        return view('admin.dashboard');
    }
    
}
