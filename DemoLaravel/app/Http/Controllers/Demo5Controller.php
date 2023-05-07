<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class Demo5Controller extends Controller {

    public function index(Request $request) {
      $request->session()->put('username', 'acc1');
      $request->session()->put('id', 123);

      //hủy session
      //$request->session()->forget('username');
        return redirect ('/demo5/index2');//redirect là gọi tới một dg link

    }
    public function index2(Request $request) {
      if($request->session()->has('id')) {
        $id = $request->session()->get('id');
        echo 'session id: ' .$id;
      }
        return view ('demo5/index') ;

    }
}