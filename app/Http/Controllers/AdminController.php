<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Models\User; 
use Illuminate\Support\Facades\Hash;
/*Importing the Hash Facade: By adding use
 Illuminate\Support\Facades\Hash; at the top of 
 your controller file, you ensure that the Hash facade 
 is properly recognized and can be used to check and update passwords.*/ 
use Illuminate\Routing\Redirector;

class AdminController extends Controller
{
    //
    public function AdminDashboard()
    {
        return view('admin.index');
    }

    /**
     * Destroy an authenticated session.
     */
    public function AdminLogout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }

    public function AdminLogin()
    {
        return view('admin.admin_login');
    }

    public function AdminProfile()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);

        return view('admin.admin_profile_view',compact('profileData'));
    }

     public function AdminProfileUpdate(Request $request)
    {
        $id = Auth::user()->id;
        $user = User::find($id);

        $user->username = $request->username;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;

        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('upload/admin_images/' . $user->photo));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'), $filename);
            $user->photo = $filename;
        }

        $user->save();


        $notification = array(
            'message' => 'Admin Profile Updated Successfully ',
            'alert-type' => 'success'

        );
    

        return redirect()->back()->with($notification);
    }


    public function AdminChangePassword(){

        $id = Auth::user()->id;
        $profileData = User::find($id);

        return view('admin.admin_change_password',compact('profileData'));
    }

    public function AdminUpdatePassword(Request $request){
        //Validation 
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed'
        ]);

        ///Match The Old Password

        if(!Hash::check($request->old_password, auth::user()->password)){
            $notification = array(
                'message' => 'Old Password Does not Match!',
                'alert-type' => 'error'
    
            ); 

            return back()->with($notification);
        }

        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
           
        ]);

        $notification = array(
            'message' => 'Password Changed Successfully',
            'alert-type' => 'success'

        ); 

        return back()->with($notification);
     
    }
} 
