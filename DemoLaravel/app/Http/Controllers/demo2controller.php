<?php

namespace App\Http\Controllers;

class Demo2controller extends Controller {
    public function index() {
       
        return view ('demo2/index');

    }
    //controller/action/param1/param2/....
    public function index2($id) {
        echo 'id: '.$id;
        return view ('demo2/index2');
    }
    public function index3($id, $username) {
        echo 'id: '.$id;
        echo '<br>username: ' .$username;
        return view ('demo2/index3');
    }
    public function index4($id, $username) {
        echo 'id: '.$id;
        echo '<br>username: ' .$username;
        return view ('demo2/index4');
    }


}

?>