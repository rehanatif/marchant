<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use App\User;
use Auth;

class Customer extends Model
{
    public function getcustomerListForYajra()
    {
        return  DB::transaction(function (){

            $customer_list = Customer::where(['user_id'=>Auth::user()->id])->orderBy('points','DESC');

            return with($customer_list);
        });
    }

    public function getCustomerBySearch($filter)
    {
        return Customer::where('customers.*', 'ilike', '%'.$filter.'%')->orderBy('points','DESC')->get();        
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id')->withDefault();        
    }
}
