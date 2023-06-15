<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;
use DateTime;

class InvoiceController extends Controller {
    public function index() {
        
        $data = [
            'invoices' => Invoice::get()           
        ];     
        return view ('invoice/index')->with($data);
    }
    public function index1() {      
        $invoices = [   
            'name' => 'heo',
            'payment' => 'cash',
            'status' => 'paid',
            'total' => '5',
            'created' => '2023-10-20',
        ];
        Invoice::create($invoices) ;    
        return redirect ('invoice/index');
    }
    public function index2() {     
        Invoice::find(6) -> delete(); 
          
        return redirect ('invoice/index');
    }
    public function index3() {     //thay đổi dữ liệu dòng 1
        $data = [
            'total'=>80
        ];
        Invoice::find(1)->update($data);
          
        return redirect ('invoice/index');
    }
    public function index3_1() {   //thay đổi dữ liệu dòng 2  
        $data = [
            'total'=>80
        ];
        Invoice::find(2)->update($data);
          
        return redirect ('invoice/index');
    }
    public function index3_2() {     //thay đổi dữ liệu dòng 3
        $data = [
            'total'=>100
        ];
        Invoice::find(5)->update($data);
          
        return redirect ('invoice/index');
    }

    public function index4() { //đếm có bao nhiêu hóa đơn được lập trong 1 tháng của 1 năm
        $data = [
            'count' => Invoice::whereYear('created',2022)->whereMonth('created',10 )->count(),
            'sum' => Invoice::where('payment','like','%cash%')->whereYear('created',2022)->sum('price')

        ];
        return view('invoice/index2') ->with($data);
    }
    public function index5() { //đếm có bao nhiêu hóa đơn được lập trong 1 tháng của 1 năm
        $data = [
            
            'sum' => Invoice::where('payment','like','%cash%')->whereYear('created',2022)->sum('total')

        ];
        return view('invoice/index3') ->with($data);
    }
    //tính tổng tiền các hóa đơn theo 1 hình thức thanh  toán và được lập trong 1 năm xác định
    public function add(){


        return view('invoice/add');
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
        
    
        $invoice = [
            'name' => $request->input('name'),
            'payment' => $request->input('payment'),
            'status' => $request->input('status'),
            'created' =>   $createdDB, // != là so sánh, nếu null thì true không nue thì false
            'total' =>  $request->input('total'),
            'photo' => $photo
        ];
    
        invoice::create($invoice);
        return redirect('/invoice/index');
    }
        public function delete($id) {

            Invoice::find($id) -> delete();
          
            return redirect('invoice/index');                                
        }
        public function edit($id) {

           $data = [
            'invoice' =>  Invoice::find($id)
           ];
           
        
           
            return view ('invoice/edit')->with($data);                             
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
            
        
            $invoice = [
                'name' => $request->input('name'),
                'payment' => $request->input('payment'),
                'status' => $request->input('status'),
                'total' =>  $request->input('total') , // != là so sánh, nếu null thì true không nue thì false
                'created' =>  $createdDB,
                'photo' => $photo
            ];
            $id = $request->input('id');
            Invoice::find($id)->update($invoice);
            return redirect('/invoice/index');
        }

}
