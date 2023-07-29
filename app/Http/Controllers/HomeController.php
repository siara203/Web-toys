<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
class HomeController extends Controller
{
    public function getproducts()
    {
        $products = Product::all();

        return view('frontend.products', compact('products'));
    }
    

    public function getintroduction(){
        return view('frontend.introduction');
    }

    public function getservices(){
        return view('frontend.services');
    }

    public function getdetails()
    {
       
        return view('frontend.details');
    }
    

    public function getcontact(){

        return view('frontend.contact');
    }
    public function gettermsofservice(){
        return view('frontend.terms-of-service');
    }      
}
