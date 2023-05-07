<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;



class Demo4Controller extends Controller {
    public function index() {
        
        return view ('demo4/index') ;

    }
    public function searchbykeyword (Request $request) {
        if($request->has('keyword')) {
        $keyword = $request -> get('keyword');
        echo 'keyword: ' .$keyword;
        }
        return view('demo4/index2 ');
    }

    public function searchbyprice (Request $request) {
        if($request->has('min')) {
        $min = $request -> get('min');
        echo 'min: ' .$min;
        }
        if($request->has('max')) {
        $max = $request -> get('max');
        echo '<br>max: ' .$max;
        }
        return view('demo4/index2 ');
    }

    public function login (Request $request) {
        if($request->has('username')) {
        $username = $request -> get('username');
        echo 'username: ' .$username;
        }
        if($request->has('password')) {
        $password = $request -> get('password');
        echo '<br>password: ' .$password;
        }
        return view('demo4/index2 ');
    }
    public function upload (Request $request) {
       
        $file = $request->file('photo');
        echo 'filename: ' .$file->getClientOriginalName();
        echo '<br>file size(byte): ' .$file->getSize();
        echo '<br>file ext: ' .$file->getClientOriginalExtension();
        //upload file
        $request->photo->move(public_path('images'), $file->getClientOriginalName());
        return view('demo4/index2');
    }
}