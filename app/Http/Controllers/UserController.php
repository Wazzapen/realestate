<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User; 
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function Index(){
        return view('frontend.index');
    }

    public function UserProfile(){
        $id = Auth::user()->id;
        $userData = User:: find($id);

        return view('frontend\dashboard\edit-profile',compact('userData'));
    }

    public function UserProfileUpdate(Request $request)
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
            @unlink(public_path('upload/user_images/' . $user->photo));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/user_images'), $filename);
            $user->photo = $filename;
        }

        $user->save();


        $notification = array(
            'message' => 'User Profile Updated Successfully ',
            'alert-type' => 'success'

        );
    

        return redirect()->back()->with($notification);
    }

     /**
     * Destroy an authenticated session.
     */
    public function UserLogout(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

         $notification = array(
            'message' => 'User Logout Successfully',
            'alert-type' => 'success'
        ); 
        return redirect('/login')->with($notification);
    }

    public function UserCHangePassword(){
        return view('frontend.dashboard.change_password');
    }

    public function UserPasswordUpdate(Request $request){

        // Validation 
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed'

        ]);

        /// Match The Old Password

        if (!Hash::check($request->old_password, auth::user()->password)) {
          
           $notification = array(
            'message' => 'Old Password Does not Match!',
            'alert-type' => 'error'
        );

        return back()->with($notification);
        }

        /// Update The New Password 

        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)

        ]);

         $notification = array(
            'message' => 'Password Change Successfully',
            'alert-type' => 'success'
        );

        return back()->with($notification); 

     }// End Method 


}
