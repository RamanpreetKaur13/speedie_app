<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    public function deliveryRegistration(Request $request)
    {

            return view('admin.delivery.register');
        
    }

    public function dashboard()
    {
        return 'delivery';
    }
    public function profile()
    {
        return 'profile';
    }
}
