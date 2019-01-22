<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employee;

class employeeController extends Controller
{
    function index(){
        //echo "haloo";
        $employee = employee::get(['employee_id', 'employee_name', 'employee_address','employee_phone_number']);
       // var_dump($customer);
        return view('employee.index', compact('employee'));
    }
function create(){
//echo"heloo";
return view('employee.create');

}
function store(Request $request)
{
//echo "coba";

$txtId = $request->input('txt_id'); 
$txtName = $request->input('txt_name'); 
$txtAddress = $request->input('txt_address'); 
$txtPhonenumber = $request->input('txt_phone_number'); 


echo $txtId." < /br>".
$txtName." < /br>".
$txtAddress." < /br>".
$txtPhonenumber;

employee::create([

'employee_id' => $txtId,
'employee_name' => $txtName,
'employee_address' => $txtAddress,
'employee_phone_number' => $txtPhonenumber
]);

return redirect('/Employee');

}
public function show($id){

    echo $id;

    $employee = Employee::where('employee_id', $id)->get();
    return view('employee.show', compact('employee'));
    //$customer = Customer::where('customer_id', $id);
   //return view('customer/show', 
   //['customer'=> Customer::where('customer_id', $id)]
//);
}
public function edit($id){

    //echo $id;

    $employee = Employee::where('employee_id', $id)->get();
    return view('Employee/edit', compact('employee'));
}
function update(Request $request, $id)
{
$txtid = $request->input('txt_id');
$txtName = $request->input('txt_name');
$txtAddress = $request->input('txt_address');
$txtPhonenumber = $request->input('txt_phone_number');
echo $txtid. "<br/>".$txtName. "<br/>".$txtAddress. "<br/>".$txtPhonenumber;
employee::where('employee_id',$id)->update([
    'employee_name'=>$txtName,
    'employee_address'=>$txtAddress,
    'employee_phone_number'=>$txtPhonenumber
]);
return redirect('/Employee');
}
public function destroy($id)
{
$employee = Employee::where('employee_id', $id)->first();
$employee->delete();
return redirect('/Employee');

}
}
