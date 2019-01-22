<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\customer;

class customerController extends Controller
{
    function index(){
        //echo "haloo";
        $customer = customer::get(['customer_id', 'name', 'address']);
       // var_dump($customer);
        return view('customer.index', compact('customer'));
    }
function create(){
//echo"heloo";
return view('customer.create');

}
function store(Request $request)
{
//echo "coba";
$txtId = $request->input('txt_id'); 
$txtName = $request->input('txt_name'); 
$txtAddress = $request->input('txt_address'); 

echo $txtId." < /br>".
$txtName." < /br>".
$txtAddress;

customer::create([

'customer_id' => $txtId,
'name' => $txtName,
'address' => $txtAddress
]);

return redirect('/Customer');

}
public function show($id){

    echo $id;

    $customer = Customer::where('customer_id', $id)->get();
    return view('customer.show', compact('customer'));
    //$customer = Customer::where('customer_id', $id);
   //return view('customer/show', 
   //['customer'=> Customer::where('customer_id', $id)]
//);
}
public function edit($id){

    //secho $id;

    $customer = Customer::where('customer_id', $id)->get();
    return view('Customer/edit', compact('customer'));
}
function update(Request $request, $id)
{
$txtid = $request->input('txt_id');
$txtName = $request->input('txt_name');
$txtAddress = $request->input('txt_address');
echo $txtid. "<br/>".$txtName. "<br/>".$txtAddress;
customer::where('customer_id',$id)->update([
    'name'=>$txtName,
    'address'=>$txtAddress
]);
return redirect('/Customer');
}
public function destroy($id)
{
$customer = Customer::where('customer_id', $id)->first();
$customer->delete();
return redirect('/Customer');

}
}

