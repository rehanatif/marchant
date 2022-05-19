<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use DataTables;

class CustomerController extends Controller
{
    private $status ;
    private $message ;
    private $customer;

    public function __construct()
    {
        $this->customer = new Customer;
        $this->status = false;
        $this->message = 'Request has been failed.';
    }

    public function index(Request $request)
    {
        if ($request->isMethod('post')) {

            $data = ['view' => ''];
            
            try{                

                $customer_list = $this->customer->getcustomerListForYajra();

                $count     = $request->start;

                $customer_list = $customer_list->where([]);

                $value = $request->search['value'];

                return DataTables::of($customer_list)

                ->filterColumn('first_name', function($query, $value){

                    $query->where('first_name','ilike','%'.$value.'%');

                })
                ->filterColumn('last_name', function($query, $value){

                    $query->where('last_name','ilike','%'.$value.'%');

                })
                ->filterColumn('email', function($query, $value){

                    $query->where('email','ilike','%'.$value.'%');

                })

                ->filterColumn('points', function($query, $value){

                    $query->where('points','ilike','%'.$value.'%');

                })              

                ->addColumn('name',function($rows) use (&$count)
                {
                    return $rows->first_name.' '.$rows->last_name;
                })  
                ->addColumn('count',function($rows) use (&$count)
                {
                    return ++$count;
                })                 
               
                ->addColumn('action',function($rows) use (&$count)
                {

                    return view('customers.components.customer_action',['rows'=>$rows])->render();                
                })
                
                    ->rawColumns(['count','duration','action'])
                    ->make(true);
            }
            catch (DecryptException $e)
            {
            }
            return $data;
        }
        else{

            return view('customers.manage_customers');

        }
    }
}
