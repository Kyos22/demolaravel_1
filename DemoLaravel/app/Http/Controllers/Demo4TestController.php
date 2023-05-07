<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Demo4TestController extends Controller {


    public function index() {

        return view('demo4test/index');
    }
    
    public function searchbyword(Request $request) {
        if($request->has('keyword')){
            $keyword = $request -> get('keyword');
            echo'keyword: ' .$keyword;
        }

        return view('demo4test/index');
    }
}

?>