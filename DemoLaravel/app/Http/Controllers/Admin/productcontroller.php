<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class Productcontroller extends Controller {
    public function index() {
       
        return view ('admin/product/index') ;

    }
    public function details($id) {
       echo 'id: ' .$id;
        return view ('admin/product/details') ;

    }
}