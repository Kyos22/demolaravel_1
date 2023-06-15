<?php

namespace App\Http\Controllers;

use App\Models\Product;

class Demo6Controller extends Controller {
    public function index() {
        
        $data = [
            'products' => Product::get()
            

        ];
       
        return view ('demo6/index')->with($data);

    }
    public function index2() {
        
        $data = [
            'products' => Product::where('status',true) ->get()
            

        ];
       
        return view ('demo6/index')->with($data);

    }
    public function index3() {
        
        $data = [   
            //'products' => Product::get()
            'products' => Product::where('price', '>=', 10) -> get()

        ];
       
        return view ('demo6/index')->with($data);

    }
    public function index4() {
        
        $data = [   
            //'products' => Product::get()
            'products' => Product::where('price', '>=', 10)->where('price', '<=',100) -> get()

        ];
       
        return view ('demo6/index')->with($data);

    }
    public function index5() {
        
        $data = [   
            //'products' => Product::get()
            'products' => Product::where('price', 100) ->orwhere('price' ,75) -> get()

        ];
       
        return view ('demo6/index')->with($data);

    }
    public function index6() {
        
        $data = [   
            //'products' => Product::get()
            'products' => Product::where('name', 'like','lap%') -> get()

        ];
       
        return view ('demo6/index')->with($data);

    }
    public function index7() {      
        $data = [   
            'products' => Product::where('name','like','%top_2') -> get()
        ];
       
        return view ('demo6/index')->with($data);
    }
    public function index8() {      
        $data = [   
            'products' => Product::where('name','like','%top%') -> get()
        ];
       
        return view ('demo6/index')->with($data);
    }
    public function index9() {      
        $data = [   
            'products' => Product::orderBy('price','desc') -> get()
        ];     
        return view ('demo6/index')->with($data);
    }
    public function index10() {      
        $data = [   
            'products' => Product::orderBy('price','asc') -> get()
        ];     
        return view ('demo6/index')->with($data);
    }
    public function index11() {      
        $data = [   
            'products' => Product::where('status','true')->orderBy('price','desc') -> get()
        ];     
        return view ('demo6/index')->with($data);
    }
    public function index12() {      
        $data = [   
            'products' => Product::take(2) -> get()
        ];     
        return view ('demo6/index')->with($data);
    }
    public function index13() {      
        $data = [   
            'products' => Product::orderBy('price','desc')->take(2) -> get()
        ];     
        return view ('demo6/index')->with($data);
    }
    public function index14() {      
        $data = [   
            'products' => Product::where('status','true')->orderBy('price','desc')->take(2) -> get()
        ];     
        return view ('demo6/index')->with($data);
    }
    public function index15() {      
        $data = [   
            'products' => Product::whereYear('created', 2022)->orderBy('price','desc') -> get()
        ];     
        return view ('demo6/index')->with($data);
    }
    public function index16() {      
        $data = [   
            'products' => Product::whereYear('created', 2022)->whereMonth('created',5) -> get()
        ];     
        return view ('demo6/index')->with($data);
    }
    public function index17() {      
        $data = [   
            'products' => Product::whereYear('created', 2022)->whereMonth('created',5)->
            whereDay('created',25) -> get()
        ];     
        return view ('demo6/index')->with($data);
    }
    public function index18() {      
        $data = [   
            'products' => Product::whereDate('created','2022-10-25')-> get()
        ];     
        return view ('demo6/index')->with($data);
    }
    public function index19() {      
        $data = [   
            'products' => Product::whereDate('created','>=','2022-01-20')->whereDate(
                'created','<=','2022-07-10')-> get()
        ];     
        return view ('demo6/index')->with($data);
    }
    public function index20() {      
        $data = [   
            'sum1' => Product::sum('quantity'),
            'sum2' => Product::where('status',true)->sum('quantity'),
            'count1' => Product::count(),
            'count2' => Product::where('status',true)->count(),
            'min1' => Product::min('price'),
            'min2' => Product::where('status',true)->min('price'),
            'max1' => Product::max('price'),
            'max2' => Product::where('status',true)->max('price'),
            'avg1' => Product::avg('price'),
            'avg2' => Product::where('status',true)->avg('price'),
        ];     
        return view ('demo6/index2')->with($data);
    }
    public function index21() {      
        $data = [   
            'product' => Product::find(2)
        ];     
        return view ('demo6/index3')->with($data);
    }
    public function index22() {      
        $data = [   
            'product' => Product::firstWhere('name', 'Laptop_1')
        ];     
        return view ('demo6/index3')->with($data);
    }
    public function index23() {      
        $product = [   
            'name' => 'abc',
            'price' => '4.5',
            'quantity' => '90',
            'status' => '2',
            'photo' => 'chair-1.jpg',
            'created' => '2023-10-20',
        ];
        Product::create($product);    
        return redirect ('demo6/index');
    }
    public function index24() {     
        Product::find(3) -> delete(); 
          
        return redirect ('demo6/index');
    }
    public function index25() {     
        $data = [
            'name' => 'def',
            'price' => '333',
            'status' => 1,
        ];
        Product::find(5)->update($data);
          
        return redirect ('demo6/index');
    }
}