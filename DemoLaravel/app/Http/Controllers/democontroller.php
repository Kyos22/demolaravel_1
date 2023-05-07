<?php

namespace App\Http\Controllers;

class Democontroller extends Controller {
    public function index() {
        $data = [
            'id' => 123,
            'username' => 'acc1',
            'price' => 50,
            'quantity' => 10,
            'status' => true,
            'width' => 500,
            'border' => 4,
            'bgcolor' => 'red',
            'score' =>3
        ];
        return view('demo/index') -> with($data);
    }
    public function index2 () {
        $data = [
            'numbers' => [5, 10, 15 ,20, -5],
            'products' => [
                'id' => 1,
                'name' => 'name1',
                'photo' => 'chair-1.jpg'
            ]
        ];
        return view ('demo/index2')->with($data);
    }
    public function index3 () {
        $data = [
            'products' => [
                [
                    'id' => 1,
                    'name' => 'name1',
                    'photo' => 'chair-1.jpg'
                ],
                [     
                    'id' => 2,
                    'name' => 'name2',
                    'photo' => 'chair-2-pink.jpg'
                ],
                [     
                    'id' => 3,
                    'name' => 'name3',
                    'photo' => 'chair-3-black.jpg'
                ]
            ]
            ];

        return view ('demo/index3')->with($data);

    }
}

?>