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

class UserController extends Controller
{
  // show users
  public function getusers()
  {
      $users = User::all(); 
      return view('backend.users', compact('users'));
  }     

  // add user
    public function getuseradd()
  {
      $users = User::all(); 
      return view('backend.useradd', compact('users'));
  }

  //
  public function postuseradd(Request $request)
  {
      $request->validate([
          'full_name' => 'required',
          'phone' => 'required|digits_between:5,15',
          'email' => 'required|email|unique:users',
          'address' => 'required',
          'password' => 'required|min:8',
          'confirm_password' => 'required|same:password',
          'role' => 'required',
      ]);

      $user = new User;
      $user->full_name = $request->input('full_name');
      $user->phone = $request->input('phone');
      $user->email = $request->input('email');
      $user->password = $request->input('password');
      $user->role = $request->input('role');
      $user->address = $request['address'];
      $user->save();

      return redirect()->back()->with('success', 'User added successfully.');
  }
  
  // delete user
  public function getuserdelete($id)
  {
      $user = User::find($id);
  
      if ($user->email === 'admin@admin.com') {
          return back()->with('error', 'Cannot delete admin account');
      }
  
      if ($user->orders()->count() > 0) {
          return back()->with('error', 'Cannot delete user because there is an order');
      }
  
      $user->delete();
  
      return back()->with('success', 'User deleted successfully');
  }
  
  // edit user
  public function postuseredit(Request $request, $id)
  {
      $user = User::findOrFail($id);
      $validatedData = $request->validate([
      'full_name' => 'required',
      'phone' => 'required',
      'email' => 'required|email|unique:users,email,'.$id,
      'password'=>'required',
      'address' => 'required',
      'confirm_password' => 'required|same:password',
      'role' => 'required|in:user,admin', 
      ],[
      'email.unique' => 'The email has already been taken.',
      'confirm_password.same' => 'The password confirmation does not match.',  
      ]);

      $user->full_name = $validatedData['full_name'];
      $user->phone = $validatedData['phone'];
      $user->email = $validatedData['email'];
      $user->password = $validatedData['password'];
      $user->role = $validatedData['role'];
      $user->address = $request['address'];
      $user->save();

      return redirect()->back()->with('success', 'User updated successfully');
  }

  //
  public function getuseredit($id)
  {           
      $users = User::all();
      $user = User::findOrFail($id);
      if ($user->email === 'admin@admin.com') {
           return redirect()->back()->with('error', 'Cannot edit admin account');
      }
      return view('backend.useredit', compact('user','users'));
  }

}
