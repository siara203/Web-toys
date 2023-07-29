<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class DashboardController extends Controller
{
       // show dashboard
       public function getdashboard()
       {
          
           $users = User::all();
   
           return view('backend.dashboard', compact('users'));
       }    
   
       // show notification
       public function notification()
       {
           $users = User::all();
   
           return view('backend.notification', compact('users'));
       }
   
}
