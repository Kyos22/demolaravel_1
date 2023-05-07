<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class Dashboardcontroller extends Controller {
    public function index() {
       
        return view ('Admin/dashboard/index') ;

    }
}

?>