<?php

namespace App\Http\Controllers;

use App\Models\Product;


use DateTime;
use Illuminate\Http\Request;

class ProductController extends Controller {
    public function index() {
        $data = [
            'products' => Product::get()
        ];

       
        return view ('product/index')->with($data);

    }
    public function details($id) { //khai báo biến id ra để lấy giá trị của id từ route
        $data = [
            'product' => Product::find($id)
        ];
        
       
        return view ('product/details')->with($data);

    }
    public function searchbykeyword(Request $request) { //dùng request lấy querystring từ url
        $keyword = $request->get('keyword');
        $data = [
            'products' => Product::where('name','like','%'.$keyword.'%') ->get()
        ];
         
        return view ('product/index') -> with($data);
    }

    public function searchbyprice(Request $request) { //dùng request lấy querystring từ url
        $min = $request->get('min');
        $max = $request->get('max');
        $data = [
            //'products' => Product::where('price','>=','%'.$min.'%')->where('price','<=','%'.$max.'%') ->get()
            'products' => Product::whereBetween('price',[$min, $max]) ->get()
        ];
         
        return view ('product/index') -> with($data);
    }
    public function add() {
        

       
        return view ('product/add');
        

    }
    
    public function save(Request $request) {
    $photo ='no-image.jpg';
    if($request->hasFile('photo')) {
       
       $file = $request->file('photo');
       $request->photo->move(public_path('images'), $file->getClientOriginalName());
       $photo = $file->getClientOriginalName();
    }
    $created = $request->input('created');
    $createdDB = DateTime::createFromFormat('d/m/Y', $created)->format('Y-m-d');
    

    $product = [
        'name' => $request->input('name'),
        'price' => $request->input('price'),
        'quantity' => $request->input('quantity'),
        'status' =>  $request->input('status') != null, // != là so sánh, nếu null thì true không nue thì false
        'created' =>  $createdDB,
        'photo' => $photo
    ];

    product::create($product);
    return redirect('/product/index');
}
public function delete($id) { //khai báo biến id ra để lấy giá trị của id từ route
    
    Product::find($id) ->delete();
    
   
    return redirect ('product/index');

}
public function edit($id) { //khai báo biến id ra để lấy giá trị của id từ route
    $data = [
        'product' => Product::find($id)
    ];
    
   
    return view ('product/edit')->with($data);

}
public function update(Request $request) {
    $photo = $request->input('current_photo');
    if($request->hasFile('photo')) {
       
       $file = $request->file('photo');
       $request->photo->move(public_path('images'), $file->getClientOriginalName());
       $photo = $file->getClientOriginalName();
    }
    $created = $request->input('created');
    $createdDB = DateTime::createFromFormat('d/m/Y', $created)->format('Y-m-d');
    

    $product = [
        'name' => $request->input('name'),
        'price' => $request->input('price'),
        'quantity' => $request->input('quantity'),
        'status' =>  $request->input('status') != null, // != là so sánh, nếu null thì true không nue thì false
        'created' =>  $createdDB,
        'photo' => $photo
    ];
    $id = $request->input('id');
    Product::find($id)->update($product);
    return redirect('/product/index');
}
}